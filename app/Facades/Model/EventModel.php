<?php

namespace App\Facades\Model;

class EventModel extends \App\Dao\Models\Event
{
    protected static function getFacadeAccessor()
    {
        return getClass(__CLASS__);
    }
}
