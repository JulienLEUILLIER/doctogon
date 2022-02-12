<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function index() {

        $appointments = auth()->user()->appointments;

        $appointmentsWithNames = array();

        foreach($appointments as $appointment) {
            $name = Doctor::find($appointment['doctor_id'])->name;
            
            $appointmentsWithNames[$appointment['date']] = $name;
        }

        if (auth()->user()) {
            return view('appointments', [
                'appointmentsWithNames' => $appointmentsWithNames
            ]);
        } else {
            return redirect()->route('login');
        }
    }

    public function store(Request $request, $id) {

        $appointment = Appointment::find($id);

        $appointment->user_id = auth()->user()->id;

        $appointment->save();

        return redirect()->route('appointments');
    }
}
