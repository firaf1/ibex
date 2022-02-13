<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class agentController extends Controller
{

    public function totalRevFun($rows){
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
         return $totalRev;


    }
   public function index()
   {

    $revenue = 0;
    $revenueSub = 0;
    $tdate = now();
    $rows = Subscriber::where('user_id', Auth::user()->id)->where('is_paid', 0)->get();
    foreach($rows as $row){
        $fdate = $row->created_at;

        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        
        if($days > 0){
                       $revenue = $revenue + ($days*(2/30));
                       $revenueSub ++;
                   }
        
    }
     

    
       $todayRev = 0;
       $weekRev = 0;
       $days11 = 0;
    $tdate = now();
       $rows = Subscriber::where('user_id', Auth::user()->id)->latest()->get();
       foreach($rows as $row){
        $fdate = $row->created_at;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
 if($days <= 0){
    // dd($row->id, $days);
    //  $days11 = $days11 + 1;
    //   dd($days, $row->id);
    if($days == 0)
    $days = 1;  
  $todayRev = $todayRev + ($days*(2/30));
 }
 if($days <=6){
    //  dd($days);
    //   $days11 = $days11 +1;
    $weekRev = $weekRev + ($days*(2/30));
 }
 if($days <=30){
    //  dd($days);
    //   $days11 = $days11 +1;
    $weekRev = $weekRev + ($days*(2/30));
 }
}


   $todaySub = Subscriber::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->count();
   $todayRev = $this->totalRevFun(Subscriber::latest()->whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->get());

   $weekSubscriber = Subscriber::select("*")->where('user_id', Auth::user()->id)->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
   $weekRev = $this->totalRevFun(Subscriber::latest()->select("*")->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('user_id', Auth::user()->id)->get());
  
  
   $monthSubscriber = Subscriber::whereMonth('created_at', date('m'))
->whereYear('created_at', date('Y'))->where('user_id', Auth::user()->id)
->count();
$monthRev = $this->totalRevFun(Subscriber::whereMonth('created_at', date('m'))
->whereYear('created_at', date('Y'))->where('user_id', Auth::user()->id)
->get());


       return view('agent.index', compact(['todaySub','revenueSub', 'revenue', 'todayRev', 'weekSubscriber', 'weekRev', 'monthSubscriber', 'monthRev']));
   }
   public function Contact()
   {
       return view('agent.contact');
   }
   public function AddAgentMessage(Request $request)
   {
    $this->validate($request, [
        'subject' => 'required',
        'message' => 'required',
         
    ]);

    $contact = new Contact();
    $contact->user_id = Auth::user()->id;
    $contact->objective = $request->subject;
    $contact->comment = $request->message;
    $contact->save();
    return redirect()->back()->with('vlogAdded', 'Profile updated!');

   }

   public function subscriber()
   {
       return view('agent.subscriber');
   }


public function admin()
{
    $todayTotalUser = User::whereDate('created_at', Carbon::today())->where('role', '!=', 'Super Admin')->count();
    $monthSubscriber = User::whereMonth('created_at', date('m'))
    ->whereYear('created_at', date('Y'))
    ->count();
$totalUsers = User::all()->count();
    $agents = User::where('role', 'Agent')->latest()->paginate(10);
    $admins = User::where('role', 'Admin')->latest()->paginate(10);
    $users = User::where('role', 'User')->latest()->paginate(10);

    $todayRev = $this->totalRevFun(Subscriber::latest()->whereDate('created_at', Carbon::today())->get());
    $weekRev = $this->totalRevFun(Subscriber::latest()->select("*")->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get());
    $totalRev = $this->totalRevFun(Subscriber::all());



    return view('admin.index', compact(['agents', 'admins', 'users','todayRev','weekRev','totalRev', 'todayTotalUser','totalUsers', 'monthSubscriber']));
}


 


















   
}
