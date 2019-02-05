<?php
namespace App\Traits;

use App\Permiso;
use App\Role;


trait HasPermissionsTrait {

    public function roles(){
        return $this->belongsToMany(Role::class, 'users_roles');
    }

    public function permisos(){
        return $this->belongsToMany(Permiso::class, 'users_permisos');
    }


    protected function getAllPermisos(array $permisos){
        return Permiso::whereIn('slug', $permisos)->get();
    }


    public function hasRole( ... $roles ){

        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)){
                return true;
            }
        }

        return false;
    }

    protected function hasPermisosTo($permiso){
        return  $this->hasPermisoMedianteRole($permiso) || $this->hasPermisos($permiso);
    }

    protected function hasPermiso($permiso){
        return (bool) $this->permisos->where('slug', $permiso->slug)->count();
    }

    public function hasPermisoMedianteRole($permiso){

        foreach ($permiso->roles as $role) {
            if($this->roles->contains($role)){
                return true;
            }
        }
        return false;
    }

    public function darPermisosTo(... $permisos){
        $permisos = $this->getAllPermisos($permisos);
        $permisos->dd();

        if($permisos === null){
            return $this;
        }


        $this->permisos()->saveMany($permisos);

        return $this;

    }

    public function borrarPermisos(... $permisos){
        $permisos = $this->getAllPermisos($permisos);
        $this->permisos()->detach($permisos);

        return $this;
    }


        


}