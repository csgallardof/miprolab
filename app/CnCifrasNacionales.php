<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CnCifrasNacionales extends Model
{
    public static function cnCifrasNacionalesPibActividadEconomica($id,$anio){
       return CnCifrasNacionales::join('cn_ciius','cn_ciius.id', '=','cn_cifras_nacionales.ciiu_id')
                                ->Where('nombre_cifra_nacional','=','PIB según actividad económica')
                                ->Where('año','=',$anio)
                                ->where('tipo_cifra_nacional_id','=',$id)
                                ->select('cn_ciius.actividad_ciiu as label','cn_cifras_nacionales.valor as value')
                                ->orderBy('cn_cifras_nacionales.valor', 'desc')
                                ->get();

    }
    public static function cnCifrasNacionalesPibZona($id,$anio){
       return CnCifrasNacionales::join('cn_zonas','cn_zonas.id', '=','cn_cifras_nacionales.zona_id')
                                ->Where('nombre_cifra_nacional','=','PIB por Zonas')
                                ->where('tipo_cifra_nacional_id','=',$id)
                                ->Where('año','=',$anio)
                                ->select('cn_zonas.descripcion_zona as label','cn_cifras_nacionales.año as año','cn_cifras_nacionales.valor as value','cn_zonas.nombre_zona as key')
                                ->orderBy('cn_cifras_nacionales.valor', 'desc')
                                ->get();

    }

    public static function cnCifrasNacionalesPibPorZona($id){
       return CnCifrasNacionales::join('cn_zonas','cn_zonas.id', '=','cn_cifras_nacionales.zona_id')
                                ->Where('nombre_cifra_nacional','=','PIB por Zonas')
                                ->where('tipo_cifra_nacional_id','=',$id)
                                ->select('cn_zonas.descripcion_zona as label','cn_cifras_nacionales.año as año','cn_cifras_nacionales.valor as value','cn_zonas.nombre_zona as key')
                                ->get();

    }

    public static function cnCifrasNacionalesPibProvincia($id,$anio){
       return CnCifrasNacionales::join('cn_provincias','cn_provincias.id', '=','cn_cifras_nacionales.provincia_id')
                                ->Where('nombre_cifra_nacional','=','PIB por provincias')
                                ->where('tipo_cifra_nacional_id','=',$id)
                                ->Where('año','=',$anio)
                                ->select('cn_provincias.nombre_provincia as label','cn_cifras_nacionales.valor as value','cn_cifras_nacionales.provincia_id as key')
                                ->orderBy('cn_cifras_nacionales.valor', 'desc') 
                                ->get();

    }
    public function cnTipoImpuesto(){
    	return $this->belongsTo('App\CnTipoImpuesto');
    }
    public function cnCiiu(){
    	return $this->belongsTo('App\CnCiiu');
    }

    public function cnProvincia(){
    	return $this->belongsTo('App\CnProvincia');
    }

    public function cnTipoCifraNacional(){
    	return $this->belongsTo('App\CnTipoCifraNacional');
    }

    public function cnTipoEmpresa(){
    	return $this->belongsTo('App\CnTipoEmpresa');
    }
    public function cnTipoFuente(){
    	return $this->belongsTo('App\CnTipoFuente');
    }

    public function cnZona(){
        return $this->belongsTo('App\CnZona');
    }

    public function cnSubsector(){
        return $this->belongsTo('App\CnSubsector');
    }
}
