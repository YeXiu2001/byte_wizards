<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Whistleblower;

class whistleblowerController extends Controller
{
    public function whistleblowerhome()
    {
        return view('whistleblower');
    }

    public function whistleblowerPost(Request $request)
    {
         // Create a new instance of Whistleblower model
         $wblower = new Whistleblower();

        // Validate the input data
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'contactno' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'name_accused' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'misconduct' => 'required|string',
            'persons_involved' => 'required|string',
            'date_of_incident' => 'required|date',
            'further_infos' => 'required|string',
        ]);
        // Get the currently authenticated user
        $user = Auth::user();

        // Create a new instance of Whistleblower model
        $wblower = new Whistleblower();

        $wblower->reportedby = $user->id;
        
       // Fill the model with the validated data
        $wblower->fill($request->only([
            'fname', 'lname', 'contactno', 'email', 'name_accused', 'position', 'department', 'misconduct', 'persons_involved', 'date_of_incident', 'further_infos'
        ]));

        $wblower->save();

         // Redirect with success message
         return redirect()->route('whistleblower.home')->with('success', 'Feedback submitted successfully');
    }
}
