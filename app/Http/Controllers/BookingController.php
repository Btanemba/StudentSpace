<?php

namespace App\Http\Controllers;

use App\Models\Booking_table;
use App\Models\BookingTable;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    function BookingIndex(){
        return view('index');
    }
    public function DataInsert(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'ambassador' => 'required|string|max:255',
        ]);

        // Extract validated data
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $ambassador = $validatedData['ambassador'];

        // Insert the data into the database
        $isInsertSuccess = BookingTable::create([
            'name' => $name,
            'email' => $email,
            'ambassador' => $ambassador,
        ]);

        // Check if the insertion was successful and provide feedback
        if ($isInsertSuccess) {
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Book Appointment successfully!');
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to Book Appointment. Please try again.');
        }
    }
}
