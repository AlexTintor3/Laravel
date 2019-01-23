<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
    public function getIndex(){
    	return view('catalog.index')->with('arrayPeliculas', Movie::all());
    }

    public function getShow($id){
    	return view('catalog.show')->with('arrayPeliculas', Movie::findOrFail($id));
    }

    public function getCreate(){
		return view('catalog.create');
    }

    public function getEdit($id){
    	return view('catalog.edit')->with('arrayPeliculas', Movie::findOrFail($id));
    }

    public function postCreate(Request $request) {
        $pelicula = new Movie();
        $pelicula->title = $request->input('title');
        $pelicula->year = $request->input('year');
        $pelicula->director = $request->input('director');
        $pelicula->poster = $request->input('poster');
        $pelicula->synopsis = $request->input('synopsis');
        $pelicula->save();
        return redirect()->action('CatalogController@getIndex');
    }
    public function putEdit(Request $request, $id) {
        $pelicula = movie::findOrFail($id);
        $pelicula->title = $request->title;
        $pelicula->year = $request->year;
        $pelicula->director = $request->director;
        $pelicula->poster = $request->poster;
        $pelicula->synopsis = $request->synopsis;
        $pelicula->save();
        return redirect()->action('CatalogController@getIndex');
    }
}
