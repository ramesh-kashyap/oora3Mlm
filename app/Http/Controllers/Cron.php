<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Income;
use App\Models\User;
use App\Models\User_trade;
use App\Models\Transaction;
use App\Models\Fundtransfer;
use App\Models\Reward;
use Illuminate\Support\Facades\Log;
use App\Models\Payout;
use App\Models\Withdraw;
use App\Models\Trade;
use App\Models\Bank;
use DateTime;
use DateInterval;
use DatePeriod;
use Carbon\Carbon;



class Cron extends Controller
{
    
public function __construct()
{
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
}
public function tradeAmt()
{
  User::where('id','>=',0)->update(['tradeAmt' => 0]);
}



 public function my_level_team_countBusiness($userid){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();    
            $alldown2=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray(); 
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $arrin2 = array_column($alldown2,'id');
                   
                $total=Investment::whereIn('user_id',$arrin2)->where('status','Active')->where('is_power',0)->sum('amount');
                 $this->final_business += $total;
                $ret[$i]=$arrin;
                $i++;
              
            }else{
                $arrin = array();
            } 
        }   
       
        
    }





 public function globaly_community()
    {  

    $allResult=User::where('active_status','Active')->get();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      
      
      
      
         $direct_list=User::where('sponsor',$user_id)->where('active_status','Active')->get(); 
    
	            $vicker_leg=0;
	        $power_leg=0;
	           $arrayabc = array();
	           if($direct_list!="")
	           {
	               foreach($direct_list as $key=>$value)
	               {
	                   $id_value=$value->id;
	                   $user_id_value=$value->username;
	                
	               //   $this->a=0;
	               $this->final_business=0;  
	                 $this->my_level_team_countBusiness($id_value);
	             
	                   $total=Investment::where('user_id',$id_value)->where('status','Active')->orderBy('id', 'DESC')->sum('amount');
	                  $this->final_business +=$total;
	                 $abc = $this->final_business;  
	               //  echo $abc; die;
	                 $arrayabc[$user_id_value] = $abc;
	                    
	                 //print_r($total_business)."<br>".$user_id_value;echo "<br>";
	               }
	             
	              if(!empty($arrayabc))
	              {
	               
	               
	                  
              
	               
	               $maxValue = max(@$arrayabc);
                  $maxIndex = array_search(max($arrayabc), $arrayabc);
                  $vicker_leg=array_sum($arrayabc); 
                  
                  
	               
                  arsort($arrayabc);
               
	               
                   $secondValue = array_splice($arrayabc, 0, 2);
           
                   $secondValue=array_sum($secondValue)-$maxValue;

	                 
	       	        $power_leg=$maxValue;
	       	        
	               
	               
	       $vicker_leg=$vicker_leg-($power_leg+$secondValue);
	       
	              }else
	              {
	                    $vicker_leg=0;
	        $power_leg=0;
	              }
	              
	             
	       //echo $username."<br>";
	       // echo "<pre>";print_r($power_leg)."<br>";
	       // echo "<pre>";print_r($vicker_leg);die;
	  
	    }
	    else
	    {
	        $vicker_leg=0;
	        $power_leg=0;
	    }
	    
             
               echo "<br>";
                 echo "ID : ".$username."<br>";
                 echo "Team A : ".$power_leg."<br>";
                 echo "Team B : ".$secondValue."<br>";
          echo "Other Team : ".$vicker_leg;
             
        User::where('id', $user_id)
      ->update([
          'teamA' => $power_leg,
          'teamB' => $secondValue,
          'other_team' => $vicker_leg
        ]); 
     
     }
    } 

}



public function runClosing()
{
    $tz        = 'Asia/Kolkata';
    $now       = Carbon::now($tz);
    $todayDate = $now->toDateString();

    // Only run on 1st or 15th
    if (!in_array($now->day, [1, 15], true)) {
        return response()->json(['ok' => true, 'message' => 'Not a closing day (1st / 15th)']);
    }

    $isFirst   = ($now->day === 1);
    $isFifteen = ($now->day === 15);

    // Closing type + reference "closing date"
    $closingType = $isFirst ? 'end' : 'mid';
    $closingDate = $isFirst
        ? $now->copy()->subDay()->toDateString()   // treat 1st as previous month's last day
        : $todayDate;                               // 15th uses today

    // Build the time window [from_ts, to_ts] inclusive by day
    if ($isFirst) {
        // Month-end closing (run on 1st): 16th of prev month → last day of prev month
        $fromTs = $now->copy()->subMonthNoOverflow()->day(16)->startOfDay();
        $toTs   = $now->copy()->subDay()->endOfDay(); // yesterday (prev month last day)
    } else { // 15th
        // Mid-month closing: 1st → 15th of current month
        $fromTs = $now->copy()->startOfMonth()->startOfDay();
        $toTs   = $now->copy()->day(15)->endOfDay();
    }

    // Use these for your queries/credits
    // Example:
    // Model::whereBetween('created_at', [$fromTs, $toTs])->...

    return response()->json([
        'ok'           => true,
        'closing_type' => $closingType,     // 'mid' or 'end'
        'closing_date' => $closingDate,     // yyyy-mm-dd
        'from_ts'      => $fromTs->toDateTimeString(),
        'to_ts'        => $toTs->toDateTimeString(),
        'now'          => $now->toDateTimeString(),
        'tz'           => $tz,
    ]);
}



