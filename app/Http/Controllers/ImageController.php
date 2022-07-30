<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{

    public function destroy($id)
    {
        // find the contact
        $image = Image::findOrFail($id);

        // Croppa::delete($image->path);

        // delete the entry from the DB
        $image->delete();

        session()->flash('success_message', 'Success, image deleted!');

        return redirect()->back();

        // redirect to the list of available contacts
        // return redirect( route('image-index') );
    }
}
