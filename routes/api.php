<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', function () {
 return response()->json([
     'articles' => App\Models\Article::all(),
 ]);
});

Route::get('/about', function () {
    return response()->json([
        'about' => App\Models\About::find(1),
    ]);
});

Route::get('/members', function () {
    return response()->json([
        'members' => App\Models\Member::all(),
    ]);
});

Route::get('/comments', function () {
    return response()->json([
        'comments' => App\Models\Comment::all(),
    ]);
});

Route::get('/comment-replies', function () {
    return response()->json([
        'comment-replies' => App\Models\CommentReply::all(),
    ]);
});

Route::get('/events', function () {
    return response()->json([
        'events' => App\Models\Event::all(),
    ]);
});

Route::get('/organizations', function () {
    return response()->json([
        'organizations' => App\Models\Organization::all(),
    ]);
});

Route::get('/partners', function () {
    return response()->json([
        'partners' => App\Models\Partner::all(),
    ]);
});

Route::get('/provinces', function () {
    return response()->json([
        'provinces' => App\Models\Province::all(),
    ]);
});

Route::get('/social-media', function () {
    return response()->json([
        'social-media' => App\Models\SocialMedia::all(),
    ]);
});

Route::get('/videos', function () {
    return response()->json([
        'videos' => App\Models\Video::all(),
    ]);
});

Route::get('/cities', function () {
    return response()->json([
        'cities' => App\Models\City::all(),
    ]);
});



