<?php

namespace App\Http\Controllers;

use DB;

class BookingsController extends Controller
{
    
    public function index()

    {
    $bookings = DB::table('bookings')->get();
    return view('bookings.index',compact('bookings'));
	}
    
    public function create()
    {
    	DB::table('bookings')->insert([
            'date_booked' => '2020-02-17','booker' => 'Zech', 'date_to_book', '20'])
    }
	
	public function update()
    {
    	return "update";
    	return redirect('/bookings');
    }
   
    public function delete()
    {
    	return "delete";
    	return redirect('/bookings');
    }
   
    public function filter()
    {
    
    	$bookings = DB::table('bookings')
		->where('type','meeting')
		->get();
		return view('bookings.index', compact('bookings'));
  
    }

}


