<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;

use App\Evento;
use App\Solucion;
use App\Pajustada;
use App\ActorSolucion;
use App\Actividad;
use App\Ambit;
use App\EstadoSolucion;
use DB;
use Illuminate\Support\Collection as Collection;
use App\CnCifrasNacionales;
use App\CnTipoCifraNacional;

use App\Provincia;
use App\Canton;
use App\Sipoc;
use App\Sector;

use App\Auth\Login;

class PaginasController extends Controller
{

    public function inicio(){

        $tiposCifrasNacionalesPIBZonas1= CnTipoCifraNacional::select('id','nombre_tipo_cifra_nacional')
                                                     ->take(4)
                                                     ->get();
      return view('inicio')->with(["tiposCifrasNacionalesPIBZonas1"=>$tiposCifrasNacionalesPIBZonas1]);

    }
    public function homedialogo(){

        return view('dialogo.home-dialogo');
    }


    public function ejeCalidad(){

        return view('publico.reportes.reporteCalidad');
    }

    public function ejeMercado(){

        return view('publico.reportes.reporteMercado');
    }


    public function detalleCalidad(){

        return view('detalle-propuestas-institucion');
    }

    public function busquedaAvanzadaInteligencia(Request $request){

        $datosFiltroSector="";
        $datosFiltroEstado="";
        $datosFiltroAmbito="";
        $datosFiltroResponsable="";
        $buscar = $request-> parametro;
        $resultadoAuxiliar[] = array();
        $filtros[] = array();
        $hayFiltros= false;
       //$buscarCombo =$request-> comboBusqueda;

       if( isset($request->selectBusqueda) && $request->selectBusqueda >0 ) {

            //dd('hola');
            $filtros["mesas"]= $request->selectBusqueda;

            $resultados1 = Solucion::select('solucions.*')
                                ->join('provincias', 'solucions.provincia_id', '=', 'provincias.id')
                                ->where('provincias.nombre_provincia','LIKE','%' . $buscar . '%')
                                ;

            $resultados2 = Solucion::select('solucions.*')
                                ->join('actor_solucion', 'solucions.id', '=', 'actor_solucion.solucion_id')
                                ->join('users','actor_solucion.user_id','=','users.id')
                                ->where('users.name','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados3 = Solucion::select('solucions.*')
                                ->join('sectors', 'solucions.sector_id', '=', 'sectors.id')
                                ->where('sectors.nombre_sector','=','%' . $buscar . '%')
                                ;//SOLO QUERY
                                //dd($resultados3);

            $resultados5 = Solucion::select('solucions.*')
                                ->join('estado_solucion', 'solucions.estado_id', '=', 'estado_solucion.id')
                                ->where('estado_solucion.nombre_estado','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY
            $resultados6 = Solucion::select('solucions.*')
                                ->join('ambits', 'solucions.ambit_id', '=', 'ambits.id')
                                ->where('ambits.nombre_ambit','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados = Solucion::orwhere('solucions.verbo_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.sujeto_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.complemento_solucion','LIKE','%' . $buscar .'%')
                                ->orwhere('solucions.responsable_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere( DB::raw('CONCAT( TRIM(solucions.verbo_solucion)," ",TRIM(solucions.sujeto_solucion)," ",TRIM(solucions.complemento_solucion))','concatenado'),'LIKE','%' . $buscar . '%')
                                ->union($resultados1) // UNION CON  EL QUERY1 ANTERIOR
                                ->union($resultados2) // UNION CON  EL QUERY2 ANTERIOR
                                ->union($resultados3) // UNION CON  EL QUERY3 ANTERIOR
                                //->union($resultados4) // UNION CON  EL QUERY4 ANTERIOR
                                ->union($resultados5) // UNION CON  EL QUERY5 ANTERIOR
                                ->union($resultados6) // UNION CON  EL QUERY5
                               ->get();
            foreach ($resultados as $solucion) {
                if($solucion->tipo_fuente == $request->selectBusqueda){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                    //$datosFiltroMesa=($request->sectorSelect);
                    //dd($datosFiltroSector);
                }
            }
        }

       //dd(strtolower($buscar));


         else {


            $resultados1 = Solucion::select('solucions.*')
                                ->join('provincias', 'solucions.provincia_id', '=', 'provincias.id')
                                ->where('provincias.nombre_provincia','LIKE','%' . $buscar . '%')
                                ;


            $resultados2 = Solucion::select('solucions.*')
                                ->join('actor_solucion', 'solucions.id', '=', 'actor_solucion.solucion_id')
                                ->join('users','actor_solucion.user_id','=','users.id')
                                ->where('users.name','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados3 = Solucion::select('solucions.*')
                                ->join('sectors', 'solucions.sector_id', '=', 'sectors.id')
                                ->where('sectors.nombre_sector','=','%' . $buscar . '%')
                                ;//SOLO QUERY
                                //dd($resultados3);

            $resultados5 = Solucion::select('solucions.*')
                                ->join('estado_solucion', 'solucions.estado_id', '=', 'estado_solucion.id')
                                ->where('estado_solucion.nombre_estado','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY
            $resultados6 = Solucion::select('solucions.*')
                                ->join('ambits', 'solucions.ambit_id', '=', 'ambits.id')
                                ->where('ambits.nombre_ambit','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados = Solucion::orwhere('solucions.verbo_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.sujeto_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.complemento_solucion','LIKE','%' . $buscar .'%')
                                ->orwhere( DB::raw('CONCAT( TRIM(solucions.verbo_solucion)," ",TRIM(solucions.sujeto_solucion)," ",TRIM(solucions.complemento_solucion))','concatenado'),'LIKE','%' . $buscar . '%')
                                ->union($resultados1) // UNION CON  EL QUERY1 ANTERIOR
                                ->union($resultados2) // UNION CON  EL QUERY2 ANTERIOR
                                ->union($resultados3) // UNION CON  EL QUERY3 ANTERIOR
                                //->union($resultados4) // UNION CON  EL QUERY4 ANTERIOR
                                ->union($resultados5) // UNION CON  EL QUERY5 ANTERIOR
                                ->union($resultados6) // UNION CON  EL QUERY5
                                ->orderBy('estado_id', 'desc')
                                ->get();
                                //->toSql();
                                //dd($resultados);
                                //dd($totalMesasCom,$totalCCTP,$totalPropuesta);

        }

        if( isset($request->checkbox1)){
            $filtros["mesas"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 1){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->checkbox2)){
            $filtros["consejo"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 2){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->sectorSelect) && $request->sectorSelect > 0 ){
            $filtros["sector"]= $request->sectorSelect;
            foreach ($resultados as $solucion) {
                if($solucion->sector_id == $request->sectorSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                    $datosFiltroSector=($request->sectorSelect);
                    //dd($datosFiltroSector);
                }
            }
        }

        if( isset($request->estadoSelect) && $request->estadoSelect > 0 ){
            //dd($request->estadoSelect);
            $filtros["estado"]= $request->estadoSelect;
            foreach ($resultados as $solucion) {
                if($solucion->estado_id == $request->estadoSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    //dd($solucion);
                    $hayFiltros = true;
                    $datosFiltroEstado=($request->estadoSelect);
                }
            }
        }

        if( isset($request->ambitoSelect) && $request->ambitoSelect > 0 ){
            $filtros["ambito"]= $request->ambitoSelect;
            foreach ($resultados as $solucion) {
                if($solucion->ambit_id == $request->ambitoSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                    $datosFiltroAmbito=($request->ambitoSelect);

                }
            }
        }

        if( isset($request->responsableSelect) && $request->responsableSelect > 0 ){
            $filtros["responsable"]= $request->responsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->responsableSelect && $actor_solucion->tipo_actor == 1){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;
                        //dd($resultadoAuxiliar);
                        $datosFiltroResponsable=($request->responsableSelect);

                    }
                }
            }
        }

        if( isset($request->corresponsableSelect) && $request->corresponsableSelect > 0 ){
            $filtros["corresponsable"]= $request->corresponsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->corresponsableSelect && $actor_solucion->tipo_actor == 2){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;

                    }
                }
            }
        }

        if( $hayFiltros == true){
            unset($resultadoAuxiliar[0]);
            $resultadoAuxiliar = array_unique($resultadoAuxiliar);
            $resultadoAuxiliar = Collection::make($resultadoAuxiliar);

            $

            $resultados = $resultadoAuxiliar;
        }

        unset($filtros[0]);

        return view('publico.reportes.reporteInteligencia')->with([
                                            "parametro"=>$buscar,
                                            "resultados"=>$resultados,
                                            "datosFiltroSector"=>$datosFiltroSector,
                                            "datosFiltroEstado"=>$datosFiltroEstado,
                                            "datosFiltroAmbito"=>$datosFiltroAmbito,
                                            "datosFiltroResponsable"=>$datosFiltroResponsable,
                                            "filtros"=>$filtros
                                        ]);

    }



     public function busquedaAvanzada(Request $request){
        $datosFiltroSector="";
        $datosFiltroEstado="";
        $datosFiltroAmbito="";
        $datosFiltroResponsable="";
        $buscar = $request-> parametro;
        $resultadoAuxiliar[] = array();
        $filtros[] = array();
        $hayFiltros= false;
       //$buscarCombo =$request-> comboBusqueda;

       if( isset($request->selectBusqueda) && $request->selectBusqueda >0 ) {

            $filtros["mesas"]= $request->selectBusqueda;
             $resultados1 = Solucion::select('solucions.*')
                                ->join('provincias', 'solucions.provincia_id', '=', 'provincias.id')
                                ->where('provincias.nombre_provincia','LIKE','%' . $buscar . '%')
                                ;

            $resultados2 = Solucion::select('solucions.*')
                                ->join('actor_solucion', 'solucions.id', '=', 'actor_solucion.solucion_id')
                                ->join('users','actor_solucion.user_id','=','users.id')
                                ->where('users.name','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados3 = Solucion::select('solucions.*')
                                ->join('sectors', 'solucions.sector_id', '=', 'sectors.id')
                                ->where('sectors.nombre_sector','=','%' . $buscar . '%')
                                ;//SOLO QUERY
                                //dd($resultados3);

            $resultados5 = Solucion::select('solucions.*')
                                ->join('estado_solucion', 'solucions.estado_id', '=', 'estado_solucion.id')
                                ->where('estado_solucion.nombre_estado','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY
            $resultados6 = Solucion::select('solucions.*')
                                ->join('ambits', 'solucions.ambit_id', '=', 'ambits.id')
                                ->where('ambits.nombre_ambit','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados = Solucion::orwhere('solucions.verbo_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.sujeto_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.complemento_solucion','LIKE','%' . $buscar .'%')
                                ->orwhere('solucions.responsable_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere( DB::raw('CONCAT( TRIM(solucions.verbo_solucion)," ",TRIM(solucions.sujeto_solucion)," ",TRIM(solucions.complemento_solucion))','concatenado'),'LIKE','%' . $buscar . '%')
                                ->union($resultados1) // UNION CON  EL QUERY1 ANTERIOR
                                ->union($resultados2) // UNION CON  EL QUERY2 ANTERIOR
                                ->union($resultados3) // UNION CON  EL QUERY3 ANTERIOR
                                //->union($resultados4) // UNION CON  EL QUERY4 ANTERIOR
                                ->union($resultados5) // UNION CON  EL QUERY5 ANTERIOR
                                ->union($resultados6) // UNION CON  EL QUERY5
                               ->get();
            foreach ($resultados as $solucion) {
                if($solucion->tipo_fuente == $request->selectBusqueda){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                    //$datosFiltroMesa=($request->sectorSelect);
                    //dd($datosFiltroSector);
                }
            }
        }

       //dd(strtolower($buscar));

        if(strtolower($buscar) == 'mesas competitividad' || strtolower($buscar) == 'consejo consultivo' || strtolower($buscar) == 'mesas de competitividad') {

            if(strtolower($buscar) == 'mesas competitividad' || strtolower($buscar) == 'mesas de competitividad'){
                $resultados = Solucion::where('tipo_fuente','=',1)
                            ->orderBy('id','DESC')
                            ->get();
                 $datosFiltroAmbito=0;
                 $datosFiltroResponsable=0;
                 $filtros = 0;
                 return view('publico.reportes.reporte-ccpt')->with([
                                            "parametro"=>$buscar,
                                            "resultados"=>$resultados,
                                            "datosFiltroAmbito"=>$datosFiltroAmbito,
                                            "datosFiltroResponsable"=>$datosFiltroResponsable,
                                            "filtros"=>$filtros
                                        ]);

            }

            if(strtolower($buscar) == 'consejo consultivo' ){
                //dd(strtolower($buscar));
                 $resultados = Solucion::where('tipo_fuente','=',2)
                             ->orderBy('responsable_solucion','DESC')
                             ->get();
                // dd($resultados);

                $datosFiltroAmbito=0;
                $datosFiltroResponsable=0;
                $filtros = 0;

                  return view('publico.reportes.reporte-ccpt')->with([
                                            "parametro"=>$buscar,
                                            "resultados"=>$resultados,
                                            "datosFiltroAmbito"=>$datosFiltroAmbito,
                                            "datosFiltroResponsable"=>$datosFiltroResponsable,
                                            "filtros"=>$filtros
                                        ]);


            }

        } else {


            $resultados1 = Solucion::select('solucions.*')
                                ->join('provincias', 'solucions.provincia_id', '=', 'provincias.id')
                                ->where('provincias.nombre_provincia','LIKE','%' . $buscar . '%')
                                ;

            $resultados2 = Solucion::select('solucions.*')
                                ->join('actor_solucion', 'solucions.id', '=', 'actor_solucion.solucion_id')
                                ->join('users','actor_solucion.user_id','=','users.id')
                                ->where('users.name','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados3 = Solucion::select('solucions.*')
                                ->join('sectors', 'solucions.sector_id', '=', 'sectors.id')
                                ->where('sectors.nombre_sector','=','%' . $buscar . '%')
                                ;//SOLO QUERY
                                //dd($resultados3);

            $resultados5 = Solucion::select('solucions.*')
                                ->join('estado_solucion', 'solucions.estado_id', '=', 'estado_solucion.id')
                                ->where('estado_solucion.nombre_estado','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY
            $resultados6 = Solucion::select('solucions.*')
                                ->join('ambits', 'solucions.ambit_id', '=', 'ambits.id')
                                ->where('ambits.nombre_ambit','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados = Solucion::orwhere('solucions.verbo_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.sujeto_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.complemento_solucion','LIKE','%' . $buscar .'%')
                                ->orwhere( DB::raw('CONCAT( TRIM(solucions.verbo_solucion)," ",TRIM(solucions.sujeto_solucion)," ",TRIM(solucions.complemento_solucion))','concatenado'),'LIKE','%' . $buscar . '%')
                                ->union($resultados1) // UNION CON  EL QUERY1 ANTERIOR
                                ->union($resultados2) // UNION CON  EL QUERY2 ANTERIOR
                                ->union($resultados3) // UNION CON  EL QUERY3 ANTERIOR
                                //->union($resultados4) // UNION CON  EL QUERY4 ANTERIOR
                                ->union($resultados5) // UNION CON  EL QUERY5 ANTERIOR
                                ->union($resultados6) // UNION CON  EL QUERY5
                                ->orderBy('estado_id', 'desc')
                                ->get();
                                //->toSql();
                                //dd($resultados);
                                //dd($totalMesasCom,$totalCCTP,$totalPropuesta);

        }

        if( isset($request->checkbox1)){
            $filtros["mesas"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 1){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->checkbox2)){
            $filtros["consejo"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 2){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->sectorSelect) && $request->sectorSelect > 0 ){
            $filtros["sector"]= $request->sectorSelect;
            foreach ($resultados as $solucion) {
                if($solucion->sector_id == $request->sectorSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                    $datosFiltroSector=($request->sectorSelect);
                    //dd($datosFiltroSector);
                }
            }
        }

        if( isset($request->estadoSelect) && $request->estadoSelect > 0 ){
            $filtros["sector"]= $request->estadoSelect;
            foreach ($resultados as $solucion) {
                if($solucion->estado_id == $request->estadoSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                    $datosFiltroEstado=($request->estadoSelect);
                }
            }
        }

        if( isset($request->ambitoSelect) && $request->ambitoSelect > 0 ){
            $filtros["ambito"]= $request->ambitoSelect;
            foreach ($resultados as $solucion) {
                if($solucion->ambit_id == $request->ambitoSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                    $datosFiltroAmbito=($request->ambitoSelect);

                }
            }
        }

        if( isset($request->responsableSelect) && $request->responsableSelect > 0 ){
            $filtros["responsable"]= $request->responsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->responsableSelect && $actor_solucion->tipo_actor == 1){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;
                        $datosFiltroResponsable=($request->responsableSelect);

                    }
                }
            }
        }

        if( isset($request->corresponsableSelect) && $request->corresponsableSelect > 0 ){
            $filtros["corresponsable"]= $request->corresponsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->corresponsableSelect && $actor_solucion->tipo_actor == 2){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;

                    }
                }
            }
        }

        if( $hayFiltros == true){
            unset($resultadoAuxiliar[0]);
            $resultadoAuxiliar = array_unique($resultadoAuxiliar);
            $resultadoAuxiliar = Collection::make($resultadoAuxiliar);

            $resultados = $resultadoAuxiliar;
        }

        unset($filtros[0]);

        return view('publico.reportes.reporte2')->with([
                                            "parametro"=>$buscar,
                                            "resultados"=>$resultados,
                                            "datosFiltroSector"=>$datosFiltroSector,
                                            "datosFiltroEstado"=>$datosFiltroEstado,
                                            "datosFiltroAmbito"=>$datosFiltroAmbito,
                                            "datosFiltroResponsable"=>$datosFiltroResponsable,
                                            "filtros"=>$filtros
                                        ]);

    }

    public function detalledespliegue2(Request $request, $idSolucion){

        //dd($idSolucion);

        $solucion = Solucion::where('id','=',$idSolucion)->first();
        //dd($idSolucion);

        $actoresSoluciones = ActorSolucion::where('solucion_id','=',$idSolucion)
                                            // ->where('tipo_actor','=',1)
                                            ->orderBy('tipo_actor','ASC')->get();

        //dd(count($actoresSoluciones));

        $actividades = Actividad::where('solucion_id','=',$idSolucion)
                                            //->where('tipo_fuente','=',1)
                                            ->orderBy('created_at','DESC')
                                            ->get();

         $actividadUltima = Actividad::where('solucion_id','=',$idSolucion)
                                            //->where('tipo_fuente','=',1)
                                            ->orderBy('created_at','DESC')
                                            ->first();


        return view('detalle-despliegue2')->with([
                                            "solucion"=>$solucion,
                                            "actoresSoluciones"=>$actoresSoluciones,
                                            "actividadUltima"=>$actividadUltima,
                                            "actividades"=>$actividades
                                        ]);
    }

    public function detallePropuestaInstitucion(Request $request, $idSolucion){

        //dd($idSolucion);

        // $solucion = Solucion::where('id','=',$idSolucion)->first();
        // //dd($idSolucion);

        // $actoresSoluciones = ActorSolucion::where('solucion_id','=',$idSolucion)
        //                                     // ->where('tipo_actor','=',1)
        //                                     ->orderBy('tipo_actor','ASC')->get();

        // //dd(count($actoresSoluciones));

        // $actividades = Actividad::where('solucion_id','=',$idSolucion)
        //                                     //->where('tipo_fuente','=',1)
        //                                     ->orderBy('created_at','DESC')
        //                                     ->get();

        //  $actividadUltima = Actividad::where('solucion_id','=',$idSolucion)
        //                                     //->where('tipo_fuente','=',1)
        //                                     ->orderBy('created_at','DESC')
        //                                     ->first();


        // return view('detalle-despliegue2')->with([
        //                                     "solucion"=>$solucion,
        //                                     "actoresSoluciones"=>$actoresSoluciones,
        //                                     "actividadUltima"=>$actividadUltima,
        //                                     "actividades"=>$actividades
        //                                 ]);

        return view('detalle-propuesta-institucion');
    }


     public function despliegueterritorial(){


        $provincias = Provincia::all();

        $sectors= Sector::all();

        //dd($provincias);

        return view('despliegueterritorial')->with(["provincias"=>$provincias,"sectors"=>$sectors]);

        //->with(["datos"=>$datos, "errores"=>$errores, "nombreArchivo"=>$nombreArchivo, "nombreEvento"=>$nombreEvento]);
    }


    public function detalledespliegue(Request $request, $idSolucion){

        $solucion = Solucion::where('id','=',$idSolucion)->first();

        $actoresSoluciones = ActorSolucion::where('solucion_id','=',$idSolucion)
                                            ->where('tipo_fuente','=',1)
                                            ->orderBy('tipo_actor','ASC')->get();

        $actividades = Actividad::where('solucion_id','=',$idSolucion)
                                            ->where('tipo_fuente','=',1)
                                            ->orderBy('created_at','DESC')->get();

        return view('detalle-despliegue')->with([
                                            "solucion"=>$solucion,
                                            "actoresSoluciones"=>$actoresSoluciones,
                                            "actividades"=>$actividades
                                        ]);
    }

    public function detalleccpt(Request $request, $pajustada_sol_id, $sector, $ambito, $sipoc){

        $pajustada = Pajustada::find($pajustada_sol_id);



        if($sector > 0 && $ambito > 0){
             $soluciones = Solucion::where('pajustada_id','=',$pajustada_sol_id)
                        ->where('tipo_fuente','=',2)
                        ->where('sipoc_id','=',$sipoc)
                        ->where('sector_id','=',$sector)
                        ->where('ambit_id','=',$ambito)
                        ->orderBy('solucion_ccpt','ASC')->get();
        }
        if($sector > 0 && $ambito == 0){
            $soluciones = Solucion::where('pajustada_id','=',$pajustada_sol_id)
                        ->where('tipo_fuente','=',2)
                        ->where('sipoc_id','=',$sipoc)
                        ->where('sector_id','=',$sector)
                        ->orderBy('solucion_ccpt','ASC')->get();
        }


        if($sector == 0 && $ambito > 0){
            $soluciones = Solucion::where('pajustada_id','=',$pajustada_sol_id)
                        ->where('tipo_fuente','=',2)
                        ->where('sipoc_id','=',$sipoc)
                        ->where('ambit_id','=',$ambito)
                        ->orderBy('solucion_ccpt','ASC')->get();
        }

        $actoresSoluciones = ActorSolucion::where('solucion_id','=',$pajustada_sol_id)
                                            ->where('tipo_fuente','=',2)
                                            ->orderBy('tipo_actor','ASC')->get();

        $actividades = Actividad::where('solucion_id','=',$pajustada_sol_id)
                                            ->where('tipo_fuente','=',2)
                                            ->orderBy('created_at','DESC')->get();




        $sector = Sector::find($sector);
        $ambito = Ambit::find($ambito);
        $sipoc = Sipoc::find($sipoc);

        return view('detalle-ccpt')->with(["soluciones"=>$soluciones,
                                            "pajustada"=>$pajustada,
                                            "sector"=>$sector,
                                            "ambito"=>$ambito,
                                            "sipoc"=>$sipoc,
                                            "actoresSoluciones"=>$actoresSoluciones,
                                            "actividades"=>$actividades
                                        ]);
    }




    public function reportegeneralccpt(){
    	return view('reportes.reportegeneralccpt');
    }

    public function cifrasccpt(){
    	return view('publico.cifras');
    }

    public function vocaciones(){
        $provincias = Provincia::all();
    	return view('publico.vocaciones')->with(["provincias"=>$provincias]);
    }

    public function indices(){
        return view('publico.indice');
    }

    public function contratosinversion(){
        return view('publico.contratos-de-inversion');
    }

    public function zedes(){
        return view('publico.zedes');
    }

    public function zedes1(){
        return view('publico.zonas-especiales-desarrollo-economico');
    }

    public function polosdesarrollo(){
        return view('publico.polos-desarrollo');
    }

    public function postulacionpolosdesarrollo(){
        return view('publico.postulacion-polos-desarrollo');
    }

    public function incentivostributarios(){
        return view('publico.incentivos-tributarios');
    }

    public function asociacionesPublicoPrivada(){
        return view('publico.asociaciones-publico-privadas');
    }

    public function foroproduccion(){
        return view('publico.foro-de-la-produccion');
    }

    public function estructuraCostosGastos(Request $request){

    //dd($request->opcion);
      if ($request->opcion == 'junio2018') return view('publico.costosindustriales-junio2018');
      if ($request->opcion == 'julio2018') return view('publico.costosindustriales-julio2018');
      if ($request->opcion == 'agosto2018') return view('publico.costosindustriales-agosto2018');
    }

    // Modelo Usuarios
    public function usuarios(){


       // $usuario_actual= Auth::user()->get();
       $role = user::find(44)->roles;
       // return $role;
       $user = role::find(2)->users;

        dd($role);
        return $user;
        //return view('welcome');
    }

    // Modelo solucion - evento - usuario

    public function participantes(){

        $evento = User::find(1)->evento()->get();

       // $user = Evento::find(1)->users;

        dd($evento);

        //return View::make('welcome')->with('', $events);
    }

    public function UsuariosEvento(){

        $usuario_actual = User::find(1)->evento()->get();

       // $user = Evento::find(1)->users;

        dd($usuario_actual);

        //return View::make('welcome')->with('', $events);
    }


    public function buscar(Request $request){

        $provincias = Provincia::all();

        $sectors= Sector::all();

        $paramSector = Sector::find($request-> sectores);

        $paramProvincia = Provincia::find($request-> provincias);

        if($request->sectores > 0 || $request->provincias > 0){

            if($request->sectores > 0 && $request->provincias > 0){
                $solucion_proveedores = Solucion::where('sipoc_id','=',1)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();

                $solucion_insumo = Solucion::where('sipoc_id','=',2)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();

                $solucion_proceso = Solucion::where('sipoc_id','=',3)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();

                $solucion_producto = Solucion::where('sipoc_id','=',4)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();

                $solucion_mercado = Solucion::where('sipoc_id','=',5)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)
                                    ->where('provincia_id','=',$request->provincias)->get();
            }else{
                if($request->sectores > 0){
                    $solucion_proveedores = Solucion::where('sipoc_id','=',1)
                                    ->where('tipo_fuente','=',1)
                                    ->where('sector_id','=',$request->sectores)->get();

                    $solucion_insumo = Solucion::where('sipoc_id','=',2)
                                        ->where('tipo_fuente','=',1)
                                        ->where('sector_id','=',$request->sectores)->get();

                    $solucion_proceso = Solucion::where('sipoc_id','=',3)
                                        ->where('tipo_fuente','=',1)
                                        ->where('sector_id','=',$request->sectores)->get();

                    $solucion_producto = Solucion::where('sipoc_id','=',4)
                                        ->where('tipo_fuente','=',1)
                                        ->where('sector_id','=',$request->sectores)->get();

                    $solucion_mercado = Solucion::where('sipoc_id','=',5)
                                        ->where('tipo_fuente','=',1)
                                        ->where('sector_id','=',$request->sectores)->get();
                }else{

                    if ($request->provincias > 0){
                        $solucion_proveedores = Solucion::where('sipoc_id','=',1)
                                    ->where('tipo_fuente','=',1)
                                    ->where('provincia_id','=',$request->provincias)->get();

                        $solucion_insumo = Solucion::where('sipoc_id','=',2)
                                            ->where('tipo_fuente','=',1)
                                            ->where('provincia_id','=',$request->provincias)->get();

                        $solucion_proceso = Solucion::where('sipoc_id','=',3)
                                            ->where('tipo_fuente','=',1)
                                            ->where('provincia_id','=',$request->provincias)->get();

                        $solucion_producto = Solucion::where('sipoc_id','=',4)
                                            ->where('tipo_fuente','=',1)
                                            ->where('provincia_id','=',$request->provincias)->get();

                        $solucion_mercado = Solucion::where('sipoc_id','=',5)
                                            ->where('tipo_fuente','=',1)
                                            ->where('provincia_id','=',$request->provincias)->get();
                    }
                }
            }

            return view('despliegueterritorial')->with(["solucion_proveedores"=>$solucion_proveedores,
                                                    "solucion_insumo"=>$solucion_insumo,
                                                    "solucion_proceso"=>$solucion_proceso,
                                                    "solucion_producto"=>$solucion_producto,
                                                    "solucion_mercado"=>$solucion_mercado,
                                                    "provincias"=>$provincias,
                                                    "sectors"=>$sectors,
                                                    "paramSector"=>$paramSector,
                                                    "paramProvincia"=>$paramProvincia

                                                ]);
        }else{
            return view('despliegueterritorial')->with([
                                                    "provincias"=>$provincias,
                                                    "sectors"=>$sectors,
                                                    "paramSector"=>$paramSector,
                                                    "paramProvincia"=>$paramProvincia
                                                ]);
        }


    }

    public function invertir_en_el_ecuador(){
      return view('publico.invertir_en_el_ecuador');
    }

    public function indicadoresProvincia(){
        return view('publico.indicadoresProvincia');
    }

    public function busquedaGeneral(Request $request){
        $datosFiltroAmbito="";
        $datosFiltroResponsable="";
        $buscar = $request-> parametro;


        if($buscar == 'Mesas_Competitividad' || $buscar == 'Consejo_consultivo'){

            if($buscar == 'Mesas_Competitividad' ){
                $resultados = Solucion::where('tipo_fuente','=',1)
                            ->orderBy('id','DESC')
                            ->get();
            }

            if($buscar == 'Consejo_consultivo' ){
                //dd($buscar);
                 $resultados = Solucion::where('tipo_fuente','=',2)
                             ->orderBy('responsable_solucion','DESC')
                             ->get();


            }

        }else{


            $resultados1 = Solucion::select('solucions.*')
                                ->join('provincias', 'solucions.provincia_id', '=', 'provincias.id')
                                ->where('provincias.nombre_provincia','LIKE','%' . $buscar . '%')
                                ;

            $resultados2 = Solucion::select('solucions.*')
                                ->join('actor_solucion', 'solucions.id', '=', 'actor_solucion.solucion_id')
                                ->join('users','actor_solucion.user_id','=','users.id')
                                ->where('users.name','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados3 = Solucion::select('solucions.*')
                                ->join('sectors', 'solucions.sector_id', '=', 'sectors.id')
                                ->where('sectors.nombre_sector','LIKE','%' . $buscar . '%')
                                ->orderBy('estado_id','ASC');
                                ;//SOLO QUERY

            $resultados4 = Solucion::select('solucions.*')
                                ->join('pajustadas', 'solucions.pajustada_id', '=', 'pajustadas.id')
                                ->where('pajustadas.nombre_pajustada','LIKE','%' . $buscar . '%')
                                ;//SOLO QUERY

            $resultados5 = Solucion::select('solucions.*')
                                ->join('estado_solucion', 'solucions.estado_id', '=', 'estado_solucion.id')
                                ->where('estado_solucion.nombre_estado','LIKE','%' . $buscar . '%')
                                ->orderBy('estado_id','DESC')
                                ;//SOLO QUERY

            $resultados6 = Solucion::select('solucions.*')
                                ->join('ambits', 'solucions.ambit_id', '=', 'ambits.id')
                                ->where('ambits.nombre_ambit','LIKE','%' . $buscar . '%')
                                ->orderBy('ambit_id','DESC')
                                ;//SOLO QUERY

            $resultados = Solucion::orwhere('solucions.verbo_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.sujeto_solucion','LIKE','%' . $buscar . '%')
                                ->orwhere('solucions.complemento_solucion','LIKE','%' . $buscar .'%')
                                ->orwhere('solucions.solucion_ccpt','LIKE','%' . $buscar . '%')
                                ->orwhere( DB::raw('CONCAT( TRIM(solucions.verbo_solucion)," ",TRIM(solucions.sujeto_solucion)," ",TRIM(solucions.complemento_solucion))','concatenado'),'LIKE','%' . $buscar . '%')
                                ->union($resultados1) // UNION CON  EL QUERY1 ANTERIOR
                                ->union($resultados2) // UNION CON  EL QUERY2 ANTERIOR
                                ->union($resultados3) // UNION CON  EL QUERY3 ANTERIOR
                                ->union($resultados4) // UNION CON  EL QUERY4 ANTERIOR
                                ->union($resultados5) // UNION CON  EL QUERY5 ANTERIOR
                                ->union($resultados5) // UNION CON  EL QUERY6 ANTERIOR
                                ->get();
        }


        $resultadoAuxiliar[] = array();
        $filtros[] = array();
        $hayFiltros= false;

        if( isset($request->checkbox1)){
            $filtros["mesas"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 1){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->checkbox2)){
            $filtros["consejo"]= true;
            foreach ($resultados as $solucion) {
                if($solucion-> tipo_fuente == 2){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                }
            }
        }

        if( isset($request->sectorSelect) && $request->sectorSelect > 0 ){
            $filtros["sector"]= $request->sectorSelect;
            foreach ($resultados as $solucion) {
                if($solucion->sector_id == $request->sectorSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;


                }
            }
        }

        if( isset($request->ambitoSelect) && $request->ambitoSelect > 0 ){
            $filtros["ambito"]= $request->ambitoSelect;
            foreach ($resultados as $solucion) {
                if($solucion->ambit_id == $request->ambitoSelect){
                    array_push($resultadoAuxiliar, $solucion);
                    $hayFiltros = true;
                    $datosFiltroAmbito=($request->ambitoSelect);

                }
            }
        }

        if( isset($request->responsableSelect) && $request->responsableSelect > 0 ){
            $filtros["responsable"]= $request->responsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->responsableSelect && $actor_solucion->tipo_actor == 1){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;
                        $datosFiltroResponsable=($request->responsableSelect);
                    }
                }
            }
        }

