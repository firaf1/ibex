<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class agentController extends Controller
{
   public function index()
   {
   $todaySub = Subscriber::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->count();
   $todayRev = 6/30;

   $weekSubscriber = Subscriber::select("*")->where('user_id', Auth::user()->id)->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
   $weekRev = $weekSubscriber/30;
  $monthSubscriber = Subscriber::whereMonth('created_at', date('m'))
->whereYear('created_at', date('Y'))->where('user_id', Auth::user()->id)
->count();
$monthRev = $monthSubscriber/30;


       return view('agent.index', compact(['todaySub', 'todayRev', 'weekSubscriber', 'weekRev', 'monthSubscriber', 'monthRev']));
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
}
