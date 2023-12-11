<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaints;
use App\Models\Whistleblower;

class iAuditController extends Controller
{
    public function iauditcomplaints()
    {
        // Fetch all feedbacks for the home view
        $complaints = complaints::orderBy('id', 'desc')->get();

        // Pass the fetched data to the view
        return view('internalAudit', ['complaints' => $complaints]);
    }

    public function iauditwblower()
    {
        // Fetch all feedbacks for the home view
        $wblowerreps = Whistleblower::orderBy('id', 'desc')->get();
        // Pass the fetched data to the view
        return view('ECWblower', ['wblowerreps' => $wblowerreps]);
    }
    public function deleteComplaint($id)
{
    // Find the complaint record by ID
    $complaint = complaints::findOrFail($id);

    // Delete the complaint record
    $complaint->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Complaint deleted successfully');
}

public function updateComplaintStatus(Request $request, $id)
{
    $complaint = complaints::findOrFail($id);
    $complaint->status = $request->input('status');
    $complaint->save();

    return redirect()->back()->with('success', 'Complaint status updated successfully');
}

public function deleteWblower($id)
{
    // Find the complaint record by ID
    $wblower = Whistleblower::findOrFail($id);

    // Delete the complaint record
    $wblower->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Whistleblower deleted successfully');
}

public function updateWblowerStatus(Request $request, $id)
{
    $wblower = Whistleblower::findOrFail($id);
    $wblower->status = $request->input('status');
    $wblower->save();

    return redirect()->back()->with('success', 'Whistleblower status updated successfully');
}
}
