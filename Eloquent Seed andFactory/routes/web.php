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

use App\Http\Controllers\TaskController;
use App\Models\Task;


    // // Create a new task
    // $task = Task::create([
    //     'name' => 'example task',
    //     'description' => 'This is an example task description.',
    //     'completed' => true,
    //     'priority' => 'High',
    // ]);

    // // Retrieve the task and dump the attributes to see the changes
    // $retrievedTask = Task::find($task->id);
    // dd($retrievedTask->attributesToArray());

// Route::prefix('tasks')->group(function () {
    // Index page to show all tasks
// routes/web.php

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

// });
