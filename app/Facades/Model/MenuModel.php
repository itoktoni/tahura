<?php

namespace App\Facades\Model;

use Illuminate\Support\Facades\Facade;

class MenuModel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return getClass(__CLASS__);
    }
}
