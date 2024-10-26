<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\MasterController;
use App\Http\Function\CreateFunction;
use App\Http\Function\UpdateFunction;
use App\Http\Services\Master\SingleService;
use App\Facades\Model\SponsorModel;

class SponsorController extends MasterController
{
    use CreateFunction, UpdateFunction;

    protected function beforeForm()
    {
        $type = [
            'sponsor' => 'Sponsor',
            'support' => 'Support',
        ];

        self::$share = [
            'type' => $type,
        ];
    }

    public function __construct(SponsorModel $model, SingleService $service)
    {
        self::$service = self::$service ?? $service;
        $this->model = $model::getModel();
    }
}
