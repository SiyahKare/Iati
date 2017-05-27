<?php
Route::get('iati', function(){
    $data = $this->API->get('/rest/test/sample/' . env('IATI_AUTH_CODE'));
    return view('iati.list', $data);
});