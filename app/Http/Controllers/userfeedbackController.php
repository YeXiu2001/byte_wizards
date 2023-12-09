<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\userfeedback;

class userfeedbackController extends Controller
{
    public function ufeedbackhome()
    {
        return view('userfeedback');
    }

    public function ufeedbackPost(Request $request)
{
    // Create a new userfeedback instance and fill it with the validated data
    $ufeedback = new userfeedback();
    
    // Validate the input data
    $request->validate([
        'name' => 'nullable|string|max:255',
        'contact' => 'nullable|string|max:255',
        'rating' => 'required|integer|max:255', // Adjust validation rules as needed
        'issues' => 'required|string',
        'suggestions' => 'required|string',
    ]);

    // Get the currently authenticated user
    $user = Auth::user();

    // Create a new userfeedback instance and fill it with the validated data
    $ufeedback = new userfeedback();
    $ufeedback->reportedby = $user->id; // Assign the id of the logged-in user to the reportedby field
    $ufeedback->fill($request->only(['name', 'contact', 'rating', 'issues', 'suggestions']));
    
    $ufeedback->save();

    // Redirect with success message
    return redirect()->route('userfeedback.home')->with('success', 'Feedback submitted successfully');
}

}
