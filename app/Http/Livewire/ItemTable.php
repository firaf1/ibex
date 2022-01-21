<?php

namespace App\Http\Livewire;

use App\Models\Item;
use App\Models\Request;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ItemTable extends Component
{
    use WithFileUploads;
    public $name, $search, $ItemId1, $rAmount, $orgina_price, $isPreview = false, $posts, $isUpload = false, $qr_data, $selling_picture, $isDelete,
    $expire_date, $isExpired = 0, $photo, $isRequestAmountIsValid = false, $cat_id, $picture, $cotactName, $brand_name, $updatedStaffId, $categories, $amount;

    public function mount()
    {
        $items = Item::all();
        foreach($items as $item){

            $to = $item->expire_date;
            $from = now();
            $diff_in_days = \Carbon\Carbon::parse($to)->diffInDays($from);
            if($diff_in_days <= 0){
                $this->isExpired = $this->isExpired + 1;
            }
          
       
            
        }
      
 

        $this->categories = Category::latest()->get();
    }
    public function updatedPhoto()
    {
        $this->isUpload = true;
    }
    public function itemModal($id)
    {
        $this->ItemId1 = $id;
        $this->rAmount ="";
        $this->dispatchBrowserEvent('ItemRequestModal', ['newName' => "d"]);

    }
    public function updatedRAmount()
    {
     $item = Item::where('id', $this->ItemId1)->first();
     $amount = $item->amount;
     if($this->rAmount > $amount){
         $this->isRequestAmountIsValid = $amount;
     }
     else{
        $this->isRequestAmountIsValid = false;
     }
    }

    public function SendRequest()
    {


        $item = Item::where('id', $this->ItemId1)->first();
        $amount = $item->amount;
        if($this->rAmount > $amount){
            $this->isRequestAmountIsValid = $amount;
        }
        else{
           $this->isRequestAmountIsValid = false;
        }

        if(!$this->isRequestAmountIsValid && $this->rAmount !="")
        {
           $id = Auth::user()->id;
        $request = new Request();
        $request->by_id = $id;
        $request->item_id = $this->ItemId1;
        $request->amount = $this->rAmount;
        $request->status = "pending";
        $request->save();
        session()->flash('successMessage', 'Successfully Send!');
        return redirect()->to('/item');

        }
        else{
            $this->isRequestAmountIsValid = $amount;
        }
    }

    public function updatedSearch()
    {
        $this->render();
    }
    public function itemSubmit()
    {
     $item = Item::all();
   
     
    
     dd('successfully inserted');
        $item = new Item();
        $item->general_name = $this->name;
        $item->brand_name = $this->brand_name;
        $item->qr_data = $this->qr_data;

        $name = 'BDLC_' . time() . "." . $this->photo->extension();
        $this->photo->storeAs('Items_photo/', $name, 'public');
        $item->picture = "Items_photo/" . $name;

        $item->original_price = $this->orgina_price;
        $item->selling_picture = $this->selling_picture;
        $item->expire_date = $this->expire_date;
        $item->amount = $this->amount;
        $item->status = 'pending';
        $item->category_id = $this->cat_id;

        $item->save();
        session()->flash('successMessage', 'Successfully Submited!');
        return redirect()->to('/item');
    }
    public function editmodal($id)
    {
        $this->isDelete = $id;
        $item = Item::findOrFail($id);
        $this->name = $item->general_name;
        $this->brand_name = $item->brand_name;
        $this->qr_data = $item->qr_data;
        $this->amount = $item->amount;
        $this->photo = $item->picture;
        $this->orgina_price = $item->original_price;
        $this->selling_picture = $item->selling_picture;
        $this->expire_date = $item->expire_date;
        $this->cat_id = $item->category_id;

    }
    public function updateItem()
    {
        $item = Item::where('id', $this->isDelete)->first();
        $item->general_name = $this->name;
        $item->brand_name = $this->brand_name;
        $item->qr_data = $this->qr_data;
        $item->amount = $this->amount;

        if ($this->photo != $item->picture) {
            $name = 'BDLC_' . time() . "." . $this->photo->extension();
            $this->photo->storeAs('Items_photo/', $name, 'public');
            $item->picture = "Items_photo/" . $name;
        }
        $item->original_price = $this->orgina_price;
        $item->expire_date = $this->expire_date;
        $item->category_id = $this->cat_id;
        $item->selling_picture = $this->selling_picture;
        $item->save();
        session()->flash('successMessage', 'Successfully Updated!');
        return redirect()->to('/item');
    }
    public function deleteitem($id)
    {
        $this->isDelete = $id;

    }
    public function Del_Ite()
    {
        $item = Item::where('id', $this->isDelete);
        $item->delete();
        $this->render();
        $this->dispatchBrowserEvent('HidenDeleteModal', ['newName' => "d"]);
    }
    public function render()
    {

        return view('livewire.item-table', [
            'items' => Item::where('general_name', 'like', '%' . $this->search . '%')->orWhere('general_name', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(8),
        ]);
    }
}
