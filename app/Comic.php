<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        "title",
        "original_title",
        "author",
        "number",
        "n_pages",
        "edition",
        "reading",
        "price",
        "color",
        "release",
        "cover",
    ];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

}
