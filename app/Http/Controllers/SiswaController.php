<?php

namespace App\Http\Controllers; 

use App\Models\SiswaModel;
use App\Models\KelasModel;
use App\Models\MapelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SiswaController extends Controller
{
    public function listsiswa(){
        $list = \DB::table('siswa')->select('nama_siswa')->get();
        return response()->json($list);
    }

    public function detailsiswa(Request $request, $id){
        $siswa = \DB::table('siswa')->where('id_siswa',$id)->get();
        $nilai = \DB::table('mapel')->where('id_siswa',$id)->select('nilai')->get();
        return response()->json([
            'Data_Siswa' => $siswa,
            'Nilai' => $nilai
        ]);
        
    }

}
