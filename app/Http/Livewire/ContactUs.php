<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ContactUs extends Component
{
    public $fullName, $email, $phone_number, $objective, $comment;
    protected $rules = [
        'fullName' => 'required',

        'email' => 'required',
        'phone_number' => 'required',
        'objective' => 'required|min:4|',
        'comment' => 'required',
         

    ];
    public function addComment()
    {
        $contact = new Contact();
        if(Auth::check()){
            $contact->user_id = Auth::user()->id;
            $contact->objective = $this->objective;
            $contact->comment = $this->comment;
        }
        else 
        $this->validate();
       $contact->full_name = $this->fullName;
       $contact->email = $this->email;
       $contact->phone_number = $this->phone_number;
       $contact->objective = $this->objective;
       $contact->comment = $this->comment;
     $contact->save();
     $this->dispatchBrowserEvent('successfully_added', ['newName' => "Successfully Approved"]);
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
