<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContactsController extends Controller
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

        $contacts = Contact::when($request->query('name'),function($query,$name){
            $query->where('name','LIKE', '%'. $name . '%'); })
            ->when($request->query('email'),function($query,$email){
                $query->where('email','LIKE', '%'.$email. '%'); })
            ->paginate();

        return view('admin.contacts.index',[
            'contacts' => $contacts,
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
        
        $contact=Contact::create($data);
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
        $contact = Contact::findOrFail($id);


        return view('admin.contacts.show',[
            'contact' => $contact,
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
        $contact = Contact::findOrFail($id);
       
        return view('admin.contacts.edit', [
            'contact' => $contact,
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
        $contact = Contact::findOrFail($id);
        $request->validate([
            'name'=>'required|max:255',
            'email' =>'required|email',
            'phone' => 'required',
            'message' => 'required|min:10|max:100'
        ]);

        $data = $request->all();

        $contact->update($data);
        
        return redirect()
        ->route('admin.contacts.index')
        ->with('success',"Contact {$contact->name} Update!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        
        return redirect()
        ->route('admin.contacts.index')
        ->with('success',"Contact {$contact->name} Delete!");
    }

    public function deleteall(Request $request){
        $ids = $request->get('ids');
        foreach ($ids as $id) {
            $contact = Contact::findOrFail($id);
            if ($contact->image) {
                Storage::disk('images')->delete($contact->image);
            }
        }
        $ids = DB::delete('delete from contacts where id in ('.implode(",",$ids).')');
        return redirect()->route('admin.contacts.index');
    }
}
