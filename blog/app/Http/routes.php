<?php

use App\Task;
use Illuminate\Http\Request;

  /**
   * Вывести список всех задач
   */
  Route::get('/', function () {
    return view('tasks');
  });

  /**
   * Добавить новую задачу
   */
  Route::post('/task', function (Request $request) {
    //
  });

  /**
   * Удалить существующую задачу
   */
  Route::delete('/task/{id}', function ($id) {
    //
  });
