<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PermissionController;


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
    return view('welcome');
});


Route::get('/dashboard', function () {
    // if(middleware->role('isAdmin')){-

        return view('dashboard');
    // }
    // elseif(middleware->role('isUser')){
    //     return view('usr.userDashboard');
    // }
})->middleware(['auth', 'verified','isAdmin'])->name('dashboard');

// Route::get('/dashboard', [TicketController::class, 'countTicket'])->middleware(['auth', 'verified', 'isAdmin'])->name('dashboard');


// Route::get('/User/{id}', [TicketController::class, 'countTicket'])->middleware(['auth', 'verified', 'isAdmin'])->name('dashboard');




// User Routes
Route::middleware('auth')->group(function () {
    Route::get('/User', [UserController::class, 'index'])->name('user.view');
    Route::get('/User/{id}/ticket', [UserController::class, 'showTicket'])->name('ticket.show');
    Route::get('/availables/User', [UserController::class, 'showUser'])->name('user.show');
    Route::get('/User/{id}/delete', [UserController::class, 'deleteUser'])->name('user.delete');
    // Route::get('/Ticket', [TicketController::class, 'viewTicket'])->name('ticket.view');

}); 

Route::get('/Agent', [UserController::class, 'dashboardAgent'])->middleware('auth')->name('agent.dashboard');

// Agent Routes
Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('/Agents', [UserController::class, 'indexAgent'])->name('agent.view');
    Route::get('/Agent/createAgent', [UserController::class, 'createAgent'])->name('agent.create');
    Route::post('/Agent/createAgent', [UserController::class, 'storeAgent'])->name('agent.store');
    Route::get('/Agent/delete/{id}', [UserController::class, 'deleteAgent'])->name('agent.delete');

});


//Ticket Routes
Route::middleware('auth')->group(function () {
    Route::get('/ticket/userTicket', [TicketController::class, 'indexticket'])->name('ticket.view');
    Route::get('/ticket/createTicket', [TicketController::class, 'createTicket'])->name('ticket.create');
    Route::post('/ticket/createTicket', [TicketController::class, 'storeTicket'])->name('ticket.store');
    Route::get('/Ticket', [TicketController::class, 'viewTicket'])->name('view.ticket');
    Route::get('/Ticket/delete/{id}', [TicketController::class, 'deleteTicket'])->name('ticket.delete');
    Route::get('/Ticket/{id}', [TicketController::class, 'showDetail'])->name('detail.view');
    Route::get('/Ticket/assign', [TicketController::class, 'availableAgent'])->name('available.agent');
    

});
//Ticket Logs Routes
Route::middleware('auth')->group(function () {
    Route::get('/ticket/logs', [TicketController::class, 'indexLog'])->name('logs.view');
    Route::post('/ticket/logs', [TicketController::class, 'availAgents'])->name('logs.ticket');
    Route::post('/assign/agents', [TicketController::class, 'assignTo'])->name('assign.agent');
    // Route::get('/ticket/createTicket', [TicketController::class, 'createTicket'])->name('ticket.create');
    // Route::post('/ticket/createTicket', [TicketController::class, 'storeTicket'])->name('ticket.store');
    

});

//Labels Routes
Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('Labels', [LabelController::class, 'indexLabel'])->name('label.view');
    Route::get('/label/form', [LabelController::class, 'labelForm'])->name('label.form');
    Route::post('/label/form', [LabelController::class, 'addLabel'])->name('label.add');
    Route::get('/label/edit/{id}', [LabelController::class, 'editLabel'])->name('label.edit');
    Route::post('/label/update/{id}', [LabelController::class, 'updateLabel'])->name('label.update');
    Route::get('/label/delete/{id}', [LabelController::class, 'deleteLabel'])->name('label.delete');

});


//Categories Routes
Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('/categories', [CategoryController::class, 'indexCategory'])->name('Category.view');
    Route::get('Category/form', [CategoryController::class, 'CategoryForm'])->name('Category.form');
    Route::post('Category/form', [CategoryController::class, 'storeCat'])->name('cat.store');
    // Route::post('label.view', [CategoryController::class, 'showLabel'])->name('label.show');

});



//Roles Routes
Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('/Roles', [RoleController::class, 'index'])->name('Role.index');
    Route::get('/Role/create', [RoleController::class, 'create'])->name('Role.form');
    Route::post('/Role/create', [RoleController::class, 'store'])->name('role.store');

});


//Permissions Routes
Route::middleware('auth','isAdmin')->group(function () {
    Route::get('/Permissions', [PermissionController::class, 'index'])->name('Per.index');
    Route::get('/Permission/Create', [PermissionController::class, 'create'])->name('Per.form');
    Route::post('/Permission/Create', [PermissionController::class, 'store'])->name('Per.store');
    Route::get('/Permission/delete/{id}', [PermissionController::class, 'delete'])->name('Per.delete');

});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

