<?php

use Illuminate\Database\Seeder;
use App\CnZona;
use Illuminate\Support\Facades\DB;

class cn_zonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('cn_zonas')->delete();

        // Añadimos una entrada a esta tabla
        
        CnZona::create(array('nombre_zona' => 'Zona 1','descripcion_zona' => 'Esmeraldas, Carchi, Imbabura y Sucumbíos'));
        CnZona::create(array('nombre_zona' => 'Zona 2','descripcion_zona' => 'Pichincha (excepto cantón Quito), Orellana y Napo'));
        CnZona::create(array('nombre_zona' => 'Zona 2 y 9','descripcion_zona' => 'Pichincha, Orellana y Napo'));
        CnZona::create(array('nombre_zona' => 'Zona 3','descripcion_zona' => 'Cotopaxi, Chimborazo, Tungurahua y Pastaza'));
        CnZona::create(array('nombre_zona' => 'Zona 4','descripcion_zona' => 'Manabí y  Santo Domingo de los Tsáchilas'));
        CnZona::create(array('nombre_zona' => 'Zona 5','descripcion_zona' => 'Bolívar,Guayas (excepto Guayaquil, Durán y Samborondón),Los Ríos, Santa Elena y Galápagos'));
        CnZona::create(array('nombre_zona' => 'Zona 5 y 8','descripcion_zona' => 'Bolívar,Guayas,Los Ríos, Santa Elena y Galápagos'));
        CnZona::create(array('nombre_zona' => 'Zona 6','descripcion_zona' => 'Azuay, Cañar y Morona Santiago'));
        CnZona::create(array('nombre_zona' => 'Zona 7','descripcion_zona' => 'El Oro, Loja y Zamora Chinchipe'));
        CnZona::create(array('nombre_zona' => 'Zona 8','descripcion_zona' => 'Cantones de Guayaquil Durán y Samborondón'));
        CnZona::create(array('nombre_zona' => 'Zona 9','descripcion_zona' => 'Distrito Metropolitano de Quito'));
        CnZona::create(array('nombre_zona' => 'Zona no delimitada','descripcion_zona' => 'Zona no delimitada'));
        CnZona::create(array('nombre_zona' => 'Ninguno','descripcion_zona' => 'Ninguno'));
        CnZona::create(array('nombre_zona' => 'OE PIB','descripcion_zona' => 'Otros elementos del PIB'));
    }
}
