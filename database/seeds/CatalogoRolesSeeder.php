<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\CatalogoRoles;

class CatalogoRolesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('catalogo_rol')->truncate();

        CatalogoRoles::create([
            'clave'  => 'administrador',
            'titulo' => 'Administrador del sistema',
            'descripcion' => 'Usuario que permite administrar completamente el sistema.'
        ]);

        CatalogoRoles::create([
            'clave'  => 'profesional_limpieza',
            'titulo' => 'Profesional de limpieza',
            'descripcion' => 'Profesional de limpieza.'
        ]);

        CatalogoRoles::create([
            'clave'  => 'usuario',
            'titulo' => 'Usuario',
            'descripcion' => 'Usuario que utiliza la plataforma.'
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }

}