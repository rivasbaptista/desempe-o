<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    protected $fillable = ['slug', 'name'];

    public function permisos(){
        return $this->belongsToMany(Permisos::class, 'roles_permisos');
    }
}
