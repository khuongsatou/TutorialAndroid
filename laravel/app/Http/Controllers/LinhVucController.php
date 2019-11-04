<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listLinhVuc = LinhVuc::all();
        return View('linh_vuc.ds_linh_vuc',compact('listLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('linh_vuc.them_linh_vuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linh_vuc = new LinhVuc();
        $linh_vuc-> ten_linh_vuc = $request-> ten_linh_vuc;
        $linh_vuc->save();

        return redirect()->route('linh_vuc.danh_sach');
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
        $linhVuc = LinhVuc::find($id);
        return view('linh_vuc.them_linh_vuc',compact('linhVuc'));
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
        $linh_vuc = LinhVuc::find($id);
        $linh_vuc-> ten_linh_vuc = $request-> ten_linh_vuc;
        $linh_vuc->save();

        return redirect()->route('linh_vuc.danh_sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linh_vuc = LinhVuc::find($id);
        $linh_vuc -> delete();
        return redirect()->route('linh_vuc.danh_sach');
    }
}
