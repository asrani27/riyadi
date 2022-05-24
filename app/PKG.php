<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PKG extends Model
{
    protected $table = 'periode_kelas_guru';
    protected $guarded = ['id'];
    //public $timestamps = false;

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    public function PKGsiswa()
    {
        return $this->hasMany(PKGsiswa::class, 'periode_kelas_guru_id');
    }

    public function PKGmapel()
    {
        return $this->hasMany(PKGmapel::class, 'periode_kelas_guru_id');
    }
}
