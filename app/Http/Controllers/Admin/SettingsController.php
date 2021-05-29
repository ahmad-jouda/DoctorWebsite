<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
       
        return view('admin.settings.edit', [
            'setting' => $setting,
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
        $setting = Setting::findOrFail($id);
        $request->validate([
            'email' =>'required|email',
            'phone' => 'required',
            'postal_code'=>'required',
            'first_time' => 'required',
            'last_time' => 'required',
            'address'=>'required'
        ]);
        $old_image= $setting->logo;
        

        $data = $request->except('logo');

        $image = $request->file('logo');

        if($image && $image->isValid()){
            $data['logo']= $image->store('settings','public');
        }
       
        $old_background= $setting->background;

        $data = $request->except('background');

        $image = $request->file('background');

        if($image && $image->isValid()){
            $data['background']= $image->store('settings','public');
        }
        $setting->update($data);

        if($old_image && isset($date['logo']))
        {
            Storage::disk('public')->delete($old_image);
        }

        if($old_background && isset($date['background']))
        {
            Storage::disk('public')->delete($old_background);
        }

        return redirect()
        ->route('admin.settings.edit',1)
        ->with('success',"Setting {$setting->name} Update!");
    }

    

}
