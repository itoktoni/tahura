<?php

namespace App\Actions;

use GeoSot\EnvEditor\Facades\EnvEditor as EnvEditor;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use Plugins\Alert;

class ActionSaveSetting
{
    use AsAction;

    public function handle(Request $request)
    {
        $check = false;
        try {

            EnvEditor::editKey('APP_NAME', setString($request->name));

            EnvEditor::editKey('APP_DEBUG', $request->debug_enable);
            EnvEditor::editKey('TELESCOPE_ENABLED', $request->telescope_enable);
            EnvEditor::editKey('DEBUGBAR_ENABLED', $request->debugbar_enable);
            EnvEditor::editKey('APP_URL', $request->url);

            if ($request->has('logo')) {
                $file_logo = $request->file('logo');
                $extension = $file_logo->extension();
                $name = 'logo.'.$extension;
                // $name = time().'.'.$name;

                $file_logo->storeAs('/public/', $name);
                EnvEditor::editKey('APP_LOGO', $name);
            }

            Alert::update();

        } catch (\Throwable $th) {
            Alert::error($th->getMessage());

            return $th->getMessage();
        }

        return $check;
    }
}
