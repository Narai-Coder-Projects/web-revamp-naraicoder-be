<?php

use App\Models\Article;
use App\Models\City;
use App\Models\Province;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return
    [
        'Laravel' => app()->version(),
        City::all(),
    ];
});

require __DIR__.'/auth.php';
