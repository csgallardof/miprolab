<?php

use Illuminate\Database\Seeder;
use App\CnSubsector;
use Illuminate\Support\Facades\DB;

class cn_subsectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('cn_subsectors')->delete();

        // Añadimos una entrada a esta tabla
        
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de productos de la refinación petróleo y de otros productos'));
        CnSubsector::create(array('nombre_subsector' => 'Procesamiento y conservación de camarón'));
        CnSubsector::create(array('nombre_subsector' => 'Procesamiento y conservación de carne'));
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de  metales comunes y de productos derivados del metal'));
        CnSubsector::create(array('nombre_subsector' => 'Elaboración de productos de la molinería, panadería y fideos'));
        CnSubsector::create(array('nombre_subsector' => 'Elaboración de otros productos alimenticios'));
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de sustancias y productos químicos'));
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de otros productos minerales no metálicos'));
        CnSubsector::create(array('nombre_subsector' => 'Procesamiento y conservación de pescado y otros productos acuáticos'));
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de productos textiles, prendas de vestir; fabricación de cuero y artículos de cuero'));
        CnSubsector::create(array('nombre_subsector' => 'Elaboración de bebidas y productos de tabaco'));
        CnSubsector::create(array('nombre_subsector' => 'Producción de madera y de productos de madera'));
        CnSubsector::create(array('nombre_subsector' => 'Elaboración de productos lácteos'));
        CnSubsector::create(array('nombre_subsector' => 'Elaboración de aceites y grasas origen vegetal y animal'));
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de maquinaria y equipo'));
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de productos del caucho y plástico'));
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de equipo de transporte'));
        CnSubsector::create(array('nombre_subsector' => 'Elaboración de cacao, chocolate y productos de confitería'));
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de papel y productos de papel'));
        CnSubsector::create(array('nombre_subsector' => 'Fabricación de muebles'));
        CnSubsector::create(array('nombre_subsector' => 'Industrias manufactureras ncp'));
        CnSubsector::create(array('nombre_subsector' => 'Elaboración de azúcar'));
        CnSubsector::create(array('nombre_subsector' => 'Ninguno'));

    }
}
