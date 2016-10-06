<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TesonesController extends Controller
{
    public function index()
    {
    	return view('tesones.index');
    }
}
