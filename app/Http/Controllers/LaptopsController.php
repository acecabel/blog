<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laptop;
class LaptopsController extends Controller
{
    

    public function create(){
    	$laptop = laptop::create([
    		'brand'=> 'dell',
    		'model'=> 'Alienware']);
    }

    public function update(){
    	$laptop = laptop::where('id', 1)->first();

    	$laptop->brand = 'Acer';
    	$laptop->model = 'Nitro';

    	$laptop->save();
    	
    }

    public function delete(){
    	$laptop = laptop::where('id', 2)->first();
    	$laptop->delete();
    }
}
