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
				'name' => 'Cabin and Old Standard TT',
				'fonts' =>
				[
					'title' => 'Cabin'
				, 	'text' => 'Old Standard TT'
				, 	'button' => 'Old Standard TT'
				]
			],
			[
				'name' => 'Fjalla One and Average',
				'fonts' =>
				[
					'title' => 'Fjalla One'
				, 	'text' => 'Average'
				, 	'button' => 'Average'
				]
			]
		];

		$fontlist = FontSource::getListOfGoogleFonts();
		return view('fonts.index', compact('fontlist', 'titleFont', 'textFont', 'buttonFont', 'popularCombos'));
	}

}
