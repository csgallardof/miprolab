<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();

        // $this->call(cn_ciiusTableSeeder::class);
        // $this->call(cn_tipo_cifra_nacionalesTableSeeder::class);
        // $this->call(cn_provinciasTableSeeder::class);
        // $this->call(cn_zonasTableSeeder::class);
        // $this->call(cn_tipo_impuestoTableSeeder::class);
        // $this->call(cn_tipo_fuenteTableSeeder::class);
        // $this->call(cn_tipo_empresaTableSeeder::class);
        // $this->call(cn_subsectorsTableSeeder::class);


        /*SEEDER PARA  LA TABLA cn_cifras_nacionals */

        $this->call(cn_cifras_nacionalsTableSeeder::class);
        $this->call(PibSegunActividadEconomicaParticipacionTableSeeder::class);
        $this->call(PibSegunActividadEconomicaVariacionAnualTableSeeder::class);
        $this->call(PibPorZonasMillonesUsdTableSeeder::class);
        $this->call(PibPorZonasVariacionAnualTableSeeder::class);
        $this->call(PibPorZonasParticipacionTableSeeder::class);
        $this->call(PibPorZonasContribucionVariacionAnualTableSeeder::class);
        $this->call(PibPorProvinciasMillonesUsdTableSeeder::class);
        $this->call(PibPorProvinciasVariacionAnunalTableSeeder::class);
        $this->call(PibPorProvinciasParticipacionTableSeeder::class);
        $this->call(PibPorProvinciasContribucionVariacionAnualTableSeeder::class);
        
        

        Model::reguard();
    }
}
