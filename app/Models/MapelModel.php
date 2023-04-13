<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Models;


class MapelModel extends Models
{
    protected $connection = 'mongodb'; 
    protected $collection = 'mapel';
    protected $guarded = [];
    protected $primarykey = "_id";
    public $timestamps = false;
    protected $fillable = [

        "id_mapel",
        "nama_mapel",
        "latihansoal_1",
        "latihansoal_2",
        "latihansoal_3",
        "latihansoal_4",
        "nilaiUH_1",
        "nilaiUH_2",
        "nilaiUTS",
        "nilaiUAS",
        "id_siswa",
        "nilai",
    ];
}
