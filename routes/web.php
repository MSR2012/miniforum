<?php

Route::get('/signup', 'Auth\RegistrationController@signup');
Route::post('/signup', 'Auth\RegistrationController@postSignup');
Route::get('/verify', 'Auth\RegistrationController@verify');

Route::get('/signin', ['as' => 'login', 'uses' => 'Auth\SessionController@signin']);
Route::post('/signin', 'Auth\SessionController@postSignin');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', function () {
        return redirect('/topics/0');
    });
    
    Route::get('topics/{category_id}', 'TopicController@getTopics');
    Route::get('topics/view/{topic_id}', 'TopicController@viewTopic');
    Route::post('topics/view/{topic_id}', 'TopicController@postTopicReply');
    
    Route::resource('my_topics', 'MyTopicController');

    Route::get('/signout', 'Auth\SessionController@signout');
});
