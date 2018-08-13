<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\NhanVatRequest;
use App\NhanVat;
use Illuminate\Support\Facades\DB;

class NhanVatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhanvat = NhanVat::paginate(2);

        return view('nhanvat.index',['nhanvat'=>$nhanvat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nhanvat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\NhanVatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NhanVatRequest $request)
    {
        $nhanvat = new NhanVat;
        $nhanvat->name = $request ->name;
        $nhanvat->birthday = date($request->birthday);
        $nhanvat->location = str_slug($request->location);  // ~ str_slug         
        $nhanvat->save(); 

        return redirect('nhanvat'); //->with('thongbao','Them thanh cong')

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhanvat = NhanVat::find($id);

        return view('nhanvat.edit',['nhanvat'=>$nhanvat]);
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
        //Xu li
        $nhanvat = NhanVat::find($id);

        $nhanvat->name = $request ->name;
        $nhanvat->birthday = date($request->birthday);
        $nhanvat->location = str_slug($request->location);  // ~ str_slug   

        $nhanvat->save();

        return redirect('nhanvat');//->with('thongbao','Sua thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhanvat = NhanVat::find($id);
        $nhanvat->delete();

        return redirect('nhanvat'); 
    }


    public function setCookie(){
        //khai bao cookie
        $respones = new Response();
        $respones->withCookie('Meo','Laravel',0.1); // 6s
        echo "Hello Cookie";
        return $respones;
    }

    public function getCookie(Request $request){
        echo "My Cookie is:";
        return $request->cookie('Meo');
    }

}