public function index(Request $request)
{
    // ---- Clock / Closing guard ----
    $tz   = 'Asia/Kolkata';
    $now  = Carbon::now($tz);

    // Only run on 1st or 15th
    if (!in_array($now->day, [1, 16], true)) {
        return response()->json(['ok' => true, 'message' => 'Not a closing day (1st / 15th)']);
    }

    $isFirst   = ($now->day === 1);
    $isFifteen = ($now->day === 16);

    // If it's the 1st, treat "today" as yesterday (previous month end)
    $today = $isFirst ? $now->copy()->subDay() : $now->copy();

     $todayDate = $today->toDateString();                     // yyyy-mm-dd
    $nowTs     = $isFirst ? $today->copy()->endOfDay()->toDateTimeString() // last second of prev month
                          : $today->toDateTimeString();
    $dayEndTs  = $today->copy()->endOfDay()->toDateTimeString();

    // Closing type for business logic
    $closingType = $isFirst ? 'end' : 'mid';

    /**
     * Income types catalogue
     * value: [label, mode]
     *  - 'full'     => 8% service + 2% tds
     *  - 'tds_only' => 2% tds only (no service/admin)
     */
    $allTypes = [
        'referral_income'  => ['Referral Income',  'full'],
        'reccuring_income' => ['Recurring Income', 'full'], // ROI
        'farming_income'   => ['Farming Income',   'tds_only'], // per your request
        'reward_income'    => ['Reward Income',    'full'],
        'salary_income'    => ['Salary Income',    'full'],
        'contract_profit_sharing' => ['Contract Profit Sharing', 'full'],
    ];

    // Mid-month: include only referral & ROI (your earlier rule)
        // Month-end: include all
      // Month-end: include all
    // Mid-month: exclude Farming Income only
    if ($closingType === 'mid') {
        // clone and drop just farming_income
        $types = $allTypes;
        unset($types['farming_income']);
    } else {
        $types = $allTypes; // 'end' closing -> include all
    }

    // Deduction rates
    $SERVICE_RATE_FULL = 0.08; // 8% service/admin
    $TDS_RATE_FULL     = 0.02; // 2% tds (on full-mode incomes)
    $TDS_RATE_TDSONLY  = 0.02; // 2% tds for tds_only incomes (ROI + Farming)

    // Choose users (adjust the where clause as you need)
    $users = User::where('active_status', 'Active')->orderBy('id', 'ASC')->get();

    foreach ($users as $user) {
        $userID   = $user->id;
        $userName = $user->username;

        // One payout per user per (effective) day
        if (Payout::where('user_id', $userID)->whereDate('ttime', $todayDate)->exists()) {
            continue;
        }
        
        // if (!Bank::where('user_id', $userID)->exists()) {
        //     continue;
        // }

        // Determine accumulation window start (kept for audit / future use)
        $lastPayoutAt = Payout::where('user_id', $userID)->max('created_at');
        $from = $lastPayoutAt
            ? Carbon::parse($lastPayoutAt)->startOfDay()->toDateTimeString()
            : Carbon::parse($user->adate ?: '2025-03-13 00:00:00', $tz)->startOfDay()->toDateTimeString();

        // Create base payout row first (so we have an ID to update)
        $payout = Payout::create([
            'user_id'     => $userID,
            'user_id_fk'  => $userName,
            'ttime'       => $todayDate,   // effective payout day
            'created_at'  => $nowTs,       // audit timestamp
            'updated_at'  => $nowTs,
            'payout_date' => $nowTs,
        ]);

        // Accumulators
        $sumGross   = 0.0;
        $sumService = 0.0;
        $sumTds     = 0.0;
        $sumNet     = 0.0;

        $updateCols = ['user_id' => $userID];
        $labels     = array_column($types, 0); // list of labels for later total calc

        foreach ($types as $col => [$label, $mode]) {
            // 👉 NEW: Earned = total income for this remarks (no date window)
            $earnedTotal = (float) Income::where('user_id', $userID)
                ->where('remarks', $label)->where('created_at','<=',$dayEndTs)
                ->sum('comm');

            // Already included in previous payouts for this column (lifetime)
            $already = (float) Payout::where('user_id', $userID)->sum($col);

            $gross = max(0, $earnedTotal - $already);

            // Deductions by mode
            if ($mode === 'tds_only') {
                $dedService = 0.0;
                $dedTds     = $gross * $TDS_RATE_TDSONLY;
            } else { // 'full'
                $dedService = $gross * $SERVICE_RATE_FULL;
                $dedTds     = $gross * $TDS_RATE_FULL;
            }

            $net = $gross - ($dedService + $dedTds);

            // Accumulate
            $sumGross   += $gross;
            $sumService += $dedService;
            $sumTds     += $dedTds;
            $sumNet     += $net;

            // Store gross in its own column
            $updateCols[$col] = $gross;
        }

        // If below minimum gross threshold, discard this payout
        if ($sumNet < 1000) {
            Payout::where('id', $payout->id)->delete();
            continue;
        }

        // 👉 NEW: Running total = total incomes (all time for these labels)
        //         minus all previous payouts' totals (all time)
        $totalIncomeAll = (float) Income::where('user_id', $userID)
            ->whereIn('remarks', $labels)->where('created_at','<=',$dayEndTs)
            ->sum('comm');

        // withdrawals paid so far for ONLY the included labels
        $withdrawTotalAll = 0.0;
        foreach (array_keys($types) as $col) {
            $withdrawTotalAll += (float) Payout::where('user_id', $userID)->sum($col);
        }


        $runningTotal = max(0, $totalIncomeAll - $withdrawTotalAll);

        // Finalize this payout row
        $updateCols = array_merge($updateCols, [
            'service_charge' => $sumService,                 // stored separately
            'tds'            => $sumTds,                     // stored separately
            'deduction'      => $sumService + $sumTds,       // total deduction
            'withdraw_amt'   => $sumNet,
            'payable_amt'    => $sumNet,
            'total'          => $runningTotal,
            'updated_at'     => $nowTs,
        ]);

        Payout::where('id', $payout->id)->update($updateCols);

        // Auto-create Withdraw if net >= 1000
        if ($sumNet >= 1000) {
            Withdraw::firstOrCreate(
                ['wdate' => $todayDate, 'user_id' => $userID],
                [
                    'user_id_fk'   => $userName,
                    'user_id'      => $userID,
                    'amount'       => $sumNet,          // net payable this run
                    'amt'          => $runningTotal,    // running balance
                    'status'       => 'Pending',
                    'payment_mode' => 'INR',
                    'wdate'        => $todayDate,
                    'created_at'   => $nowTs,
                ]
            );
        }
    }

    return response()->json([
        'ok'           => true,
        'closing_type' => $closingType,               // 'mid' or 'end'
        'effective'    => $todayDate,
        'window_end'   => $dayEndTs,
        'now'          => $now->toDateTimeString(),
    ]);
}


