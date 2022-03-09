<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;

class ClienteInvitadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         // Conseguir todos los eventos
       $clientes = Cliente::all();
       // Para mostrar resultados paginados:
       $clientes = Cliente::paginate(10);    
       return view('clientes.indexInvitados')->with('clientes', $clientes);

    }

   
}
