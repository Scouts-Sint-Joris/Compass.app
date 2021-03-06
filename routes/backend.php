<?php 

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Backend routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web" middleware group. Enjoy building your backend!
|
*/

Route::get('/home', 'HomeController@index')->name('home');

// Users 
Route::get('users', 'Backend\Web\UsersController@index')->name('users.index');
Route::get('users/create', 'Backend\Web\UsersController@create')->name('users.create');
Route::post('users/store', 'Backend\Web\UsersController@store')->name('users.store');

// Helpdesk routes
Route::get('helpdesk/dashboard', 'Backend\Web\Helpdesk\IndexController@index')->name('helpdesk.index');

// Helpdesk ticket routes 
Route::get('helpdesk/ticket/create', 'Backend\Web\Helpdesk\IndexController@create')->name('helpdesk.ticket.create');
Route::get('helpdesk/ticket/show/{ticket}', 'Backend\Web\Helpdesk\IndexController@show')->name('helpdesk.ticket.show');
Route::post('helpdesk/ticket/create', 'Backend\Web\Helpdesk\IndexController@store')->name('helpdesk.ticket.store');

Route::post('helpdesk/ticket/comment/{ticket}', 'Backend\Web\Helpdesk\CommentController@store')->name('helpdesk.ticket.comment');

// Comment routes
Route::get('comment/delete/{comment}', 'Backend\Web\Helpdesk\CommentController@destroy')->name('comment.delete');

// Helpdesk categories routes
Route::get('helpdesk/categories', 'Backend\Web\Helpdesk\Config\CategoryController@index')->name('helpdesk.categories.index');
Route::get('helpdesk/categories/create', 'Backend\Web\Helpdesk\Config\CategoryController@create')->name('helpdesk.categories.create');
Route::get('helpdesk/categories/edit/{category}', 'Backend\Web\Helpdesk\Config\CategoryController@edit')->name('helpdesk.categories.edit');
Route::patch('helpdesk/categories/edit/{category}', 'Backend\Web\Helpdesk\Config\CategoryController@update')->name('helpdesk.categories.update');
Route::post('helpdesk/categories/create', 'Backend\Web\Helpdesk\Config\CategoryController@store')->name('helpdesk.categories.store');
Route::get('helpdesk/categories/undo/{category}', 'Backend\Web\Helpdesk\Config\CategoryController@undoDeleteRoute')->name('helpdesk.categories.undo');
Route::get('helpdesk/categories/delete/{category}', 'Backend\Web\Helpdesk\Config\CategoryController@destroy')->name('helpdesk.categories.delete');

// Helpdesk priorities routes 
Route::get('helpdesk/priorities', 'Backend\Web\Helpdesk\Config\PriorityController@index')->name('helpdesk.priorities.index');
Route::get('helpdesk/priorities/create', 'Backend\Web\Helpdesk\Config\PriorityController@create')->name('helpdesk.priorities.create');
Route::get('helpdesk/priorities/edit/{priority}', 'Backend\Web\Helpdesk\Config\PriorityController@edit')->name('helpdesk.priorities.edit');
Route::get('helpdesk/priorities/delete/{priority}', 'Backend\Web\Helpdesk\Config\PriorityController@destroy')->name('helpdesk.priorities.delete');
Route::get('Helpdesk/Priorities/undo/{priority}', 'Backend\Web\Helpdesk\Config\PriorityController@undo')->name('helpdesk.priorities.undo');
Route::post('helpdesk/priorities/store', 'Backend\Web\Helpdesk\Config\PriorityController@store')->name('helpdesk.priorities.store');