public function index2()
{
    date_default_timezone_set("Asia/Kolkata");

    $today       = Carbon::now('Asia/Kolkata');
    $tz        = 'Asia/Kolkata';
    $now       = Carbon::now($tz);
    // Only run on 1st or 15th
    if (!in_array($now->day, [1, 15], true)) {
        return response()->json(['ok' => true, 'message' => 'Not a closing day (1st / 15th)']);
    }

    $isFirst   = ($now->day === 1);
    $isFifteen = ($now->day === 15);
    
    $changeDate = false;
    // if it's the 1st, shift reference to yesterday
    if ($today->day === 1) {
        $today = $today->copy()->subDay();
         $changeDate = true;
    }
    $todayDate   = $today->toDateString();
    $nowTs       = $today->toDateTimeString();
    $dayEndTs    = $today->copy()->endOfDay()->toDateTimeString();
    
   if($changeDate)
   {
     $nowTs   = $dayEndTs;
   }
   
//   dd($nowTs);
   


    // Closing type + reference "closing date"
    $closingType = $isFirst ? 'end' : 'mid';
  
    

    /**
     * Configure income types
     * value: [remarkLabel, is_roi]
     * - ROI (reccuring_income) => ONLY 2% TDS (no service charge)
     * - Others => 8% Service + 2% TDS = 10% total
     */
    $allTypes = [
        'referral_income'  => ['Referral Income',   false],
        'reccuring_income' => ['Recurring Income',  true],  // ROI
        'farming_income'   => ['Farming Income',    false],
        'reward_income'    => ['Reward Income',     false],
        'salary_income'    => ['Salary Income',     false],
    ];

    // 15th: include only referral & recurring(ROI); Month-end: include all
    $types = $closingType === 'mid'
        ? array_intersect_key($allTypes, array_flip(['referral_income','reccuring_income']))
        : $allTypes;

    // Deduction rates
    $SERVICE_RATE_NON_ROI = 0.08; // 8%
    $TDS_RATE_NON_ROI     = 0.02; // 2%
    $TDS_RATE_ROI         = 0.02; // 2% (ROI only)

    $users = User::where('active_status','Active')->where('username','EV759344')->orderBy('id','ASC')->get();

    foreach ($users as $user) {
        $userID   = $user->id;
        $userName = $user->username;
        $previous = Carbon::parse($todayDate)->subDays(15)->toDateString();

        // One payout per user per day
        if (Payout::where('user_id',$userID)->whereDate('ttime',$todayDate)->exists()) {
            continue;
        }

        // last payout timestamp for this user (nullable)
        $lastPayoutAt = Payout::where('user_id', $userID)->max('created_at');
        $from = $lastPayoutAt
            ? Carbon::parse($lastPayoutAt)->startOfDay()->toDateTimeString()
            : Carbon::parse($user->adate ?: '2025-03-13 00:20:00')->startOfDay()->toDateTimeString();

        // Create base payout row
        $payout = Payout::create([
            'user_id'     => $userID,
            'user_id_fk'  => $userName,
            'ttime'       => $todayDate,
            'created_at'  => $nowTs,
            'updated_at'  => $nowTs,
            'payout_date' => $nowTs,
        ]);

        // Accumulators
        $sumGross    = 0.0;  // total gross considered this run
        $sumService  = 0.0;  // <-- separate service charge
        $sumTds      = 0.0;  // <-- separate TDS
        $sumNet      = 0.0;

        $updateCols  = ['user_id' => $userID];
        $labels      = array_column($types, 0);

        foreach ($types as $col => [$remark, $isRoi]) {

            // total earned for this remark within window
            $earned = (float) Income::where('user_id',$userID)
                        ->whereBetween('created_at', [$from, $dayEndTs])
                        ->where('remarks',$remark)
                        ->sum('comm');

            // total already recorded for this column in previous payouts
            $already = (float) Payout::where('user_id',$userID)->sum($col);

            $grossForThis = max(0, $earned - $already);

            // Split deductions
            if ($isRoi) {
                // ROI: only TDS 2%, NO service charge
                $dedService = 0.0;
                $dedTds     = $grossForThis * $TDS_RATE_ROI;
            } else {
                // Non-ROI: 8% service + 2% TDS
                $dedService = $grossForThis * $SERVICE_RATE_NON_ROI;
                $dedTds     = $grossForThis * $TDS_RATE_NON_ROI;
            }

            $dedForThis = $dedService + $dedTds;
            $netForThis = $grossForThis - $dedForThis;

            // accumulate
            $sumGross   += $grossForThis;
            $sumService += $dedService;
            $sumTds     += $dedTds;
            $sumNet     += $netForThis;

            // write the gross to the per-remark column
            $updateCols[$col] = $grossForThis;
        }

        // If below minimum, remove payout and skip
        if ($sumGross < 1000) {
            Payout::where('id',$payout->id)->delete();
            continue;
        }

        // Running "total" like your original (income – total withdraw so far)
        $totalIncomeAll   = (float) Income::where('user_id',$userID)
                                ->whereIn('remarks',$labels)
                                ->whereBetween('created_at', [$from, $dayEndTs])
                                ->sum('comm');
        $withdrawTotalAll = (float) Payout::where('user_id',$userID)->sum('total');
        $runningTotal     = max(0, $totalIncomeAll - $withdrawTotalAll);

        // finalize update on payout row
        $updateCols = array_merge($updateCols, [
            'service_charge' => $sumService,              // <— stored separately
            'tds'            => $sumTds,                  // <— stored separately
            'deduction'      => $sumService + $sumTds,    // total deduction
            'withdraw_amt'   => $sumNet,
            'payable_amt'    => $sumNet,
            'total'          => $runningTotal,
            'updated_at'     => $nowTs,
        ]);
        Payout::where('id',$payout->id)->update($updateCols);

        // Create/ensure Withdraw once if net >= 1000
        if ($sumNet >= 1000) {
            Withdraw::firstOrCreate(
                ['wdate' => $todayDate, 'user_id' => $userID],
                [
                    'user_id_fk'   => $userName,
                    'user_id'      => $userID,
                    'amount'       => $sumNet,
                    'amt'          => $runningTotal,
                    'status'       => 'Pending',
                    'payment_mode' => 'INR',
                    'wdate'        => $todayDate,
                    'created_at'   => $nowTs,
                ]
            );
        }
    }
}



public function add_level_income($user_id, $amt)
{
    $levelPercentages = [
        1 => 10, 2 => 5, 3 => 3, 4 => 1, 5 => 1
    ];

    for ($i = 6; $i <= 20; $i++) {
        $levelPercentages[$i] = 0.50;
    }

    for ($i = 21; $i <= 40; $i++) {
        $levelPercentages[$i] = 1;
    }

    $user = User::find($user_id);
    if (!$user) return false;

    $fullname = $user->name;
    $rname = $user->username;
    $amount = $amt / 100;
    $currentUserId = $user_id;
    $cnt = 1;
    $prevLevelOpened = true;

    while ($currentUserId && $currentUserId != "1" && $cnt <= 40) {
        $sponsorData = User::find($currentUserId);
        if (!$sponsorData) break;

        $sponsorId = $sponsorData->sponsor;
        $sponsorStatus = User::find($sponsorId);

        $teamA = $sponsorStatus->teamA ?? 0;
        $teamB = $sponsorStatus->teamB ?? 0;
        $otherTeam = $sponsorStatus->other_team ?? 0;
        $sponsorCount = User::where('sponsor', $sponsorId)->where('active_status', 'Active')->count();

        $canProceed = false;

        if ($cnt == 1 && $sponsorCount >= 1) {
            $canProceed = true;
        } elseif ($cnt == 2 && $sponsorCount >= 2 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt == 3 && $sponsorCount >= 3 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 4 && $cnt <= 6 && $sponsorCount >= 3 && $teamA >= 110000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 7 && $cnt <= 9 && $sponsorCount >= 3 && $teamA >= 110000 && $teamB >= 110000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 10 && $cnt <= 12 && $sponsorCount >= 3 && $teamA >= 110000 && $teamB >= 110000 && $otherTeam >= 60000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 13 && $cnt <= 21 && $teamA >= 410000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 22 && $cnt <= 30 && $teamA >= 410000 && $teamB >= 410000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 31 && $cnt <= 39 && $teamA >= 410000 && $teamB >= 410000 && $otherTeam >= 160000 && $prevLevelOpened) {
            $canProceed = true;
        }

        if ($canProceed && isset($levelPercentages[$cnt]) && $sponsorStatus->active_status=="Active") {
            $pp = $amount * $levelPercentages[$cnt];

            Income::create([
                'user_id' => $sponsorStatus->id,
                'user_id_fk' => $sponsorStatus->username,
                'amt' => $amt,
                'comm' => $pp,
                'remarks' => 'Recurring Income',
                'level' => $cnt,
                'rname' => $rname,
                'fullname' => $fullname,
                'ttime' => date("Y-m-d"),
            ]);

            $prevLevelOpened = true; // Allow next level
        } else {
            $prevLevelOpened = false; // Stop if condition not met
        }

        $currentUserId = $sponsorId;
        $cnt++;
    }

    return true;
}


