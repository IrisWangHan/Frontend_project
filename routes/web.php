<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\sortController;
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

// 客戶端
Route::get('/',[ProjectController::class,'printclient']);


//歡迎頁面
Route::get('/welcome', function () {
    return view('welcome');
});
// 登入後後台
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 輸入後第二頁的管理頁面
Route::get('/dashboardNews', [ProjectController::class,'print']
 )->middleware(['auth', 'verified'])->name('dashboardNews');
require __DIR__.'/auth.php';

// 上傳資料到model
Route::post('/store', [ProjectController::class,'store']
)->middleware(['auth', 'verified']);


//刪除功能
Route::get('/clear/{target}',  [ProjectController::class,'clear']
);
//編輯功能
Route::get('/edit/{id}',  [ProjectController::class,'edit']
);
//更新功能
Route::get('/update/{id}',  [ProjectController::class,'update']
);


// 後台排序
Route::get('/old', [sortController::class,'selectOld']
)->middleware(['auth', 'verified']);
Route::get('/new', [sortController::class,'selectNew']
)->middleware(['auth', 'verified']);

// 前台排序
Route::get('/clientold', [sortController::class,'frontOld']
);
Route::get('/clientnew', [sortController::class,'frontNew']
);


// CD塔
Route::get('/menace', function () {
    return view('menace');
});Route::get('/shame', function () {
    return view('shame');
});Route::get('/again', function () {
    return view('again');
});Route::get('/taiwan', function () {
    return view('taiwan');
});Route::get('/taichll', function () {
    return view('taichll');
});Route::get('/good-atmosphere', function () {
    return view('good-atmosphere');
});
