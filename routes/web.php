<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('home')
        : redirect()->route('login');
});

require __DIR__.'/auth.php';

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

/*
|--------------------------------------------------------------------------
| UI Kit component catalog
|--------------------------------------------------------------------------
|
| Every Tablar/Tabler component has a live demo page you can open from the
| sidebar. Each page renders the component plus its copyable Blade source.
|
*/
Route::middleware('auth')->group(function () {
    Route::get('/ui-kit', [\App\Http\Controllers\UiKitController::class, 'index'])
        ->name('ui-kit.index');

    Route::get('/ui-kit/{component}', [\App\Http\Controllers\UiKitController::class, 'show'])
        ->name('ui-kit.show');
});

