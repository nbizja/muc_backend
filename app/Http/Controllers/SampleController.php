<?php
/**
 * Created by PhpStorm.
 * User: nejc
 * Date: 22.11.2015
 * Time: 20:33
 */

namespace app\Http\Controllers;

use app\Models\LocationSample;
use app\Models\WifiSample;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;


class SampleController extends Controller
{
    public function addLocationSample(Request $request)
    {
        try {
            $samples = $request->samples;
            foreach($samples as $sample){
                $sample = new LocationSample([
                                                 'email' => $sample->email,
                                                 'trigger_id' => $sample->trigger_id,
                                                 'label' => $sample->label,
                                                 'latitude' => $sample->latitude,
                                                 'longitude' => $sample->longitude,
                                                 'timestamp' => $sample->timestamp
                                             ]);
                $sample->save();
            }
        } catch (Exception $e) {
            return new Response("Bad input", 400);
        }


        return new Response("Location sample saved", 200);

    }

    public function addWifiSample(Request $request)
    {
        try {
            $samples = $request->samples;
            foreach($samples as $sample){
                $sample = new WifiSample([
                     'email' => $sample->email,
                     'trigger_id' => $sample->trigger_id,
                     'ssid' => $sample->ssid,
                     'bssid' => $sample->bssid,
                     'rssi' => $sample->rssi,
                     'timestamp' => $sample->timestamp
                 ]);

                $sample->save();
            }
        } catch (Exception $e) {
            return new Response("Bad input", 400);
        }
        
        return new Response("Wifi sample saved", 200);
    }
}