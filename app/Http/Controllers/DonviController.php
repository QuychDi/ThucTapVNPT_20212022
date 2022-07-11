<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class DonviController extends Controller
{
    public function index(){
        $list = DB::table('don_vi')->get();
        return view('donvi.index', compact('list'));
    }

    public function them(Request $request){
        $data = array();
        $data['Ten_DV'] = $request->tendonvi;
        DB::table('don_vi')->insert($data);
        return redirect()->back();
    }

    public function sua($id){
        $list = DB::table('don_vi')->get();
        $data = DB::table('don_vi')->where('ID_DV', $id)->get();
        return view('donvi.capnhat', compact('list','data'));
    }

    public function capnhat(Request $request, $id){
        $data = array();
        $data['Ten_DV'] = $request->tendonvi;
        DB::table('don_vi')->where('ID_DV', $id)->update($data);
        return redirect()->to('/donvi');
    }

    public function xoa($id){
        DB::table('don_vi')->where('ID_DV', $id)->delete();
        return redirect()->back();
    }
}
