<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CalendarEventController;

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobsController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobsController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{job}', [JobsController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{job}/edit', [JobsController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{job}', [JobsController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobsController::class, 'destroy'])->name('jobs.destroy');

Route::get('/jobs/{job}/checklists', [ChecklistController::class, 'index'])->name('checklists.index');
Route::post('/jobs/{job}/checklists', [ChecklistController::class, 'store'])->name('checklists.store');
Route::delete('/checklists/{checklist}', [ChecklistController::class, 'destroy'])->name('checklists.destroy');

Route::post('/jobs/{job}/files', [FileController::class, 'store'])->name('files.store');
Route::delete('/files/{file}', [FileController::class, 'destroy'])->name('files.destroy');

Route::get('/jobs/{job}/calendar-events', [CalendarEventController::class, 'index'])->name('calendarEvents.index');
Route::post('/jobs/{job}/calendar-events', [CalendarEventController::class, 'store'])->name('calendarEvents.store');
Route::get('/calendar-events/{event}/edit', [CalendarEventController::class, 'edit'])->name('calendarEvents.edit');
Route::put('/calendar-events/{event}', [CalendarEventController::class, 'update'])->name('calendarEvents.update');
Route::delete('/calendar-events/{event}', [CalendarEventController::class, 'destroy'])->name('calendarEvents.destroy');
