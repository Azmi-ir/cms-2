<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriGaleriController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KategoriVidController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [FrontendController::class, 'index']);
Route::get('/lihat/{berita}', [FrontendController::class, 'show']);
Route::get('/Kategori-Berita/{kategori_berita}', [FrontendController::class, 'kategoriBerita']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);

Route::group(['middleware' => ['auth', 'ceklevel:super-admin,admin,operator']], function(){
	Route::get('/dashboard', [DashboardController::class, 'Dashboard']);
	Route::resource('kategori', KategoriController::class);
	Route::resource('feature', FeatureController::class);
	Route::resource('berita', BeritaController::class);
	Route::post('berita/create', [BeritaController::class, 'ckeditor'])->name('ckeditor.image-upload');
	Route::resource('kategori_galeri', KategoriGaleriController::class);
	Route::resource('kategori_vid', KategoriVidController::class);
	Route::resource('playlist', PlaylistController::class);
	Route::resource('video', VideoController::class);
	Route::resource('pengumuman', PengumumanController::class);
	Route::resource('infografis', InfografisController::class);
	Route::resource('aplikasi', AplikasiController::class);
	Route::resource('agenda', AgendaController::class);
	Route::resource('galeri', GaleriController::class);

	Route::get('/profil', [AuthController::class, 'profil']);

	//edit profil user
	Route::get('/user/{user}/edit', [AuthController::class, 'edit']);
	Route::patch('/user/update', [AuthController::class, 'update']);
	Route::get('/user/editpassword', [AuthController::class, 'passwordEdit']);
	Route::patch('/user/updatepassword', [AuthController::class, 'passwordUpdate']);
	Route::get('/logout', [AuthController::class, 'logout']);
});
Route::group(['middleware' => ['auth', 'ceklevel:super-admin,admin']], function(){
	Route::get('/list_user', [AuthController::class, 'list_user']);
	Route::delete('/list_user/{user}', [AuthController::class,'destroy']);
	//register
	Route::get('/register', [AuthController::class, 'register']);
	Route::post('/postregister', [AuthController::class, 'postregister']);
});

/*Route::get('layout', function () {
	return view('layout.layout');
});
*/
//Crud Galeri
