<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Products;

class productsController extends Controller
{
    public function store(Request $request){
        $imgPath = "";
        if($request->hasFile('image')){
            $file_name = time() . '_' . 'IMG';
            $imgPath = $request->file('image')->storeAs("photos", $file_name, "public");

            Products::create([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image' => '/storage/' . $imgPath,
                'categories_id' => $request->categ,
            ]);
        }
        

        return Redirect::route('home');

    }
}
