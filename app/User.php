<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory,
        Notifiable,
        SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'remember_token',
        'name',
        'mobile_no',
        'designation',
        'hris_id',
        'address',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $dates = ['deleted_at'];


    /*
    |--------------------------------------------------------------------------
    | Boot method and model events.
    |--------------------------------------------------------------------------
    */
    protected static function boot()
    {
        parent::boot();
        static::saving(function (User $element) {
            $element->name = $element->first_name . " " . $element->last_name;
        });
        // static::creating(function (User $element) { });
        // static::updating(function (User $element) { });
        // static::created(function (User $element) { });
        // static::updated(function (User $element) { });
        // static::saved(function (User $element) { });
        // static::deleting(function (User $element) { });
        // static::deleted(function (User $element) { });
    }

    public function profilePic(){
        return $this->belongsTo(Upload::class,'id','element_id');
    }
}
