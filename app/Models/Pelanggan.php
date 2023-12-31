<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'pel_id';
    protected $guarded = '[]';
    protected $fillable = [
        'pel_id',
        'pel_id_gol',
        'pel_id_user',
        'pel_no',
        'pel_nama',
        'pel_alamat',
        'pel_hp',
        'pel_ktp',
        'pel_seri',
        'pel_meteran',
        'pel_aktif'
    ];
    public function golongan()
    {
        return $this->belongsTo(Golongan::class);    
    }
}
