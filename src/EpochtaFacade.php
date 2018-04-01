<?php

namespace Pantagruel964\Epochta;

use Illuminate\Support\Facades\Facade;

class EpochtaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'epochta';
    }
}