        if( isset($request->corresponsableSelect) && $request->corresponsableSelect > 0 ){
            $filtros["corresponsable"]= $request->corresponsableSelect;
            foreach ($resultados as $solucion) {
                foreach ($solucion->actor_solucion as $actor_solucion) {
                    if($actor_solucion-> user_id == $request->corresponsableSelect && $actor_solucion->tipo_actor == 2){
                        array_push($resultadoAuxiliar, $solucion);
                        $hayFiltros = true;
                    }
                }
            }
        }

        if( $hayFiltros == true){
            unset($resultadoAuxiliar[0]);
            $resultadoAuxiliar = array_unique($resultadoAuxiliar);
            $resultadoAuxiliar = Collection::make($resultadoAuxiliar);

            $resultados = $resultadoAuxiliar;
        }

        unset($filtros[0]);

        return view('publico.reportes.reporte-ccpt')->with([
                                            "parametro"=>$buscar,
                                            "resultados"=>$resultados,
                                            "datosFiltroAmbito"=>$datosFiltroAmbito,
                                            "datosFiltroResponsable"=>$datosFiltroResponsable,
                                            "filtros"=>$filtros
                                        ]);



    }


    public function crearReportePropuestas(Request $request,$tipo){

      $vistaurl="publico.reportes.pdfReportes.pdfPropuestas";
     $cheches = $request['check'];
     $check="";
     for ($i=0; $i <count($cheches) ; $i++) {
            $check .= $cheches[$i].",";
        }
        $consulta=substr($check,0,-1);
        $consutaPropuestas=DB::select("SELECT solucions.id,solucions.verbo_solucion,solucions.sujeto_solucion,solucions.complemento_solucion, users.name, estado_solucion.nombre_estado, ambits.nombre_ambit FROM solucions
            LEFT JOIN actor_solucion ON actor_solucion.solucion_id=solucions.id
            LEFT JOIN users ON users.id= actor_solucion.user_id
            JOIN estado_solucion ON estado_solucion.id=solucions.estado_id
            JOIN ambits ON ambits.id=solucions.ambit_id
            WHERE solucions.id IN ($consulta) AND solucions.estado_id IN(1,2)
            ORDER BY solucions.estado_id");
        $consutaPropuestasAnalisis=Collection::make($consutaPropuestas);

        $consutaPropuestasDesarrollo=DB::select("SELECT solucions.id,solucions.verbo_solucion,solucions.sujeto_solucion,solucions.complemento_solucion, users.name, estado_solucion.nombre_estado, ambits.nombre_ambit FROM solucions
            LEFT JOIN actor_solucion ON actor_solucion.solucion_id=solucions.id
            LEFT JOIN users ON users.id= actor_solucion.user_id
            JOIN estado_solucion ON estado_solucion.id=solucions.estado_id
            JOIN ambits ON ambits.id=solucions.ambit_id
            WHERE solucions.id IN ($consulta) AND solucions.estado_id IN(3)
            ORDER BY solucions.estado_id");
        $consutaPropuestasDesarrollo=Collection::make($consutaPropuestasDesarrollo);

        $consutaPropuestasCierre=DB::select("SELECT solucions.id,solucions.verbo_solucion,solucions.sujeto_solucion,solucions.complemento_solucion, users.name, estado_solucion.nombre_estado, ambits.nombre_ambit FROM solucions
            LEFT JOIN actor_solucion ON actor_solucion.solucion_id=solucions.id
            LEFT JOIN users ON users.id= actor_solucion.user_id
            JOIN estado_solucion ON estado_solucion.id=solucions.estado_id
            JOIN ambits ON ambits.id=solucions.ambit_id
            WHERE solucions.id IN ($consulta) AND solucions.estado_id IN(4)
            ORDER BY solucions.estado_id");
        $consutaPropuestasCierre=Collection::make($consutaPropuestasCierre);

        return $this->crearPropuestasPDF($consutaPropuestasAnalisis,$consutaPropuestasDesarrollo,$consutaPropuestasCierre,$vistaurl,$tipo);



    }
    public function crearPropuestasPDF($datos1,$datos2,$datos3,$vistaurl,$tipo){

        $data1 = $datos1;
        $data2 = $datos2;
        $data3 = $datos3;
        //dd($data1);

        $date = date('Y-m-d');
        $view =\View::make($vistaurl, compact('date'))->with(["data1"=>$data1,
                                                              "data3"=>$data3,
                                                              "data2"=>$data2]);

        $pdf1 = \App::make('dompdf.wrapper');
        $pdf1->loadHTML($view);

        if($tipo==1){return $pdf1->stream($date.'_Reporte-Propuestas.pdf');}
        if($tipo==2){return $pdf1->download('reporte.pdf'); }

    }

    public function crearReportePropuestasHome($idEstado,$tipo){
        //dd($tipo,$idEstado);
         $vistaurl="publico.reportes.pdfReportes.pdfPropuestasHome";
         if($idEstado==1){
        $consutaPropuestas=DB::select("SELECT solucions.id,solucions.verbo_solucion,solucions.sujeto_solucion,solucions.complemento_solucion, users.name, estado_solucion.nombre_estado, ambits.nombre_ambit FROM solucions
            LEFT JOIN actor_solucion ON actor_solucion.solucion_id=solucions.id
            LEFT JOIN users ON users.id= actor_solucion.user_id
            JOIN estado_solucion ON estado_solucion.id=solucions.estado_id
            JOIN ambits ON ambits.id=solucions.ambit_id
            WHERE solucions.estado_id IN(1,2) and solucions.tipo_fuente=2
            ORDER BY solucions.estado_id");
         $consutaPropuestas=Collection::make($consutaPropuestas);
        //dd($consutaPropuestas);
        }else{

            $consutaPropuestas=DB::select("SELECT solucions.id,solucions.verbo_solucion,solucions.sujeto_solucion,solucions.complemento_solucion, users.name, estado_solucion.nombre_estado, ambits.nombre_ambit FROM solucions
            LEFT JOIN actor_solucion ON actor_solucion.solucion_id=solucions.id
            LEFT JOIN users ON users.id= actor_solucion.user_id
            JOIN estado_solucion ON estado_solucion.id=solucions.estado_id
            JOIN ambits ON ambits.id=solucions.ambit_id
            WHERE solucions.estado_id = $idEstado and solucions.tipo_fuente=2
            ORDER BY solucions.estado_id");
             $consutaPropuestas=Collection::make($consutaPropuestas);

        }
        return $this->crearHomePropuestasPDF($consutaPropuestas,$idEstado,$vistaurl,$tipo);

    }

    public function crearHomePropuestasPDF($datos1,$idEstado,$vistaurl,$tipo){

        $data1 = $datos1;

        //dd($data1);

        $date = date('Y-m-d');
        $view =\View::make($vistaurl, compact('date'))->with(["data1"=>$data1,
                                                              "idEstado"=>$idEstado]);

        $pdf1 = \App::make('dompdf.wrapper');
        $pdf1->loadHTML($view);

        if($tipo==1){return $pdf1->stream($date.'_Reporte-Propuestas.pdf');}
        if($tipo==2){return $pdf1->download('reporte.pdf'); }

    }



    public function consejosectorial(){
        return view('csp.home');
    }


    public function ReporteDialogoGrafico(){

        $sipoc = DB::select("SELECT sipocs.nombre_sipoc, count(sipocs.nombre_sipoc) AS total FROM solucions
                            INNER JOIN sipocs ON solucions.sipoc_id = sipocs.id
                            WHERE solucions.sector_id = 7
                            GROUP BY sipocs.nombre_sipoc
                            ORDER BY total DESC");
                            $sipoc=Collection::make($sipoc);

        $verbo_solucion = DB::select("SELECT solucions.verbo_solucion, count(solucions.id) AS total
                            FROM solucions
                            WHERE solucions.sector_id = 7
                            GROUP BY solucions.verbo_solucion ORDER BY total DESC");
                            $verbo_solucion=Collection::make($verbo_solucion);


        $propuestas_estado = DB::select("SELECT estado_solucion.nombre_estado, count(solucions.id) AS total
                            FROM solucions
                            INNER JOIN estado_solucion ON solucions.estado_id = estado_solucion.id
                            WHERE  solucions.sector_id = 7
                            GROUP BY estado_solucion.nombre_estado");
                            $propuestas_estado=Collection::make($propuestas_estado);

        $propuestas_ambito = DB::select("SELECT ambits.nombre_ambit, count(solucions.id) AS total
                            FROM solucions
                            INNER JOIN ambits ON solucions.ambit_id = ambits.id
                            WHERE  solucions.sector_id = 7
                            GROUP BY ambits.nombre_ambit ORDER BY total DESC");
                            $propuestas_ambito=Collection::make($propuestas_ambito);

        $propuestas_institucion = DB::select("SELECT solucions.responsable_solucion, count(actividades.id) AS total
                            FROM solucions
                            INNER JOIN actor_solucion ON solucions.id = actor_solucion.solucion_id
                            INNER JOIN actividades ON solucions.id = actividades.solucion_id
                            INNER JOIN users ON actor_solucion.user_id = users.id
                            WHERE  solucions.sector_id = 7
                            GROUP BY  solucions.responsable_solucion ORDER BY total DESC");
                            $propuestas_institucion=Collection::make($propuestas_institucion);




        return view('publico.reportes.reporte-graficos')->with([
                                                "sipoc"=>$sipoc,
                                                "verbo_solucion" =>$verbo_solucion,
                                                "propuestas_estado" =>$propuestas_estado,
                                                "propuestas_ambito" =>$propuestas_ambito,
                                                "propuestas_institucion" => $propuestas_institucion

                                                ]);


    }

    public function SimuladorInversiones(){

        $provincias = Provincia::all();
        //dd($date_start,$date_end,$today);
        return view('publico.simulador.simulador-inversiones',['provincias'=>$provincias]);


    }

    public function guardarSimuladorInversiones(Request $request){


        $tipo_empresa = $request['tipo_empresa'];
        $sector = $request['sector'];
        $select_provincia = $request['select-provincia'];
        $select_canton = $request['select_canton'];
        $monto_radio = $request['monto_radio'];
        $mercado_radio = $request['mercado_radio'];
        $reduccion_radios = $request['reduccion_radios'];
        $app_radio = $request['app_radio'];
        

        return view('publico.simulador.recomendacion-simulador-inversiones',['provincias'=>$provincias]);

        

    }


   









}
