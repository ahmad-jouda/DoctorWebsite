<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GallariesController extends Controller
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

        $gallaries = Gallary::when($request->query('created_at'),function($query,$created_at){
            $query->where('created_at','LIKE', '%'.$created_at. '%'); })->paginate();

        return view('admin.gallaries.index',[
            'gallaries' => $gallaries,
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
        return view('admin.gallaries.create', [
            
            'gallary' => new Gallary(),
           
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
                $data['image']= $image->store('gallaries','public');
            }

            $gallary=Gallary::create($data);
            
            return redirect()->route('admin.gallaries.index')->with('success',"Image Gallary Created!");
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
        $gallary = Gallary::findOrFail($id);
       
        return view('admin.gallaries.edit', [
            'gallary' => $gallary,

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
        $gallary = Gallary::findOrFail($id);
        $request->validate([
            'image' =>'nullable|mimes:jpg,jpeg,bmp,png|max:1024000'
        ]);
        $old_image= $gallary->image;

        $data = $request->except('image');

        $image = $request->file('image');

        if($image && $image->isValid()){
            $data['image']= $image->store('gallaries','public');
        }
        $gallary->update($data);

        if($old_image && isset($date['image']))
        {
            Storage::disk('public')->delete($old_image);
        }
        return redirect()
        ->route('admin.gallaries.index')
        ->with('success',"Image Gallary updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallary = Gallary::findOrFail($id);
        $gallary->delete();
        if($gallary->image)
        {
            Storage::disk('public')->delete($gallary->image);
        }
        return redirect()
        ->route('admin.gallaries.index')
        ->with('success',"Image Gallary deleted!");
    }
    public function deleteall(Request $request){
        $ids = $request->get('ids');
        foreach ($ids as $id) {
            $gallary = Gallary::findOrFail($id);
            if ($gallary->image) {
                Storage::disk('public')->delete($gallary->image);
            }
        }
        $ids = DB::delete('delete from gallaries where id in ('.implode(",",$ids).')');
        return redirect()->route('admin.gallaries.index');
    }
}
