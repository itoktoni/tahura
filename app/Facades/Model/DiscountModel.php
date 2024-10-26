<?php

namespace App\Facades\Model;

use Illuminate\Support\Facades\Facade;

class DiscountModel extends \App\Dao\Models\Discount
{
    protected static function getFacadeAccessor()
    {
        return getClass(__CLASS__);
    }
}