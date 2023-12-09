<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\complaints;

class complaintsController extends Controller
{
    public function complaintsHome()
    {
        return view('complaints');
    }

    public function complaintsPost(Request $request)
    {
        $complaints = new complaints();

         // Validate the input data
         $request->validate([
            //reportedby should be the id of who is logged in
            'c_fname' => 'required|string|max:255',
            'c_lname' => 'required|string|max:255',
            'c_contactno' => 'required|string|max:20',
            'c_email' => 'nullable|email|max:255',
            'c_name_accused' => 'required|string|max:255',
            'c_position' => 'required|string|max:255',
            'c_department' => 'required|string|max:255',
            'offense' => 'required|string',
            'narration' => 'required|string',
            'date_of_incident' => 'required|date',
        ]);
         // Get the currently authenticated user
         $user = Auth::user();

         // Create a new complaints instance and fill it with the validated data
        $complaints = new complaints();
        $complaints->reportedby = $user->id;
        
        $complaints->fill($request->only([
            'c_fname', 'c_lname', 'c_contactno', 'c_email', 'c_name_accused', 'c_position', 'c_department', 'offense', 'narration', 'date_of_incident'
        ]));
        $complaints->save();

          // Redirect with success message
          return redirect()->route('complaints.home')->with('success', 'Feedback submitted successfully');
    }
}
