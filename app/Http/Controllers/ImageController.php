<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Images;

class ImageController extends Controller
{
    public function index()
    {
        $image = Image::whereId('3')->first();
        return view('image', compact('image'));
    }

    public function post(Request $request)
    {
        $image = $request->file('image');

        $fileName = $image->getClientOriginalName();

        Images::make($image)->resize(200,200)->save('images/' .$fileName);

        $save = new Image;

        $save->image = $fileName;
        $save->save();

        return redirect()->back();
    }
}
