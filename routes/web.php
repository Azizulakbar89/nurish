<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profilController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\elearningcontroller;
use App\Http\Controllers\kegiatancontroller;
use App\Http\Controllers\gurucontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('publik/welcome');
// });

    Route::get('/login',[logincontroller::class,'index'])->name('login');
    Route::post('/login-proses',[logincontroller::class,'login_proses'])->name('login-proses');

Route::group(['middleware'=>['auth']], function(){
    Route::get('/admin', [admincontroller::class, 'homeadmin'])->name('admin');
    Route::post('/login', [logincontroller::class, 'logout'])->name('logout');

    Route::get('fas', [adminController::class, 'fas'])->name('fas');
    Route::get('fas-add', [adminController::class, 'addfas']); 
    Route::post('fas-add', [adminController::class, 'storefas']);
    Route::get('fas-edit/{idfas}', [admincontroller::class, 'edit'])->name('edit');
    Route::put('fas-edit/{idfas}', [admincontroller::class, 'update']);
    Route::get('/delete/{idfas}', [adminController::class, 'deletefas'])->name('delete');

    Route::get('mitra', [adminController::class, 'mit'])->name('mit');
    Route::get('mitra-add', [adminController::class, 'addmit']); 
    Route::post('mitra-add', [adminController::class, 'storemit']);
    Route::get('mitra-edit/{idm}', [admincontroller::class, 'editmit'])->name('editmit');
    Route::put('mitra-edit/{idm}', [admincontroller::class, 'updatemit']);
    Route::get('/deletemit/{idm}', [adminController::class, 'deletemit'])->name('deletemit');

    Route::get('prestasi', [adminController::class, 'prestasi'])->name('prestasi');
    Route::get('prestasi-add', [adminController::class, 'addpres']); 
    Route::post('prestasi-add', [adminController::class, 'storeprestasi']);
    Route::get('prestasi-edit/{idp}', [admincontroller::class, 'editprestasi'])->name('editprestasi');
    Route::put('prestasi-edit/{idp}', [admincontroller::class, 'updateprestasi']);
    Route::get('/deleteprestasi/{idp}', [adminController::class, 'deleteprestasi'])->name('deleteprestasi');

    Route::get('ekstra', [adminController::class, 'ekstra'])->name('ekstra');
    Route::get('ekstra-add', [adminController::class, 'addekstra']); 
    Route::post('ekstra-add', [adminController::class, 'storeekstra']);
    Route::get('ekstra-edit/{ide}', [admincontroller::class, 'editekstra'])->name('editekstra');
    Route::put('ekstra-edit/{ide}', [admincontroller::class, 'updateekstra']);
    Route::get('/deleteekstra/{ide}', [adminController::class, 'deleteekstra'])->name('deleteekstra');

    Route::get('vide', [elearningcontroller::class, 'vide'])->name('vide');
    Route::get('vide-add', [elearningcontroller::class, 'addvide']); 
    Route::post('vide-add', [elearningcontroller::class, 'storevide']);
    Route::get('vide-edit/{ide}', [elearningcontroller::class, 'editvide'])->name('editvide');
    Route::put('vide-edit/{ide}', [elearningcontroller::class, 'updatevide']);
    Route::get('/deletevide/{ide}', [elearningcontroller::class, 'deletevide'])->name('deletevide');

    Route::get('keg', [kegiatancontroller::class, 'keg'])->name('keg');
    Route::get('keg-add', [kegiatancontroller::class, 'addkeg']); 
    Route::post('keg-add', [kegiatancontroller::class, 'storekeg']);
    Route::get('keg-edit/{idk}', [kegiatancontroller::class, 'editkeg'])->name('editkeg');
    Route::put('keg-edit/{idk}', [kegiatancontroller::class, 'updatekeg']);
    Route::get('/deletekeg/{idk}', [kegiatancontroller::class, 'deletekeg'])->name('deletekeg');

    Route::get('guru', [guruController::class, 'guru'])->name('guru');
    Route::get('guru-add', [guruController::class, 'addguru']); 
    Route::post('guru-add', [guruController::class, 'storeguru']);
    Route::get('guru-edit/{idg}', [gurucontroller::class, 'edit'])->name('edit');
    Route::put('guru-edit/{idg}', [gurucontroller::class, 'update']);
    Route::get('/deleteguru/{idg}', [gurucontroller::class, 'deleteguru'])->name('delete');

    Route::get('bok', [guruController::class, 'book'])->name('bok');
    Route::get('bok-add', [guruController::class, 'addbook']); 
    Route::post('bok-add', [guruController::class, 'storebook']);
    Route::get('bok-edit/{idb}', [gurucontroller::class, 'editb'])->name('editb');
    Route::put('bok-edit/{idb}', [gurucontroller::class, 'updateb']);
    Route::get('/deletebok/{idb}', [gurucontroller::class, 'deletebok'])->name('delete');

    Route::get('fo', [guruController::class, 'foto'])->name('fo');
    Route::get('fo-add', [guruController::class, 'addfoto']); 
    Route::post('fo-add', [guruController::class, 'storefoto']);
    Route::get('fo-edit/{idfo}', [gurucontroller::class, 'editf'])->name('editf');
    Route::put('fo-edit/{idfo}', [gurucontroller::class, 'updatef']);
    Route::get('/deletefo/{idfo}', [gurucontroller::class, 'deletefo'])->name('delete');
    
});

Route::get('publik/vismis', [profilController::class, 'visi']);
Route::get('publik/fasilitas', [profilController::class, 'fasilitas']);
Route::get('publik/ekstra', [profilController::class, 'eks']);
Route::get('publik/mitra', [profilController::class, 'mitra']);
Route::get('publik/prestasi', [profilController::class, 'prestasi'])->name('prestasi');
Route::get('publik/video', [profilController::class, 'vide'])->name('vide');
Route::get('publik/Vid', [profilController::class, 'vid'])->name('vid');
Route::get('publik/guru', [profilController::class, 'guru']);
Route::get('publik/ebook', [profilController::class, 'ebook'])->name('file');
Route::get('/',[admincontroller::class,'index']);