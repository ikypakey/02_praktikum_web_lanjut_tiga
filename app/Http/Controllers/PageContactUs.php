<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContactUs extends Controller
{
    public function aboutUs(){
        return redirect('https://www.educastudio.com/about-us');
    }
}
