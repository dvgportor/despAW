<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArchivo;
use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class ArchivoInvitadosController extends Controller
{
    
    public function show($id)
    {
    
  
        
       $archivos = DB::table("archivos")->where("cliente_id", $id)->get();
        if (! $archivos)
		{
			// Se devuelve un array errors con los errores detectados y código 404
			return response()->json(['errors'=>Array(['code'=>404,'message'=>'No se encuentra el archivo con ese id.'])],404);
		}

		return view('archivos.idInvitados')->with('archivos', $archivos); 
    
      
	
    }

    
}
