<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
