<?php

namespace App\Http\Controllers;

use App\Models\Backend;
use App\Models\Graphics;
use Illuminate\Http\Request;
use App\Models\Frontend;

class PagesController extends Controller
{
  
    public function frontend(){
        $details = Frontend::get();
        return view('pages.programmes.frontend', compact('details'));

    }


    
    public function backend(){
        $details = Backend::get();
        return view('pages.programmes.backend', compact('details'));
    }

    
    public function digital(){
        return view('pages.programmes.digitmarket');
    }
    
    public function graphics(){
        $details = Graphics::get();
        return view('pages.programmes.graphics', compact('details'));
    }

    public function aboutus(){
        return view('pages.aboutus.aboutus');
    }

    public function faq(){
        return view('pages.FAQ.FAQ');
    }

    public function index(){
      
    }


}
