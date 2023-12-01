<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function saveImage($image, $name)
    {
        $name = $name . "." . $image->getClientOriginalExtension();
        $filename = time() . "-" . $name;
        $image->move(public_path('/images'), $filename);
        return 'images/' . $filename;
    }
}
