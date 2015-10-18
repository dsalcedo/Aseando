<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model{

    protected $table = 'usuario_rol';
    protected $fillable = [
        'usuario_id',
        'rol_id'
    ];

    /**
     * Crea o actualiza un registro
     */
    static function createOrUpdate($data, $keys) {
        $registro = self::where($keys)->first();
        if (is_null($registro)) {
            $registro = self::create($data);
        } else {
            self::where($keys)->update($data);
            $registro = self::where($keys)->first();
        }

        return $registro;
    }

}
