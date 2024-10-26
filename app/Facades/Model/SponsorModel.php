<?php

namespace App\Facades\Model;

use Illuminate\Support\Facades\Facade;

class SponsorModel extends \App\Dao\Models\Sponsor
{
    protected static function getFacadeAccessor()
    {
        return getClass(__CLASS__);
    }
}