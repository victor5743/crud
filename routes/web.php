<?php

use Illuminate\Support\Facades\Route;

/* Home */
Route::get('/', 'NewUser@index')->name('user.index');

/* User create */
Route::get('crear', 'NewUser@create')->name('user.create');
Route::post('crear', 'NewUser@store')->name('user.store');

/* User edit */
Route::get('editar/{user}', 'NewUser@edit')->name('user.edit');
Route::patch('editar/{user}', 'NewUser@update')->name('user.update');
