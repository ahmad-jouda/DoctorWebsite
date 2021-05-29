<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
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

        $services = Service::when($request->query('name'),function($query,$name){
            $query->where('name','LIKE', '%'. $name . '%'); })
            ->when($request->query('created_at'),function($query,$created_at){
                $query->where('created_at','LIKE', '%'.$created_at. '%'); })
            ->paginate();

        return view('admin.services.index',[
            'services' => $services,
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
        return view('admin.services.create', [
            'service' => new Service(),
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
            $data['image']= $image->store('services','public');
        }

        $service=Service::create($data);

        return redirect()->route('admin.services.index')->with('success',"Service {$service->name} Created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.show',[
            'service' => $service,
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
        $service = Service::findOrFail($id);
       
        return view('admin.services.edit', [
            'service' => $service,
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
        $service = Service::findOrFail($id);
        $request->validate([
            'name'=>'required|max:255',
            'image' =>'nullable|mimes:jpg,jpeg,bmp,png|max:1024000'
        ]);
        $old_image= $service->image;

        $data = $request->except('image');

        $image = $request->file('image');

        if($image && $image->isValid()){
            $data['image']= $image->store('services','public');
        }
        $service->update($data);

        if($old_image && isset($date['image']))
        {
            Storage::disk('public')->delete($old_image);
        }
        return redirect()
        ->route('admin.services.index')
        ->with('success',"Service {$service->name} Update!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        if($service->image)
        {
            Storage::disk('public')->delete($service->image);
        }
        return redirect()
        ->route('admin.services.index')
        ->with('success',"Service {$service->name} Delete!");
    }

    public function deleteall(Request $request){
        $ids = $request->get('ids');
        foreach ($ids as $id) {
            $service = Service::findOrFail($id);
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
        }
        $ids = DB::delete('delete from services where id in ('.implode(",",$ids).')');
        return redirect()->route('admin.services.index');
    }
}
