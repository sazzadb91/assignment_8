<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "sazzad";
        $age = "32";

        // Create data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Create a cookie
        $cookie = cookie('access_token', '123-XYZ', 1, '/', $_SERVER['SERVER_NAME'], false, true);

        // Return the response with status code 200 and the cookie
        return response($data)->cookie($cookie)->setStatusCode(200);
    }
}
