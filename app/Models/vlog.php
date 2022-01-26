<?php

namespace App\Models;

use App\Models\User;
use App\Models\vlog;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class vlog extends Model
{
    use HasFactory;

    /**
     * Get the category that owns the vlog
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
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