public function generate_roi()
{  

$allResult=Investment::where('status','Active')->where('roiCandition',0)->get();
$todays=Date("Y-m-d");

if ($allResult) 
{
 foreach ($allResult as $key => $value) 
 {
  $userID=$value->user_id;
   $joining_amt = $value->amount;
 
  $userDetails=User::where('id',$userID)->where('active_status','Active')->first();
  $today=date("Y-m-d");
   $previous_date =date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $today) ) ));

  if($userDetails) 
  {
     $total_profit_b = Income::where('user_id', $userID)->where('invest_id', $value->id)->where('remarks','Farming Income')->sum("comm");
      $total_profit=($total_profit_b)?$total_profit_b:0;
        $sponsor_cnt = User::where('sponsor',$userID)->where('active_status','Active')->count();
       $total_get=$joining_amt*200/100;        

        $roi = ($joining_amt * 8) / 100; // 8% Monthly ROI
        $roi2 = ($joining_amt * 6) / 100; // 6% Monthly ROI
        
         if($value->percent==6)
        {
          $roi = ($joining_amt * 6) / 100; // 6% Monthly ROI
         $roi2 = ($joining_amt * 4) / 100; // 4% Monthly ROI
        }
        
        if($value->percent==3)
        {
          $roi = ($joining_amt * 3) / 100; // 3% Monthly ROI
          $roi2 = 0; // 6% Monthly ROI  
        }
       
        
        $roi = round($roi/30,4);
        $roi2 = $roi2 ? round($roi2/30,4): 0;
        
        
         $max_income=$total_get;
        $n_m_t = $max_income - $total_profit;
        // dd($total_received);
          if($roi >= $n_m_t)
          {
              $roi = $n_m_t;
          }  
          if ($total_profit<$total_get && $roi>0) 
          {
     
             $today = date("Y-m-d");
            $todayRoiCount = Income::where('invest_id', $value->id)
                ->where('remarks', 'Farming Income')
                ->where('ttime', $today)
                ->count();
    
              if(!$todayRoiCount)
              {
                echo "ID:".$userDetails->username." Package:".$joining_amt." Roi:".$roi."<br>";
                 $data['remarks'] = 'Farming Income';
                $data['comm'] = $roi;
                $data['amt'] = $joining_amt;
                $data['invest_id']=$value->id;
                $data['level']=1;
                $data['ttime'] = date("Y-m-d");
                $data['user_id_fk'] = $userDetails->username;
                $data['user_id']=$userDetails->id; 
              $income = Income::firstOrCreate(['remarks' => 'Farming Income','ttime'=>date("Y-m-d"),'user_id'=>$userID,'invest_id'=>$value->id],$data);  
              
              if($roi2>0)
              {
                 $this->add_level_income($userDetails->id, $roi2);  
              }
                
              }
               
               
          }
          else
          {
          Investment::where('id',$value->id)->update(['roiCandition' => 1]);   
          }



  }
  




 }
} 




}


//farming income 
public function distributefarmingIncome()
{
    $today = Carbon::today();
    $users = User::where('active_status', 'Active')->get();

    foreach ($users as $user) {
        // Prevent duplicate distribution for this month
        $alreadyGiven = Income::where('user_id', $user->id)
                              ->where('remarks', 'Farming Income')
                              ->whereMonth('ttime', $today->month)
                              ->whereYear('ttime', $today->year)
                              ->exists();

        if ($alreadyGiven) continue;

        // Get user's first investment
        $firstInvestment = Investment::where('user_id', $user->id)
                                     ->where('status', 'Active')
                                     ->orderBy('created_at', 'asc')
                                     ->first();

        if (!$firstInvestment) continue;

        $firstInvMonth = Carbon::parse($firstInvestment->created_at)->format('Y-m');
        $currentMonth = $today->format('Y-m');
        $daysInMonth = $today->daysInMonth;

        // Total investment amount (active)
        $totalInvestment = Investment::where('user_id', $user->id)
                                     ->where('status', 'Active')
                                     ->sum('amount');

        // ✅ First month logic
        if ($firstInvMonth === $currentMonth) {
            $monthlyROI = 0;

            // Fetch only investments made in this month
            $firstMonthInvestments = Investment::where('user_id', $user->id)
                                               ->where('status', 'Active')
                                               ->whereMonth('created_at', $today->month)
                                               ->whereYear('created_at', $today->year)
                                               ->get();

            foreach ($firstMonthInvestments as $inv) {
                $invDate = Carbon::parse($inv->created_at);
                $activeDays = $invDate->diffInDays($today) + 1;
                if ($activeDays > $daysInMonth) $activeDays = $daysInMonth;

                $dailyROI = (4 / 100) / $daysInMonth; // 4% divided by days
                $monthlyROI += $inv->amount * $dailyROI * $activeDays;
            }

            if ($monthlyROI > 0) {
                Income::create([
                    'user_id' => $user->id,
                    'user_id_fk' => $user->username,
                    'amt' => $totalInvestment,
                    'comm' => $monthlyROI,
                    'remarks' => 'Farming Income',
                    'ttime' => $today->toDateString(),
                    'level' => 1,
                ]);
            }

        } else {
            // ✅ From second month onward: flat 4% of total investment
            $roi = $totalInvestment * (4 / 100);

            if ($roi > 0) {
                Income::create([
                    'user_id' => $user->id,
                    'user_id_fk' => $user->username,
                    'amt' => $totalInvestment,
                    'comm' => $roi,
                    'remarks' => 'Farming Income',
                    'ttime' => $today->toDateString(),
                    'level' => 1,
                ]);
                // Now distribute farming bonus to sponsors
            $this->distributeReccuringIncome($user, $roi, $today);
            }
        }
    }
}

private function distributeReccuringIncome($user, $farmingIncome, $today)
{
    $sponsorId = $user->sponsor;
    $level = 1;
    $baseIncome = $farmingIncome;

    $commissionRates = [
        1 => 10, // 10%
        2 => 5,  // 5%
        3 => 3,  // 3%
    ];

    while ($sponsorId && $level <= 40) {
        $sponsor = User::where('id', $sponsorId)
                       ->where('active_status', 'Active')
                       ->first();

        if (!$sponsor) break;

        // Check if sponsor has 3 or more active direct referrals
        $directReferrals = User::where('sponsor', $sponsor->id)
                               ->where('active_status', 'Active')
                               ->count();

        if ($directReferrals < 3) break;

        $commissionPercent = $commissionRates[$level] ?? 0;
        $commissionAmount = $baseIncome * ($commissionPercent / 100);

        if ($commissionAmount > 0) {
            Income::create([
                'user_id' => $sponsor->id,
                'user_id_fk' => $sponsor->username,
                'amt' => $baseIncome,
                'comm' => $commissionAmount,
                'remarks' => "Reccuring Income",
                'ttime' => $today->toDateString(),
                'level' => $level,
            ]);
        }

        $baseIncome = $commissionAmount;
        $sponsorId = $sponsor->sponsor;
        $level++;
    }
}

