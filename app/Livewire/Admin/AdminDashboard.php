<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Course;
use App\Models\User;

class AdminDashboard extends Component
{
    public $totalCourses;
    public $totalUsers;

    public function mount()
    {
        $this->totalCourses = Course::count();
        $this->totalUsers = User::count();
    }

    public function render()
    {
        return view('livewire.admin.admin-dashboard');
    }
}
