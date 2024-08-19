<?php

namespace Blog\Http\Controllers;

class BlogController
{
    public function showBlogPage()
    {
        return view('BlogViews::blog');
    }
}
