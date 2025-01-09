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

Route::get('/calculadora', [CalculadoraController::class, 'index'])->name('calculadora');
Route::post('/calcular', [CalculadoraController::class, 'calcular'])->name('calcular');
Route::get('/resultado', [CalculadoraController::class, 'resultado'])->name('resultado');

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
Route::get('/recursos/{id}', [RecursosController::class, 'index'])->name('adminRecursos');

Route::get('/videos/{id}', [VideosController::class, 'index'])->name('adminVideos');
Route::get('/texto/{id}', [LibroTextoController::class, '__invoke'])->name('adminLibroTexto');


Route::get('/cuestionarios/{id}', [CuestionarioController::class, 'index'])->name('adminCuestionario1');
Route::get('/cuestionarios/{id}', [PreguntasController::class, 'index'])->name('adminCuestionario1');
Route::get('/cuestionarios/{id}', [OpcionesController::class, 'index'])->name('adminCuestionario1');
Route::get('/cuestionarios/{id}/siguiente', [ComprobarRespController::class, 'index'])->name('adminCuestionario2');
Route::get('/generarCursos/{id}', [GenerarCursosController::class, '__invoke'])->name('generarCursos.index');
Route::get('/generarTexto/{id}', [GenerarTextoController::class, '__invoke'])->name('generarTexto.index');



Route::get('/admin/lecturas/{nombreUsuario}', [AdminMaterialLecturaController::class, 'index'])->name('adminLectura.index');
Route::delete('/admin/deleteLectura/{id}', [AdminMaterialLecturaController::class, 'destroy'])->name('adminLectura.destroy');

Route::get('/admin/actualizarLectura/{id}', [ActualizarLecturaController::class, 'index'])->name('actualizarUsuario.index');

Route::get('/admin/videos/{nombreUsuario}', [AdminVideoController::class, 'index'])->name('adminVideo.index');
Route::delete('/admin/deleteVideo/{id}', [AdminVideoController::class, 'destroy'])->name('adminVideo.destroy');

Route::get('/admin/agregarLectura/{nombreUsuario}', [AgregarLecturaController::class, 'index'])->name('agregarLectura.index');
Route::post('/admin/agregarLectura/', [AgregarLecturaController::class, 'store'])->name('agregarLectura.store');

Route::get('/admin/actualizarLectura/{id}', [ActualizarLecturaController::class, 'index'])->name('actualizarLectura.index');
Route::put('/admin/updateLectura/{id}', [ActualizarLecturaController::class, 'update'])->name('actualizarLectura.update');

Route::get('/admin/agregarVideo/{nombreUsuario}', [AgregarVideoController::class, 'index'])->name('agregarVideo.index');
Route::post('/admin/agregarVideo/', [AgregarVideoController::class, 'store'])->name('agregarVideo.store');

Route::get('/admin/actualizarVideo/{id}', [ActualizarVideoController::class, 'index'])->name('actualizarVideo.index');
Route::put('/admin/updateVideo/{id}', [ActualizarVideoController::class, 'update'])->name('actualizarVideo.update');

Route::get('/admin/recursos/{nombreUsuario}', [AdminRecursosController::class, 'index'])->name('adminRecursos.index');
Route::get('/admin/agregarRecurso/{nombreUsuario}', [AgregarRecursoController::class, 'index'])->name('agregarRecurso.index');
Route::post('/admin/agregarRecurso/', [AgregarRecursoController::class, 'store'])->name('agregarRecurso.store');