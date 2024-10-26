<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\MasterController;
use App\Http\Function\CreateFunction;
use App\Http\Function\UpdateFunction;
use App\Http\Services\Master\SingleService;
use App\Facades\Model\SliderModel;

class SliderController extends MasterController
{
    use CreateFunction, UpdateFunction;

    public function __construct(SliderModel $model, SingleService $service)
    {
        self::$service = self::$service ?? $service;
        $this->model = $model::getModel();
    }
}
