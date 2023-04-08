<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\BibliotecController;

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




 Route::controller(WebController::class)->group(function () {

    Route::get('/', 'home')->name('home');

    Route::get('eixos-atuacao','eixosAtuacao')->name('eixos-atuacao');
    Route::get('presidentes','presidentes')->name('presidentes');
    Route::get('regimento-interno','regimentoInterno')->name('regimento-interno');
    Route::get('arquivos','arquivos')->name('arquivos');

    Route::get('o-que-dizem-as-leis','oquedizemasleis')->name('o-que-dizem-as-leis');
    Route::get('planos-estaduais','planosEstaduais')->name('planos-estaduais');
    Route::get('tecnologias-contra-escravidao','tecnologiasContraEscravidao')->name('tecnologias-contra-escravidao');

    Route::get('agenda','agenda')->name('agenda');
    Route::get('grupos-trabalho','gruposTrabalho')->name('grupos-trabalho');
    Route::get('relatorios','relatorios')->name('relatorios');
    Route::get('bibliotec','bibliotec')->name('bibliotec');
    Route::get('ata-reunioes','ataReunioes')->name('ata-reunioes');

    Route::get('caravana-liberdade','caravanaLiberdade')->name('caravana-liberdade');

    Route::get('contato','contato')->name('contato');
    Route::get('guia-para-jornalistas','guiaParaJornalistas')->name('guia-para-jornalistas');

    Route::get('login','login')->name('login');
    Route::get('/inscricao', 'inscricao')->name('inscricao');
    Route::post('/save_user', 'saveUser')->name('saveUser');
    Route::post('/verifica_login', 'verificaLogin')->name('verificaLogin');

    Route::middleware(['auth'])->group(function () {

        Route::get('users','users')->name('users');
        Route::get('user/{id}','user')->name('user');
        Route::post('updateuser','updateuser')->name('updateuser');
        Route::get('/logout', 'logout')->name('logout');

    });

});

Route::controller(EventoController::class)->group(function () {
        //eventos da AGENDA
        Route::post('agenda/inserir_evento','store')->name('inserir_evento');
        Route::get('agenda/exibir_eventos','show')->name('exibir_evento');
        Route::post('agenda/editar_evento/{id}','edit')->name('editar_evento');
        Route::post('agenda/atualizar_evento/{evento}','update')->name('atualizar_evento');
        Route::post('agenda/excluir_evento/{id}','destroy')->name('excluir_evento');
});

Route::controller(BackController::class)->group(function () {

    Route::middleware(['auth'])->group(function () {

        Route::get('dash','index')->name('dash_home');

    });
});

Route::controller(BibliotecController::class)->group(function () {

    Route::middleware(['auth'])->group(function () {

        Route::get('admin/bibliotec','index')->name('bibliotec_list');
        Route::get('admin/bibliotec_create','create')->name('bibliotec_create');
        Route::post('admin/bibliotec_create','store')->name('bibliotec_create');
        Route::get('admin/bibliotec_edit/{id}','edit')->name('bibliotec_edit');
        Route::post('admin/bibliotec_update/{id}','update')->name('bibliotec_update');
        Route::get('admin/bibliotec_delete/{id}','destroy')->name('bibliotec_delete');




    });
});



//BackController
//BibliotecController

///config/filesystems.php

//'default' => env('FILESYSTEM_DRIVER', 'public'),
