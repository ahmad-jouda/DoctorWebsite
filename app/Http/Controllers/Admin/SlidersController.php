<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
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

        $sliders = Slider::when($request->query('created_at'),function($query,$created_at){
            $query->where('created_at','LIKE', '%'.$created_at. '%'); })->paginate();

        return view('admin.sliders.index',[
            'sliders' => $sliders,
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
        return view('admin.sliders.create', [
            
            'slider' => new Slider(),
           
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
            'image' =>'nullable|mimes:jpg,jpeg,bmp,png|max:1024000'
            ]);
            $data = $request->except('image');
            $image = $request->file('image');
            if($image && $image->isValid()){
                $data['image']= $image->store('sliders','public');
            }

            $slider=Slider::create($data);
            
            return redirect()->route('admin.sliders.index')->with('success',"Image Slider Created!");
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
        $slider = Slider::findOrFail($id);
       
        return view('admin.sliders.edit', [
            'slider' => $slider,

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
        $slider = Slider::findOrFail($id);
        $request->validate([
            'image' =>'nullable|mimes:jpg,jpeg,bmp,png|max:1024000'
        ]);
        $old_image= $slider->image;

        $data = $request->except('image');

        $image = $request->file('image');

        if($image && $image->isValid()){
            $data['image']= $image->store('sliders','public');
        }
        $slider->update($data);

        if($old_image && isset($date['image']))
        {
            Storage::disk('public')->delete($old_image);
        }
        return redirect()
        ->route('admin.sliders.index')
        ->with('success',"Image Slider updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        if($slider->image)
        {
            Storage::disk('public')->delete($slider->image);
        }
        return redirect()
        ->route('admin.sliders.index')
        ->with('success',"Image Slider  deleted!");
    }
    
    public function deleteall(Request $request){
        $ids = $request->get('ids');
        foreach ($ids as $id) {
            $slider = Slider::findOrFail($id);
            if ($slider->image) {
                Storage::disk('public')->delete($slider->image);
            }
        }
        $ids = DB::delete('delete from sliders where id in ('.implode(",",$ids).')');
        return redirect()->route('admin.sliders.index');
    }
}
