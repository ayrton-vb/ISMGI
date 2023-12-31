<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/bds', function () {
        return view('bd.index');
    })->name('bds');
});


// CRUD TABLAS

Route::resource('actorinstitucionals','App\Http\Controllers\ActorinstitucionalController');
Route::resource('cargoinstitucionals','App\Http\Controllers\CargoinstitucionalController');
Route::resource('institucions','App\Http\Controllers\InstitucionController');
Route::resource('historialexternos','App\Http\Controllers\HistorialactorexternoController');
Route::resource('registros','App\Http\Controllers\RegistroController');
Route::resource('actas','App\Http\Controllers\ActaController');
Route::resource('problematicas','App\Http\Controllers\ProblematicaController');
Route::resource('tipoactas','App\Http\Controllers\TipoactaController');
Route::resource('actorinternos','App\Http\Controllers\ActorinternoController');
Route::resource('cargointernos','App\Http\Controllers\CargointernoController');
Route::resource('unidads','App\Http\Controllers\UnidadController');
Route::resource('direccions','App\Http\Controllers\DireccionController');
Route::resource('secretarias','App\Http\Controllers\SecretariaController');
Route::resource('cargoexternos','App\Http\Controllers\CargoexternoController');
Route::resource('organizacions','App\Http\Controllers\OrganizacionController');
Route::resource('actors','App\Http\Controllers\ActorController');
Route::resource('actorexternos','App\Http\Controllers\ActorexternoController');

Route::resource('bd2s','App\Http\Controllers\Bd2Controller');
Route::resource('bds','App\Http\Controllers\BdController');
Route::resource('busqueda','App\Http\Controllers\BusquedaController');

Route::get('/bds/{id}/actorByOrganizacion','App\Http\Controllers\BdController@actorByOrganizacion');
Route::get('/bds/{id}/actorByOrganizacionFejuve','App\Http\Controllers\BdController@actorByOrganizacionFejuve');

Route::get('/pdf/{id}/pdfActoresbyOrganizacion','App\Http\Controllers\PDFController@PDF');
Route::get('/pdf/{id}/pdfActoresbyOrganizacionFejuve','App\Http\Controllers\PDFController@PDF3');
Route::get('/pdf/{id}/pdfActoresbyOrganizacionReconocimiento','App\Http\Controllers\PDFController@PDF2');

Route::get('/organizacions/{id}/miembros','App\Http\Controllers\OrganizacionController@miembros');
Route::get('/createorganizacions/{id}/miembros','App\Http\Controllers\OrganizacionController@createmiembros');
Route::post('/saveorganizacions/{id}/miembros','App\Http\Controllers\OrganizacionController@savemiembros');
Route::get('/editorganizacions/{id}/miembros','App\Http\Controllers\OrganizacionController@editmiembros');
Route::put('/storeorganizacions/{id}/{id2}/miembros','App\Http\Controllers\OrganizacionController@storemiembros');
Route::delete('/deleteorganizacions/{id}/{id2}/miembros','App\Http\Controllers\OrganizacionController@deletemiembros');

Route::get('/dependientesorganizacions/{id}/miembros','App\Http\Controllers\BdController@orgdependiente');
Route::get('/acta/{id}/registros','App\Http\Controllers\Bd2Controller@registrosByActa');
Route::get('/acta/{id}/registrosCrear','App\Http\Controllers\Bd2Controller@registrosByActaCrear');
Route::post('/acta/registrosGuardar','App\Http\Controllers\Bd2Controller@registrosByActaGuardar');