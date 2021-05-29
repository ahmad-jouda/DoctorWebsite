<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Gallary;
use App\Models\Service;
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
        $doctors=Doctor::all();
        $services=Service::all();
        $clients=Client::all();
        $contacts = Contact::all();
        $appointments = Appointment::all();
        $gallaries = Gallary::all();
        $countDoctor=count($doctors);
        $countService=count($services);
        $countClient=count($clients);
        $countContact=count($contacts);
        $countAppointment=count($appointments);
        $countGallary=count($gallaries);
        
        return view('admin.dashborad.index',[
            'countDoctor'=>$countDoctor,
            'countService'=>$countService,
            'countClient' => $countClient,
            'countContact' =>$countContact,
            'countAppointment' => $countAppointment,
            'countGallary' => $countGallary,
            
        ]);
    }

}
