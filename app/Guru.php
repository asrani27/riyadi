<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $guarded = ['id'];

    public function pkg()
    {
        return $this->hasMany(PKG::class, 'guru_id');
    }
}
