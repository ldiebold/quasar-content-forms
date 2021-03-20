<?php

use App\Http\Controllers\BlogFormController;
use App\Http\Controllers\ExtensionFeatureFormController;
use App\Http\Controllers\NewExtensionFormController;
use App\Http\Controllers\NewsFormController;
use App\Http\Controllers\OtherFormController;
use App\Http\Controllers\ShowcaseFormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::apiResource('/blog-forms', BlogFormController::class);
Route::apiResource('/new-extension-forms', NewExtensionFormController::class);
Route::apiResource('/extension-feature-forms', ExtensionFeatureFormController::class);
Route::apiResource('/showcase-forms', ShowcaseFormController::class);
Route::apiResource('/news-forms', NewsFormController::class);
Route::apiResource('/other-forms', OtherFormController::class);
