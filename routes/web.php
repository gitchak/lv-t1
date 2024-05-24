<?php

use App\Http\Controllers\Welcome;
use App\Http\Controllers\Note_c;
use Illuminate\Support\Facades\Route;

Route::get('/', [Welcome::class, 'welcome'])->name('welcome');

Route::get('/note', [Note_c::class, 'index'])->name('note.index');
Route::get('/note/create', [Note_c::class, 'create'])->name('note.create');
Route::post('/note', [Note_c::class, 'store'])->name('note.store');
Route::get('/note/{id}', [Note_c::class, 'show'])->name('note.show');
Route::get('/note/{id}/edit', [Note_c::class, 'edit'])->name('note.edit');
Route::put('/note/{id}', [Note_c::class, 'update'])->name('note.update');
Route::delete('/note/{id}', [Note_c::class, 'destroy'])->name('note.destroy');
