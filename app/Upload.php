<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upload extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'file_path',
        'element_id',
    ];

    /*
    |--------------------------------------------------------------------------
    | Boot method and model events.
    |--------------------------------------------------------------------------
    */
    protected static function boot()
    {
        parent::boot();
        static::saving(function (Upload $element) {

        });
        // static::creating(function (Upload $element) { });
        // static::updating(function (Upload $element) { });
        // static::created(function (Upload $element) { });
        // static::updated(function (Upload $element) { });
        // static::saved(function (Upload $element) { });
        // static::deleting(function (Upload $element) { });
        // static::deleted(function (Upload $element) { });
    }

    public function user()
    {
        return $this->belongsTo(User::class,'element_id','id');
    }
}
