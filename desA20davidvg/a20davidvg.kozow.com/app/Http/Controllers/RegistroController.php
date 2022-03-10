<?php

namespace App\Http\Controllers;

use App\Mail\EnvioRexistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\PDF;


class RegistroController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'usuario' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telefono' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     *
     */
    protected function store(Request $data){
        
        $datos = [
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'password' => $data['password'],
            "telefono" => $data["telefono"],
            "apellidos" => $data["apellidos"],
            "usuario" => $data["usuario"]


        ];

        

       /*  $rutaFicheroEntradaPDF = 'storage/Registro_' . md5(time()) . '.pdf';
        
        $pdf = PDF::loadView("mail.mailCorpo", $datos);
        $pdf->save($rutaFicheroEntradaPDF); */

         try {
            /* Mail::to(env("MAIL_USERNAME"))->send(new EnvioRexistro($rutaFicheroEntradaPDF)); */
            Mail::raw('Nombre:'. $datos["nombre"]. " Email: ". $datos["email"]. " Password" .$datos["password"]. " telefono: ". $datos["telefono"]. " Apellidos: ". $datos["apellidos"]." Usuario: ".$datos["usuario"], function ($message) {
                $message->to(env("MAIL_USERNAME"))
                  ->subject("Petición de rexistro");
              });
        
        } catch (\Exception $e) {
            dd($e->getMessage());
        }



        return view("mail.mail");
    }






    protected function create()
    {
        return view("mail.create");
        
        
    }

    public function index()
    {
        //
         // Conseguir todos los eventos
      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
       
    }




}
