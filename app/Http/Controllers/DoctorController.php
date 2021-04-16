<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\DoctorImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('faculty.Doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialists = Specialist::all();
        return view('faculty.Doctor.create',compact('specialists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'telephone'=> 'required',
            'country'=> 'required',
            'zone'=> 'required',
            'district'=> 'required',
            'city'=> 'required',
            'ward'=> 'required',
            'province'=> 'required',
            'mobile'=> 'required',

        ]);

        $doctor = new Doctor();
        $doctor->name = $request->name;
        if ($request->hasFile('image')){
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('uploadedFiles', $newName);
            $doctor->image =  'uploadedFiles/' . $newName;
        }else{
            $doctor->image =  'images/profile.jpg';
        }
        $doctor->specialist_id = $request->specialist_id;
        $doctor->telephone = $request->telephone;
        $doctor->country = $request->country;
        $doctor->zone = $request->zone;
        $doctor->district = $request->district;
        $doctor->city = $request->city;
        $doctor->ward = $request->ward;
        $doctor->province = $request->province;
        $doctor->mobile = $request->mobile;
        $doctor->day1 = $request->day1;
        $doctor->day2 = $request->day2;
        $doctor->day3 = $request->day3;
        $doctor->day4 = $request->day4;
        $doctor->lat = $request->lat;
        $doctor->lon = $request->lon;
        $doctor->description = $request->description;
        $doctor->save();
        
        $request->session()->flash('message','Record saved');
        return redirect()->back();

}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctors = Doctor::find($id);

        return view('faculty.Doctor.show', compact('doctors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialists =  Specialist::find($id);
        $doctorImage = DoctorImage::where('doctor_id', $id)->get();
        return view('faculty.Doctor.edit',compact('doctor','specialists','doctorImage'));
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
        $data = $request->validate([
            'name' => 'required',
            'telephone'=> 'required',
            'country'=> 'required',
            'zone'=> 'required',
            'district'=> 'required',
            'city'=> 'required',
            'ward'=> 'required',
            'province'=> 'required',
            'mobile'=> 'required',

            'description'=> 'required'
        ]);

        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('uploadedFiles', $newName);
            $doctor->image =  'uploadedFiles/' . $newName;
        }
        $doctor->specialist_id = $request->specialist_id;
        $doctor->telephone = $request->telephone;
        $doctor->country = $request->country;
        $doctor->zone = $request->zone;
        $doctor->district = $request->district;
        $doctor->city = $request->city;
        $doctor->ward = $request->ward;
        $doctor->province = $request->province;
        $doctor->mobile = $request->mobile;
        $doctor->day1 = $request->day1;
        $doctor->day2 = $request->day2;
        $doctor->day3 = $request->day3;
        $doctor->day4 = $request->day4;
        $doctor->lat = $request->lat;
        $doctor->lon = $request->lon;
        $doctor->description = $request->description;
        $doctor->update();


        $doctor->update();
        // We need to save product first so that we can get product ID for Product Image Table

        



        return redirect()->back()->with('success','Doctor details updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect('/doctors');
    }






}







