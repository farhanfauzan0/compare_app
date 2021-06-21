<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;

class Allcontroller extends Controller
{
    function index()
    {
        // $sXML = $this->download_page("https://www.blibli.com/backend/search/trending-search-terms");
        // $oXML = new SimpleXMLElement($sXML);
        // $searchf = file_get_contents("https://www.blibli.com/backend/search/trending-search-terms");
        // dd($sXML);

        // dd($bsurabaya);

        // return $finald;

        return view('index');
    }

    function req_first(Request $request)
    {
        $url = "https://shopee.co.id/api/v4/recommend/recommend?bundle=daily_discover_main&item_card=1&limit=15&offset=120";
        $a = $this->base_req($url);
        // $url = "https://ace.tokopedia.com/search/v2/product?ob=23&st=product&q=macbook&data=100";

        foreach ($a['data']['sections'][0]['data']['item'] as $data) {
            $bjakarta = "https://shopee.co.id/api/v4/pdp/get_shipping_info?city=KOTA%20JAKARTA%20PUSAT&district=MENTENG&itemid=" . $data['itemid'] . "&shopid=" . $data['shopid'] . "&state=DKI%20JAKARTA";
            $bbandung = "https://shopee.co.id/api/v4/pdp/get_shipping_info?city=KOTA%20BANDUNG&district=ANDIR&itemid=" . $data['itemid'] . "&shopid=" . $data['shopid'] . "&state=JAWA%20BARAT";
            $bsurabaya = "https://shopee.co.id/api/v4/pdp/get_shipping_info?city=KOTA%20SURABAYA&district=ASEMROWO&itemid=" . $data['itemid'] . "&shopid=" . $data['shopid'] . "&state=JAWA%20TIMUR";
            $desc = "https://shopee.co.id/api/v2/item/get?itemid=" . $data['itemid'] . "&shopid=" . $data['shopid'];
            $finald[] = [
                'shopid' => $data['shopid'],
                'itemid' => $data['itemid'],
                'nama' => $data['name'],
                'lokasi' => $data['shop_location'],
                'harga' => substr($data['price'], 0, 5),
                'ongkir_jakarta' => substr($this->base_req($bjakarta)['data']['shipping_infos'][0]['cost'], 0, 5),
                'ongkir_bandung' => substr($this->base_req($bbandung)['data']['shipping_infos'][0]['cost'], 0, 5),
                'ongkir_surabaya' => substr($this->base_req($bsurabaya)['data']['shipping_infos'][0]['cost'], 0, 5),
                'desc' => $this->base_req($desc)['item']['description'],
                'img' => "https://cf.shopee.co.id/file/" . $data['image']
            ];
        }

        return view('result', ['data' => $finald]);
    }

    function download_page($path)
    {
        // $url = "http://www.arrowcast.net/fids/mco/fids.asp?sort=city&city=&number=&airline=&adi=A";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        $retValue = curl_exec($ch);
        curl_close($ch);
        // return $retValue;

        // $xml = new SimpleXMLElement($retValue);
        return $retValue;
    }



    function http_request($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPGET, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
        ));
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:69.0) Gecko/20100101 Firefox/69.0');
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }
    function http_request_sugest($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPGET, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        // curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        //     'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9'
        // ));
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:69.0) Gecko/20100101 Firefox/69.0');
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }



    function base_req($url)
    {
        return Http::withHeaders([
            // 'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:69.0) Gecko/20100101 Firefox/69.0'
        ])->get($url)->json();
    }

    function sugest(Request $request)
    {
        $url = "https://www.blibli.com/backend/search/autocomplete?searchTermPrefix=" . $request->val;
        $a = $this->http_request_sugest($url);
        $data = json_decode($a);
        dd($data);
        return view('sugest', ['data' => $data]);
    }
}
