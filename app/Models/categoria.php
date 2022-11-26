<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';

    //Relacion uno a muchos

    public function producto()
    {
        return $this->hasMany('App\Models\producto');
    }
}
