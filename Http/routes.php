<?php

foreach(['my', 'admin'] as $prefix){

    Route::group([
        'prefix'        => $prefix,
        'middleware'    => ['web', 'Admin'],
        'namespace'     => 'Admin\Timetrack\Http\Controllers'],
        function(){
            Route::resource('timetrack', TimetrackController::class);
        });
}
