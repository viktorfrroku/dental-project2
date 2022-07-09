<?php 
require_once "./classes/Route.php";

Route::set('Home', function() {
   
    });

Route::set('Contact', function() {
    Contact::CreateView('Contact');
    Contact::sentEmail();
    });

Route::set('AboutUs', function() {
    AboutUs::CreateView('AboutUs');
    });
Route::set('Services', function() {

   Services::CreateView('Services');
});
Route::set('Dental-Turism', function() {
    DentalTurism::CreateView('Dental-Turism');
});
Route::set('Home', function() {
    Home::CreateView('Home');
});
Route::set('Turism', function() {
    Turism::CreateView('Turism');
});