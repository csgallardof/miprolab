
<?php

use Illuminate\Database\Seeder;
use App\CnCifrasNacionales;
use Illuminate\Support\Facades\DB;

class PibPorZonasMillonesUsdTableSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        //DB::table('cn_cifras_nacionales')->delete();

        // Añadimos una entrada a esta tabla
        /*PIB por Zonas (millones de USD)*/
        /*2007 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 15266,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 16278,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 2688,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 5348,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 3380,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 3045,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 2505,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2007,'valor' => 2497,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2008 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 18193,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 19402,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 4284,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 7027,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 4018,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 3533,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 3095,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2008,'valor' => 2212,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2009 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 19614,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 17683,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 4422,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 5831,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 4172,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 3857,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 3434,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2009,'valor' => 3506,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2010 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 21272,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 20014,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 4758,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 7904,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 4806,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 4205,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 3542,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2010,'valor' => 3056,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        

        /*2011 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 22700,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 25396,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 5808,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 7671,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 5799,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 4909,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 4254,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2011,'valor' => 2740,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2012 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 25007,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 29015,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 6475,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 7088,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 6093,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 5165,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 4713,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2012,'valor' => 4068,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2013 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 27623,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 31718,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 6854,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 7487,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 6352,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 5534,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 4966,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2013,'valor' => 4596,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2014 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 30043,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 34567,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 7110,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 7404,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 6719,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 5778,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 5274,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2014,'valor' => 4832,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

        /*2015 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 29981,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 29147,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 7399,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 6891,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 6961,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 6244,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 5420,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2015,'valor' => 7248,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));

         /*2016 */
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 30419,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 7,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 28413,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 3,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 7787,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 5,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 6983,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 1,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 6800,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 4,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 6210,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 8,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 5262,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 9,'subsector_id' => 23));
        CnCifrasNacionales::create(array('nombre_cifra_nacional' => 'PIB por Zonas','año' => 2016,'valor' => 6739,'tipo_impuesto_id' => 16,'tipo_cifra_nacional_id' => 1,'tipo_empresa_id' => 7,'provincia_id' => 27,'ciiu_id' => 188,'tipo_fuente_id' => 1,'zona_id' => 14,'subsector_id' => 23));



    }
}
