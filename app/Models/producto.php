<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class producto extends Model
{
    use HasFactory;
    protected $table = 'producto';

    //Relacion uno a muchos

    public function categoria()
    {
        return $this->belongsTo('App\Models\categoria');
    }

    //Relacion muchos a muchos

    public function pedido()
    {
        return $this->belongsToMany('App\Models\pedido');
    }
}
