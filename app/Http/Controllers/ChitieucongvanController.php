<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Carbon\Carbon;

class ChitieucongvanController extends Controller
{
    public function index(){
        $list = DB::table('chitiet_congvan')->join('cong_van', 'cong_van.ID_CONGVAN','=','chitiet_congvan.ID_CONGVAN')->join('chi_tieu', 'chi_tieu.ID_CHITIEU','=','chitiet_congvan.ID_CHITIEU')->get();
        $congvan = DB::table('cong_van')->get();
        $chitieu = DB::table('chi_tieu')->get();
        return view('chitieucongvan.index', compact('list','congvan','chitieu'));
    }

    public function them(Request $request){
        $data = array();
        $data2 = array();
        $data['CONGTHUC'] = $request->congthuc;
        $data['ID_CHITIEU'] = $request->chitieu;
        $data['CAULENHSQL'] = $request->sql;
        $data2['ID_CONGVAN'] = $request->congvan;
        foreach($data2['ID_CONGVAN'] as $key => $value){
            $data['ID_CONGVAN'] = $value;
            $chitieucongvan = DB::table('chitiet_congvan')->where('ID_CONGVAN', $value)->where('ID_CHITIEU', $request->chitieu)->exists();
            if ($chitieucongvan) {
                $data['NGAYCAPNHAT'] = Carbon::now('Asia/Ho_Chi_Minh');
                DB::table('chitiet_congvan')->where('ID_CONGVAN', $value)->where('ID_CHITIEU', $request->chitieu)->update($data);
                // dd('update',$data);
            } else {
                $data['NGAYCAPNHAT'] = '';
                $data['NGAYTAO'] = Carbon::now('Asia/Ho_Chi_Minh');
                DB::table('chitiet_congvan')->insert($data);
                // dd('insert',$data);
            }
            // $data1[$key] = $data;
        }
        // dd($data1);
        return redirect()->to('/chitieucongvan')->with('success', 'Thêm chỉ tiêu công văn thành công');
    }

    public function sua($id){
        $list = DB::table('chitiet_congvan')->join('cong_van', 'cong_van.ID_CONGVAN','=','chitiet_congvan.ID_CONGVAN')->join('chi_tieu', 'chi_tieu.ID_CHITIEU','=','chitiet_congvan.ID_CHITIEU')->get();
        $congvan = DB::table('cong_van')->get();
        $chitieu = DB::table('chi_tieu')->get();
        $data = DB::table('chitiet_congvan')->where('ID_CHITIEUCONGVAN', $id)->join('cong_van', 'cong_van.ID_CONGVAN','=','chitiet_congvan.ID_CONGVAN')->join('chi_tieu', 'chi_tieu.ID_CHITIEU','=','chitiet_congvan.ID_CHITIEU')->get();
        return view('chitieucongvan.capnhat', compact('list','data','congvan','chitieu'));
    }

    public function capnhat(Request $request, $id){
        $chitieucongvan = DB::table('chitiet_congvan')->whereNotIn('ID_CHITIEUCONGVAN', [$id])->get();
        $data = array();
        $data['CONGTHUC'] = $request->congthuc;
        $data['ID_CONGVAN'] = $request->congvan;
        $data['ID_CHITIEU'] = $request->chitieu;
        $data['CAULENHSQL'] = $request->sql;
        $data['NGAYCAPNHAT'] = Carbon::now('Asia/Ho_Chi_Minh');
        // foreach($chitieucongvan as $chitieucongvan){
        //     if ($chitieucongvan->ID_CONGVAN == $request->congvan && $chitieucongvan->ID_CHITIEU == $request->chitieu) {
        //         return redirect()->to('/suachitieucongvan/'.$id)->with('error', 'Đã tồn tại công văn và chỉ tiêu này');
        //     }
        // }
        DB::table('chitiet_congvan')->where('ID_CHITIEUCONGVAN', $id)->update($data);
        return redirect()->to('/chitieucongvan')->with('success', 'Cập nhật chỉ tiêu công văn thành công');
    }

    public function xoa($id){
        DB::table('chitiet_congvan')->where('ID_CHITIEUCONGVAN', $id)->delete();
        return redirect()->to('/chitieucongvan')->with('success', 'Xóa chỉ tiêu công văn thành công');
    }
    
    public function lietke(){
        $list = DB::table('chitiet_congvan')->join('cong_van', 'cong_van.ID_CONGVAN','=','chitiet_congvan.ID_CONGVAN')->join('chi_tieu', 'chi_tieu.ID_CHITIEU','=','chitiet_congvan.ID_CHITIEU')->get();
        return view('chitieucongvan.lietke', compact('list'));
    }
}
