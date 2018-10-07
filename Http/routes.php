<?php

foreach(['my', 'admin'] as $prefix){

    Route::group([
        'prefix'        => $prefix,
        'middleware'    => ['web', 'Admin'],
        'namespace'     => 'Admin\TimeTracker\Http\Controllers'],
        function(){
            Route::resource('timetrack', TimeTrackerController::class);
        });
}
