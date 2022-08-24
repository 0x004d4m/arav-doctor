<?php

use App\Http\Controllers\Web\General\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/Language', [LanguageController::class, 'change']);
