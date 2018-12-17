<?php

use Illuminate\Database\Seeder;
use App\CnCifrasNacionales;
use Illuminate\Support\Facades\DB;

class PibPorZonasParticipacionTableSeeder extends Seeder
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
        /*2007 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 30,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 32,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 10,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2008 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 29,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 31,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 11,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 4,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2009 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 31,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 28,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 9,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2010 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 31,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 29,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 11,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 4,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2011*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 29,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 32,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 10,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 3,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2012*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 29,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 33,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 8,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

         /*2013*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 29,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 33,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 8,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2014*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 30,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 34,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2015*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 30,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 29,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2016*/
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 31,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 29,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 8,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 6,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 5,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 7,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 2,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));


    }
}
