<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import User model
use App\Models\Service;



class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function blog_col_1()
    {
        return view('blog-col-1');
    }

    public function blog_col_2()
    {
        return view('blog-col-2');
    }

    public function blog_details_2()
    {
        return view('blog-details-2');
    }

    public function blog_details()
    {
        return view('blog-details');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        $user = User::all();
        logger($user);
        return view('index');
    }

    public function service_details(Request $request)
    {
        $service = Service::find($request->id);
        if (!$service) {
            abort(404, 'Service not found');
        }
        return view('service-details', compact('service'));
    }

    public function service()
    {
        return view('service');
    }

    public function team_details()
    {
        return view('team-details');
    }
}
