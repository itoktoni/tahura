<?php

namespace App\Http\Controllers;

use App\Facades\Model\UserModel;
use App\Http\Controllers\Core\ReportController;
use App\Jobs\JobExportCsvUser;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportUserController extends ReportController
{
    public $data;

    public function __construct(UserModel $model)
    {
        $this->model = $model::getModel();
    }

    public function getData()
    {
        $query = $this->model->with('has_event');

        return $query;
    }

    public function getPrint(Request $request)
    {
        set_time_limit(0);

        $this->data = $this->getData($request);

        if($start_date = $request->start_date){
            $this->data = $this->data->whereDate('created_at', '>=', $start_date);
        }

        if($end_date = $request->end_date){
            $this->data = $this->data->whereDate('created_at', '<=', $end_date);
        }

        if($request->action == "pdf"){
            $pdf = Pdf::loadView(modulePathPrint(), $this->share([
                'data' => $this->data->get(),
            ]))
            ->setPaper('a1', 'landscape')
            ->download('participant.pdf');

            return $pdf;
        }

        return moduleView(modulePathPrint(), $this->share([
            'data' => $this->data->get(),
        ]));
    }
}
