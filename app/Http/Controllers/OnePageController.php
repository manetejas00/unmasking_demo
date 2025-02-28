<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Service;
use App\Models\CustomersCount;
use App\Models\WorkProcess;
use App\Models\AboutSection;
class OnePageController extends Controller
{
    public function onePage_one()
    {
        return view('OnePage/onepage_one');
    }

    public function onePage_two()
    {
        return view('OnePage/onepage_two');
    }

    public function onePage_three()
    {
        return view('OnePage/onepage_three');
    }

    public function onePage_four()
    {
        return view('OnePage/onepage_four');
    }

    public function onePage_five()
    {
        return view('OnePage/onepage_five');
    }

    public function onePage_six()
    {
        return view('OnePage/onepage_six');
    }

    public function onePage_seven()
    {
        $banners = Banner::latest()->limit(3)->get();
        $services = Service::latest()->limit(3)->get();
        $customersCounts = CustomersCount::all(); // Fetch all customer count data
        $workProcesses = WorkProcess::orderBy('step_number')->get();
        $about = AboutSection::first();
        return view('OnePage/onepage_seven', compact('banners', 'services', 'customersCounts','workProcesses','about'));
    }




    public function onePage_eight()
    {
        return view('OnePage/onepage_eight');
    }
}
