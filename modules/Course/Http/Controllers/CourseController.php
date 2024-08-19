<?php

namespace Course\Http\Controllers;

class CourseController
{
    public function showCoursePage()
    {
        return view('CourseViews::course');
    }
}
