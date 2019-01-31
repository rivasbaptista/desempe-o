<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Departamento;

class Unidad extends Model
{
    protected $fillable = ['name', 'departamento_id'];


    public function user(){
        return $this->hasMany(User::class);
    }



    public function departamento (){
        return $this->belongsTo(Departamento::class);
    }

}
