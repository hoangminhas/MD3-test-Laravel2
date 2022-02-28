<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/time/{timezone?}', function ($timezone = null) {
    if (!empty($timezone)) {
        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));
        $time ->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

        echo "mui gio ban chon " . $timezone . ' hien tai dang la: ' .$time->format('d-m-y H:i:s');
    }
    return view('welcome');
});

Route::prefix('customer')->group(function () {
    Route::get('index', function () {
//       echo 'Hien thi danh sach khach hang';
       return view('modules.customer.index');
    });

    Route::get('create', function () {
        //Tao form dang ky
    });

    Route::post('store', function () {
        //luu data tao khach hang
    });

    Route::get('{id}/show', function () {
        //Hien thi thong tin chi tiet khach hang
    });

    Route::get('{id}/edit', function () {
        //Hien thi form chinh sua khach hang
    });

    Route::patch('{id}/update', function () {
        //Xu ly luu data thong tin khach hang dc chinh sua tu form
    });

    Route::delete('{id}', function () {
        //Xoa thong tin khach hang
    });
});

Route::get('/home', function () {
    return view('home');
});


Route::prefix('employees')->group(function () {
    Route::get('/', [EmployeesController::class, 'getAll'])->name('employees.list');
    Route::get('/{id}/detail', [EmployeesController::class, 'getById'])->name('employees.detail');
    Route::get('/create', [EmployeesController::class, 'create'])->name('employees.create');
    Route::post('/create', [EmployeesController::class, 'store'])->name('employees.store');
});
