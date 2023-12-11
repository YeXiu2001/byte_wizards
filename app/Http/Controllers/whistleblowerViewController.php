<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class whistleblowerViewController extends Controller
{
    public function whistleblowerView()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Fetch the user's complaints with pagination
        $whistleblowerreps = $user->whistleblowerreps()->orderBy('id', 'desc')->paginate(1000); // Adjust the pagination size as needed

        // Pass the complaints data to the view
        return view('whistleblowerView', ['whistleblowerreps' => $whistleblowerreps]);
    }
}
