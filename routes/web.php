<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaminhaoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [HomeController::class,'MostrarHome'])->name('home');
Route::get('/editar-caminhao',[CaminhaoController::class,'Editar'])->name('editar-caminhao');
route::get('/cadastrar-caminhao',[CaminhaoController::class,'FormularioCadastro'])->name('editarCaminhao');
route::post('/cadastrar-caminhao',[CaminhaoController::class, 'SalvarBanco'])->name('salvar-banco');

Route::get('/editar-carro',[CarroController::class,'EditarCarro'])->name('editar-carro');
route::get('/cadastrar-carro',[CarroController::class,'FormularioCadastro'])->name('cadastrar-Carro');
route::post('/cadastrar-caroo',[CarroController::class, 'SalvarBanco'])->name('salvar-banco-carro');