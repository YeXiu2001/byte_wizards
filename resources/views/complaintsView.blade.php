@extends('bootstrap')
@section('title', 'View Complaints')
@section('content')
@extends('navbar')
<link href="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/rg-1.4.1/datatables.min.css" rel="stylesheet">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/rg-1.4.1/datatables.min.js"></script>


<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Complaints View</h3>
    <a href="{{ route('complaints.home') }}" class="btn btn-primary">Go Back to Forms</a>
    </div>
    @if($complaints->isEmpty())
        <p>No complaints found.</p>
    @else
        <table class="table table-primary table-bordered table-striped dtr-inline" id="myTable">
            <thead>
                <tr>
                    <th>Date of Incident</th>
                    <th>Reported Personnel/s</th>
                    <th>Committed Offense</th>
                    <th>Narration of Incident</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($complaints as $complaint)
                    <tr>
                        <!-- <td>{{ $complaint->id }}</td> -->
                        <td>{{ $complaint->date_of_incident }}</td>
                        <td>{{ $complaint->c_name_accused }}</td>
                        <td>{{ $complaint->offense }}</td>
                        <td>{{ $complaint->narration }}</td>
                        <td>{{ $complaint->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $complaints->links() }} <!-- Display pagination links -->
    @endif
</div>

<script>
$(document).ready(function () {
    $('#myTable').DataTable({
        responsive: true, // Enable responsive extension
        order: []
    });
});
</script>
@endsection