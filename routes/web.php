<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biodatacontroller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Biodata', function () {
    $Data= [
        'nama'=>'Bilal yasa Dzulfikar',
        'lahir'=>'Bandung 10 juni 2004',
        'hobi'=>'Main game',
        'agama'=>'islam',
        'alamat'=>'jln cilengkrang 1 ',
        'telp'=>'0895380080204',
        'email'=>'Bilalyasa8@gmail.com',
        'jk'=>'laki-laki',
        'photo'=>'../img/yy.jpg',

    ];
        return view('/Biodata',$Data);
    });

    Route::get('/bio', [HomeController::class, 'index']);
    Route::get('/list', [BiodataController::class, 'index'])->name('list');
    Route::get('/form_siswa', [BiodataController::class, 'create'])->name('form_siswa');
    Route::post('/store_siswa', [BiodataController::class, 'store']);
    Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit-siswa');
    Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update-siswa');
    Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
    Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');
