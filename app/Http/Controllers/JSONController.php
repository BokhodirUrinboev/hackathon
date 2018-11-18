<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Aws\Comprehend\ComprehendClient;

class JSONController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('home');
    }
    /*public function show($id)
    {
    	$client = new Client;
    	$res = $client->request('GET', 'https://graph.facebook.com/<?='.$id.'?>/?access_token=1099281806909572|Ap5vqXbUY5-6OvIwsr_eiovbEuk&type=place&fields=name,about,description');
    	return view();
    }*/ 
    public function search(Request $request)
    {
    	$client = new Client;
    	$res = $client->request('GET', 'https://graph.facebook.com/search?access_token=1099281806909572|Ap5vqXbUY5-6OvIwsr_eiovbEuk&type=place&q='.$request->search);
    	$res = json_decode($res->getBody())->{'data'};
		$bigres = array();
		foreach($res as $r){
		$res = $client->request('GET', 'https://graph.facebook.com/'.$r->{'id'}.'/?access_token=1099281806909572|Ap5vqXbUY5-6OvIwsr_eiovbEuk&type=place&fields=name,about,description');
	        $res = json_decode($res->getBody());
		array_push($bigres,$res);
		}

		$client = new ComprehendClient;
		$result = $client->detectDominantLanguage([
		    'Text' => (string)$bigres,
		]);

    	return view('home')->with('bigres' , ['bigres'=>$bigres,'analysis'=>$result]);
    }
}

