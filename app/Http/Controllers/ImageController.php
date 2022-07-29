<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    // public function display($id)
    // {
    //   $image = findOrFail;
    // }

    // public function store(Request $request)
    // {
    //   $image_name = $request->file('uploaded_file')->getClientOriginalName();

    //   $request->file('uploaded_file')->move(
    //     storage_path('images'), 
    //     $image_name
    // );

    //     $image = new Image;

    //     $image->path = '/images/'.$image_name;
        
    //     $image->name = $request->name ?? null;

    //     $image->save();

    //     session()->flash('success_message', 'Success, image added!');

    //     // // redirects to the list of contacts
    //     // return redirect(route('image-index'));
    // }

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
