<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::get();
        foreach ($courses as $course) {
            echo "<hr>";
            echo "<ul>";
            echo "<li>name : $course->name</li>";
            echo "<li>start date : $course->start_date</li>";
            echo "<li>end date : $course->end_date</li>";
            echo "<li>start time : $course->start_time</li>";
            echo "<li>end time : $course->end_time</li>";
            echo "<li>type : $course->type</li>";
            echo "<li>created at : $course->created_at</li>";
            echo "<li>updated at : $course->updated_at</li>";
            echo "</ul>";
            echo "</hr>";
        }
    }
}
