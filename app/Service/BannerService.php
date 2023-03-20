<?php
namespace App\Service;

// use App\Models\Products;
use Illuminate\Http\Request;

class BannerService
{
    public static function list($device = "", $type = "", $status = 1)
    {
        $param = [];
        if ($device) {
            $param[] = ["device", $device];
        }
        if ($type) {
            $param[] = ["type", $type];
        }
        if ($status) {
            $param[] = ["status", $status];
        }

        $data = \App\Models\Slider::where($param)->orderBy('position_slider')->get();
        // dd($data);
        return [
            "code"      => 200,
            "message"   => "success",
            "data"      => $data            
        ];
    }
}