<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class ReporteController extends Controller
{
    public function showCarpeta($id){
		$DatosUnidad = DB::table('carpeta')
            ->join('users', 'users.id', '=', 'carpeta.idFiscal')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'unidad.nombre', 'unidad.region', 'unidad.distrito', 'users.numFiscal', 'carpeta.numCarpeta', 'carpeta.fechaInicio', 'users.nombres as nombrefiscal', 'users.primerAp as primerApfiscal', 'users.segundoAp as segundoApfiscal', DB::raw(date('Y'). ' as yearInicio'), DB::raw('(CASE WHEN carpeta.esRelevante = 1 THEN "SI" ELSE "NO" END) AS esRelevante'), DB::raw('(CASE WHEN carpeta.conDetenido = 1 THEN "SI" ELSE "NO" END) AS conDetenido')  )
            ->where('carpeta.id', '=', $id)
            ->get();

        $DatosDelitos = DB::table('carpeta')
        	->join('acusacion', 'carpeta.id', '=', 'acusacion.idCarpeta')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->join('cat_modalidad', 'cat_modalidad.id', '=', 'tipif_delito.idModalidad')
            ->join('cat_arma', 'cat_arma.id', '=', 'tipif_delito.idArma')
            ->join('cat_tipo_arma', 'cat_tipo_arma.id', '=', 'cat_arma.idTipoArma')
            ->join('cat_zona', 'cat_zona.id', '=', 'tipif_delito.idZona')
            ->join('cat_lugar', 'cat_lugar.id', '=', 'tipif_delito.idLugar')
            ->join('domicilio', 'domicilio.id', '=', 'tipif_delito.idDomicilio')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
            ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
            ->select('carpeta.id', 'cat_delito.nombre', DB::raw('(CASE WHEN tipif_delito.conViolencia = 1 THEN "CON VIOLENCIA" ELSE "SIN VIOLENCIA" END) AS tipoDelito'), 'tipif_delito.formaComision', 'cat_modalidad.nombre as modalidad', 'tipif_delito.formaComision', 'tipif_delito.consumacion', 'cat_arma.nombre as arma', 'cat_tipo_arma.nombre as tipoArma', 'tipif_delito.fecha', 'tipif_delito.hora', 'cat_zona.nombre as zona', 'cat_lugar.nombre as lugar', 'cat_estado.nombre as estado', 'cat_municipio.nombre as municipio', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'domicilio.calle', 'tipif_delito.entreCalle', 'tipif_delito.yCalle', 'tipif_delito.calleTrasera', 'domicilio.numExterno')
            ->where('carpeta.id', '=', $id)
            ->get();

        $DatosAgrabiado = DB::table('carpeta')
            ->join('acusacion', 'carpeta.id', '=', 'acusacion.idCarpeta')
            ->join('extra_denunciante', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('cat_nacionalidad', 'persona.idNacionalidad', '=', 'cat_nacionalidad.id')
            ->join('cat_municipio', 'persona.idMunicipioOrigen', '=', 'cat_municipio.id')
            ->join('cat_estado', 'cat_municipio.idEstado', '=', 'cat_estado.id')
            ->join('cat_ocupacion', 'variables_persona.idOcupacion', '=', 'cat_ocupacion.id')
            ->join('cat_escolaridad', 'variables_persona.idEscolaridad', '=', 'cat_escolaridad.id')
            ->join('cat_estado_civil', 'variables_persona.idEstadoCivil', '=', 'cat_estado_civil.id')
            ->join('cat_religion', 'variables_persona.idReligion', '=', 'cat_religion.id')
            ->select('carpeta.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'variables_persona.edad', 'persona.sexo', 'cat_nacionalidad.nombre as nacionalidad', 'cat_estado.nombre as estadoOrigen', 'cat_ocupacion.nombre as ocupacion', 'variables_persona.lugarTrabajo', 'cat_escolaridad.nombre as escolaridad', 'cat_estado_civil.nombre as estadoCivil', 'cat_religion.nombre as religion'   )
            ->where('carpeta.id', '=', $id)
            ->get();

        $DatosImputado = DB::table('carpeta')
            ->join('acusacion', 'carpeta.id', '=', 'acusacion.idCarpeta')
            ->join('extra_denunciado', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('cat_nacionalidad', 'persona.idNacionalidad', '=', 'cat_nacionalidad.id')
            ->join('cat_municipio', 'persona.idMunicipioOrigen', '=', 'cat_municipio.id')
            ->join('cat_estado', 'cat_municipio.idEstado', '=', 'cat_estado.id')
            ->join('cat_ocupacion', 'variables_persona.idOcupacion', '=', 'cat_ocupacion.id')
            ->join('cat_escolaridad', 'variables_persona.idEscolaridad', '=', 'cat_escolaridad.id')
            ->join('cat_estado_civil', 'variables_persona.idEstadoCivil', '=', 'cat_estado_civil.id')
            ->join('cat_religion', 'variables_persona.idReligion', '=', 'cat_religion.id')
            ->select('carpeta.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'variables_persona.edad', 'persona.sexo', 'cat_nacionalidad.nombre as nacionalidad', 'cat_estado.nombre as estadoOrigen', 'cat_ocupacion.nombre as ocupacion', 'variables_persona.lugarTrabajo', 'cat_escolaridad.nombre as escolaridad', 'cat_estado_civil.nombre as estadoCivil', 'cat_religion.nombre as religion'   )
            ->where('carpeta.id', '=', $id)
            ->get();
            
        
        //dd($DatosDelitos);
		
		return view('reporte.detalle')->with('DatosUnidad',$DatosUnidad)->with('DatosDelitos',$DatosDelitos)->with('DatosAgrabiado',$DatosAgrabiado)->with('DatosImputado',$DatosImputado);
	}}
