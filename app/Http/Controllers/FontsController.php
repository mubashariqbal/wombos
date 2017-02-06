<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FontSource;

class FontsController extends Controller
{

	public function index()
	{
		$fontlist = FontSource::getListOfGoogleFonts();
		return view('fonts.index', compact('fontlist'));
	}

}
