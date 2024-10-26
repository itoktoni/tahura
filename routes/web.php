<?php

use App\Dao\Enums\Core\MenuType;
use App\Dao\Enums\Core\NotificationType;
use App\Dao\Models\Core\User;
use App\Dao\Models\Event;
use App\Http\Controllers\Core\HomeController;
use App\Http\Controllers\PublicController;
use App\Mail\CreateScheduleEmail;
use App\Mail\CreateScheduleReceiveRunningTools;
use Buki\AutoRoute\AutoRouteFacade as AutoRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Plugins\Query;

Route::get('console', [HomeController::class, 'console'])->name('console');
Route::get('test', function () {

    $notification = new \MBarlow\Megaphone\Types\Important(
        'Expected Downtime!', // Notification Title
        'We are expecting some downtime today at around 15:00 UTC for some planned maintenance.', // Notification Body
        'https://example.com/link', // Optional: URL. Megaphone will add a link to this URL within the Notification display.
        'Read More...' // Optional: Link Text. The text that will be shown on the link button.
    );

    sendNotification($notification, NotificationType::Error);

});

Route::get('/signout', 'App\Http\Controllers\Auth\LoginController@logout')->name('signout');
Route::get('/home', 'App\Http\Controllers\Core\HomeController@index')->middleware(['access'])->name('home');
Route::get('/delete/{code}', 'App\Http\Controllers\Core\HomeController@delete')->middleware(['access'])->name('delete_url');
Route::get('/doc', 'App\Http\Controllers\Core\HomeController@doc')->middleware(['access'])->name('doc');

Route::match(['POST', 'GET'], 'change-password', 'App\Http\Controllers\Core\UserController@changePassword', ['name' => 'change-password'])->middleware('auth');
Route::get('user/profile', 'App\Http\Controllers\Core\UserController@getProfile')->middleware('auth')->name('getProfile');
Route::post('user/profile', 'App\Http\Controllers\Core\UserController@updateProfile')->middleware('auth')->name('updateProfile');
Auth::routes(['verify' => true]);

Route::get('/', [PublicController::class, 'index'])->name('public');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/participants', [PublicController::class, 'participants'])->name('participants');
Route::get('/page/{slug}', [PublicController::class, 'page'])->name('page');

Route::get('/events', [PublicController::class, 'events'])->name('events');
Route::match(['POST', 'GET'], '/events/register', [PublicController::class, 'register'])->middleware('auth')->name('event-register');
Route::get('/events/{code}', [PublicController::class, 'eventsDetails'])->name('event-detail');
Route::post('/discount', [PublicController::class, 'discount'])->middleware('auth')->name('discount');
Route::post('/checkout', [PublicController::class, 'checkout'])->middleware('auth')->name('checkout');
Route::post('/add', [PublicController::class, 'add'])->middleware('auth')->name('add');
Route::get('/remove/{id}', [PublicController::class, 'remove'])->middleware('auth')->name('remove');
Route::post('/relationship', [PublicController::class, 'relationship'])->middleware('auth')->name('relationship');
Route::match(['POST', 'GET'], '/profile', [PublicController::class, 'profile'])->middleware('auth')->name('profile');

try {
    $routes = Query::groups();
} catch (\Throwable $th) {
    $routes = [];
}

if ($routes) {
    Route::middleware(['auth', 'access'])->group(function () use ($routes) {
        Route::prefix('admin')->group(function () use ($routes) {
            if ($routes) {
                foreach ($routes as $group) {
                    Route::group(['prefix' => $group->field_primary, 'middleware' => [
                        'auth',
                        'access',
                    ]], function () use ($group) {
                        // -- nested group
                        if ($menus = $group->has_menu) {
                            foreach ($menus as $menu) {

                                if ($menu->field_type == MenuType::Menu) {

                                    Route::group(['prefix' => 'default'], function () use ($menu) {
                                        try {
                                            AutoRoute::auto($menu->field_url, $menu->field_controller, ['name' => $menu->field_primary]);
                                        } catch (\Throwable$th) {
                                            //throw $th;
                                        }
                                    });

                                } elseif ($menu->field_type == MenuType::Group) {

                                    if ($links = $menu->has_link) {
                                        Route::group(['prefix' => $menu->field_url], function () use ($links) {
                                            foreach ($links as $link) {

                                                try {
                                                    AutoRoute::auto($link->field_url, $link->field_controller, ['name' => $link->field_primary]);
                                                } catch (\Throwable$th) {
                                                    //throw $th;
                                                }

                                            }
                                        });
                                    }
                                }
                            }
                        }
                        // end nested group

                    });
                }
            }
        });
    });
}

Route::get('email', function(){

    $user = User::with('has_event', 'has_relationship')->find(20);

     Mail::to('testreceiver@gmail.com')->send(new CreateScheduleReceiveRunningTools($user));

    return 'oke';

});