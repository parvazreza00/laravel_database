<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function country(){
        return $this->hasOneThrough(Address::class, User::class,'id','user_id','user_id','id')->select('country as country_name');
    }

    public function commentable() 
    {
        return $this->morphTo();
    }

}
