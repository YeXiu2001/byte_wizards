<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class complaintsViewController extends Controller
{
    public function complaintsView()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Fetch the user's complaints with pagination
        $complaints = $user->complaints()->orderBy('id', 'desc')->paginate(1000); // Adjust the pagination size as needed

        // Pass the complaints data to the view
        return view('complaintsView', ['complaints' => $complaints]);
    }
}
