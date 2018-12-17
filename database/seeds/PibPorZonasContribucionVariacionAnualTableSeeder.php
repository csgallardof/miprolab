<?php

use Illuminate\Database\Seeder;
use App\CnCifrasNacionales;
use Illuminate\Support\Facades\DB;

class PibPorZonasContribucionVariacionAnualTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('cn_cifras_nacionales')->delete();

        // Añadimos una entrada a esta tabla
        /*PIB por Zonas (millones de USD)*/
        /*2007 No Existen Registros*/
        /*2008 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => -1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2009*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 2,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => -3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => -2,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 2,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));
        /*2010*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 4,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => -1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2011*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 2,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 8,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 2,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));


        /*2012*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => -1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 2,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));
        /*2013*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2014*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2015*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => -5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => -1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 2,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2016*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => -1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 0,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => -1,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 4,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));
	}
}
