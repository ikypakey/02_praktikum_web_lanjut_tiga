<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageAboutUs extends Controller
{
    public function aboutUs(){
        return redirect('https://www.educastudio.com/about-us');
    }
}
