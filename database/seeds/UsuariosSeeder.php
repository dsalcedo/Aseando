<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\CatalogoRol;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        //ROLES
        $rol_admin       = CatalogoRol::where(['clave'=>'administrador'])->first()->id;
        $rol_profesional = CatalogoRol::where(['clave'=>'profesional_limpieza'])->first()->id;
        $rol_usuario     = CatalogoRol::where(['clave'=>'usuario'])->first()->id;

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('usuarios')->truncate();

        $usuario = Usuario::create([
            'nombre'   => 'Josafat Daniel', 
            'apellidos' => 'Salcedo Sambrano',
            'email'    => 'dsalcedo@correo.com',
            'password' => bcrypt('demo')
        ]);
        $usuario->roles()->attach($rol_admin);

        $usuario = Usuario::create([
            'nombre'   => 'Gustavo',
            'apellidos' => 'Gonzalez Juarez',
            'email'    => 'ggonzalesj@correo.com',
            'password' => bcrypt('demo')
        ]);
        $usuario->roles()->attach($rol_admin);

        $usuario = Usuario::create([
            'nombre'   => 'Miguel',
            'apellidos' => 'Layún',
            'email'    => 'mlayun@correo.com',
            'password' => bcrypt('demo')
        ]);
        $usuario->roles()->attach($rol_profesional);

        $usuario = Usuario::create([
            'nombre'   => 'Otro',
            'apellidos' => 'Tronco',
            'email'    => 'otronco@correo.com',
            'password' => bcrypt('demo')
        ]);
        $usuario->roles()->attach($rol_usuario);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}