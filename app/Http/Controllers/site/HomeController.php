<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Gallary;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate();
        $doctors=Doctor::paginate(4);
        $services=Service::paginate();
        $clients=Client::all();
        $settings=Setting::first();
        $gallaries=Gallary::paginate(4);

        return view('site/index',[
            'sliders' => $sliders,
            'doctors' => $doctors,
            'services' => $services,
            'clients' => $clients,
            'settings' => $settings,
            'gallaries'=> $gallaries
        ]);
    }
    public function service($id)
    {
        $gallaries=Gallary::paginate(4);
        $doctors=Doctor::paginate(4);
        $settings=Setting::first();
        $service=Service::first();
        return view('site/services',[
            'service' => $service,
            'doctors' => $doctors,
            'settings' => $settings,
            'gallaries' => $gallaries,
        ]);
    }

    public function contacts()
    {
        $gallaries=Gallary::paginate(4);
        $doctors=Doctor::paginate(4);
        $settings=Setting::first();
        return view('site/contact',[
            'settings'=> $settings,
            'doctors' => $doctors,
            'gallaries' => $gallaries,
        ]);
    }
    public function store()
    {
        return view('site/contact');
    }
}
