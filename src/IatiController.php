<?php

namespace SiyahKare\Iati;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

abstract class IatiController extends Controller
{
    protected $API;

    public function __construct() {

        // Init API Client
        $this->API = new GuzzleHttp\Client([
            'base_uri' => env('IATI_TEST_URL'),
            'http_errors' => false, // false = http errors won't throw Exceptions
            'headers' => [
                'User-Agent' => env('API_UA'),
                'Accept'     => 'application/json',
            ]
        ]);

    }
}
