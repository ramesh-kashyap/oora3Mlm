<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Models\UserLogin;



class Login extends Controller
{

    public function loginAction(Request $request)
    {
        try {

            // Step 1: Validate (at least one required)
            $validation = Validator::make($request->all(), [
                'login' => 'nullable',
                'password' => 'required|string',
            ]);

            if ($validation->fails()) {
                return Redirect::back()
                    ->withErrors($validation->getMessageBag()->first())
                    ->withInput();
            }

            // Step 2: Ensure at least one login field is filled
            if (!$request->filled('login') && !$request->filled('login2')) {
                return Redirect::back()
                    ->withErrors(['Please enter Email/Username or Phone']);
            }

            $credentials = [];

            // Step 3: If login (email/username) is used
            if ($request->filled('login')) {
                $loginInput = $request->input('login');
                if (filter_var($loginInput, FILTER_VALIDATE_EMAIL)) {
                    $credentials['email'] = $loginInput;
                } elseif (preg_match('/^[0-9]{10,15}$/', $loginInput)) {
                    $credentials['phone'] = $loginInput;
                } else {
                    $credentials['username'] = $loginInput;
                }
            }


            $credentials['password'] = $request->password;

            // Step 5: Attempt login
            if (Auth::attempt($credentials)) {

                $user = Auth::user();

                // Block check
                if ($user->active_status === "Block") {
                    Auth::logout();

                    return Redirect::back()
                        ->withErrors(['You are Blocked by admin']);
                }

                session()->flash('success', 'Login successfully');

                return redirect()->route('user.dashboard');
            }

            return Redirect::back()
                ->withErrors(['Invalid credentials']);

        } catch (\Exception $e) {

            Log::error("Login Error", [
                'message' => $e->getMessage(),
            ]);

            return Redirect::back()
                ->withErrors(['Something went wrong']);
        }
    }
    // public function loginAction(Request $request)
    // {
    //     try {
    //         // Simple validation
    //         $request->validate([

    //         ]);
    //        $validation =  Validator::make($request->all(), [
    //           'username' => 'required',
    //             'password' => 'required',        ]);

    //         if($validation->fails()) {
    //             Log::info($validation->getMessageBag()->first());

    //             return redirect()->route('login')->withErrors($validation->getMessageBag()->first())->withInput();
    //         }
    //         $credentials = $request->only('username', 'password');

    //         if (Auth::attempt($credentials)) {
    //             // Login successful
    //             return redirect()->route('user.dashboard')->with('success', 'Login successful!');
    //         } else {
    //             // Login failed
    //             return redirect()->back()->withErrors(['Invalid username or password']);
    //         }
    //     } catch (\Exception $e) {
    //         // Log the error or handle it as needed
    //         Log::error('Login error: '.$e->getMessage());

    //         return redirect()->back()->withErrors(['Something went wrong. Please try again later.']);
    //     }
    // }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }



    public function forgot_password_submit(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'username' => 'required|unique:users',

        ]);


        $credentials = User::where('username', $request->username)->first();

        if ($credentials) {

            $userIpInfo = getIpInfo();
            $userBrowserInfo = osBrowser();
            $code = verificationCode(6);

            PasswordReset::where('email', $credentials->email)->delete();

            $password = new PasswordReset();
            $password->email = $credentials->email;
            $password->token = $code;
            $password->created_at = \Carbon\Carbon::now();
            $password->save();

            sendEmail($credentials->email, 'Recovery Password', [
                'name' => $credentials->name,
                'browser' => @$userBrowserInfo['browser'],
                'ip' => @$userIpInfo['ip'],
                'time' => @$userIpInfo['time'],
                'operating_system' => @$userBrowserInfo['os_platform'],
                'code' => $code,
                'viewpage' => 'forgot_sucess',

            ]);

            $page_title = 'Account Recovery';
            $userID = $credentials->id;
            session()->put('pass_res_mail', $userID);
            $notify[] = ['success', 'Password reset email sent successfully'];
            return redirect()->route('codeVerify')->withNotify($notify);
        } else {
            $notify[] = ['error', 'Invalid Username '];
            return redirect()->route('forgot-password')->withNotify($notify);
        }
    }

    public function codeVerify()
    {
        $page_title = 'Account Recovery';
        $userID = session()->get('pass_res_mail');

        $user_name = session()->get('username');

        if (!$userID) {
            $notify[] = ['error', 'Opps! session expired'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }

        return view('auth.passwords.confirm', compact('page_title', 'userID', 'user_name'));
    }


    public function verifyCode(Request $request)
    {
        $request->validate(['code' => 'required', 'userID' => 'required']);
        $code = $request->code;
        $userDetail = User::where('id', $request->userID)->first();

        if (PasswordReset::where('token', $code)->where('email', $userDetail->email)->count() != 1) {
            $notify[] = ['error', 'Invalid token'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }
        $notify[] = ['success', 'You can change your password.'];
        session()->flash('fpass_email', $request->userID);
        session()->put('resetMail', $request->userID);
        return redirect()->route('resetPassword', $code)->withNotify($notify);
    }


    public function resetPassword()
    {
        $page_title = "Forgot Password";
        //   dd("hi");
        return view('auth.passwords.resetPassword', compact('page_title'));
    }


    public function sendResetCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $code = rand(100000, 999999); // 6 digit code

        // save code into password_resets table
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            [
                'token' => $code,
                'created_at' => Carbon::now(),
            ]
        );

        // get user details
        $credentials = \App\Models\User::where('email', $request->email)->first();

        // send email
        sendEmail($credentials->email, 'Recovery Password', [
            'name' => $credentials->name,
            'browser' => request()->header('User-Agent'),   // agar aapke paas browser info capture hai
            'ip' => $request->ip(),
            'time' => now()->toDateTimeString(),
            'operating_system' => PHP_OS,
            'code' => $code,
            'viewpage' => 'forgot_sucess',
        ]);

        return response()->json(['message' => 'Verification code sent successfully.']);
    }

    public function submitResetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required', // validate this if needed
            'password' => 'required|confirmed|min:5',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No user found with this email.']);
        }

        // Optional: validate the code from database if you are storing OTP

        $user->password = bcrypt($request->password);
        $user->PSR = $request->password; // Optional, if you store plain password
        $user->save();

        return redirect()->route('login')->with('success', 'Password reset successfully.');
    }
}
