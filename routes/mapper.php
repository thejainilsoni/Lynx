<?php

use Lynx\System\Router\Route;

use App\Controllers\HomeController;

Route::get("test",[HomeController::class, "index"]);

