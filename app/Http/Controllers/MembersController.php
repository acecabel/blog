<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


class MembersController extends Controller
{
    
    public function index(){
    
    $members = DB::table('members')->get();
    dd($members);

    	return view('members.index', compact('members'));
    }
}
