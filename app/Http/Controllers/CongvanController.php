<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Carbon\Carbon;
use Storage;
use File;

class CongvanController extends Controller
{
    public function index(){
        $list = DB::table('cong_van')->join('don_vi', 'cong_van.ID_DV','=','don_vi.ID_DV')->orderBy('ID_CONGVAN', 'DESC')->get();
        $donvi = DB::table('don_vi')->get();
        $donviapdung = DB::table('donvi_apdung')->join('don_vi', 'donvi_apdung.ID_DV','=','don_vi.ID_DV')->join('cong_van', 'cong_van.ID_CONGVAN','=','donvi_apdung.ID_CONGVAN')->get();
        return view('congvan.index', compact('list','donvi','donviapdung'));
    }

    public function them(Request $request){
        $data = array();
        $data['TEN_CONGVAN'] = $request->tencongvan;
        $data['ID_DV'] = $request->donvi;
        $data['NGAY_TAO'] = Carbon::now('Asia/Ho_Chi_Minh');
        $get_file = $request->file('filecongvan');
        if($get_file){
            $get_name_file = $get_file->getClientOriginalName();
            $name_file = current(explode('.',$get_name_file));
            $new_file = $name_file.'_'.rand(0,9999).'.'.$get_file->getClientOriginalExtension();
            $fileData = File::get($get_file);
            $googleDisk = Storage::disk('google')->put($new_file, $fileData); 
            // $get_file->move('uploads/congvan/',$new_file);
            $data['FILE_CONGVAN'] = $new_file;
        }
        DB::table('cong_van')->insert($data);
        $congvan = DB::table('cong_van')->orderBy('ID_CONGVAN', 'DESC')->first();
        $data2['ID_DV'] = $request->donviapdung;
        foreach($data2['ID_DV'] as $key => $value){
            $data1 = array();
            $data1['ID_CONGVAN'] = $congvan->ID_CONGVAN;
            $data1['ID_DV'] = $value;
            DB::table('donvi_apdung')->insert($data1);
        }
        return redirect()->to('/congvan')->with('success', 'Thêm công văn thành công');
    }

    public function sua($id){
        $list = DB::table('cong_van')->join('don_vi', 'cong_van.ID_DV','=','don_vi.ID_DV')->orderBy('ID_CONGVAN', 'DESC')->get();
        $donvi = DB::table('don_vi')->get();
        $donviapdung = DB::table('donvi_apdung')->join('don_vi', 'donvi_apdung.ID_DV','=','don_vi.ID_DV')->join('cong_van', 'cong_van.ID_CONGVAN','=','donvi_apdung.ID_CONGVAN')->get();
        $data = DB::table('cong_van')->where('ID_CONGVAN', $id)->join('don_vi', 'cong_van.ID_DV','=','don_vi.ID_DV')->get();
        $data2 = DB::table('cong_van')->where('cong_van.ID_CONGVAN', $id)->join('don_vi', 'cong_van.ID_DV','=','don_vi.ID_DV')->join('donvi_apdung', 'cong_van.ID_CONGVAN','=','donvi_apdung.ID_CONGVAN')->get();
        return view('congvan.capnhat', compact('list','data', 'data2','donvi','donviapdung'));
    }

