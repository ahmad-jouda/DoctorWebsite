<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ClientsController extends Controller
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

        $clients = Client::when($request->query('name'),function($query,$name){
            $query->where('name','LIKE', '%'. $name . '%'); })
            ->when($request->query('created_at'),function($query,$created_at){
                $query->where('created_at','LIKE', '%'.$created_at. '%'); })
            ->when($request->query('address'),function($query,$address){
                $query->where('address','LIKE', '%'.$address. '%'); })
            ->paginate();

            return view('admin.clients.index',[
                'clients' => $clients,
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
        return view('admin.clients.create', [
            'client' => new Client(),
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
            $data['image']= $image->store('clients','public');
        }

        $client=Client::create($data);

        return redirect()->route('admin.clients.index')->with('success',"Client {$client->name} Created!");
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
        $client = Client::findOrFail($id);
       
        return view('admin.clients.edit', [
            'client' => $client,
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
        $client = Client::findOrFail($id);
        $request->validate([
            'name'=>'required|max:255',
            'image' =>'nullable|mimes:jpg,jpeg,bmp,png|max:1024000'
        ]);
        $old_image= $client->image;

        $data = $request->except('image');

        $image = $request->file('image');

        if($image && $image->isValid()){
            $data['image']= $image->store('clients','public');
        }
        $client->update($data);

        if($old_image && isset($date['image']))
        {
            Storage::disk('public')->delete($old_image);
        }
        return redirect()
        ->route('admin.clients.index')
        ->with('success',"Client {$client->name} Update!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        if($client->image)
        {
            Storage::disk('public')->delete($client->image);
        }
        return redirect()
        ->route('admin.clients.index')
        ->with('success',"Client {$client->name} Delete!");
    }

    public function deleteall(Request $request){
        $ids = $request->get('ids');
        foreach ($ids as $id) {
            $client = Client::findOrFail($id);
            if ($client->image) {
                Storage::disk('public')->delete($client->image);
            }
        }
        $ids = DB::delete('delete from clients where id in ('.implode(",",$ids).')');
        return redirect()->route('admin.clients.index');
    }
}
