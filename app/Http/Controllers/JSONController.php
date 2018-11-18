<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

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
    	$res = $client->request('GET', 'https://graph.facebook.com/<?='.$id.'?>/?access_token=196233454590114|Y71x48_qTXlselAeommP_lngvT8&type=place&fields=name,about,description');
    	return view();
    }*/ 
    public function search(Request $request)
    {
    	$client = new Client;
    	$res = $client->request('GET', 'https://graph.facebook.com/search?access_token=196233454590114|Y71x48_qTXlselAeommP_lngvT8&type=place&q='.$request->search);
    	$res = json_decode($res->getBody())->{'data'};
		$bigres = array();
		foreach($res as $r){
		$res = $client->request('GET', 'https://graph.facebook.com/'.$r->{'id'}.'/?access_token=196233454590114|Y71x48_qTXlselAeommP_lngvT8&type=place&fields=name,about,description');
	        $res = json_decode($res->getBody());
		array_push($bigres,$res);
	}
	$result1 = $client->detectDominantLanguage([
    		'Text' => (string)json_encode($bigres), // REQUIRED
	]);

	$result2 = $client->detectSentiment([
    		'LanguageCode' => 'en|es|fr|de|it|pt', // REQUIRED
    		'Text' => '<string>', // REQUIRED
	]);
    	return view('home')->with('bigres',$bigres);
    }
}

