<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{

    public function imageUpload(Request $request)
    {

        $request->validate([
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $image = $request->file('file')->store('uploads', 'public');

        $img = asset('storage/'.$image);

        if($image){
            echo $img; //change this URL
        }else{
            echo $message = 'Ooops!  Your upload triggered the following error';
        }

    }


    public function deleteImage(Request $request)
    {
        $image = $request->src;

        $image = explode("storage", $image);
        
        if (Storage::disk('public')->exists($image[1])) {
            Storage::disk('public')->delete($image[1]);
        }

    }
}
