<?php

namespace App\Facades\Model;

use Illuminate\Support\Facades\Facade;

class SliderModel extends \App\Dao\Models\Slider
{
    protected static function getFacadeAccessor()
    {
        return getClass(__CLASS__);
    }
}