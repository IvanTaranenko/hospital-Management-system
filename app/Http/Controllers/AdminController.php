<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'room' => 'required',
            'speciality' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $doctor = new Doctor();
        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('doctors/Image'), $imageName);
            $doctor['image'] = $imageName;
            $doctor['name'] = $request->name;
            $doctor['phone'] = $request->phone;
            $doctor['room'] = $request->room;
            $doctor['speciality'] = $request->speciality;
        }
        $doctor->save();
        return back();


    }
}
