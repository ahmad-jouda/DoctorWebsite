<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request= request();
        $filters = $request->query();

        $appointments = Appointment::when($request->query('name'),function($query,$name){
            $query->where('name','LIKE', '%'. $name . '%'); })
            ->when($request->query('age'),function($query,$age){
                $query->where('age','LIKE', '%'.$age. '%'); })
            ->when($request->query('gender'),function($query,$gender){
                $query->where('gender','LIKE', '%'.$gender. '%'); })
            ->when($request->query('phone'),function($query,$phone){
                $query->where('phone','LIKE', '%'.$phone. '%'); })
            ->paginate();

        return view('admin.appointments.index',[
            'appointments' => $appointments,
            'filters'=>$filters,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'email' =>'required|email',
            'phone' => 'required',
            'message' => 'required|min:10|max:100'
        ]);
        
        $data = $request->all();
        
        $appointment=Appointment::create($data);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);


        return view('admin.appointments.show',[
            'appointment' => $appointment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
       
        return view('admin.appointments.edit', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $request->validate([
            'name'=>'required|max:255',
            'email' =>'required|email',
            'phone' => 'required',
            'message' => 'required|min:10|max:100'
        ]);

        $data = $request->all();

        $appointment->update($data);
        
        return redirect()
        ->route('admin.appointments.index')
        ->with('success',"Appointment {$appointment->name} Update!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        
        return redirect()
        ->route('admin.appointments.index')
        ->with('success',"Appointment {$appointment->name} Delete!");
    }

    public function deleteall(Request $request){
        $ids = $request->get('ids');
        foreach ($ids as $id) {
            $appointment = Appointment::findOrFail($id);
            if ($appointment->image) {
                Storage::disk('images')->delete($appointment->image);
            }
        }
        $ids = DB::delete('delete from appointments where id in ('.implode(",",$ids).')');
        return redirect()->route('admin.appointments.index');
    }
}
