<?php
/**
 * Created by PhpStorm.
 * User: nejc
 * Date: 22.11.2015
 * Time: 20:39
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class WifiSample extends Model
{
    protected $table = 'wifiSample';
    protected $fillable = [
        'id',
        'email',
        'trigger_id',
        'ssid',
        'bssid',
        'rssi',
        'timestamp',
    ];


}