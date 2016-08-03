<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'title', 'description', 'status', 'rank', 'photo'
    ];

    public function services() {
        return $this->belongsTo(Category::class);
    }

}
