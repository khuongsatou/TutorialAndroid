<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHoi = CauHoi::all();
        return View('cau_hoi.ds_cau_hoi',compact('listCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listLinhVuc = LinhVuc::all();
        return View('cau_hoi.them_cau_hoi',compact('listLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cau_hoi = new CauHoi();
        $cau_hoi->noi_dung = $request->noi_dung;
        $cau_hoi->linh_vuc_id = $request->linh_vuc_id;
        $cau_hoi->save();

        return redirect()->route('cau_hoi.danh_sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cau_hoi = CauHoi::find($id);
        $listLinhVuc = LinhVuc::all();
        return View('cau_hoi.them_cau_hoi',compact('cau_hoi','listLinhVuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cau_hoi = CauHoi::find($id);
        $cau_hoi->noi_dung = $request->noi_dung;
        $cau_hoi->linh_vuc_id = $request->linh_vuc_id;
        $cau_hoi->save();
        return redirect()->route('cau_hoi.danh_sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cau_hoi = CauHoi::find($id);
        $cau_hoi->delete();
        return redirect()->route('cau_hoi.danh_sach');
    }
}
