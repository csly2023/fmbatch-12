<?php


namespace App\classes;

use App\classes\Blog;
use App\classes\Slider;


class Home
{
    public $blog, $blogs, $slider, $sliders, $slide;

    public function index()
    {
        $this->blog = new Blog();
        $this->blogs = $this->blog->getAllBlog();
        $this->slider = new Slider();
        $this->sliders = $this->slider->getAllSliderData();
        return view('home', ['blogs' => $this->blogs, 'sliders' => $this->sliders]);

    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail($id)
    {
        $this->slider = new Slider();
        $this->slide = $this->slider->getSliderById($id);
        return view('detail', ['slide' => $this->slide]);
    }

}