<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\ReviewController; 

Route::get('/restaurants/{id?}', [RestaurantsController::class, 'getAllRestaurants']);
Route::post('/add_restaurants', [RestaurantsController::class, 'addRestaurants']);
Route::get('/search_resto/{name}', [RestaurantsController::class, 'getRestaurantByName']);

Route::post('/sign_up', [UserController::class, 'addUser']);
Route::get('/search_user/{id?}', [UserController::class, 'getUsers']);
Route::get('/login/{email}/{password}', [UserController::class, 'login']);

Route::post('/addReview', [ReviewController::class, 'addReview']);
Route::post('/monitorReview/{user_id}/{restaurant_name}/{state}', [ReviewController::class, 'monitorReview']);
Route::get('/all_reviews', [ReviewController::class, 'getReview']);