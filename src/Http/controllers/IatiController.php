<?php
// src/Http/DemoController.php

namespace SiyahKare\Iati\Http;

use Illuminate\Routing\Controller as BaseController;

class DemoController extends BaseController
{
    public function index()
    {
        return \IatiClass::hello() . ' from controller.';
    }
}
