<?php

namespace App\Facades\Model;

use Illuminate\Support\Facades\Facade;

class PageModel extends \App\Dao\Models\Page
{
    protected static function getFacadeAccessor()
    {
        return getClass(__CLASS__);
    }
}