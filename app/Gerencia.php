<?php

namespace App;
use App\Subgerencia;
use App\Vicepresidencia;


use Illuminate\Database\Eloquent\Model;

class Gerencia extends Model
{
    protected $fillable = ['name', 'vice_presidencia_id'];



    public function subgerencia(){
        return $this->hasMany(Subgerencia::class);
    }

    public function vicepresidencia(){
        return $this->belongsTo(Vicepresidencia::class);
    }

}
