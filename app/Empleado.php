<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['cedula', 'email', 'nombres', 'fecha_nacimiento', 'fecha_ingreso', 'tlf_oficina', 'tlf_movil', 'status_id', 'unidad_id', 'cargo_id'];
}
