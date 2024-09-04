<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasOneThrough(Comment::class, User::class,'id','user_id','user_id','id')->select('comment as user_comment');
    }
}
