<?php

namespace App\Http\Controllers;

use App\Facades\Model\EventModel;
use App\Http\Controllers\Core\MasterController;
use App\Http\Function\CreateFunction;
use App\Http\Function\UpdateFunction;
use App\Http\Services\Master\SingleService;

class EventController extends MasterController
{
    use CreateFunction, UpdateFunction;

    public function __construct(EventModel $model, SingleService $service)
    {
        self::$service = self::$service ?? $service;
        $this->model = $model::getModel();
    }

    protected function beforeForm()
    {
        $active = [
            'Yes' => 'Yes',
            'No' => 'No',
        ];

        self::$share = [
            'active' => $active,
        ];
    }

}
