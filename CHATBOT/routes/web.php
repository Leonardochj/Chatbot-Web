<?php

use App\Http\Controllers\ActualizarCursoController;
use App\Http\Controllers\ActualizarUsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCursoController;
use App\Http\Controllers\AdminUsuarioController;
use App\Http\Controllers\AgregarCursoController;
use App\Http\Controllers\AgregarUsuarioController;
use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IniciarSesionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\RecursosController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\LibroTextoController;
use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\GenerarCursosController;
use App\Http\Controllers\GenerarTextoController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\OpcionesController;
use App\Http\Controllers\ComprobarRespController;
use App\Http\Controllers\ActualizarLecturaController;
use App\Http\Controllers\ActualizarVideoController;
use App\Http\Controllers\AdminMaterialLecturaController;
use App\Http\Controllers\AdminVideoController;
use App\Http\Controllers\AgregarLecturaController;
use App\Http\Controllers\AgregarVideoController;
use App\Http\Controllers\AdminRecursosController;
use App\Http\Controllers\AgregarRecursoController;



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

Route::get('/', HomeController::class);

Route::get('/iniciarSesion', [IniciarSesionController::class, '__invoke'])->name('iniciarSesion');
Route::post('/iniciarSesion', [IniciarSesionController::class, 'login'])->name('login');
Route::post('/logout', [IniciarSesionController::class, 'logout'])->name('logout');

Route::get('/registro', [RegistroController::class, 'index'])->name('registro');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');

Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/usuarios/{nombreUsuario}', [AdminUsuarioController::class, 'index'])->name('adminUsuario.index');
Route::get('/admin/cursos/{nombreUsuario}', [AdminCursoController::class, 'index'])->name('adminCurso.index');

Route::get('/admin/agregarUsuario/{nombreUsuario}', [AgregarUsuarioController::class, 'index'])->name('agregarUsuario.index');
Route::post('/admin/agregarUsuario/', [AgregarUsuarioController::class, 'store'])->name('agregarUsuario.store');

Route::get('/admin/agregarCurso/{nombreUsuario}', [AgregarCursoController::class, 'index'])->name('agregarCurso.index');
Route::post('/admin/agregarCurso/', [AgregarCursoController::class, 'store'])->name('agregarCurso.store');

Route::get('/admin/actualizarUsuario/{id}', [ActualizarUsuarioController::class, 'index'])->name('actualizarUsuario.index');
Route::put('/admin/updateUsuario/{id}', [ActualizarUsuarioController::class, 'update'])->name('actualizarUsuario.update');

Route::get('/admin/actualizarCurso/{id}', [ActualizarCursoController::class, 'index'])->name('actualizarCurso.index');
Route::put('/admin/updateCurso/{id}', [ActualizarCursoController::class, 'update'])->name('actualizarCurso.update');

Route::delete('/admin/deleteCurso/{id}', [AdminCursoController::class, 'destroy'])->name('adminCurso.destroy');
Route::delete('/admin/deleteUsuario/{id}', [AdminUsuarioController::class, 'destroy'])->name('adminUsuario.destroy');

Route::get('/admin/lecturas/{nombreUsuario}', [AdminMaterialLecturaController::class, 'index'])->name('adminLectura.index');
Route::delete('/admin/deleteLectura/{id}', [AdminMaterialLecturaController::class, 'destroy'])->name('adminLectura.destroy');

Route::get('/admin/actualizarLectura/{id}', [ActualizarLecturaController::class, 'index'])->name('actualizarUsuario.index');


Route::get('/admin/agregarLectura/{nombreUsuario}', [AgregarLecturaController::class, 'index'])->name('agregarLectura.index');
Route::post('/admin/agregarLectura/', [AgregarLecturaController::class, 'store'])->name('agregarLectura.store');

Route::get('/admin/actualizarLectura/{id}', [ActualizarLecturaController::class, 'index'])->name('actualizarLectura.index');
Route::put('/admin/updateLectura/{id}', [ActualizarLecturaController::class, 'update'])->name('actualizarLectura.update');


