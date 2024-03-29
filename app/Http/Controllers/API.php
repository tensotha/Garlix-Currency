<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurrencyListing;
use App\CryptoListing;
use function GuzzleHttp\json_encode;

class API extends Controller
{
    public function fiat()
    {
        $data = CurrencyListing::all('iso', 'rates');
       
        foreach($data as $i => $item) {
            $data[$i] = array($item["iso"] => $item["rates"]);
        }
        $ex = str_replace( array( '[', ']'), array( '{', '}'),json_encode($data));
        return '{'.str_replace( array( '{', '}'), '', $ex).'}';
    }

    public function crypto()
    {
        $data = CryptoListing::all('symbol', 'rate');
       
        foreach($data as $i => $item) {
            $data[$i] = array($item["symbol"] => $item["rate"]);
        }
        $ex = str_replace( array( '[', ']'), array( '{', '}'),json_encode($data));
        return '{'.str_replace( array( '{', '}'), '', $ex).'}';
    }
}
