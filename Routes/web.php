<?php

foreach(user_routes() as $prefix){

    Route::prefix($prefix)->group(function() {
        Route::resource('timetrack', ProjectsController::class);
    });
}
