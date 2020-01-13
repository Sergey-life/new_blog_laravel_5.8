<?php

namespace App;

use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Multitenantable;

//    protected $fillable = ['subject', 'hort_description', 'text', 'created_by_user_id', 'user_id'];
protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by_user_id');
    }

}
