<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'NewUser@index')->name('user.index');
Route::get('crear', 'NewUser@create')->name('user.create');
Route::post('crear', 'NewUser@store')->name('user.store');
