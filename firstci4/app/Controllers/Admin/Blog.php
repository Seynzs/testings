<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo '<h2> A list of blog posts </h2>';
    }

    public function createNew(){

        return view('blog_form');
        //return view('product');
    }

    public function saveBlog(){
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        //return view('blog_form');
        
    }

    /*protected function adminCheck(){
        echo 'This is a protected area';
    }*/
}
