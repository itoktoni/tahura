<?php

namespace App\Http\Controllers;

use App\Dao\Models\Discount;
use App\Dao\Models\Event;
use App\Facades\Model\DiscountModel;
use App\Facades\Model\EventModel;
use App\Facades\Model\UserModel;
use App\Http\Controllers\Core\ReportController;
use App\Jobs\JobExportCsvUser;
use Illuminate\Http\Request;

class ReportDiscountController extends ReportController
{
    public $data;

    public function __construct(Discount $model)
    {
        $this->model = $model::getModel();
    }

    public function getData()
    {
        $query = Discount::query();

        return $query;
    }

    protected function beforeForm()
    {
        $discount = Discount::getOptions();

        self::$share = [
            'discount' => $discount,
        ];
    }

    public function getPrint(Request $request)
    {
        set_time_limit(0);

        $this->data = $this->getData()->filter();

        return moduleView(modulePathPrint(), $this->share([
            'data' => $this->data->filter()->get(),
        ]));
    }
}
