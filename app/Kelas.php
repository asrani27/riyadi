<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function pkg()
    {
        return $this->hasMany(PKG::class, 'kelas_id');
    }
}
