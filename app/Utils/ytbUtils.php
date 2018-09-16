<?php

namespace App\Utils;

use Ixudra\Curl\Facades\Curl;
/**
 * 
 */
class ytbUtils
{
	public static $url = 'https://www.googleapis.com/youtube/v3/';
	public static $key = 'AIzaSyAEeqUlYQPxgUspZUtjgzHe2dSiAlOof4A';
	public static function resource($method,$option,$params){
		$params["key"] = ytbUtils::$key;
		$urlfull = ytbUtils::$url.$option;
		$data = Curl::to($urlfull) -> withData($params) -> $method();
		return $data;
	}
}