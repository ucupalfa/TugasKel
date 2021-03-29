<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class controllerStudent extends Controller
{
    // protected $table = "student";
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = student::all();
        return view('student', ['list' => $data]);
    }
}
