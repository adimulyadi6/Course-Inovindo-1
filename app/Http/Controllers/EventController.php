<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $featuredEvent = Event::latest()->first();

        $events = Event::latest()
            ->skip(1)
            ->take(10)
            ->get();
            
        return view('livewire.pages.courses.events', compact('featuredEvent', 'events'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)
            ->firstOrFail();
        return view('livewire.pages.courses.events-detail', compact('event'));
    }
}
