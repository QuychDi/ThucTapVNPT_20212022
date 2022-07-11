<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class ChitieuController extends Controller
{
    public function index(){
        $list = DB::table('chi_tieu')->get();
        return view('chitieu.index', compact('list'));
    }

    public function them(Request $request){
        $data = array();
        $data['TEN_CHITIEU'] = $request->tenchitieu;
        DB::table('chi_tieu')->insert($data);
        return redirect()->back();
    }

    public function sua($id){
        $list = DB::table('chi_tieu')->get();
        $data = DB::table('chi_tieu')->where('ID_CHITIEU', $id)->get();
        return view('chitieu.capnhat', compact('list','data'));
    }

    public function capnhat(Request $request, $id){
        $data = array();
        $data['TEN_CHITIEU'] = $request->tenchitieu;
        DB::table('chi_tieu')->where('ID_CHITIEU', $id)->update($data);
        return redirect()->to('/chitieu');
    }

    public function xoa($id){
        DB::table('chi_tieu')->where('ID_CHITIEU', $id)->delete();
        return redirect()->back();
    }
}
