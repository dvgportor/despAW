<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreArchivo;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\PDF;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       // Para mostrar resultados archivos:
       $archivos = Archivo::paginate(); 

       return view('archivos.index')->with('archivos', $archivos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        return view("archivos.create")->with("user_id", $user_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArchivo $request)
    {
        $datosvalidados = $request->validated();

      

        $zipA = $request->file("enlace")->store("files");

        

        $datosvalidados["enlace"] = $zipA;

        Archivo::create($datosvalidados);
        
        
       


        // Guarde un mensaje Flash.

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
  
        
       $archivos = DB::table("archivos")->where("cliente_id", $id)->get();
        if (! $archivos)
		{
			// Se devuelve un array errors con los errores detectados y código 404
			return response()->json(['errors'=>Array(['code'=>404,'message'=>'No se encuentra el archivo con ese id.'])],404);
		}

		return view('archivos.id')->with('archivos', $archivos)->with("id", $id); 
    
      
	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('archivos.edit')->with("id",$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArchivo $request, $id)
    {

        $archivos = $request->validated();

        

            $enlace = DB::table("archivos")->where("id", $id)->select("enlace")->get();


            Storage::delete($enlace[0]->enlace);

            $zipA = $request->file("enlace")->store("files");

            $datosvalidados["enlace"] = $zipA;
            DB::table("archivos")->where("id", $id)->update(["titulo"=> $archivos["titulo"]], ["descripcion"=>$archivos["descripcion"]], ["enalce"=>$archivos["enlace"]]);
      /*   }

        else{
            DB::table("archivos")->where("id", $id)->update(["titulo"=> $archivos["titulo"]], ["descripcion"=>$archivos["descripcion"]]);

        } */
        
         
         return redirect()->route('clientes.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {   
        Storage::delete($archivo["enlace"]);
        $archivo->delete();
        return redirect()->route('clientes.index');
    }


    public function download(Request $request){
        $ids = [];
        $data = $request->except('_token');
foreach($data as $id => $value){
    array_push($ids, $id);
}
        $enlc = $ids[1];

        $pos = strlen($enlc)-4;

        $enlc[$pos]=".";

        

        return Storage::download($enlc);

    }
}
