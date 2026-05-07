<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('livewire.pages.courses.events');
    }

    public function show()
    {
        return view('livewire.pages.courses.events-detail');
    }
}
