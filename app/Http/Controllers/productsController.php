<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Models\Products;

class productsController extends Controller
{
    public function store(Request $request){
        $imgPath = "";
        if($request->hasFile('image')){
            $file_name = time() . '_' . 'IMG';
            $imgPath = $request->file('image')->storeAs("images", $file_name, "public");

            $url = Storage::url($imgPath);

            Products::create([
                'categories_id' => $request->categ,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image' => $url,
            ]);
        }
        

        return Redirect::route('home');

    }
}
