<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AspkarPositif extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public static function uuid()
    {
        $type = 'KARP';
        $uuid = Str::uuid()->toString();
        $uuid_second = substr($uuid, 9, 3);
        $uuid_third = substr($uuid, 14, 4);
        $uuid_fourth = substr($uuid, 19, 4);
        $uuid_fifth = substr($uuid, 24, 12);
        $no = str_pad(AspkarPositif::whereDate('created_at', date('Y-m-d'))->count() + 1, 7, '0', STR_PAD_LEFT);
        $uid = $type . '.' . $uuid_fifth . $uuid_second . $uuid_third . $uuid_fourth . '.' . $no;

        return $uid;
    }

    /**
     * The "booting" function of model
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = AspkarPositif::uuid();
        });
    }

    protected $guarded = [];
}
