<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Semester extends Model
{
    use HasFactory;

    /**
     * The "booting" function of model
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $type = 'SMT';
            $uuid = Str::uuid()->toString();
            $uuid_second = substr($uuid, 9, 4);
            $uuid_third = substr($uuid, 14, 4);
            $uuid_fourth = substr($uuid, 19, 4);
            $uuid_fifth = substr($uuid, 24, 12);
            $no = str_pad(Semester::whereDate('created_at', date('Y-m-d'))->count() + 1, 7, '0', STR_PAD_LEFT);
            $uid = $type . '.' . $uuid_fifth . $uuid_second . $uuid_third . $uuid_fourth . '.' . $no;

            $model->uuid = $uid;
        });
    }

    protected $guarded = [];
}
