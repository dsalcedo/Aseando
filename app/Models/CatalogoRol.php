<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CatalogoRol extends Model{

    protected $table = 'catalogo_rol';
    protected $fillable = [
        'clave',
        'titulo',
        'descripcion'
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

    /**
     * one-to-many relationship method
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuario(){
        return $this->belongsToMany('App\Models\Usuario', 'usuario_rol', 'rol_id', 'usuario_id')->withTimestamps();
    }


}
