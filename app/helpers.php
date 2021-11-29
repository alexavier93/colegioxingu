<?php

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

if (!function_exists('get_youtubeid')) {

    function get_youtubeid($url)
    {

        $ytcheck = preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $data);

        if ($ytcheck) {
            $id_video = $data[1];
        }
        return $id_video;
    }
}

if (!function_exists('get_link')) {

    function get_link($url)
    {

        $disallowed = array('http://', 'https://');
        
        foreach ($disallowed as $d) {
            if (strpos($url, $d) === 0) {
                return str_replace($d, '', $url);
            }
        }

        return $url;

    }
}

if (!function_exists('uploadImageThumbnail')) {

    function uploadImageThumbnail($image, $dir, $img_width, $img_height)
    {

        $hash = str_replace('.', '', str_replace('/', '', Hash::make('&U%v3#tBcpeA%0Rs')));

        $input['thumbnail'] = $hash . '_thumbnail.' . $image->extension();
        $input['image'] = $hash . '.' . $image->extension();

        $filePath = public_path('storage/' . $dir);

        $img = Image::make($image->path());

        $img->fit($img_width, $img_height, function ($const) {
            $const->aspectRatio();
        })->save($filePath . '/' . $input['thumbnail']);

        $image->move($filePath, $input['image']);

        $data['image'] = $dir . $input['image'];
        $data['thumbnail'] = $dir . $input['thumbnail'];

        return $data;
    }
}
