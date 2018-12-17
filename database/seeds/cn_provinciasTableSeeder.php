<?php

use Illuminate\Database\Seeder;
use App\CnProvincia;
use Illuminate\Support\Facades\DB;

class cn_provinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('cn_provincias')->delete();

        // Añadimos una entrada a esta tabla
        
        CnProvincia::create(array('nombre_provincia' => 'Azuay'));
        CnProvincia::create(array('nombre_provincia' => 'Bolívar'));
        CnProvincia::create(array('nombre_provincia' => 'Cañar'));
        CnProvincia::create(array('nombre_provincia' => 'Carchi'));
        CnProvincia::create(array('nombre_provincia' => 'Chimborazo'));
        CnProvincia::create(array('nombre_provincia' => 'Cotopaxi'));
        CnProvincia::create(array('nombre_provincia' => 'El Oro'));
        CnProvincia::create(array('nombre_provincia' => 'Esmeraldas'));
        CnProvincia::create(array('nombre_provincia' => 'Galápagos'));
        CnProvincia::create(array('nombre_provincia' => 'Guayas'));
        CnProvincia::create(array('nombre_provincia' => 'Imbabura'));
        CnProvincia::create(array('nombre_provincia' => 'Loja'));
        CnProvincia::create(array('nombre_provincia' => 'Los Ríos'));
        CnProvincia::create(array('nombre_provincia' => 'Manabí'));
        CnProvincia::create(array('nombre_provincia' => 'Morona Santiago'));
        CnProvincia::create(array('nombre_provincia' => 'Napo'));
        CnProvincia::create(array('nombre_provincia' => 'Orellana'));
        CnProvincia::create(array('nombre_provincia' => 'Pastaza'));
        CnProvincia::create(array('nombre_provincia' => 'Pichincha'));
        CnProvincia::create(array('nombre_provincia' => 'Santa Elena'));
        CnProvincia::create(array('nombre_provincia' => 'Santo Domingo de los Tsáchilas'));
        CnProvincia::create(array('nombre_provincia' => 'Sucumbios'));
        CnProvincia::create(array('nombre_provincia' => 'Tungurahua'));
        CnProvincia::create(array('nombre_provincia' => 'Zamora Chinchipe'));
        CnProvincia::create(array('nombre_provincia' => 'Zonas no Delimitadas'));
        CnProvincia::create(array('nombre_provincia' => 'Amazonía'));
        CnProvincia::create(array('nombre_provincia' => 'Ninguno'));
        CnProvincia::create(array('nombre_provincia' => 'Otros elementos del PIB'));
     

        
    }
}
