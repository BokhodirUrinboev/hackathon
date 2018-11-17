<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
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
    	$Client = new Client;
    	$res = $client->request('GET', 'https://graph.facebook.com/<?='.$id.'?>/?access_token=1099281806909572|Ap5vqXbUY5-6OvIwsr_eiovbEuk&type=place&fields=name,about,description');
    	return view();
    }*/ 
    public function search(Request $request)
    {
    	$Client = new Client;
    	$res = $client->request('GET', 'https://graph.facebook.com/search?access_token=1099281806909572|Ap5vqXbUY5-6OvIwsr_eiovbEuk&type=place&q='.$request->search);
    	var_dump(json_decode($res->getBody()));
    	die;
    }
}
