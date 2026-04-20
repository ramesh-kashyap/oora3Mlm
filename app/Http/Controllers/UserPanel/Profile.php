<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bank;
use App\Models\UserLogin;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\KycDetail;


use App\Models\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Profile extends Controller
{
    public function wallets()
    {
        $user = Auth::user();
        $profile_data = User::where('id', $user->id)->orderBy('id', 'desc')->first();
        $this->data['login_logs'] = UserLogin::where('user_id', $user->id)->orderBy('id', 'DESC')->limit(10)->get();
        $this->data['profile_data'] = $profile_data;
        $this->data['page'] = 'user.profile.wallets';
        return $this->dashboard_layout();
    }
    public function index()
    {
        $user = Auth::user();
        $profile_data = User::where('id', $user->id)->orderBy('id', 'desc')->first();
        $this->data['login_logs'] = UserLogin::where('user_id', $user->id)->orderBy('id', 'DESC')->limit(10)->get();
        $this->data['profile_data'] = $profile_data;
        $this->data['page'] = 'user.profile.profile-setting';
        return $this->dashboard_layout();
    }

    public function change_password()
    {
        $this->data['page'] = 'user.profile.ChangePass';
        return $this->dashboard_layout();
    }

    public function ChangeSecurityPass()
    {
        $this->data['page'] = 'user.profile.ChangeSecurityPass';
        return $this->dashboard_layout();
    }



    public function BankDetail()
    {
        $user = Auth::user();
        $bank = Bank::where('user_id', $user->id)->first();
        $this->data['bank_value'] = $bank;
        $this->data['page'] = 'user.profile.BankDetail';
        return $this->dashboard_layout();
    }


    public function addkyc()
    {
        $user = Auth::user();
        $bank = KycDetail::where('user_id', $user->id)->first();
        $this->data['kyc_value'] = $bank;
        $this->data['page'] = 'user.profile.kycdetail';
        return $this->dashboard_layout();
    }



   /**
     * Update or create KYC details
     */
    public function update(Request $request)
    {
        $request->validate([
            'aadhar_no'      => 'required|digits:12',
            'aadhar_front'   => 'nullable|image|mimes:jpg,jpeg,png',
            'aadhar_back'    => 'nullable|image|mimes:jpg,jpeg,png',
            'pancard_no'     => 'required|alpha_num|size:10',
            'pancard_front'  => 'nullable|image|mimes:jpg,jpeg,png',
            'pancard_back'   => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $user = Auth::user();
        
                      // ✅ Custom validation for pancard_no usage count
                $count =KycDetail::where('pancard_no', $request->pancard_no)->count();
            
                if ($count >= 3) {
                    return redirect()->back()->withErrors([
                        'pancard_no' => 'This Pancard number is already linked with 3 accounts and cannot be used again.',
                    ])->withInput();
                }
            


        // Get or create KYC record
        $kyc = KycDetail::firstOrNew(['user_id' => $user->id]);

        // Update text fields
        $kyc->aadhar_no  = $request->aadhar_no;
        $kyc->pancard_no = $request->pancard_no;
        $kyc->kyc_status = "Pending";

        // Handle file uploads (directly into public/kyc)
         foreach (['aadhar_front','aadhar_back','pancard_front','pancard_back'] as $file) {
        if ($request->hasFile($file)) {
            // Delete old file if exists
            if (!empty($kyc->$file) && file_exists(public_path($kyc->$file))) {
                unlink(public_path($kyc->$file));
            }

            // Store new file
            $filename = $file.'_'.time().'_'.$user->id.'.'.$request->$file->extension();
            $request->$file->move(public_path('kyc'), $filename);

            // Save relative path
            $kyc->$file = 'kyc/'.$filename;
        }
    }

        $kyc->save();


        
            $notify[] = ['success', 'KYC details updated successfully!'];
            return redirect()->back()->withNotify($notify);
            
    }

    public function profile_update(Request $request)
    {
        try {
            // Validation rules
            $validation = Validator::make($request->all(), [
                'name'      => 'required|string|max:255',
                'lastname'       => 'required|string|max:255',
                'address'        => 'nullable|string|max:255',
                'state'          => 'nullable|string|max:255',
                'city'           => 'nullable|string|max:255',
                'zip'            => 'nullable|string|max:20',
                'dob'             =>'required|string|max:255',
                // 'usdtBep20'       => 'string|max:255',

                // 'profile_image'  => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // max 2MB
            ]);
            // dd($validation);
            if ($validation->fails()) {
                return redirect()->back()->withErrors($validation->errors())->withInput();
            }
            if ($validation->fails()) {
                $user = Auth::user();
                return redirect()->back()
                    ->withErrors($validation->errors())
                    ->withInput()
                    ->with(compact('user')); // тЬЕ send user data back to form
            }



            // if ($request->hasFile('profile_image')) {
            //     $image      = $request->file('profile_image');
            //     $imageName  = 'profile_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            //     $imagePath  = public_path('uploads/users/');

            //     // Create directory if not exists
            //     if (!File::isDirectory($imagePath)) {
            //         File::makeDirectory($imagePath, 0755, true, true);
            //     }

            //     $image->move($imagePath, $imageName);


            //     $user->profile_image = $imageName;
            // }
            $user = Auth::user();
            if ($user->profile_updated) {
            $notify[] = ['error', 'ЁЯЫС You have already updated your profile. Further edits require admin approval.'];
            return redirect()->back()->withNotify($notify);
             }
            // Update user details
            $user->name = $request->name;
            $user->lastname  = $request->lastname;
            $user->address   = $request->address;
            // $user->usdtBep20   = $request->usdtBep20;
 $user->dob     = $request->dob;
            $user->state     = $request->state;
            $user->city      = $request->city;

            $user->zipCode      = $request->zipCode;
             $user->profile_updated = true;
            $user->save();

            $notify[] = ['success', 'Profile Updated Successfully!'];
            return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            Log::error('Profile update error: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Something went wrong!'])->withInput();
        }
    }

    // тЬЕ 1. рд╡реЗрд░рд┐рдлрд┐рдХреЗрд╢рди рдХреЛрдб рднреЗрдЬрдирд╛
    public function sendVerificationCode(Request $request)
    {
        $user = Auth::user();
        $email = $user->email;

        // **Generate 6-digit verification code**
        $verificationCode = rand(100000, 999999);

        // **рдбреЗрдЯрд╛рдмреЗрд╕ рдореЗрдВ рдХреЛрдб рд╕реНрдЯреЛрд░ рдХрд░рдирд╛**
        PasswordReset::updateOrCreate(
            ['email' => $email],
            ['token' => $verificationCode, 'created_at' => Carbon::now()]
        );

        // **Mail рднреЗрдЬрдирд╛**
        Mail::send('emails.verification-code', ['code' => $verificationCode], function ($message) use ($email) {
            $message->to($email)->subject('Your Password Reset Code');
        });

        return response()->json(['success' => 'Verification code sent to your email.']);
    }

    // public function change_password_post(Request $request)
    // {
    //     try {
    //         $request->validate([
    //             'old_password' => 'required',
    //             'password' => 'required|confirmed',
    //         ]);

    //         $user = Auth::user();
    //         // dd([
    //         //     'input' => $request->old_password,
    //         //     'stored' => $user->PSR,
    //         //     'match' => $request->old_password === $user->PSR
    //         // ]);
    //         if (!Hash::check($request->old_password, $user->password)) {
    //             return back()->withErrors(['old_password' => 'Old password does not match'])->withInput();
    //         }



    //         $user->password = Hash::make($request->password);
    //         $user->PSR = $request->password; // Or encrypt($request->password);
    //         $user->save();

    //         return back()->with('success', 'Password updated successfully.');
    //     } catch (\Exception $e) {
    //         return back()->withErrors(['error' => $e->getMessage()])->withInput();
    //     }
    // }


    public function change_password_post(Request $request)
    {
        try {
            // Validate input
            $request->validate([
                'old_password' => 'required',
                'password' => 'required|confirmed',
            ]);

            $user = Auth::user();

            // Check if old password matches current password
            if (!Hash::check($request->old_password, $user->password)) {
                return back()->withErrors([
                    'old_password' => 'Old password does not match.'
                ])->withInput();
            }

            // Update password
            $user->password = Hash::make($request->password);
            $user->PSR = $request->password; // Note: storing raw password is not recommended
            $user->save();

       
            $notify[] = ['success', 'Password updated successfully'];
            return redirect()->back()->withNotify($notify);     return back()->with('success', 'Password updated successfully.');
        } catch (\Exception $e) {
            // Optional: Log the error
            Log::error('Password change error: ' . $e->getMessage());

            return back()->withErrors([
                'error' => 'Something went wrong. Please try again later.'
            ])->withInput();
        }
    }




    public function change_trxpassword_post(Request $request)
    {

        try {
            $data = $request->all();
            $rules = array('old_password' => 'required', 'password' => 'required|confirmed');
            $msg = [
                'old_password.required'     => 'Old Password is required',
                'password.required'         => 'Password is required',
                'password.confirmed'        => 'Password must match',
            ];

            $validator = Validator::make($data, $rules, $msg);
            if ($validator->fails())
                return Redirect::back()->withErrors($validator->getMessageBag()->first());

            $user = Auth::user();



            if (!Hash::check($data['old_password'], $user->tpassword))
                return Redirect::back()->withErrors('Current Transaction  Password is incorrect');

            User::where('id', $user->id)->update(array(
                'tpassword' => Hash::make($data['password']),
                'TPSR' => $data['password'],
                'updated_at' => new \DateTime
            ));

            // return Redirect::Back()->with('messages', 'Transaction password updated successfully');

            $notify[] = ['success', 'Transaction password updated successfully'];
            return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            return Redirect::back()->witherrors($e->getMessage())->withInput();
        }
    }



    public function bank_profile_update(Request $request)

    {
        try {
            $validation =  Validator::make($request->all(), [
                'account_holder' => 'required',
                'bank_name' => 'required',
                'branch_name' => 'required',
                'ifsc_code' => 'required',
                'account_number' => 'required',
             

            ]);
            if ($validation->fails()) {
                Log::info($validation->getMessageBag()->first());
                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }

            $id = Auth::user()->id;

            $check_exist = Bank::where('user_id', $id)->first();

            $bank_array = array(

                'user_id' => $id,
                'bank_name' => $request->bank_name,
                'account_holder' => $request->account_holder,
                'branch_name' => $request->branch_name,
              
                'account_no' => $request->account_number,
                'ifsc_code' => $request->ifsc_code,
            );

            if (!$check_exist) {

                $bank = Bank::create($bank_array);
            } else {
                $bank = Bank::where('user_id', $id)->update($bank_array);
            }




            $notify[] = ['success', 'Bank Updated successfully'];
            return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }



    public function bank_details(Request $request)
    {
        $request->validate([
            'usdtBep20' => 'nullable|string',
            'account_no' => 'nullable|numeric',
            'ifsc_code' => 'nullable|string',
            'bank_name' => 'nullable|string',
            'branch_name' => 'nullable|string',
        ]);

        $user = auth()->user();
        $notify = []; // Notification Array

        // тЬЕ Agar Wallet Address Fill Kiya Hai to Users Table me Save Kare
        if ($request->filled('usdtBep20')) {
            $user->update(['usdtBep20' => $request->usdtBep20]);
            $notify[] = ['success', 'Wallet address updated successfully.'];
        }

        // тЬЕ Agar Puri Bank Details Fill Ki Hain to Banks Table me Save ya Update Kare
        if ($request->filled(['account_no', 'ifsc_code', 'bank_name', 'branch_name'])) {
            Bank::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'account_no' => $request->account_no,
                    'ifsc_code' => $request->ifsc_code,
                    'bank_name' => $request->bank_name,
                    'branch_name' => $request->branch_name,
                    'account_holder' => $user->name,
                    'user_id' => $user->id,
                ]
            );
            $notify[] = ['success', 'Bank details saved/updated successfully.'];
        }

        // тЬЕ Agar Wallet Address bhi Empty hai aur Bank Details bhi Empty hai to Error Show Kare
        if (empty($notify)) {
            $notify[] = ['error', 'Please provide either Wallet Address or complete Bank Details.'];
        }

        return redirect()->back()->withNotify($notify);
    }
}
