<?php

namespace App\Http\Livewire;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Subscriber;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ReportIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search,$today = false, $week = false, $month = false, $phoneNumbers;

public function today()
{
    $this->today = true;
    $this->month = false;
    $this->week = false;
    $this->render();
}
public function mount()
{
    $this->today = true;
    $this->month = false;
    $this->week = false;
}
public function week()
{
    $this->today = false;
    $this->month = false;
    $this->week = true;
    $this->render();
}
public function month11()
{
    $this->today = false;
    $this->month = true;
    $this->week = false;
    $this->render();
}

 
    public function render()
    {

        if($this->today){
        return view('livewire.report-index', ['phoneNumbers1' => Subscriber::latest()->whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->paginate(10)]);
    }
        elseif($this->week) {
             return view('livewire.report-index', ['phoneNumbers1' => Subscriber::select("*")->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('user_id', Auth::user()->id)->paginate(10)]);
            }
            elseif($this->month){
                return view('livewire.report-index', ['phoneNumbers1' => Subscriber::whereMonth('created_at', date('m'))->where('user_id', Auth::user()->id)
                ->whereYear('created_at', date('Y'))
                ->paginate(10)]);
                        }
           else
           {
          

               return view('livewire.report-index', ['phoneNumbers1' => Subscriber::latest()->whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->paginate(2)]);
           }
        
        // 
    }
}
