<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FontSource;

class FontsController extends Controller
{

	public function index(Request $request)
	{
		$titleFont = $request->get('title', null);
		$textFont = $request->get('text', null);
		$buttonFont = $request->get('button', null);

		$popularCombos = [
			[
				'name' => 'Lato, Lato, Lato',
				'fonts' =>
				[
					'title' => 'Lato'
				, 	'text' => 'Lato'
				, 	'button' => 'Lato'
				]
			]
		];

		$fontlist = FontSource::getListOfGoogleFonts();
		return view('fonts.index', compact('fontlist', 'titleFont', 'textFont', 'buttonFont', 'popularCombos'));
	}

}