    public function capnhat(Request $request, $id){
        $congvan = DB::table('cong_van')->where('ID_CONGVAN', $id)->get();
        $data = array();
        $data['TEN_CONGVAN'] = $request->tencongvan;
        $data['ID_DV'] = $request->donvi;
        $data['NGAY_CAP_NHAT'] = Carbon::now('Asia/Ho_Chi_Minh');
        $get_file = $request->file('filecongvan');
        foreach($congvan as $cong_van){
            if($get_file){
                if(isset($cong_van->FILE_CONGVAN)){
                    $content = collect(Storage::disk('google')->listContents('/', false))->where('name','=', $cong_van->FILE_CONGVAN);
                    foreach($content as $content){
                        Storage::disk('google')->delete($content['path']);
                    }
                    // unlink('uploads/congvan/'.$cong_van->FILE_CONGVAN);
                    $get_name_file = $get_file->getClientOriginalName();
                    $name_file = current(explode('.',$get_name_file));
                    $new_file = $name_file.'_'.rand(0,9999).'.'.$get_file->getClientOriginalExtension();
                    $fileData = File::get($get_file);
                    $googleDisk = Storage::disk('google')->put($new_file, $fileData);
                    // $get_file->move('uploads/congvan/',$new_file);
                    $data['FILE_CONGVAN'] = $new_file;
                }else{
                    $get_name_file = $get_file->getClientOriginalName();
                    $name_file = current(explode('.',$get_name_file));
                    $new_file = $name_file.'_'.rand(0,9999).'.'.$get_file->getClientOriginalExtension();
                    $fileData = File::get($get_file);
                    $googleDisk = Storage::disk('google')->put($new_file, $fileData);
                    // $get_file->move('uploads/congvan/',$new_file);
                    $data['FILE_CONGVAN'] = $new_file;
                }
            }
        }
        DB::table('cong_van')->where('ID_CONGVAN', $id)->update($data);
        DB::table('donvi_apdung')->where('ID_CONGVAN', $id)->delete(); 
        $data2['ID_DV'] = $request->donviapdung;
        foreach($data2['ID_DV'] as $key => $value){
            $data1 = array();
            $data1['ID_CONGVAN'] = $id;
            $data1['ID_DV'] = $value;
            DB::table('donvi_apdung')->insert($data1);
        }
        return redirect()->to('/congvan')->with('success', 'Cập nhật công văn thành công');
    }

    public function xoa($id){
        $congvan = DB::table('cong_van')->where('ID_CONGVAN', $id)->get();
        foreach($congvan as $cong_van){
            $content = collect(Storage::disk('google')->listContents('/', false))->where('name','=', $cong_van->FILE_CONGVAN);
            if(isset($cong_van->FILE_CONGVAN)){
                foreach($content as $content){
                    Storage::disk('google')->delete($content['path']);
                }
                // unlink('uploads/congvan/'.$cong_van->FILE_CONGVAN);
            }
            $tencongvan = $cong_van->TEN_CONGVAN;
        }
        DB::table('cong_van')->where('ID_CONGVAN', $id)->delete();
        return redirect()->to('/congvan')->with('success', 'Đã xóa công văn '.$tencongvan);
    }

    public function xem($id){
        $congvan = DB::table('cong_van')->where('ID_CONGVAN', $id)->get();
        foreach($congvan as $cong_van){
            $content = collect(Storage::disk('google')->listContents('/', false))->where('name','=', $cong_van->FILE_CONGVAN);
        }
        return view('congvan.xem', compact('congvan','content'));
    }

    public function congvanlienquan($id){
        $data = array();
        $congvan = DB::table('chitiet_congvan')->where('ID_CONGVAN', $id)->get();
        foreach($congvan as $key => $cong_van){
            $data[$key] = $cong_van->ID_CHITIEU;
        }
        // dd($data);
        $donviapdung = DB::table('donvi_apdung')->join('don_vi', 'donvi_apdung.ID_DV','=','don_vi.ID_DV')->join('cong_van', 'cong_van.ID_CONGVAN','=','donvi_apdung.ID_CONGVAN')->get();
        $list = DB::table('cong_van')->whereIn('ID_CHITIEU', $data)->join('chitiet_congvan', 'cong_van.ID_CONGVAN','=','chitiet_congvan.ID_CONGVAN')->join('don_vi', 'cong_van.ID_DV','=','don_vi.ID_DV')->select('cong_van.ID_CONGVAN','TEN_CONGVAN','Ten_DV','FILE_CONGVAN','NGAY_TAO','NGAY_CAP_NHAT')->distinct()->get();
        return view('congvan.lienquan', compact('list','donviapdung'));
    }

    public function tai($id){
        $congvan = DB::table('cong_van')->where('ID_CONGVAN', $id)->get();
        foreach($congvan as $cong_van){
            $content = collect(Storage::disk('google')->listContents('/', false))->where('name','=', $cong_van->FILE_CONGVAN);
            foreach($content as $content){
                $fileData = Storage::disk('google')->get($content['path']);
                // $fileType = ['Content-Type' => $content['mimetype']];
                $fileType = $content['mimetype'];
                // $pathfile = 'https://drive.google.com/file/d/1FxyeWkQNrTcN-hZuqV5ozfBLcn53zC6i/view?usp=sharing';
            }
            $namefile = $cong_van->FILE_CONGVAN;
        }
        return response($fileData, 200)->header('Content-Type', $fileType)->header('Content-Disposition', "attachment; filename=$namefile");
        // return response()->download($pathfile, $namefile, $fileType);
    }
}
