<?php

namespace App\Http\Controllers; 

use App\Models\SiswaModel;
use App\Models\KelasModel;
use App\Models\MapelModel;
use Illuminate\Http\Request;

 
class mapel{
    
    public function hitung(Request $request){
        $mapel = new MapelModel();
        $hasil = $mapel->latihansoal_1 + $mapel->latihansoal2; 
    }
}

class MapelController extends Controller
{
    public function detailmapel(){
        $datas = MapelModel::all();
        
        return response()->json($datas);
    }

    public function inputmapel(Request $request){
        $mapels = new MapelModel();
        $mapels->id_mapel= $request->id_mapel;
        $mapels->nama_mapel = $request->nama_mapel;
        $mapels->latihansoal_1 = $request->latihan_1;
        $mapels->latihansoal_2 = $request->latihan_2;
        $mapels->latihansoal_3 = $request->latihan_3;
        $mapels->latihansoal_4 = $request->latihan_4;
        $mapels->nilaiUH_1 = $request->UH_1;
        $mapels->nilaiUH_2 = $request->UH_2;
        $mapels->nilaiUTS = $request->UTS;
        $mapels->nilaiUAS = $request->UAS;
        $mapels->id_siswa = $request->id_siswa;
        $mapels->nilai = ((15/100*($mapels->latihansoal_1 + $mapels->latihansoal_2 + $mapels->latihansoal_3 + $mapels->latihansoal_4)/4) + (20/100*($mapels->nilaiUH_1 + $mapels->nilaiUH_2)/2) + (25/100*($mapels->nilaiUTS)) + (40/100*($mapels->nilaiUAS)));
        $mapels->save();

        $paths = MapelModel::all();
        return response()->json($paths);
    }
 
}