public function processWithdrawals()
{
    date_default_timezone_set("Asia/Kolkata");

    $allUsers = User::where('active_status', 'Active')->orderBy('id', 'ASC')->get();
    $today = date("Y-m-d");
    $now = date("Y-m-d H:i:s");
    $previousDate = date('Y-m-d', strtotime($today . ' - 7 days'));

    if ($allUsers) {
        $counter = 1;

        foreach ($allUsers as $user) {
            $userID = $user->id;
            $username = $user->username;
            $activationDate = $user->adate;

            $existingPayoutToday = Payout::where('user_id', $userID)->where('ttime', $today)->count();
            $hasAnyPayout = Payout::where('user_id', $userID)->exists();

            $isEligible = (!$hasAnyPayout && $activationDate < $previousDate) || $hasAnyPayout;

            if ($isEligible && $existingPayoutToday == 0) {
                echo "count: $counter<br>";
                echo "$username<br>";

                // Step 1: Insert basic payout record
                $payout = Payout::create([
                    'user_id'     => $userID,
                    'user_id_fk'  => $username,
                    'ttime'       => $today,
                    'created_at'  => $now,
                    'updated_at'  => $now,
                    'payout_date' => $now,
                ]);

                $payoutId = $payout->id;

                // Define income types and column names
                $remarksList = ['Referral Income', 'Farming Income', 'Reccuring Income'];
                $columnNames = ['referral_income', 'farming_income', 'reccuring_income'];

                // Calculate total income and previous total payout
                $totalIncome = Income::where('user_id', $userID)->sum('comm');
                $totalPayout = Payout::where('user_id', $userID)->sum('total');

                $payableTotal = floatval($totalIncome) - floatval($totalPayout);
                $deduction = $payableTotal * 0.05; // 5% deduction
                $serviceCharge = $payableTotal * 0.05; // 5% service charge
                $withdrawAmount = $payableTotal - ($deduction + $serviceCharge);


                $updateData = [];

                for ($i = 0; $i < 3; $i++) {
                    $remark = $remarksList[$i];
                    $column = $columnNames[$i];

                    $incomeSum = Income::where('user_id', $userID)->where('remarks', $remark)->sum('comm');
                    $previousPayoutSum = Payout::where('user_id', $userID)->sum($column);
                    $amountToPay = floatval($incomeSum) - floatval($previousPayoutSum);

                    $updateData[$column] = $amountToPay;
                }

                // Only process if there's a minimum threshold
                if ($payableTotal >= 1000) {
                    $updateData += [
                        'deduction'     => $deduction,
                        'service_charge'=> $serviceCharge,
                        'withdraw_amt'  => $withdrawAmount,
                        'total'         => $payableTotal,
                    ];

                    // Update the inserted payout row
                    Payout::where('id', $payoutId)->update($updateData);

                    // Optionally reset user balance or trigger other logic
                    // User::where('id', $userID)->update(['balance' => 0]);

                } else {
                    // Delete empty payout record if nothing is payable
                    Payout::where('id', $payoutId)->delete();
                }

                $counter++;
            }
        }
    }
}





  public function managePayout()

    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->orderBy('id','ASC')->cursor();



  
    if ($allResult) 
    {
       $counter=1;
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
     $adate_date =$value->adate;
     $balance=$value->balance;


  
    //  $income =Income::where('user_id',$userID)->sum('comm');
    //  $withdraw = Withdraw::where('user_id',$userID)->sum('amount');
     
    //   $balance = round($income-$withdraw,2);

       
      $totalDepositSponsor=Investment::where('user_id',$userID)->where('status','Active')->sum('amount');
                             
     $total_profit_b = Income::where('user_id', $userID)->sum('comm');
     $total_profit=($total_profit_b)?$total_profit_b:0;
    


         $total_get=($totalDepositSponsor*400/100)+$value->extra_amt;
  
         $n_m_t = $total_get - $total_profit_b;

          
          if($n_m_t<=0)
          {
                echo 'ID: '. $userName." Balance : ".$n_m_t."<br>";   
                
             Investment::where('user_id',$userID)->update(['roiCandition' => 1]);       
             User::where('id',$userID)->update(['active_status' => 'Inactive']);       
                
          }
   
       
   
     
      
     
    

     $counter++;   
     }
    } 
    
    
    

}




  public function RoyalExel()

    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);

    $effectiveDate =date("Y-m-d H:i:s");
    $dateTime = date('Y-m-d H:i:s', strtotime("- 5 months", strtotime($effectiveDate)));

    $allResult=User::where('active_status','Active')->where("adate",">", '2024-05-01 00:50:37')->orderBy('id','ASC')->cursor();

    if ($allResult) 
    {
       $counter=1;
         echo "<table>";
         
         echo "<tr style='padding:10px'>";
         
        echo "<th style='padding: 10px;
    border: 2px solid black;'>Sr No</th>";
      echo "<th style='padding: 10px;
    border: 2px solid black;'>Name</th>";

        echo "<th style='padding: 10px;
    border: 2px solid black;'>User ID</th>";
    
    
        echo "<th style='padding: 10px;
    border: 2px solid black;'>Investment</th>";
    
       echo "<th style='padding: 10px;
    border: 2px solid black;'>Activation Date</th>";
    
 

        
         
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;


     $buypackage= Investment::where('user_id',$userID)->where('status','Active')->sum('amount');
     $profitIncome = Income::where('user_id',$userID)->sum('comm');
       $total = $buypackage;
     
       $percentage = ($profitIncome / $total) * 100; // 20 
       
   
        echo "<tr style='padding:10px'>";
        
        echo "<td style='padding: 10px;
    border: 2px solid black;'>".$counter."</td>";
    
          echo "<td style='padding: 10px;
    border: 2px solid black;'>".$value->name."</td>";
    
       echo "<td style='padding: 10px;
    border: 2px solid black;'>".$value->username."</td>";
    
         echo "<td style='padding: 10px;
    border: 2px solid black;'>".$buypackage."</td>";
    
 
         echo "<td style='padding: 10px;
    border: 2px solid black;'>".$value->adate."</td>";
    
 
    
    
    
      
        echo "</tr>";   
           $counter++;   
   
     
    

  
     }
     
      echo "</table>";
    } 
    
    
    

}


  public function managePayout22()
    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','!=','Pending')->orderBy('id','ASC')->cursor();

     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
    
         $remarks_req=array('0','Staking Bonus','Direct Bonus','Royalty Bonus','Matching Bonus');

         for ($p=1; $p < 5; $p++) 
         { 
         $remarks=$remarks_req[$p];   
         
          $amount_rmarks=Income::where('user_id',$userID)->where('credit_type',0)->where('remarks',$remarks)->sum('comm');    
          
          
          if($amount_rmarks>0)
          {
            $data['remarks']=$remarks;
          $data['amount'] = $amount_rmarks;
          $data['ttime'] = date("Y-m-d");
          $data['user_id_fk'] = $userName;
          $data['user_id']=$userID;
          $income = Transaction::create($data); 
           Income::where('user_id',$userID)->where('is_swaped',0)->where('credit_type',0)->where('remarks',$remarks)->update(['is_swaped' => 1]);   
           
               
          }
         
             
         }
  
     }
     
  
    
    

}



 public function generate_roi_bonus()
    {  


//     echo "start".$start."<br>";
//     echo "end".$end."<br>";die();
// //   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->cursor();
    // dd($allResult);
    date_default_timezone_set('Asia/Kolkata');
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
        $userID=$value->id;
        $userName=$value->username;
        $user=User::where('username',$userName)->first();
          $activation_date = $user->adate;
              $activation_date = date('Y-m-d', strtotime($activation_date));
              $activation_date=  date('Y-m-d', strtotime("+ 1 day", strtotime($activation_date)));
             $Investment_=Investment::where('user_id',$user->id)->where('roiCandition',0)->where('amount','>',1)->where('status','Active')->get();
            $sponsorDetail = User::where('id',$user->sponsor)->first();

             if (!empty($Investment_))
              {
               
              foreach ($Investment_ as $key => $value)
                {

                 $check_ex=Income::where('user_id',$user->id)->where('remarks','Staking Bonus')->where('invest_id',$value->id)->orderBy('id','DESC')->limit(1)->first();
                  $activation_date = $value->sdate;
                  $activation_date=  date('Y-m-d', strtotime("+ 1 day", strtotime($activation_date)));
                 if (!empty($check_ex))
                  {
                    $activation_date = $check_ex->ttime;
                  }
                  $joining_amt = $value->amount;
                  $percent=5;
                  
                if($value->sdate>="2024-05-17")
                {
                    
                 if($joining_amt>=50 && $joining_amt<=199)
                  {
                    $percent=5;    
                  }
                  if($joining_amt>=200 && $joining_amt<=499)
                  {
                    $percent=6;    
                  }
                  if($joining_amt>=500 && $joining_amt<=1999)
                  {
                    $percent=7;    
                  }
                    if($joining_amt>=2000 && $joining_amt<=3999)
                  {
                    $percent=9;    
                  }
                  if($joining_amt>=4000 && $joining_amt<=4999)
                  {
                    $percent=10;    
                  }
                  
                 if($joining_amt>=5000)
                  {
                    $percent=10;   
                  }
                  
                }
                else
                {
                 
                     if($joining_amt>=50 && $joining_amt<=199)
                  {
                    $percent=5;    
                  }
                  if($joining_amt>=200 && $joining_amt<=499)
                  {
                    $percent=6;    
                  }
                  if($joining_amt>=500 && $joining_amt<=999)
                  {
                    $percent=7;    
                  }
                    if($joining_amt>=1000 && $joining_amt<=1999)
                  {
                    $percent=9;    
                  }
                  if($joining_amt>=2000 && $joining_amt<=4999)
                  {
                    $percent=10;    
                  }
                  
                 if($joining_amt>=5000)
                  {
                    $percent=11;   
                    
                    if($value->sdate>="2024-04-01")
                    {
                       $percent=10;   
                    }
                  }   
                }
                
                if($joining_amt==20)
                {
                   $percent=2;     
                }
              
                  
                  $percent2 = $percent/30;
               
                  
                  $roi = $joining_amt*$percent2/100;   
                  
                  

                    $begin = new DateTime($activation_date);
                            $today =  date('Y-m-d');

                         
                         $stop_date=  date('Y-m-d', strtotime("+ 1 day", strtotime($today)));
                            $end = new DateTime($stop_date);

                            $interval = DateInterval::createFromDateString('1 day');
                            $period = new DatePeriod($begin, $interval, $end);
    
                            foreach ($period as $dt) {
                                $day_number  =  $dt->format("N"); //1 for Monday, 7 for Sunday
                                 $totalDeposit=Investment::where('user_id',$user->id)->where('status','Active')->sum('amount');
                                 
                                 $total_profit_b = Income::where('user_id', $user->id)->where('invest_id',$value->id)->where('remarks','Staking Bonus')->sum('comm');
                                 $total_profit=($total_profit_b)?$total_profit_b:0;
                                
                            
                           
                                 $total_get=$totalDeposit*200/100;
                              
                                 $n_m_t = $total_get - $total_profit_b;
            
                                  if($roi >= $n_m_t)
                                  {
                                      $roi = $n_m_t;
                                  }  
                                 
                                if ($roi>0) 
                                {
                                    
                                $pendingStake= Income::where('user_id', $user->id)->where('credit_type',1)->where('remarks','Staking Bonus')->count();
                                if($pendingStake>=5)
                                {
                                    Income::where('user_id',$user->id)->where('credit_type',1)->where('remarks','Staking Bonus')->update(['credit_type' => 0]);  
                                }
                                
                                
                                $data['remarks'] = 'Staking Bonus';
                                $data['comm'] = $roi;
                                $data['level'] = 0;
                                $data['amt'] = $joining_amt;
                                $data['invest_id']=$value->id;
                                $data['credit_type']=1;
                                $data['ttime'] = $dt->format("Y-m-d");
                                $data['created_at'] = $dt->format("Y-m-d 01:22:12");
                                $data['updated_at'] = $dt->format("Y-m-d 01:22:12");
                                $data['user_id_fk'] = $user->username;
                                $data['user_id']=$user->id; 

                              $income = Income::firstOrCreate(['remarks' => 'Staking Bonus','ttime'=>$dt->format("Y-m-d"),'user_id'=>$user->id,'invest_id'=>$value->id],$data);
                              
                               $previous_date = date('Y-m-d', strtotime('-5 days'));
                               
                               
                              
                            //   if($sponsorDetail)
                            //   {
                            //     $total_profit_b = Income::where('user_id', $sponsorDetail->id)->where('rname', $user->username)->where('remarks','Matching Bonus')->count();
                                 
                            //      if($total_profit_b<30)
                            //      {
                            //       $roi2 = $joining_amt*$percent/100;   
                                   
                            //         $bonus =($roi2*10/100)/30;   
                                    
                            //      $totalDepositSponsor=Investment::where('user_id',$sponsorDetail->id)->where('status','Active')->sum('amount');
                             
                            //      $total_profit_b = Income::where('user_id', $sponsorDetail->id)->whereIn('remarks',['Staking Bonus','Matching Bonus'])->sum('comm');
                            //      $total_profit=($total_profit_b)?$total_profit_b:0;
                                
                            
                           
                            //          $total_get=$totalDepositSponsor*200/100;
                              
                            //          $n_m_t = $total_get - $total_profit_b;
                
                            //           if($bonus >= $n_m_t)
                            //           {
                            //               $bonus = $n_m_t;
                            //           }  
                                      
                                  
                            //         $data['remarks'] = 'Matching Bonus';
                            //         $data['comm'] = $bonus;
                            //         $data['level'] = 0;
                            //         $data['amt'] = $joining_amt;
                            //         $data['invest_id']=$value->id;
                            //         $data['ttime'] = $dt->format("Y-m-d");
                            //         $data['created_at'] = $dt->format("Y-m-d 01:22:12");
                            //         $data['updated_at'] = $dt->format("Y-m-d 01:22:12");
                            //         $data['user_id_fk'] = $sponsorDetail->username;
                            //         $data['user_id']=$sponsorDetail->id; 
                            //         $data['rname']=$user->username; 
    
                            //       $income = Income::firstOrCreate(['remarks' => 'Matching Bonus','ttime'=>$dt->format("Y-m-d"),'user_id'=>$sponsorDetail->id,'rname'=>$user->username],$data);
                                  
                            //      }
                              
                              
                                 
                            //   }
                              
                             
                              
                              
                                }
                                else
                                {
                                 Investment::where('id',$value->id)->update(['roiCandition' => 1]);   
                                }
                                
                                
                                
                                
                                



                                
                            }
                } 
                     
              // end Roi Income 


              }
       
      }
  }
}

