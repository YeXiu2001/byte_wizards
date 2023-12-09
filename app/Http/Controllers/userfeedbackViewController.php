<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\userfeedback;

class userfeedbackViewController extends Controller
{
    public function userfeedbackView()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Fetch the user's complaints with pagination
        $userfeedback = $user->userfeedbacks()->paginate(1000); // Adjust the pagination size as needed

        // Pass the complaints data to the view
        return view('userfeedbackView', ['userfeedbacks' => $userfeedback]);
    }
}
