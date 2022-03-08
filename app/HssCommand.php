<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HssCommand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'source',
        'api_path',
        'file_path',
        'command',
        'is_uhc',
        'is_mch',
        'is_dh',
        'is_sp',
        'period',
    ];

    public function dataSourceTypes()
    {
        return [
            '' => 'Select',
            'dhis2' => 'DHIS2 Central Server',
            'biometric' => 'Biometric Attendance',
            'hrm' => 'HRM',
            'grs' => 'GRS System',
        ];
    }
    public function yesNoTypes()
    {
        return [
            '' => 'Select',
            '0' => 'No',
            '1' => 'Yes',
        ];
    }
    public function periodTypes()
    {
        return [
            '' => 'Select',
            'monthly' => 'Monthly',
            'weekly' => 'Weekly',
            'daily' => 'Daily',
            'custom' => 'Custom',
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Boot method and model events.
    |--------------------------------------------------------------------------
    */
    protected static function boot()
    {
        parent::boot();
        static::saving(function (HssCommand $element) {

        });
        // static::creating(function (Upload $element) { });
        // static::updating(function (Upload $element) { });
        // static::created(function (Upload $element) { });
        // static::updated(function (Upload $element) { });
        // static::saved(function (Upload $element) { });
        // static::deleting(function (Upload $element) { });
        // static::deleted(function (Upload $element) { });
    }

}
