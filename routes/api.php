<?php

use App\Http\Controllers\Core\UserController;
use App\Http\Controllers\Core\WebhookController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::get('send', function(){
    Artisan::call("send:receive");
});
Route::post('deploy', [WebhookController::class, 'deploy'])->name('deploy');
Route::post('/webhook/xendit', [PublicController::class, 'webhook'])->name('webhook');

Route::middleware(['auth:sanctum'])->group(function () {});
