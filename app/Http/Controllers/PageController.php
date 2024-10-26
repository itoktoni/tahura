<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\MasterController;
use App\Http\Function\CreateFunction;
use App\Http\Function\UpdateFunction;
use App\Http\Services\Master\SingleService;
use App\Facades\Model\PageModel;

class PageController extends MasterController
{
    use CreateFunction, UpdateFunction;

    public function __construct(PageModel $model, SingleService $service)
    {
        self::$service = self::$service ?? $service;
        $this->model = $model::getModel();
    }
}
