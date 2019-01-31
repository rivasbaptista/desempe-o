<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vicepresidencia extends Model
{
    protected $fillable = ['name', 'presidencia_id'];

    public function gerencia(){
        return $this->hasMany(Gerencia::class);
    }

    public function presidencia(){
        return $this->belongsTo(Presidencia::class);
    }

}
