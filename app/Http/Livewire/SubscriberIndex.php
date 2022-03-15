<?php
namespace App\Http\Livewire;
use App\Models\User;

use Livewire\Component;
use App\Models\Subscriber;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
 
class SubscriberIndex extends Component
{

  
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $phoneNumber, $phoneNumbers, $deletedId, $search;

    protected $rules = [
  
        'phoneNumber' => 'required|numeric|max:10|min:10||unique:subscribers,phone_number',
 
    ];
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteSubscriber()
    {
        $sub = Subscriber::findorFail($this->deletedId);
        $sub->delete();
        $this->render();
        $this->dispatchBrowserEvent('delete_toast', ['newName' => "Subscriber is Successfully Deleted"]);
    }

    public function addSubscriber()
    {

        $this->validate();
        $user = User::where('phone_number', $this->phoneNumber)->first();
if($user){

    $subscriber = new Subscriber();
    $subscriber->status = "Approved";
    $subscriber->user_id = Auth::user()->id;
    $subscriber->phone_number = $this->phoneNumber;

    $subscriber->save();
    $this->dispatchBrowserEvent('successfully_added', ['newName' => "Phone Number Successfully Added"]);
    $this->reset();
    $this->render();
}
else{
                                                                                                                                                                                            
    $subscriber = new Subscriber();
    $subscriber->status = "Pending";
    $subscriber->user_id = Auth::user()->id;
    $subscriber->phone_number = $this->phoneNumber;

    $subscriber->save();
    $this->dispatchBrowserEvent('successfully_added', ['newName' => "Phone Number Successfully Added"]);
    $this->reset();
    $this->render();

}

    }

    public function subscriberDeletedId($id)
    { 

        $this->deletedId = $id;
        $this->dispatchBrowserEvent('ShowSubscriberDeleteModal', ['newName' => "Phone Number Successfully Added"]);
        
    }
   
    public function render()
    {
       
        return view('livewire.subscriber-index', ['phoneNumbers1' => Subscriber::latest()->where('phone_number', 'like', '%'.$this->search.'%')->where('user_id', Auth::user()->id)->paginate(10)]);
    }
}
