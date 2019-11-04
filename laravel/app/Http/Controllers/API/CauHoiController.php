<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
class CauHoiController extends Controller
{
    public function layDanhSach(){
        $cauHois = CauHoi::all()->random(4);
        $result = [
            'success'=> true,
            'data'=>$cauHois
        ];
        return response()->json($result);
    }
    public function layCauHoi(Request $request){
        $linhVucID = $request->query('linh_vuc');
        $cauHois = CauHoi::where('linh_vuc_id',$linhVucID)->get()->random(1);
        $result = [
            'success'=> true,
            'data'=>$cauHois
        ];
        return response()->json($result);
        
    }
}
