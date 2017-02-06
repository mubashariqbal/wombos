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
				'name' => 'Montserrat and Open Sans',
				'fonts' =>
				[
					'title' => 'Montserrat'
				, 	'text' => 'Open Sans'
				, 	'button' => 'Open Sans'
				]
			],
			[
				'name' => 'Playfair and Domine',
				'fonts' =>
				[
					'title' => 'Playfair Display'
				, 	'text' => 'Domine'
				, 	'button' => 'Domine'
				]
			],			
			[
				'name' => 'Roboto and Noto Serif',
				'fonts' =>
				[
					'title' => 'Roboto'
				, 	'text' => 'Noto Serif'
				, 	'button' => 'Noto Serif'
				]
			],			
			[
				'name' => 'Raleway and Roboto',
				'fonts' =>
				[
					'title' => 'Raleway'
				, 	'text' => 'Roboto'
				, 	'button' => 'Roboto'
				]
			],
			[
				'name' => 'Lato and Merriweather',
				'fonts' =>
				[
					'title' => 'Lato'
				, 	'text' => 'Merriweather'
				, 	'button' => 'Merriweather'
				]
			],
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
