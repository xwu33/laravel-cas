<?php



Route::get('captcha-form', 'RegisterController@captchForm');
// Route::post('store-captcha-form', 'RegisterController@create');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return cas()->authenticate();
// });
//
Route::middleware('cas.auth')->get('/logout', function () {
    cas()->logout();
    return view('home');
});
//
// Route::middleware('cas.auth')->get('/user', function () {
//     //return Route::get('/select','SelectController@select')->name('select');
//        //return cas()->user();
//        return view('select');
//        //return cas()->getCurrentUser();
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', 'UserController@index')->name('admin.users.index');
        Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
    });
});


Route::get('/access','AccessController@access')->name('access');
Route::get('/link','AccessController@link')->name('link');
Route::get('/select','AccessController@select')->name('select');
Route::get('/user','Auth\LoginController@loginCas');
// Route::post('/link', 'Auth\RegisterAccountController@register')->name('link');
// Route::post('/link', 'Auth\RegisterController@register')->name('link');


//error messages
Route::get('/errors/perms/site', function() {
  return view('/errors/perms/site');
})->name('errors.perms.site');

Route::get('/errors/perms/resource', function() {
  return view('/errors/perms/resource');
})->name('errors.perms.resource');

Route::get('/errors/pending', function() {
  return view('/errors/pending');
})->name('errors.pending');

Route::get('/errors/isLocal', function() {
  return view('/errors/isLocal');
})->name('errors.isLocal');

Route::get('/errors/isCas', function() {
  return view('/errors/isCas');
})->name('errors.isCas');

Route::get('/errors/requestReceived', function() {
  return view('/errors/requestReceived');
})->name('errors.requestReceived');

Route::get('/errors/duplicateRequest', function() {
  return view('/errors/duplicateRequest');
})->name('errors.duplicateRequest');
