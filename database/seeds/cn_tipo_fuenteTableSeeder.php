<?php

use Illuminate\Database\Seeder;
use App\CnTipoFuente;
use Illuminate\Support\Facades\DB;
class cn_tipo_fuenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('cn_tipo_fuentes')->delete();

        // Añadimos una entrada a esta tabla
        
        CnTipoFuente::create(array('nombre_fuente' => 'Banco Central del Ecuador'));
        CnTipoFuente::create(array('nombre_fuente' => 'Servicio de Rentas Internas'));
        CnTipoFuente::create(array('nombre_fuente' => 'Instituto Nacional de Estadística y Censos'));
        CnTipoFuente::create(array('nombre_fuente' => 'Instituto Ecuatoriano de Seguridad Social'));
        
    }
}
