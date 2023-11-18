<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donald Trump";
        $age = "75";

        
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        
        \Illuminate\Support\Facades\Cookie::make($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        return response()->json($data)->cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
