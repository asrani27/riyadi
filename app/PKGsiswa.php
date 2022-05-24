<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PKGsiswa extends Model
{
    protected $table = 'pkg_siswa';
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function pkg()
    {
        return $this->belongsTo(PKG::class, 'periode_kelas_guru_id');
    }
}
