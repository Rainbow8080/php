<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Utils\ytbUtils;

class YtbApiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function list(){
        $params = Array(
            'playlistId' => 'RDNtKX__-qPSI',
            'part' => 'snippet',
            'maxResults' => 2
        );
        $response = ytbUtils::resource('get','playlistItems',$params);
        $data = json_decode(json_encode($response),false);
        $result = json_decode($data,true);
        return $result;
    }
}
