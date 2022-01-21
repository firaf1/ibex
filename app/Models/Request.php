<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Request extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class, 'by_id');
    }
    public function item(){
        return $this->belongsTo(Item::class, 'item_id');
    }
}

