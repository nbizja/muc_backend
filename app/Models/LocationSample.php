<?php
/**
 * Created by PhpStorm.
 * User: nejc
 * Date: 22.11.2015
 * Time: 20:36
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class LocationSample extends Model
{
    protected $table = 'locationSample';
    protected $fillable = [
        'id',
        'email',
        'trigger_id',
        'label',
        'latitude',
        'longitude',
        'timestamp',
    ];
}