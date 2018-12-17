<?php

use Illuminate\Database\Seeder;
use App\CnTipoCifraNacional;
use Illuminate\Support\Facades\DB;


class cn_tipo_cifra_nacionalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Borramos los datos de la tabla
        DB::table('cn_tipo_cifra_nacionals')->delete();

        // Añadimos una entrada a esta tabla 

        
        CnTipoCifraNacional::create(array('nombre_tipo_cifra_nacional' => 'Millones de USD'));
        CnTipoCifraNacional::create(array('nombre_tipo_cifra_nacional' => 'Participación'));
        CnTipoCifraNacional::create(array('nombre_tipo_cifra_nacional' => 'Variación anual'));
        CnTipoCifraNacional::create(array('nombre_tipo_cifra_nacional' => 'Contribución a la variación anual'));
        CnTipoCifraNacional::create(array('nombre_tipo_cifra_nacional' => 'Ninguno'));

    }
}
