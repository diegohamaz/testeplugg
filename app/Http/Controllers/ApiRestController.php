<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class ApiRestController extends Controller
{
    

	public function getApi(){

		$client = new Client();
	    $response = $client->get('https://swapi.co/api/people/10');

	    $conteudo = $response->getBody()->getContents();
	    $resultado = json_decode($conteudo);

	    return view ('listagens.listagem', compact('resultado'));


	}


}
