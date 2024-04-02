<?php



use App\Http\Controllers\NoteController;

use App\Http\Controllers\TrashedNoteController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    return view('welcome');

});







Route::resource('/notes', NoteController::class)->middleware(['auth']);



Route::prefix('/trashed')

    ->name('trashed.')

    ->middleware('auth')

    ->group(function () {

        Route::get('/', [TrashedNoteController::class, 'index'])->name('index');

        Route::get('/{note}', [TrashedNoteController::class, 'show'])

            ->name('show')

            ->withTrashed();

        Route::put('/{note}', [TrashedNoteController::class, 'update'])

            ->name('update')

            ->withTrashed();

        Route::delete('/{note}', [TrashedNoteController::class, 'destroy'])

            ->name('destroy')

            ->withTrashed();

    });



Route::get('member/dashboard', function () {

    return view('member.dashboard');

})

    ->middleware(['auth','role'])

    ->name('member.dashboard');



require __DIR__ . '/auth.php';

