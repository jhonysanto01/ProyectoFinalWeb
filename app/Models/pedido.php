<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $table = 'pedido';

    //Relacion uno a muchos

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    //Relacion muchos a muchos
    
    public function producto()
    {
        return $this->belongsToMany('App\Models\producto');
    }
}
