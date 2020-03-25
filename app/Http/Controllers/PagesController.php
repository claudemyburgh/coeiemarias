<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DesignByCode\Admin\Models\Gallery;
use DesignByCode\Admin\Models\Category;

class PagesController extends Controller
{

    /**
     * Welcome view
     * @return view for welcome page
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * About view
     * @return view for about page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Contact view
     * @return view for contact page
     */
    public function contact()
    {
        return view('contact');
    }


    /**
     * Services view
     * @return view for services page
     */
    public function services()
    {
        $services = Category::get();

        return view('services', compact('services'));
    }

    /**
     * Gallery view
     * @return view for gallery page
     */
    public function gallery( )
    {
        $galleries = Gallery::with('media')->get();

        return view('gallery', compact('galleries'));
    }

}
