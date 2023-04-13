<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Models;

class KelasModel extends Models 
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'kelas';
    protected $guarded = [];
    protected $primarykey = '_id';
    public $timestamps = false;
    protected $fillable = [

        "id_kelas",
        "nama_kelas",
        "wali_kelas",
    ];

    public function siswa()
    {
        return $this->belongsTo(SiswaModel::class);
    }
}
