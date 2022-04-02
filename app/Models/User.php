<?php

namespace App\Models;

use DateTime;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Subscriber;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','id_num', 'email','phone', 'password', 'role',
        'photo' , 'contact_person_name', 'contact_person_phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];


    public function statusCheck($id)
    {
        $var = Subscriber::where('user_id', $id)->where('status', 'Approved')->first();
        if($var->is_paid==0){
return "Pending";
        }
        elseif($var->is_paid == 1){
            return "Approved";

        }
        elseif($var->is_paid == 2){
            return "Unpproved";
        }

    }


    public function todayRev($id){
        $rows = Subscriber::latest()->whereDate('created_at', Carbon::today())->where('user_id', $id)->get();
        $totalRev = 0;
        $tdate = now();
      
        foreach($rows as $row){

            $fdate = $row->created_at;

            $datetime1 = new DateTime($fdate);
            $datetime2 = new DateTime($tdate);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');
           if($days == 0){
$days = 1;
               $totalRev = $totalRev + ($days*(2/30));
           }else{
            //    $totalRev = $totalRev + ($days*(2/30));
           }
             
        }
       //  dd($totalRev);
        return round($totalRev, 3);


   }
   public function weekRev($id){
       
    $rows = Subscriber::select("*")->where('user_id', $id)->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
    $totalRev = 0;
    $tdate = now();
  
    foreach($rows as $row){

        $fdate = $row->created_at;

        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
       if($days == 0){
$days = 1;
           $totalRev = $totalRev + ($days*(2/30));
       }else{
           $totalRev = $totalRev + ($days*(2/30));
       }
         
    }
   //  dd($totalRev);
    return round($totalRev, 3);


}
public function monthRev($id){
       
    $rows = Subscriber::select("*")->where('user_id', $id)->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
    $totalRev = 0;
    $tdate = now();
  
    foreach($rows as $row){

        $fdate = $row->created_at;

        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
       if($days == 0){
$days = 1;
           $totalRev = $totalRev + ($days*(2/30));
       }else{
           $totalRev = $totalRev + ($days*(2/30));
       }
         
    }
   //  dd($totalRev);
    return round($totalRev, 3);


}











public function Today($id)
{
    $todaySub = Subscriber::whereDate('created_at', Carbon::today())->where('user_id', $id)->count();
   return $todaySub;
}
public function Week($id)
{
    $weekSubscriber = Subscriber::select("*")->where('user_id', $id)->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
    return $weekSubscriber;
}
public function Month($id)
{
    $monthSubscriber = Subscriber::whereMonth('created_at', date('m'))
    ->whereYear('created_at', date('Y'))->where('user_id', $id)
    ->count();
    return $monthSubscriber;
}
public function total11($id)
{
    $totalRev = 0;
    $tdate = now();
    $rows = Subscriber::where('user_id', $id)->get();
    foreach($rows as $row){
        $fdate = $row->created_at;

        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        
        if($days > 0){
                       $totalRev = $totalRev + ($days*(2/30));
                   }
        
    }
    return $totalRev;
}
public function totalSub($id)
{
    $totalRev = 0;
    $tdate = now();
    $rows = Subscriber::where('user_id', $id)->get();
    foreach($rows as $row){
        $fdate = $row->created_at;

        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        
        if($days > 0){
                       $totalRev++;
                   }
        
    }
    return $totalRev;
}
public function lastMonthtotalSub($id)
{
    $totalRev = 0;
    $tdate = now();
    $rows = Subscriber::where('user_id', $id)->where('status', 'Approved')->whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->get();
    foreach($rows as $row){
        $fdate = $row->created_at;

        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        
        if($days > 0){
                       $totalRev++;
                   }
        
    }
    return $totalRev;
}
public function lastMonthtotal11($id)
{
    $totalRev = 0;
    $tdate = now();
    $rows = Subscriber::where('user_id', $id)->where('status', 'Approved')->whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->get();
    foreach($rows as $row){
        $fdate = $row->created_at;

        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        
        if($days > 0){
                       $totalRev = $totalRev + ($days*(2/30));
                   }
        
    }
    return $totalRev;
}

public function TotalWorkingAgent()
{
    return "hellow ";
}

public function checkSub($id)
{
    $row = Subscriber::where('user_id', $id)->where('status', "Approved")->count();
    if($row == 0){
        return false;

    }
    else return true;
}


public function subs()
{
    return $this->belongsTo(Subscriber::class, 'user_id');

}





    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $appends = [
        'profile_photo_url',
    ];


}
