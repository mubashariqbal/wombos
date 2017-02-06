<?php

namespace App;

use Cache;

class FontSource {


	public static function getListOfGoogleFonts()
	{
		$cacheMinutes = 60;
		$apiKey = env('GOOGLE_FONTS_API_KEY');

		if (!$apiKey) {
			abort(401);
		}

		$value = Cache::remember('users', $cacheMinutes, function () use ($apiKey) {
			$client = new \GuzzleHttp\Client();
			$res = $client->request('GET', 'https://www.googleapis.com/webfonts/v1/webfonts?key='.$apiKey);
			if ($res->getStatusCode() == 200) {
				$body = $res->getBody();
				$json = $body->getContents();
				return $json;
			}
		});

		return $value;
	}

}
