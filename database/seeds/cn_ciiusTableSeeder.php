
<?php

use Illuminate\Database\Seeder;
use App\CnCiiu;
use Illuminate\Support\Facades\DB;

class cn_ciiusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('cn_ciius')->delete();

        // Añadimos una entrada a esta tabla
        CnCiiu::create(array('codigo_ciiu' => '9','actividad_ciiu' => 'Sin actividad económica - ciiu'));
        CnCiiu::create(array('codigo_ciiu' => 'A','actividad_ciiu' => 'Agricultura'));
        CnCiiu::create(array('codigo_ciiu' => 'A','actividad_ciiu' => 'Acuicultura y pesca de camarón'));
        CnCiiu::create(array('codigo_ciiu' => 'A','actividad_ciiu' => 'Pesca y acuicultura (excepto de camarón)'));
        CnCiiu::create(array('codigo_ciiu' => 'A','actividad_ciiu' => 'Agricultura, ganadería, silvicultura y pesca'));
        CnCiiu::create(array('codigo_ciiu' => 'B','actividad_ciiu' => 'Petróleo y minas'));
        CnCiiu::create(array('codigo_ciiu' => 'B','actividad_ciiu' => 'Explotación de minas y canteras'));
        CnCiiu::create(array('codigo_ciiu' => 'C','actividad_ciiu' => 'Industrias manufactureras'));
        CnCiiu::create(array('codigo_ciiu' => 'C-J','actividad_ciiu' => 'Manufactura'));
        CnCiiu::create(array('codigo_ciiu' => 'D','actividad_ciiu' => 'Suministro de electricidad, gas, vapor y aire acondicionado'));
        CnCiiu::create(array('codigo_ciiu' => 'D-E','actividad_ciiu' => 'Suministros de electricidad y agua'));
        CnCiiu::create(array('codigo_ciiu' => 'E','actividad_ciiu' => 'Distrib. de agua; alcantarillado, gestión desechos y activ. saneamiento'));
        CnCiiu::create(array('codigo_ciiu' => 'E','actividad_ciiu' => 'Distribución de agua; alcantarillado, gestión de desechos y actividades de saneamiento.'));
        CnCiiu::create(array('codigo_ciiu' => 'F','actividad_ciiu' => 'Construcción'));
        CnCiiu::create(array('codigo_ciiu' => 'G','actividad_ciiu' => 'Comercio'));
        CnCiiu::create(array('codigo_ciiu' => 'G','actividad_ciiu' => 'Comercio al por mayor y al por menor; reparación de vehículos')); 
        CnCiiu::create(array('codigo_ciiu' => 'G','actividad_ciiu' => 'Comercio al por mayor y al por menor; reparación de vehículos automotores y motocicletas.')); 
        CnCiiu::create(array('codigo_ciiu' => 'H','actividad_ciiu' => 'Transporte'));
        CnCiiu::create(array('codigo_ciiu' => 'H','actividad_ciiu' => 'Transporte y almacenamiento'));
        CnCiiu::create(array('codigo_ciiu' => 'H-J','actividad_ciiu' => 'Correo y Comunicaciones'));
        CnCiiu::create(array('codigo_ciiu' => 'I','actividad_ciiu' => 'Alojamiento y servicios de comida'));
        CnCiiu::create(array('codigo_ciiu' => 'I','actividad_ciiu' => 'Actividades de alojamiento y de servicio de comidas'));
        CnCiiu::create(array('codigo_ciiu' => 'J','actividad_ciiu' => 'Información y comunicación'));
        CnCiiu::create(array('codigo_ciiu' => 'K','actividad_ciiu' => 'Actividades de servicios financieros'));
        CnCiiu::create(array('codigo_ciiu' => 'K','actividad_ciiu' => 'Actividades financieras y de seguros'));
        CnCiiu::create(array('codigo_ciiu' => 'L','actividad_ciiu' => 'Actividades inmobiliarias'));
        CnCiiu::create(array('codigo_ciiu' => 'L-R-S-U','actividad_ciiu' => 'Otros Servicios'));
        CnCiiu::create(array('codigo_ciiu' => 'M','actividad_ciiu' => 'Actividades profesionales, técnicas y administrativas'));
        CnCiiu::create(array('codigo_ciiu' => 'M','actividad_ciiu' => 'Actividades profesionales, científicas y técnicas'));
        CnCiiu::create(array('codigo_ciiu' => 'N','actividad_ciiu' => 'Actividades de servicios administrativos y de apoyo'));
        CnCiiu::create(array('codigo_ciiu' => 'O','actividad_ciiu' => 'Administración pública y defensa; planes de seguridad social de afiliación obligatoria.'));
        CnCiiu::create(array('codigo_ciiu' => 'O','actividad_ciiu' => 'Administración pública, defensa; planes de seguridad social obligatoria'));
        CnCiiu::create(array('codigo_ciiu' => 'O','actividad_ciiu' => 'Administ. pública y defensa; planes de segur. social de afiliación obligat.'));
        CnCiiu::create(array('codigo_ciiu' => 'OEP','actividad_ciiu' => 'Otros elementos del PIB'));
        CnCiiu::create(array('codigo_ciiu' => 'P','actividad_ciiu' => 'Enseñanza'));
        CnCiiu::create(array('codigo_ciiu' => 'P-Q','actividad_ciiu' => 'Enseñanza  y Servicios sociales y de salud'));
        CnCiiu::create(array('codigo_ciiu' => 'Q','actividad_ciiu' => 'Activ.de atención de la salud humana y de asistencia social'));
        CnCiiu::create(array('codigo_ciiu' => 'Q','actividad_ciiu' => 'Actividades de atención de la salud humana y de asistencia social.'));
        CnCiiu::create(array('codigo_ciiu' => 'R','actividad_ciiu' => 'Artes, entretenimiento y recreación'));
        CnCiiu::create(array('codigo_ciiu' => 'S','actividad_ciiu' => 'Otras actividades de servicios'));
        CnCiiu::create(array('codigo_ciiu' => 'T','actividad_ciiu' => 'Actividades de los hogares como empleadores'));
        CnCiiu::create(array('codigo_ciiu' => 'T','actividad_ciiu' => 'Servicio doméstico'));
        CnCiiu::create(array('codigo_ciiu' => 'T','actividad_ciiu' => 'Actividades de los hogares como empleadores; actividades no diferenciadas de los hogares como productores de bienes y servicios para uso propio.'));
        CnCiiu::create(array('codigo_ciiu' => 'U','actividad_ciiu' => 'Actividades de organizaciones y órganos extraterritoriales'));
        CnCiiu::create(array('codigo_ciiu' => 'V-W-X-Z','actividad_ciiu' => 'Sin actividad económica - ciiu'));
         CnCiiu::create(array('codigo_ciiu' => 'V-X-Z-9-W','actividad_ciiu' => 'Sin actividad económica - ciiu'));
        CnCiiu::create(array('codigo_ciiu' => 'V','actividad_ciiu' => 'Sin actividad económica - ciiu'));
        CnCiiu::create(array('codigo_ciiu' => 'W','actividad_ciiu' => 'Sin actividad económica - ciiu'));
        CnCiiu::create(array('codigo_ciiu' => 'X','actividad_ciiu' => 'Sin actividad económica - ciiu'));
        CnCiiu::create(array('codigo_ciiu' => 'X','actividad_ciiu' => 'No correlacionable'));
        CnCiiu::create(array('codigo_ciiu' => 'Z','actividad_ciiu' => 'Sin actividad económica - ciiu'));
        /*4 DIGITOS*/
        CnCiiu::create(array('codigo_ciiu' => 'C1920','actividad_ciiu' => 'Fabricación de productos de la refinación del petróleo.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1010','actividad_ciiu' => 'Elaboración y conservación de carne.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1050','actividad_ciiu' => 'Elaboración de productos lácteos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1104','actividad_ciiu' => 'Elaboración de bebidas no alcohólicas; producción de aguas minerales y otras aguas embotelladas.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1040','actividad_ciiu' => 'Elaboración de aceites y grasas de origen vegetal y animal.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1080','actividad_ciiu' => 'Elaboración de alimentos preparados para animales.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2220','actividad_ciiu' => 'Fabricación de productos de plástico.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2410','actividad_ciiu' => 'Industrias básicas de hierro y acero.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1020','actividad_ciiu' => 'Elaboración y conservación de pescados, crustáceos y moluscos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1702','actividad_ciiu' => 'Fabricación de papel y cartón ondulado y de envases de papel y cartón.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2394','actividad_ciiu' => 'Fabricación de cemento, cal y yeso.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1061','actividad_ciiu' => 'Elaboración de productos de molinería.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2023','actividad_ciiu' => 'Fabricación de jabones y detergentes, preparados para limpiar y pulir, perfumes y preparados de tocador.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2910','actividad_ciiu' => 'Fabricación de vehículos automotores.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1709','actividad_ciiu' => 'Fabricación de otros artículos del papel y cartón.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1103','actividad_ciiu' => 'Elaboración de bebidas malteadas y de malta.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1410','actividad_ciiu' => 'Fabricación de prendas de vestir, excepto prendas de piel.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2100','actividad_ciiu' => 'Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos de uso farmacéutico.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1072','actividad_ciiu' => 'Elaboración de azúcar.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1811','actividad_ciiu' => 'Actividades de impresión.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3100','actividad_ciiu' => 'Fabricación de muebles.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1071','actividad_ciiu' => 'Elaboración de productos de panadería.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2511','actividad_ciiu' => 'Fabricación de productos metálicos para uso estructural.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2599','actividad_ciiu' => 'Fabricación de otros productos elaborados de metal n.c.p.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2022','actividad_ciiu' => 'Fabricación de pinturas, barnices y productos de revestimiento similares, tintas de imprenta y masillas.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1079','actividad_ciiu' => 'Elaboración de otros productos alimenticios n.c.p.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2750','actividad_ciiu' => 'Fabricación de aparatos de uso doméstico.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2395','actividad_ciiu' => 'Fabricación de artículos de hormigón, de cemento y yeso.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1030','actividad_ciiu' => 'Elaboración y conservación de frutas, legumbres y hortalizas.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2011','actividad_ciiu' => 'Fabricación de substancias químicas básicas.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1312','actividad_ciiu' => 'Tejedura de productos textiles.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2392','actividad_ciiu' => 'Fabricación de materiales de construcción de arcilla.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1074','actividad_ciiu' => 'Elaboración de macarrones, fideos, alcuzcuz y productos farináceos similares.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1073','actividad_ciiu' => 'Elaboración de cacao, chocolate y productos de confitería.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1520','actividad_ciiu' => 'Fabricación de calzado.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2211','actividad_ciiu' => 'Fabricación de cubiertas y cámaras de caucho; recauchutado y renovación de cubiertas de caucho.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2021','actividad_ciiu' => 'Fabricación de plaguicidas y otros productos químicos de uso agropecuario.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1392','actividad_ciiu' => 'Fabricación de artículos confeccionados de materiales textiles, excepto prendas de vestir.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2420','actividad_ciiu' => 'Fabricación de productos primarios de metales preciosos y metales no ferrosos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2732','actividad_ciiu' => 'Fabricación de otros hilos y cables eléctricos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2012','actividad_ciiu' => 'Fabricación de abonos y compuestos de nitrógeno.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3312','actividad_ciiu' => 'Reparación de maquinaria.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1621','actividad_ciiu' => 'Fabricación de hojas de madera para enchapado y tableros a base de madera.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2710','actividad_ciiu' => 'Fabricación de motores, generadores, transformadores eléctricos y aparatos de distribución y control de la energía eléctrica.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2029','actividad_ciiu' => 'Fabricación de otros productos químicos n.c.p.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1101','actividad_ciiu' => 'Destilación, rectificación y mezcla de bebidas alcohólicas.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3320','actividad_ciiu' => 'Instalación de maquinaria y equipo industriales.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3091','actividad_ciiu' => 'Fabricación de motocicletas.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2310','actividad_ciiu' => 'Fabricación de vidrio y productos de vidrio.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2013','actividad_ciiu' => 'Fabricación de plásticos y cauchos sintéticos en formas primarias.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2720','actividad_ciiu' => 'Fabricación de pilas, baterías y acumuladores.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2920','actividad_ciiu' => 'Fabricación de carrocerías para vehículos automotores; fabricación de remolques y semirremolques.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2819','actividad_ciiu' => 'Fabricación de otros tipos de maquinaria de uso general.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1311','actividad_ciiu' => 'Preparación e hilatura de fibras textiles.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2930','actividad_ciiu' => 'Fabricación de partes, piezas y accesorios para vehículos automotores.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2813','actividad_ciiu' => 'Fabricación de otras bombas, compresores, grifos y válvulas.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2640','actividad_ciiu' => 'Fabricación de aparatos electrónicos de consumo.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3290','actividad_ciiu' => 'Otras industrias manufactureras n.c.p.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2391','actividad_ciiu' => 'Fabricación de productos refractarios.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2512','actividad_ciiu' => 'Fabricación de tanques, depósitos y recipientes de metal.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3314','actividad_ciiu' => 'Reparación de equipo eléctrico.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1701','actividad_ciiu' => 'Fabricación de pasta de madera, papel y cartón.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2592','actividad_ciiu' => 'Tratamiento y revestimiento de metales; maquinado.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2630','actividad_ciiu' => 'Fabricación de equipo de comunicaciones.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1430','actividad_ciiu' => 'Fabricación de artículos de punto y ganchillo.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3250','actividad_ciiu' => 'Fabricación de instrumentos y materiales médicos y odontológicos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1610','actividad_ciiu' => 'Aserrado y acepilladura de madera.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1812','actividad_ciiu' => 'Actividades de servicios relacionados con la impresión.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1622','actividad_ciiu' => 'Fabricación de partes y piezas de carpintería para edificios y construcciones.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2219','actividad_ciiu' => 'Fabricación de otros productos de caucho.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2431','actividad_ciiu' => 'Fundición de hierro y acero.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2513','actividad_ciiu' => 'Fabricación de generadores de vapor, excepto calderas de agua caliente para calefacción central.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3311','actividad_ciiu' => 'Reparación de productos elaborados de metal.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2399','actividad_ciiu' => 'Fabricación de otros productos minerales no metálicos n.c.p.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3011','actividad_ciiu' => 'Construcción de buques y estructuras flotantes.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2593','actividad_ciiu' => 'Fabricación de artículos de cuchillería, herramientas de mano y artículos de ferretería.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1623','actividad_ciiu' => 'Fabricación de recipientes de madera.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2812','actividad_ciiu' => 'Fabricación de equipo de propulsión de fluidos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2740','actividad_ciiu' => 'Fabricación de equipo eléctrico de iluminación.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1391','actividad_ciiu' => 'Fabricación de tejidos de punto y ganchillo.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3313','actividad_ciiu' => 'Reparación de equipo electrónico y óptico.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1075','actividad_ciiu' => 'Elaboración de comidas y platos preparados.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1200','actividad_ciiu' => 'Elaboración de productos de tabaco.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1394','actividad_ciiu' => 'Fabricación de cuerdas, cordeles, bramantes y redes.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3315','actividad_ciiu' => 'Reparación de equipo de transporte, excepto vehículos automotores.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2824','actividad_ciiu' => 'Fabricación de maquinaria para la explotación de minas y canteras y para obras de construcción.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2591','actividad_ciiu' => 'Forja, prensado, estampado y laminado de metales; pulvimetalurgia.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2610','actividad_ciiu' => 'Fabricación de componentes y tableros electrónicos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1102','actividad_ciiu' => 'Elaboración de vinos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3211','actividad_ciiu' => 'Fabricación de joyas y artículos conexos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1511','actividad_ciiu' => 'Curtido y adobo de cueros; adobo y teñido de pieles.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2396','actividad_ciiu' => 'Corte, tallado y acabado de la piedra.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2393','actividad_ciiu' => 'Fabricación de otros productos de porcelana y de cerámica.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2821','actividad_ciiu' => 'Fabricación de maquinaria agropecuaria y forestal.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1313','actividad_ciiu' => 'Servicio de acabado de productos textiles.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2825','actividad_ciiu' => 'Fabricación de maquinaria para la elaboración de alimentos, bebidas y tabaco.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2815','actividad_ciiu' => 'Fabricación de hornos y quemadores.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1629','actividad_ciiu' => 'Fabricación de otros productos de madera; fabricación de artículos de corcho, paja y materiales trenzables.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1512','actividad_ciiu' => 'Fabricación de maletas, bolsos de mano y artículos similares, artículos de talabartería y guarnicionería.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3240','actividad_ciiu' => 'Fabricación de juegos y juguetes.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1910','actividad_ciiu' => 'Fabricación de productos de horno de coque.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2811','actividad_ciiu' => 'Fabricación de motores y turbinas, excepto motores para aeronaves, vehículos automotores y motocicletas.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2818','actividad_ciiu' => 'Fabricación de herramientas de mano motorizadas.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3092','actividad_ciiu' => 'Fabricación de bicicletas y de sillas de ruedas para inválidos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2816','actividad_ciiu' => 'Fabricación de equipo de elevación y manipulación.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3020','actividad_ciiu' => 'Fabricación de locomotoras y material rodante.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2829','actividad_ciiu' => 'Fabricación de otros tipos de maquinaria de uso especial.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2651','actividad_ciiu' => 'Fabricación de equipos de medición, prueba, navegación, control y de relojes.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1420','actividad_ciiu' => 'Fabricación de artículos de piel.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2814','actividad_ciiu' => 'Fabricación de cojinetes, engranajes, trenes de engranajes y piezas de transmisión.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2733','actividad_ciiu' => 'Fabricación de dispositivos de cableado.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1393','actividad_ciiu' => 'Fabricación de tapices y alfombras.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3012','actividad_ciiu' => 'Construcción de embarcaciones de recreo y deporte.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2826','actividad_ciiu' => 'Fabricación de maquinaria para la elaboración de productos textiles, prendas de vestir y cueros.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1062','actividad_ciiu' => 'Elaboración de almidones y productos derivados del almidón.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2790','actividad_ciiu' => 'Fabricación de otros tipos de equipo eléctrico.'));
        CnCiiu::create(array('codigo_ciiu' => 'C1820','actividad_ciiu' => 'Reproducción de grabaciones.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2670','actividad_ciiu' => 'Fabricación de instrumentos ópticos y equipo fotográficos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2660','actividad_ciiu' => 'Fabricación de equipo de irradiación, y equipo electrónico de uso medico y terapéutico.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2620','actividad_ciiu' => 'Fabricación de computadoras y equipo periférico.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2817','actividad_ciiu' => 'Fabricación de maquinaria y equipo de oficina (excepto computadoras y equipo periférico).'));
        CnCiiu::create(array('codigo_ciiu' => 'C3212','actividad_ciiu' => 'Fabricación de bisutería y artículos conexos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3230','actividad_ciiu' => 'Fabricación de artículos de deporte.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2822','actividad_ciiu' => 'Fabricación de maquinaria para la conformación de metales y de máquinas herramienta.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3030','actividad_ciiu' => 'Fabricación de aeronaves y naves especiales y maquinaria conexa.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3040','actividad_ciiu' => 'Fabricación de vehículos militares de combate.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2823','actividad_ciiu' => 'Fabricación de maquinaria metalúrgica.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2030','actividad_ciiu' => 'Fabricación de fibras artificiales.'));

        
        CnCiiu::create(array('codigo_ciiu' => 'C3220','actividad_ciiu' => 'Fabricación de instrumentos musicales.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3319','actividad_ciiu' => 'Reparación de otros tipos de equipo.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2731','actividad_ciiu' => 'Fabricación de cables de fibra óptica.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2432','actividad_ciiu' => 'Fundición de metales no ferrosos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2520','actividad_ciiu' => 'Fabricación de armas y municiones.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2652','actividad_ciiu' => 'Fabricación de relojes.'));
        CnCiiu::create(array('codigo_ciiu' => 'C2680','actividad_ciiu' => 'Fabricación de soportes magnéticos y ópticos.'));
        CnCiiu::create(array('codigo_ciiu' => 'C3099','actividad_ciiu' => 'Fabricación de otros tipos de equipo de transporte n.c.p.'));
        CnCiiu::create(array('codigo_ciiu' => '0','actividad_ciiu' => 'Ninguna'));

    }
}
