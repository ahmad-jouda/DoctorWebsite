<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DoctorsController extends Controller
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

        $doctors = Doctor::when($request->query('name'),function($query,$name){
            $query->where('name','LIKE', '%'. $name . '%'); })
            ->when($request->query('created_at'),function($query,$created_at){
                $query->where('created_at','LIKE', '%'.$created_at. '%'); })
            ->paginate();

        return view('admin.doctors.index',[
            'doctors' => $doctors,
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
        return view('admin.doctors.create', [
            'doctor' => new Doctor(),
        ]);
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
            'image' =>'nullable|mimes:jpg,jpeg,bmp,png|max:1024000'
        ]);
        
        $data = $request->except('image');

        $image = $request->file('image');

        if($image && $image->isValid()){
            $data['image']= $image->store('doctors','public');
        }

        $doctor=Doctor::create($data);

        return redirect()->route('admin.doctors.index')->with('success',"Doctor {$doctor->name} Created!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
       
        return view('admin.doctors.edit', [
            'doctor' => $doctor,
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
        $doctor = Doctor::findOrFail($id);
        $request->validate([
            'name'=>'required|max:255',
            'image' =>'nullable|mimes:jpg,jpeg,bmp,png|max:1024000'
        ]);
        $old_image= $doctor->image;

        $data = $request->except('image');

        $image = $request->file('image');

        if($image && $image->isValid()){
            $data['image']= $image->store('doctors','public');
        }
        $doctor->update($data);

        if($old_image && isset($date['image']))
        {
            Storage::disk('public')->delete($old_image);
        }
        return redirect()
        ->route('admin.doctors.index')
        ->with('success',"Doctor {$doctor->name} Update!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        if($doctor->image)
        {
            Storage::disk('public')->delete($doctor->image);
        }
        return redirect()
        ->route('admin.doctors.index')
        ->with('success',"Doctor {$doctor->name} Delete!");
    }

    public function deleteall(Request $request){
        $ids = $request->get('ids');
        foreach ($ids as $id) {
            $doctor = Doctor::findOrFail($id);
            if ($doctor->image) {
                Storage::disk('public')->delete($doctor->image);
            }
        }
        $ids = DB::delete('delete from doctors where id in ('.implode(",",$ids).')');
        return redirect()->route('admin.doctors.index');
    }
}
