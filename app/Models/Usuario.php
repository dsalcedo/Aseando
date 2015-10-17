<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @return string
     */
    public function getNombreCompletoAttribute(){
        $nombre_completo = $this->nombre.' '.$this->apellidos;
        return $nombre_completo;
    }

    /**
     * Obtiene el rol del usuario.
     *
     * @return QueryBuilder
     */
    public function rol(){
        return $this->belongsTo('App\Models\CatalogoRol');
    }
    /**
     * Obtiene los roles asignados al usuario
     *
     * @return mixed
     */
    public function roles(){
        return $this->belongsToMany('App\Models\CatalogoRol', 'rol_usuario', 'usuario_id', 'rol_id');
    }

    /**
     * @return array
     */
    public function getlistaRolesAttribute()
    {
        $rol_lista;
        foreach ($this->roles as $rol):
            $rol_lista[]=$rol->clave;
        endforeach;
        return  $rol_lista;
    }

    /**
     * Check if user has a role.
     *
     * @param $role
     * @return bool
     * TODO: Checar
     */
    public function is($rol){
        return in_array($rol, $this->lista_roles);
    }
}
