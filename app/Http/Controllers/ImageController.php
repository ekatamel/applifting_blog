<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{

    public function destroy($id)
    {
        // Find the image in DB
        $image = Image::findOrFail($id);

        // Delete teh image from DB
        $image->delete();

        session()->flash('success_message', 'Success, image deleted!');

        return redirect()->back();

    }
}
