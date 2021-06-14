<?php

use Illuminate\Http\Request;
use App\Property;
use App\Type;
use App\Review;


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

Route::get('/', function (Request $request) {
    $properties = Property::all();
    
    if ($request->sortBy){
        $properties = $properties->sortByDesc(function($value, $key) {
            return $value->averageRating();
        });
    }

    $types = Type::all();
    return view('welcome', ['properties' => $properties, 'types' => $types]);
});

Route::get('/property/{property}', function (Property $property) {
    return view('property', ['property' => $property]);
});

Route::post('/review/{id}', function (Request $request, $id) {
    $input = $request->all();
        
    $review = Review::create([
        'rating' => $input['rating'],
        'review' => $input['review'],
        'property_id' => $id,
    ]);

    return back()->withInput();
});