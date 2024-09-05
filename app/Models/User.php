<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'meta' => 'json',
        ];
    }

    public function getNameEmailAttribute()
    {
        return $this->name."-".$this->email;
    }

    public function getAddressPhoneAttribute()
    {
        return $this->address." & ".$this->phone;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function address(){
        return $this->hasOne(Address::class,'user_id','id');
    }

    public function comment(){
        return $this->hasMany(Comment::class,'user_id','id');
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function likeImages(){
        return $this->morphedByMany(Image::class, 'likeable');
    }

    public function likeRooms(){
        return $this->morphedByMany(Room::class, 'likeable');
    }

}
