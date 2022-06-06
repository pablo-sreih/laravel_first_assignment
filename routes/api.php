<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'sayHi'])->name("say-hi");
Route::get('/bye', [TestController::class, 'sayBye'])->name("say-bye");
Route::get('/time', [TestController::class, 'time'])->name("display-time");
Route::get('/palindrome', [TestController::class, 'palindrome'])->name("count-palindrome");
Route::get('/students', [TestController::class, 'students'])->name("two-students-group");
Route::get('/nominee', [TestController::class, 'nominee'])->name("nominee");