<?php

namespace App\Http\Controllers;

use App\Dao\Models\Event;
use App\Facades\Model\EventModel;
use App\Facades\Model\UserModel;
use App\Http\Controllers\Core\ReportController;
use App\Jobs\JobExportCsvUser;
use Illuminate\Http\Request;

class ReportQuotaController extends ReportController
{
    public $data;

    public function __construct(EventModel $model)
    {
        $this->model = $model::getModel();
    }

    public function getData()
    {
        $query = EventModel::with('has_users');

        return $query;
    }

    protected function beforeForm()
    {
        $event = EventModel::getOptions();

        self::$share = [
            'event' => $event,
        ];
    }

    public function getPrint(Request $request)
    {
        set_time_limit(0);

        $this->data = $this->getData($request);

        return moduleView(modulePathPrint(), $this->share([
            'data' => $this->data->get(),
        ]));
    }
}
