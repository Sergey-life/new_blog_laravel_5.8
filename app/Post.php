<?php

namespace App;

use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Multitenantable;

    protected $fillable = ['subject', 'hort_description','text', 'author', 'created_by_user_id'];
}
