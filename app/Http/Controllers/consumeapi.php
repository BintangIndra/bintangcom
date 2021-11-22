<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class consumeapi extends Controller{
    

    public function index(){
		$produk = Http::get('https://newsapi.org/v2/top-headlines',
			[
				'country' => 'id',
				'apiKey' => 'b22a880bb7e24cf8b7ec18a9ef0deb7c'
			]);

		$produk = json_decode($produk);

    	return view('home',[
    		'articles' => $produk->articles
    	]);
    }

    public function getbycategory($category){
		$produk = Http::get('https://newsapi.org/v2/top-headlines',
			[
				'category' => $category,
				'apiKey' => 'b22a880bb7e24cf8b7ec18a9ef0deb7c'
			]);

		$produk = json_decode($produk);
		
    	return view('home',[
    		'articles' => $produk->articles
    	]);
    }

    public function getbykey(Request $request){
		$produk = Http::get('https://newsapi.org/v2/everything',
			[
				'q' => $request->key,
				'apiKey' => 'b22a880bb7e24cf8b7ec18a9ef0deb7c'
			]);

		$produk = json_decode($produk);

    	return view('home',[
    		'articles' => $produk->articles
    	]);
    }

}
