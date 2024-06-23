<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class AppointmentSaveController extends Controller
{
    public function saveAppointments(Request $request)
    {
        $request->validate([
            'userName' => 'required|string',
            'userPhone' => 'required|string',
            'reservationDate' => 'required|date|after_or_equal:today',
            'userMessage' => 'required|string',
        ]);
        $appointment = new Appointment;
        $appointment->name = $request->userName;
        $appointment->phone = $request->userPhone;
        $appointment->date = $request->reservationDate;
        $appointment->message = $request->userMessage;
        $appointment->status = 0;
        $appointment->save();
        flash()->success('success','Ariza yuborildi!');
        return redirect()->route('home');
    }
}
