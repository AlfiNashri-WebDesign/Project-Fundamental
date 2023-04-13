<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Validator;
use App\Models\KelasModel;
use App\Models\SiswaModel;


class KelasController extends Controller
{
    public function inputkelas(Request $request){
        $kelas = new KelasModel();
        $kelas->id_kelas= $request->id_kelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->wali_kelas = $request->wali_kelas;
        $kelas->save();

        $paths = KelasModel::all();
        return response()->json($paths);
    }

    public function detailkelas($id){
        $paths = \DB::table('kelas')->where('id_kelas',$id)->get();
        $students = \DB::table('siswa')->where('id_kelas',$id)->select('nama_siswa')->get();
        return response()->json([
            'Kelas' => $paths,
            'Siswa' => $students
        ]);
    
        //return response()->json($paths);
        
    }
    public function viewlistkelas(){
        $list = \DB::table('kelas')->select('nama_kelas')->get();
        return response()->json($list);
    }

    public function updatekelas(Request $request,$id){
        \DB::table('kelas')->where('id_kelas',$id)->update([
            'nama_kelas'=>$request->inputan_nama,
            'wali_kelas'=>$request->inputan_wali
        ]);
        $info = \DB::table('kelas')->get();
        return response()->json($info);
    }
}
