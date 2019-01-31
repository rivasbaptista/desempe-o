<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidad;
use App\Subgerencia;


class Departamento extends Model
{
    protected $fillable = ['name', 'sub_gerencia_id'];


    public function unidad(){
        return $this->hasMany(Unidad::class);
    }

    public function departamento(){
        return $this->belongsTo(Subgerencia::class);
    }

}
