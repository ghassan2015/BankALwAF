<?php

use App\Models\Country;
use App\Models\ShoppingCartDetail;
use App\Models\Tax;
use Illuminate\Support\Facades\Auth;

function getPath($folder, $full_path = true, $default_image = "default.png")
{
    return $full_path ? ($folder != '' ? url("uploads/$folder/$default_image") : url("uploads/$default_image")) : "$folder/" . $default_image;
}

function getMultiLangField($default_value = '')
{
    $data = [];
    foreach (config('app.locales') as $locale) {
        $data[$locale] = $default_value;
    }
    return $data;
}

function checkCanFilter($attribute)
{
    return !is_null($attribute) && $attribute != -1;
}

// check role
function checkAdminRole($role)
{
    $admin = Auth::guard('admin')->user();
    if ($admin->is_super == 1) return true;
    return $admin->hasPermissions($role);
}

function returnData($key, $value, $num = 200, $msg = "")
{
    return response()->json([
        'status' => true,
        'statusNumber' => $num,
        'msg' => $msg,
        $key => $value
    ]);
}

function response_api($status, $message, $data, $status_code = 200)
{
    $response = [];
    $response['status'] = $status;
    $status_code_ = !$status && $status_code == 200 ? 422 : $status_code;
    $response['code'] = $status_code_;
    $response['message'] = $message;
//    if ($status) {
    $response = $response + $data;
//    }


    return response()->json($response, $status_code_);

}

function reverse_convert_currency($price, $currency_data = null)
{
    if (isset($currency_data) && !is_null($currency_data)) {
        return round($price * $currency_data['exchange_rate'], round_digit());
    } else {
        return round($price, round_digit());
    }
}





