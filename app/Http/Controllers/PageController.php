<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        $projects = [
            ['title' => 'Project One', 'description' => 'Description of project one.'],
            ['title' => 'Project Two', 'description' => 'Description of project two.'],
            ['title' => 'Project Three', 'description' => 'Description of project three.'],
        ];

        return view('projects', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        // هنا مجرد محاكاة ارسال بيانات، بدون تخزين
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
