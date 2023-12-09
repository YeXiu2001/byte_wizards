<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserFeedback;

class ecomController extends Controller
{
    public function ecomHome()
    {
        // Fetch data from the "userfeedbacks" table using Eloquent
        $feedbacks = UserFeedback::all();

        // Pass the fetched data to the view
        return view('ethicscom', ['feedbacks' => $feedbacks]);
    }
}
