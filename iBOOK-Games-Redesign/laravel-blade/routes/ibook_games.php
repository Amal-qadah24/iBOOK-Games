<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbookGamesController;

// Integrate by requiring this file from existing routes/web.php.
// Preview lives at /ibook-preview to avoid collisions with existing live routes.
Route::prefix('ibook-preview')->name('ibook.')->group(function () {
    Route::get('/', [IbookGamesController::class, 'home'])->name('home');
    Route::get('/games', [IbookGamesController::class, 'index'])->name('games.index');
    Route::get('/games/{slug}', [IbookGamesController::class, 'show'])->name('games.show');
    Route::get('/subjects', [IbookGamesController::class, 'subjects'])->name('subjects');
    Route::get('/grades', [IbookGamesController::class, 'grades'])->name('grades');
    Route::view('/schools', 'ibook.simple', ['kind' => 'schools'])->name('schools');
    Route::view('/about', 'ibook.simple', ['kind' => 'about'])->name('about');
    Route::view('/contact', 'ibook.simple', ['kind' => 'contact'])->name('contact');
    Route::view('/login', 'ibook.simple', ['kind' => 'login'])->name('login');
});
