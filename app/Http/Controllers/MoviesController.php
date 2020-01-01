<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    
    public function create(){
    	return view('movies.create');
    }
    public function store(Request $request)
    {
    	$validatedData = $request->validate([
			'title'=> 'required',
			'category'=> 'required'
    	]);

    	DB::table('movies')->insert([
    		'title'=> request()->title,
			'category'=> request()->category,
			'rating'=> request()->rating]);

			return redirect()->back();
			}

	public function edit(){
		return view ('movies.create');
    	
    }

    public function update(){
    	DB::table('movies')
    	->where('id',1)
    	->update(['title' => request()->title,
    	'category' => request()->category,
    	'rating' => request()->rating]};
       }
	}
}
