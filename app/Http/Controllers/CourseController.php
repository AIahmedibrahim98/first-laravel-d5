<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // dd(Course::where('id','<',50)->orderBy('id','desc')->get());
/*         $course = new Course();
        $course->name = 'PHP';
        $course->start_date = date('Y-m-d');
        $course->end_date = '2023-04-19';
        $course->start_time = '13:00:00';
        $course->end_time = '15:00:00';
        $course->type = 'private';
        $course->save();

        $course = Course::find(502);
        $course->name = 'Mysql';
        $course->start_date = date('Y-m-d');
        $course->end_date = '2023-04-19';
        $course->start_time = '13:00:00';
        $course->end_time = '15:00:00';
        $course->type = 'private';
        $course->save(); */
        /* Course::create([
            'name'=>'C#',
            'start_date'=>date('Y-m-d'),
            'end_date'=>'2023-05-19',
            'start_time'=>'15:00:00',
            'end_time'=>'18:00:00',
            'type'=>'private',
        ]); */
        /* Course::find(504)->update([
            'name'=>'C# 1234',
        ]); */
        $course_ids = Course::where('id','>=',400)->pluck('id')->toArray();
        // dd($course_ids);
        /* Course::whereIn('id',$course_ids)->update([
            'name'=>'PHP 1234',
        ]); */
        Course::destroy($course_ids);
        echo "<hr>";
        $courses = Course::orderBy('id','desc')->get();
        foreach ($courses as $course) {
            echo "<hr>";
            echo "<ul>";
            echo "<li>ID : $course->id</li>";
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