private function getCommissionByRank($rank)
{
    // Map rank to commission %
    $commissionRates = [
        1 => 0,   // not eligible
        2 => 5,   // Farm Manager
        3 => 8,   // Sen. Farm Manager
        4 => 11,  // Agro Manager
        5 => 14,  // Sen. Agro Manager
        6 => 17,  // Platinum
        7 => 20,  // Diamond
        8 => 23,  // Green Diamond
        9 => 26,  // Crown Diamond
        10 => 28, // Ambassador
        11 => 32, // Crown Ambassador
    ];

    return $commissionRates[$rank] ?? 0;
}




public function distributeContractProfitSharing()
{
    // Step 1: Get all active users with rank >= 2
    $users = User::where('active_status', 'Active')->where('rank', '>=', 2)
        ->get();

    foreach ($users as $user) {
        // Step 2: Get team business (assuming you have relation or field)

          $tolteam=$this->my_level_team_count($user->id);
              if(!empty($tolteam))
              {
                 $total_team_active = User::select('id')->whereIn('id',$tolteam)->where('active_status','Active')->get()->toArray();  
                 $total_ids=array_column($total_team_active,'id');
                 
                $teamBusiness= Investment::whereIn('user_id',$total_ids)->where('is_free',0)->where('status','Active')->sum('amount');
                 
              }
              else
              {
               $teamBusiness=0;   
              }
              
              
              $roi = $teamBusiness * 6 /100;
              
              

        if ($teamBusiness > 0) {
            // Step 3: Get commission % based on rank
            $commissionPercent = $this->getCommissionByRank($user->rank);
            
            

            if ($commissionPercent > 0) {
                // Step 4: Calculate income
                $incomeAmount = ($roi * $commissionPercent) / 100;
                $incomeAmount = round($incomeAmount/30,3);
                
                // dd($incomeAmount);
    
                
                $data['remarks'] = 'Contract Profit Sharing';
                $data['comm'] = $incomeAmount;
                $data['amt'] = $incomeAmount;
                $data['level']=1;
                $data['ttime'] = date("Y-m-d");
                $data['user_id_fk'] = $user->username;
                $data['user_id']=$user->id; 
              $income = Income::firstOrCreate(['remarks' => 'Contract Profit Sharing','ttime'=>date("Y-m-d"),'user_id'=>$user->id],$data);  

               
            }
        }
    }
}


