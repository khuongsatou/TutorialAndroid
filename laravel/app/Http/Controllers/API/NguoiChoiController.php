<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
class NguoiChoiController extends Controller
{
    public function layDanhSach(Request $request) {
    	$page = $request->query('page', 1);
    	$limit = $request->query('limit', 25);

    	$listNguoiChoi = NguoiChoi::orderBy('diem_cao_nhat', 'desc')->skip(($page - 1) * $limit)->take($limit)->get();

    	return response()->json([
    		'total'	=> NguoiChoi::count(),
    		'data'	=> $listNguoiChoi
    	]);
	}
	
	public function layNguoiChoi(Request $request){
		$nguoiChoiID = $request->query('nguoi_choi_id');
		$nguoiChois =NguoiChoi::where('id',$nguoiChoiID)->get()->random(1);
		$result = [
			'success'=>true,
			'data'=>$nguoiChois
		];
		return response()->json($result);
	}
}
