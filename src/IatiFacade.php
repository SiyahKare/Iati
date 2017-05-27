<?php
namespace SiyahKare\Iati;

use Illuminate\Support\Facades\Facade;

class IatiFacade extends Facade
    {
        protected static function getFacadeAccessor() {
            return 'iati';
        }
    }
