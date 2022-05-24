<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PKGmapel extends Model
{
    protected $table = 'pkg_mapel';
    protected $guarded = ['id'];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function pkg()
    {
        return $this->belongsTo(PKG::class, 'periode_kelas_guru_id');
    }
}
