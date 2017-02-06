<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FontSource;

class FontsController extends Controller
{

	public function index(Request $request)
	{
		// $titleFont = "Abhaya Libre";
		// $textFont = "Abhaya Libre";
		// $buttonFont = "Abhaya Libre";

		$titleFont = $request->get('title', null);
		$textFont = $request->get('text', null);
		$buttonFont = $request->get('button', null);

		$fontlist = FontSource::getListOfGoogleFonts();
		return view('fonts.index', compact('fontlist', 'titleFont', 'textFont', 'buttonFont'));
	}

}
