<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/site-map', function () {

    $sitemap = App::make("sitemap");

    // sitemap->('https://alsudaiscpa.com')->writeToFile('sitemap.xml');

    // add items to the sitemap (url, date, priority, freq)

    $sitemap->add(route('home'), '2018-06-03T12:30:00+02:00', '1', 'monthly', [], null);
    $sitemap->add(route('emmpluee'), '2020-06-24T14:30:00+02:00', '0.3', 'monthly', [], null);
    $sitemap->add(route('servece'), '2020-06-24T14:30:00+02:00', '0.5', 'monthly', [], null);
    $sitemap->add(route('price'), '2020-06-24T14:30:00+02:00', '0.6', 'monthly', [], null);
    $sitemap->add(route('team'), '2020-06-24T14:30:00+02:00', '0.7', 'monthly', [], null);
    $sitemap->add(route('how-are'), '2020-06-24T14:30:00+02:00', '0.8', 'monthly', [], null);
    $sitemap->add(route('contact'), '2020-06-24T14:30:00+02:00', '0.9', 'monthly', [], null);

    $services = DB::table('services')->orderBy('created_at', 'desc')->get();

    foreach ($services as $service) {
        $sitemap->add(route('servece', $service->name), $service->created_at, '0.1', 'monthly');
    }

    $sitemap->store('xml', 'sitemap');

    return redirect()->route('home');
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'namespace' => 'App\Http\Controllers\web', 'middleware' => ['localeViewPath', 'localeSessionRedirect', 'localizationRedirect']], function () {

    Route::get('/', 'SiteController@index')->name('home');

    Route::post('/add-price', 'SiteController@addPrice')->name('add-price');
    Route::get(LaravelLocalization::transRoute('routes.emmpluee'), 'SiteController@emmpluee')->name('emmpluee');
    Route::get(LaravelLocalization::transRoute('routes.contact'), 'SiteController@contact')->name('contact');
    Route::get(LaravelLocalization::transRoute('routes.service'), 'SiteController@servece')->name('servece');
    Route::get(LaravelLocalization::transRoute('routes.price'), 'SiteController@price')->name('price');
    Route::get(LaravelLocalization::transRoute('routes.team'), 'SiteController@team')->name('team');
    Route::get(LaravelLocalization::transRoute('routes.how_are'), 'SiteController@howAre')->name('how-are');

    Route::get('/services/{name}', 'SiteController@single')->name('single');

    Route::get('/team/{name}', 'SiteController@TeamOne')->name('team-one');

    Route::post('/send-emp', 'SiteController@sendEmp')->name('send-emp');
});

Route::get('/cpa-login/', 'App\Http\Controllers\admin\UserController@getLogin')->name('login');
Route::post('/cpa-do-login', 'App\Http\Controllers\admin\UserController@postLogin')->name('do-login');

Route::group(['middleware' => 'dashboard', 'prefix' => 'cpa-dashboard', 'namespace' => 'App\Http\Controllers'], function () {

    Route::get('/', 'admin\SettingController@dashboard')->name('dashboard');

    Route::group(['prefix' => 'setting'], function () {

        Route::get('/', 'admin\SettingController@setting')->name('setting');
        Route::post('/do-add', 'admin\SettingController@postSetting')->name('do-setting');
    });

    Route::group(['prefix' => 'users'], function () {

        Route::get('/', 'admin\UserController@index')->name('users');
        Route::get('/add', 'admin\UserController@getAdd')->name('user-add');
        Route::post('/do-add', 'admin\UserController@postAdd')->name('user-do-add');
        Route::get('/edit/{id}', 'admin\UserController@getEdit')->name('user-edit');
        Route::post('/do-edit', 'admin\UserController@postEdit')->name('user-do-edit');
        Route::get('/delete/{id}', 'admin\UserController@delete')->name('user-delete');
    });

    Route::group(['prefix' => 'slider'], function () {

        Route::get('/', 'admin\SliderController@index')->name('slider');
        Route::get('/add', 'admin\SliderController@getAdd')->name('slider-add');
        Route::post('/do-add', 'admin\SliderController@postAdd')->name('slider-do-add');
        Route::get('/edit/{id}', 'admin\SliderController@getEdit')->name('slider-edit');
        Route::post('/do-edit', 'admin\SliderController@postEdit')->name('slider-do-edit');
        Route::get('/delete/{id}', 'admin\SliderController@delete')->name('slider-delete');
    });

    Route::group(['prefix' => 'services'], function () {

        Route::get('/', 'admin\ServiceController@index')->name('services');
        Route::get('/add', 'admin\ServiceController@getAdd')->name('service-add');
        Route::post('/do-add', 'admin\ServiceController@postAdd')->name('service-do-add');
        Route::get('/edit/{id}', 'admin\ServiceController@getEdit')->name('service-edit');
        Route::post('/do-edit', 'admin\ServiceController@postEdit')->name('service-do-edit');
        Route::get('/delete/{id}', 'admin\ServiceController@delete')->name('service-delete');
    });

    Route::group(['prefix' => 'branches'], function () {

        Route::get('/', 'admin\BranchController@index')->name('branches');
        Route::get('/add', 'admin\BranchController@getAdd')->name('branch-add');
        Route::post('/do-add/', 'admin\BranchController@postAdd')->name('branch-do-add');
        Route::get('/edit/{id}', 'admin\BranchController@getEdit')->name('branch-edit');
        Route::post('/do-edit', 'admin\BranchController@postEdit')->name('branch-do-edit');
        Route::get('/delete/{id}', 'admin\BranchController@delete')->name('branch-delete');
    });

    Route::group(['prefix' => 'clients'], function () {

        Route::get('/', 'admin\ClientController@index')->name('clients');
        Route::get('/add', 'admin\ClientController@getAdd')->name('client-add');
        Route::post('/do-add/', 'admin\ClientController@postAdd')->name('client-do-add');
        Route::get('/edit/{id}', 'admin\ClientController@getEdit')->name('client-edit');
        Route::post('/do-edit', 'admin\ClientController@postEdit')->name('client-do-edit');
        Route::get('/delete/{id}', 'admin\ClientController@delete')->name('client-delete');
    });

    Route::group(['prefix' => 'about'], function () {
        Route::get('/', 'admin\AboutController@getEdit')->name('about');
        Route::post('/do-add', 'admin\AboutController@postEdit')->name('do-about');
        Route::get('/about-info', 'admin\AboutController@info')->name('about-info');
        Route::post('/do-info', 'admin\AboutController@setInfo')->name('do-info');
    });

    Route::get('/cpa-logout/', 'admin\UserController@logout')->name('logout');
});

Route::get('/{lang}', 'App\Http\Controllers\web\SiteController@setLang')->name('lang');
