<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
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
        return redirect()->back()->with('message', 'Added Doctor success');


    }

    public function showappointment()
    {

        $data = Appointment::all();
        return view('admin.showappointment', compact('data'));
    }


    public function approved($id)
    {

        $data = Appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();

    }

    public function canceled($id)
    {

        $data = Appointment::find($id);
        $data->status = 'cancelled';
        $data->save();
        return redirect()->back();

    }

    public function showdoctor()
    {
        $doctors = Doctor::all();
        return view('admin.showdoctor', compact('doctors'));
    }

    public function deletedoctor($id)
    {
        $doctors = Doctor::find($id);
        $doctors->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $doctors = Doctor::find($id);

        return view('admin.update_doctor',compact('doctors'));
    }



    public function editdoctor(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'room' => 'required',
            'speciality' => 'required',
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $doctor  = Doctor::find($id);


        $doctor->save($request->all());

        return redirect()->back()->with('message', 'Appoinment Request Successful.We will contact with you soon');
        }


}
