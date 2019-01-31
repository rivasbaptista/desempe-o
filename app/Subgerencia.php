<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departamento;
use App\Gerencia;

class Subgerencia extends Model
{
    protected $fillable = ['name', 'gerencia_id'];



    public function departamento (){
        return $this->hasMany(Departamento::class);
    }

    public function gerencia(){
        return $this->belongsTo(Gerencia::class);
    }


}
