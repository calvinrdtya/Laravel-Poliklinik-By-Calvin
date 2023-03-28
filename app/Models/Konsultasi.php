<?php

namespace App\Models;

use App\Models\Obat;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Konsultasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = true;
  
    public function dokter()
    {
      return $this->belongsTo(Dokter::class);
    }
  
    // public function obats()
    // {
    //   return $this->hasMany(Obat::class);
    // }

    public function pasien()
    {
      return $this->hasMany(Pasien::class);
    }
}
