<?php

use Intervention\Image\Facades\Image;

function generalResponse($status , $message , $data , $status_code = 200) {
    $data = [
        'status' => $status ,
        'message' => $message ,
        'data' => $data ,
    ];
    return $data;
}
function responseJson($status , $message , $data , $status_code = 200) {
    return response()->json(generalResponse($status , $message , $data , $status_code) , $status_code);
}
 function generate_code(){
    $digits = 6;
    return str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
}
function upload($folder, $image,$width=1400,$height=400)
{



    $originalImage = $image;
    $thumbnailImage = Image::make($originalImage);
    $thumbnailPath = 'assets/images/sliders/';
    $thumbnailImage->resize($width, $height);
    $image = $thumbnailPath . time() . $originalImage->getClientOriginalName();
    $thumbnailImage->save($image);

    return $image;

}

function get_order_number()
{
    $rand = rand(10000,99999);
    $unique =  $rand;
    return $unique;
}

function confirm_order_status_hash(){

    $today = date("Ymd");
    $rand = strtoupper(substr(uniqid(sha1(time())), 0, 50));
    $unique = $today . $rand;
    return $unique;
}
