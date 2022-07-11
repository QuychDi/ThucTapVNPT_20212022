<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class PhongbanController extends Controller
{
    public function index(){
        $list = DB::table('phong_ban')->join('don_vi', 'phong_ban.ID_DV','=','don_vi.ID_DV')->get();
        $donvi = DB::table('don_vi')->get();
        return view('phongban.index', compact('list','donvi'));
    }

    public function them(Request $request){
        $data = array();
        $data['Ten_PhongBan'] = $request->tenphongban;
        $data['ID_DV'] = $request->donvi;
        DB::table('phong_ban')->insert($data);
        return redirect()->back();
    }

    public function sua($id){
        $list = DB::table('phong_ban')->join('don_vi', 'phong_ban.ID_DV','=','don_vi.ID_DV')->get();
        $donvi = DB::table('don_vi')->get();
        $data = DB::table('phong_ban')->where('ID_PHONGBAN', $id)->join('don_vi', 'phong_ban.ID_DV','=','don_vi.ID_DV')->get();
        return view('phongban.capnhat', compact('list','data','donvi'));
    }

    public function capnhat(Request $request, $id){
        $data = array();
        $data['Ten_PhongBan'] = $request->tenphongban;
        $data['ID_DV'] = $request->donvi;
        DB::table('phong_ban')->where('ID_PHONGBAN', $id)->update($data);
        return redirect()->to('/phongban');
    }

    public function xoa($id){
        DB::table('phong_ban')->where('ID_PHONGBAN', $id)->delete();
        return redirect()->back();
    }
}
