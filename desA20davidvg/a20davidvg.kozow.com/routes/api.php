<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// contraseñas e claves

/* Client ID: 1
Client secret: VdjgapyQrDhKS9YP0MPNgBqwg2t16z7lrEilbWSj
Password grant client created successfully.
Client ID: 2
Client secret: 65OEojnmV11kS9ekdoid3ZTyAlebaiUvy2IQqcpU */