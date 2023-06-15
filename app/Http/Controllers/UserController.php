<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allApplications()
    {
        return view('users.my_applications');
    }

    public function submitApplication(Request $request)
    {

        $application = Applications::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'purpose' => $request->purpose,
            'guardian_name' => $request->guardian_name,
            'guardian_phone' => $request->guardian_phone,
            'guardian_email' => $request->guardian_email,
            'departure_date' => $request->departure_date,
            'arrival_date' => $request->arrival_date,
            'status' => $request->status,
            'photo' => $request->photo,
            'matric_no' => $request->matric_no,
            'destination' => $request->destination,

        ]);

        // dd($request->all());

        $notification = array(
            'message' => ' successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
