<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    protected $fillable = ['title', 'url_clean', 'content', 'category_id'];
}
