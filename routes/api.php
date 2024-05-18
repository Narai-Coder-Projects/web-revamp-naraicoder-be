<?php

use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\MemberController;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\CommentReplyController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\OrganizationController;
use App\Http\Controllers\API\PartnerController;
use App\Http\Controllers\API\VideoController;
use App\Http\Controllers\API\SocialMediaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/about', [AboutController::class, 'index']);

Route::prefix('/articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::post('/', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('articles.show');
    Route::put('/{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
});

Route::prefix('/members')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('members.index');
    Route::post('/', [MemberController::class, 'store'])->name('members.store');
    Route::get('/{id}', [MemberController::class, 'show'])->name('members.show');
    Route::put('/{id}', [MemberController::class, 'update'])->name('members.update');
    Route::delete('/{id}', [MemberController::class, 'destroy'])->name('members.destroy');
});

Route::prefix('/comments')->group(function () {
    Route::get('/', [CommentController::class, 'index'])->name('comments.index');
    Route::post('/', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/{id}', [CommentController::class, 'show'])->name('comments.show');
    Route::put('/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::prefix('/comment-replies')->group(function () {
        Route::get('/', [CommentReplyController::class, 'index'])->name('comment-replies.index');
        Route::post('/', [CommentReplyController::class, 'store'])->name('comment-replies.store');
        Route::get('/{id}', [CommentReplyController::class, 'show'])->name('comment-replies.show');
        Route::put('/{id}', [CommentReplyController::class, 'update'])->name('comment-replies.update');
        Route::delete('/{id}', [CommentReplyController::class, 'destroy'])->name('comment-replies.destroy');
    });
});

Route::prefix('/events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::post('/', [EventController::class, 'store'])->name('events.store');
    Route::get('/{id}', [EventController::class, 'show'])->name('events.show');
    Route::put('/{id}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/{id}', [EventController::class, 'destroy'])->name('events.destroy');
});

Route::prefix('/organizations')->group(function () {
    Route::get('/', [OrganizationController::class, 'index'])->name('organizations.index');
    Route::post('/', [OrganizationController::class, 'store'])->name('organizations.store');
    Route::get('/{id}', [OrganizationController::class, 'show'])->name('organizations.show');
    Route::put('/{id}', [OrganizationController::class, 'update'])->name('organizations.update');
    Route::delete('/{id}', [OrganizationController::class, 'destroy'])->name('organizations.destroy');
});

Route::prefix('/partners')->group(function () {
    Route::get('/', [PartnerController::class, 'index'])->name('partners.index');
    Route::post('/', [PartnerController::class, 'store'])->name('partners.store');
    Route::get('/{id}', [PartnerController::class, 'show'])->name('partners.show');
    Route::put('/{id}', [PartnerController::class, 'update'])->name('partners.update');
    Route::delete('/{id}', [PartnerController::class, 'destroy'])->name('partners.destroy');
});

Route::prefix('/videos')->group(function () {
    Route::get('/', [VideoController::class, 'index'])->name('videos.index');
    Route::post('/', [VideoController::class, 'store'])->name('videos.store');
    Route::get('/{id}', [VideoController::class, 'show'])->name('videos.show');
    Route::put('/{id}', [VideoController::class, 'update'])->name('videos.update');
    Route::delete('/{id}', [VideoController::class, 'destroy'])->name('videos.destroy');
});

Route::prefix('/social-medias')->group(function () {
    Route::get('/', [SocialMediaController::class, 'index'])->name('social-medias.index');
    Route::post('/', [SocialMediaController::class, 'store'])->name('social-medias.store');
    Route::get('/{id}', [SocialMediaController::class, 'show'])->name('social-medias.show');
    Route::put('/{id}', [SocialMediaController::class, 'update'])->name('social-medias.update');
    Route::delete('/{id}', [SocialMediaController::class, 'destroy'])->name('social-medias.destroy');
});

Route::get('/provinces', function () {
    return response()->json([
        'provinces' => App\Models\Province::all(),
    ]);
});

Route::get('/cities', function () {
    return response()->json([
        'cities' => App\Models\City::all(),
    ]);
});
