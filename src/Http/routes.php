<?php
Route::get('iati/test', function () {
    return 'Test';
});

Route::get('iati/hello', function () {
    return Iati::hello();
});
