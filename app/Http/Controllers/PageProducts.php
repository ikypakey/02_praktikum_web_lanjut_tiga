<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageProducts extends Controller
{
    public function marble(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function storyBooks(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    public function kidsSong(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
