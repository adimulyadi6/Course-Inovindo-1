<?php

namespace App\Http\Controllers;


class CourseController extends Controller
{
    public function index()
    {
        return view('livewire.pages.courses.page-course');
    }

    public function show($id)
    {
        $courses = [

            1 => [
                'title' => 'Video Editing Mastery',
                'lessons' => 174,
            ],

            2 => [
                'title' => 'Generative AI',
                'lessons' => 90,
            ],

            3 => [
                'title' => 'Welcome Checklist',
                'lessons' => 20,
            ],

            4 => [
                'title' => 'AI-Driven Content Creation',
                'lessons' => 50,
            ],

        ];

        $course = $courses[$id];

        return view('dashboard', compact('course', 'id'));
    }

    public function video($id)
    {
        $courses = [

            1 => [
                'title' => 'Video Editing Mastery',
            ],

            2 => [
                'title' => 'Generative AI',
            ],

            3 => [
                'title' => 'Welcome Checklist',
            ],

            4 => [
                'title' => 'AI-Driven Content Creation',
            ],

        ];

        $course = $courses[$id];

        return view(
            'livewire.pages.courses.video-course',
            compact('course', 'id')
        );
    }
}
