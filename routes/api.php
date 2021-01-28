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

Route::get('prices', function(){
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://api.exchangeratesapi.io/latest?base=INR');
    //return response($response, 200);
    return $response->getBody();
    //return response()->json($response);
});