public function reward_bonus()
{
    // Active users only
    $users = User::where('active_status', 'Active')->get();
    if ($users->isEmpty()) return;

    // ---- DEFINE LEVELS (cumulative per-leg requirement) ----
    // per_leg_business is CUMULATIVE target that EACH leg must reach
          $levels = [
                1  => ['per_leg_business' => 250000,       'reward' => 5000,      'rank_name' => 'Manager'],
                2  => ['per_leg_business' => 950000,       'reward' => 15000,     'rank_name' => 'Farm Manager'],
                3  => ['per_leg_business' => 2950000,      'reward' => 40000,     'rank_name' => 'Senior Farm Manager'],
                4  => ['per_leg_business' => 7950000,      'reward' => 100000,    'rank_name' => 'Agro Manager'],
                5  => ['per_leg_business' => 18950000,     'reward' => 250000,    'rank_name' => 'Agro Senior Manager'],
                6  => ['per_leg_business' => 43950000,     'reward' => 750000,    'rank_name' => 'Platinum'],
                7  => ['per_leg_business' => 118950000,    'reward' => 2000000,   'rank_name' => 'Diamond'],
                8  => ['per_leg_business' => 283950000,    'reward' => 5000000,   'rank_name' => 'Green Diamond'],
                9  => ['per_leg_business' => 638950000,    'reward' => 10000000,  'rank_name' => 'Crown Diamond'],
                10 => ['per_leg_business' => 1393950000,   'reward' => 20000000,  'rank_name' => 'Ambassador'],
                11 => ['per_leg_business' => 2648950000,   'reward' => 50000000,  'rank_name' => 'Crown Ambassador'],
            ];
    foreach ($users as $u) {
        $userId   = $u->id;
        $username = $u->username;

        // ---------- GET 3 LEGS ----------
        // If you already store these sums in columns:
        $teamA_sum = (float) ($u->teamA ?? 0);
        $teamB_sum = (float) ($u->teamB ?? 0);
        $teamC_sum = (float) ($u->other_team ?? 0);

        // ---------- CHECK EACH LEVEL (CUMULATIVE) ----------
        foreach ($levels as $level => $cfg) {
            $required = (float) $cfg['per_leg_business']; // cumulative target per leg
            $reward   = (float) $cfg['reward'];

            // skip if already rewarded for this level
            $already = Reward::where([
                'user_id' => $userId,
                'level'   => $level,
                'status'  => 'Approved',
                'remarks' => 'Reward Income',
            ])->exists();
            if ($already) {
                continue;
            }

            // Achieved only if ALL THREE LEGS have reached the cumulative target
            $achieved = ($teamA_sum >= $required) && ($teamB_sum >= $required) && ($teamC_sum >= $required);

            if ($achieved) {
                // update user's rank (numeric or name—use what your schema supports)
                User::where('id', $userId)->update(['rank' => $level]);

                $data = [
                    'remarks'        => 'Reward Income',
                    'amount'         => $reward,            // reward amount (money/points)
                    'total_business' => $required,          // store the CUMULATIVE target reached
                    'level'          => $level,
                    'tdate'          => date('Y-m-d'),
                    'user_id_fk'     => $username,
                    'user_id'        => $userId,
                    'status'         => 'Approved',
                ];

                // ensure idempotency per (user, level)
                Reward::firstOrCreate(
                    ['remarks' => 'Reward Income', 'level' => $level, 'user_id' => $userId],
                    $data
                );
                
                  $incomeData = [
                        'remarks' => 'Reward Income',
                        'comm' => $reward,
                        'amt' => $reward,
                        'level' => $level,
                        'ttime' => now(),
                        'user_id_fk' => $username,
                        'user_id' => $userId
                    ];
                
                  Income::firstOrCreate(
                    ['remarks' => 'Reward Income', 'level' => $level, 'user_id' => $userId],
                    $incomeData
                );
                

                // (optional) echo/log
                echo "ID: {$username} | Level: {$level} Achieved (A={$teamA_sum}, B={$teamB_sum}, C={$teamC_sum})";
                echo "<br>";
            }
        }
    }
}


