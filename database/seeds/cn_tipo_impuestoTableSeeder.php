<?php

use Illuminate\Database\Seeder;
use App\CnTipoImpuesto;
use Illuminate\Support\Facades\DB;
class cn_tipo_impuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('cn_tipo_impuestos')->delete();

        // Añadimos una entrada a esta tabla
        
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Impuesto al valor agregado'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Impuesto a la renta global'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Salida de divisas'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Otros no tributarios'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Impuesto a los consumos especiales'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Impuesto a los vehículos motorizado'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Impuestos fomento ambiental'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Sin clasiicación'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Intereses tributarios'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Imp. mineras'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Multas tributarias'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Imp. activos en el exterior'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Régimen impositivo simplificado'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Imp. tierras rurales'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Imp. ing extraord. Recur .no renovab'));
        CnTipoImpuesto::create(array('nombre_tipo_impuesto' => 'Ninguno'));
    }
}
