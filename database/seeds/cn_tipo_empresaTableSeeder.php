<?php

use Illuminate\Database\Seeder;
use App\CnTipoEmpresa;
use Illuminate\Support\Facades\DB;

class cn_tipo_empresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('cn_tipo_empresas')->delete();

        // Añadimos una entrada a esta tabla
        
        CnTipoEmpresa::create(array('nombre_tipo_empresa' => 'Microempresa'));
        CnTipoEmpresa::create(array('nombre_tipo_empresa' => 'Pequeña empresa'));
        CnTipoEmpresa::create(array('nombre_tipo_empresa' => 'Mediana empresa B'));
        CnTipoEmpresa::create(array('nombre_tipo_empresa' => 'Mediana empresa A'));
        CnTipoEmpresa::create(array('nombre_tipo_empresa' => 'Grande empresa'));
        CnTipoEmpresa::create(array('nombre_tipo_empresa' => 'Sin afiliados'));
        CnTipoEmpresa::create(array('nombre_tipo_empresa' => 'Ninguno'));
    }
}
