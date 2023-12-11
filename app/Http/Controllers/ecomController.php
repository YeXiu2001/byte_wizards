<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserFeedback;

class ecomController extends Controller
{
    public function ecomHome()
    {
        // Fetch all feedbacks for the home view
        $feedbacks = UserFeedback::orderBy('id', 'desc')->get();

        // Pass the fetched data to the view
        return view('ethicscom', ['feedbacks' => $feedbacks]);
    }

    public function ecomAnalytics()
    {
        // Fetch only the "rating" column from the "userfeedbacks" table
        $ratings = UserFeedback::pluck('rating');
    
        // Count the occurrences of each rating
        $ratingCounts = $ratings->countBy();
    
        // Prepare data for the pie chart
        $colors = ['#FF5733', '#FFC300', '#DAF7A6', '#7D3C98', '#48C9B0', '#85C1E9', '#F4D03F', '#AF7AC5', '#76D7C4'];
        $formattedLabels = $ratingCounts->keys()->map(function ($rating) {
            return 'Rating ' . $rating;
        })->toArray();
        
        $pieData = [
            'labels' => $formattedLabels,
            'datasets' => [
                [
                    'label' => 'Total Number',
                    'data' => $ratingCounts->values()->toArray(),
                    'backgroundColor' => $colors,
                ],
            ],
        ];

    // Prepare data for the polar area chart
$polarAreaData = [
    'labels' => $formattedLabels,
    'datasets' => [
        [
            'label' => 'Total Number: ',
            'data' => $ratingCounts->values()->toArray(),
            'backgroundColor' => $colors,
        ],
    ],
];

// Pass both pie chart and polar area chart data to the view
return view('analyticsEC', ['pieData' => $pieData, 'polarAreaData' => $polarAreaData]);
    }
    
}
