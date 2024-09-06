<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importando CatFactsController
use App\Http\Controllers\CatFactsController;

Route::apiResource('cats', CatFactsController::class);

Route::get('healthcheck', function(Response $response) {
    // Retorna 200
});
