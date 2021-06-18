<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Allcontroller extends Controller
{
    function index()
    {
        $url = "https://ace.tokopedia.com/search/v2/product?ob=23&st=product&q=macbook&data=100";
        $a = Http::withHeaders([
            'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        ])->get('https://ace.tokopedia.com/search/v2/product?ob=23&st=product&q=macbook&data=100');
        return $this->http_request($url);
    }

    function http_request($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPGET, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
        ));
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:69.0) Gecko/20100101 Firefox/69.0');
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }
}