public function dailySalaryIncome()
{
    $today = date("Y-m-d");

    // Active users only
    $users = User::where('active_status', 'Active')->get();

    if ($users->isEmpty()) {
        return;
    }

    foreach ($users as $user) {
        $userID   = $user->id;
        $userName = $user->username;
        $userRank = $user->rank;

        // Get last achieved reward for this user
        $rewardDetail = Reward::where('user_id', $userID)
            ->where('status', 'Approved')
            ->orderBy('id', 'DESC')
            ->first();

        if (!$rewardDetail) {
            continue;
        }

        // Salary plan for this level
        $salaryPlans = [
            1 => [3000, 10],    // Manager
            2 => [7500, 10],    // Farm Manager
            3 => [15000, 6],    // Senior Farm Manager
            4 => [20000, 6],    // Agro Manager
        ];

        if (!isset($salaryPlans[$rewardDetail->level])) {
            continue; // This rank has no salary
        }

        [$monthlyAmt, $months] = $salaryPlans[$rewardDetail->level];

        // How many salary installments already given for this level
        $givenCount = Income::where('user_id', $userID)
            ->where('remarks', 'Salary Income')
            ->where('level', $rewardDetail->level)
            ->count();

        // If not finished installments
        if ($givenCount < $months) {
            $data = [
                'remarks'    => 'Salary Income',
                'comm'       => $monthlyAmt,
                'amt'        => $monthlyAmt,
                'level'      => $rewardDetail->level,
                'invest_id'  => $rewardDetail->id,
                'ttime'      => $today,  // today’s date as salary pay date
                'user_id_fk' => $userName,
                'user_id'    => $userID,
            ];

            // One row per user/level/day
            Income::firstOrCreate(
                [
                    'remarks' => 'Salary Income',
                    'level'   => $rewardDetail->level,
                    'user_id' => $userID,
                    'ttime'   => $today,
                ],
                $data
            );
        }
    }
}


  public function get_total_invest_by_team($user_ids)
    {
      
     $business= Investment::whereIn('user_id',$user_ids)->where('status','Active')->where('sdate','>=','2024-04-03')->sum('amount');
     return $business;
        
    }
    
    



 public function matching_bonus()

    {  
        

date_default_timezone_set("Asia/Kolkata");
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->get();

    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
       $userID=$value->id;
        $userName=$value->username;
        $Package=$value->package;

          $capping=$Package;
        
       
       $rightTeam=$this->team_by_position($userID,'Right');
       $leftTeam=$this->team_by_position($userID,'Left');

          $left_direct=User::where('sponsor',$userID)->where('active_status','Active')->where('position','Left')->count('id'); 
         $right_direct=User::where('sponsor',$userID)->where('position','Right')->where('active_status','Active')->count('id');
         
         $totalDirect = $left_direct+$right_direct;

      if (!empty($left_direct) && !empty($right_direct) && $totalDirect>=4) 
        {
        
         $total_right=(!empty($rightTeam))?count($rightTeam):0;
         $total_left=(!empty($leftTeam))?count($leftTeam):0;
        
         if(($total_right>1) && ($total_left>0) || ($total_left>1) && ($total_right>0))
       {


          $left_business=$this->get_total_invest_by_team($leftTeam);
          $right_business=$this->get_total_invest_by_team($rightTeam);


         $tleftpackage=($left_business)? $left_business:0;
         $trightpackage=($right_business)? $right_business:0;

          if($tleftpackage<$trightpackage)
           {
           $amount = $tleftpackage;   
           $curry = $trightpackage-$tleftpackage;     
           }
          if($tleftpackage>$trightpackage)
          {
           $amount = $trightpackage;   
           $curry = $tleftpackage-$trightpackage;      
          }
          if($tleftpackage==$trightpackage)
          {
            $amount = ($trightpackage);

            $curry = $tleftpackage-$trightpackage;

          }
        
        
          $mtching=Income::where('user_id',$userID)->where('remarks','Matching Bonus')->where('ttime','>=','2024-04-03')->orderBy('id', 'DESC')->limit(1)->first();
          
           $amount=$amount;
           $tamount = $amount;
          $amount = $amount - (!empty($mtching)?$mtching->amt:0);
            
             $idate = date("Y-m-d");
              $total_today= Income::where('user_id', $user->id)->sum('comm');
                                 
                      //print_r($user_id_fk);die;
              $joiningAMt = Investment::where('user_id',$userID)->where('status','Active')->sum("amount");

             $percent=0;
             if($joiningAMt>=50 && $joiningAMt<=199)
              {
                $percent=1;    
              }
              if($joiningAMt>=200 && $joiningAMt<=499)
              {
                $percent=1;    
              }
              if($joiningAMt>=500 && $joiningAMt<=999)
              {
                $percent=2;    
              }
                if($joiningAMt>=1000 && $joiningAMt<=1999)
              {
                $percent=2;    
              }
              if($joiningAMt>=2000 && $joiningAMt<=4999)
              {
                $percent=3;    
              }
                  
              $amount = ($amount/100)*$percent;  
          
          

             $max_income=($joiningAMt*400/100)+$value->extra_amt;
               $n_m_t = $max_income - $total_today;
              if($amount >= $n_m_t)
              {
                  $amount = $n_m_t;
              }
                          
                          
        //   print_r($amount);die();
        
            echo "ID:".$userName." amounts:".$amount."<br>";
             $data['remarks'] = 'Matching Bonus';
            $data['comm'] = $amount;
            $data['amt'] = $tamount;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['level']=1;
            $data['tleft']=$tleftpackage;
            $data['tright']=$trightpackage;
            $data['user_id']=$userID; 
            $data['curry']=$curry;
          $income = Income::firstOrCreate(['remarks' => 'Matching Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);


          


      }
       

     }

      }
   }
}




        public  function my_binary($userid){
        $arrin=array($userid);
        $ret=array();
        // print_r($arrin);die();
        while(!empty($arrin)){
         $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
         if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[]=$arrin;
              
              
            }else{
                $arrin = array();
            } 
        }
        // continue;    
        $final = array();         
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }

        return $final;
        
    }  

        public  function team_by_position($userid,$position){
        $ret=array();
        $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
        if($get_position_user){
        
            $ret=$this->my_binary($get_position_user->id);
            $ret[]=$get_position_user->id;
        }
       
        return $ret;
    }







   public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;


            }else{
                $arrin = array();
            }
        }

        $final = array();
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }


        return $final;

    }

}
