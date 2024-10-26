<?php

namespace App\Facades\Model;

use Illuminate\Support\Facades\Facade;

class BenefitModel extends \App\Dao\Models\Benefit
{
    protected static function getFacadeAccessor()
    {
        return getClass(__CLASS__);
    }
}