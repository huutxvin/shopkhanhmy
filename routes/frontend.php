<?php  
Route::group(['namespace' => 'Frontend'], function() {
    Route::get('/','HomeController@getHome');
    Route::get('sanpham/{id}/{slug}', 'ProductController@getDetail');
    Route::post('sanpham/{id}/{slug}', 'CommentsController@postComments');
    Route::get('danhmuc/{id}/{slug}', 'CategoryController@getCategory');
    Route::get('search', 'SearchController@getSearch');
    Route::group(['prefix'=>'cart'], function(){
    	Route::get('add/{id}', 'CartController@getAddCart');
    	Route::get('show', 'CartController@getShowCart');
    	Route::post('show', 'CartController@postComplete');
    	Route::get('delete/{id}', 'CartController@getDeleteCart');
    	Route::get('update', 'CartController@getUpdateCart');
    	Route::get('email', 'CartController@getEmail');
    });
    Route::get('complete','CartController@getComplete');
});

?>