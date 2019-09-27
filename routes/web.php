<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('register', function(){
    return redirect()->route('login')->with('msg','Log in to use this system');
})->name('auth.register');

Route::get('student', function () {
    return view('student.index');
})->name('student.index');

Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){

    Route::get('',[
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index',
    ]);

    Route::get('issue', function(){
        return view('book.issue');
    })->name('book.issue');

    Route::post('issue',[
        'uses' => 'AdminController@postIssue',
        'as' => 'book.issue',
    ]);

    Route::get('return', function(){
        return view('book.return');
    })->name('book.return');

    Route::post('return',[
        'uses' => 'AdminController@postReturn',
        'as' => 'book.return',
    ]);

    Route::get('status', function(){
        return view('book.status');
    })->name('book.status');
    
    Route::post('status',[
        'uses' => 'AdminController@getList',
        'as' => 'book.status',
    ]);

    Route::get('search', function(){
        return view('book.search');
    })->name('book.search');

});
