<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Models;

class SiswaModel extends Models
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'siswa';
    protected $guarded = [];
    protected $primarykey = "_id";
    public $timestamps = false;
    protected $fillable = [

        "id_siswa",
        "nama_siswa",
        "alamat_siswa",
        "id_kelas",
        "nilai",
    ];
    
    public function kelas(){
        return $this->hasMany(KelasModel::class);
        
    }

    
}