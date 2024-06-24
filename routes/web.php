<?php



use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/task/new', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('tasks.create_action');
Route::post('/task/edit_action', [TaskController::class, 'edit_action'])->name('tasks.edit_action');
Route::get('/task/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::get('/task/delete', [TaskController::class, 'delete'])->name('tasks.delete');
Route::get('/task', [TaskController::class, 'index'])->name('tasks.view');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
