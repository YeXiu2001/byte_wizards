@extends('bootstrap')
@section('title', 'Complaints Form')
@section('content')
@extends('navbar')
<!-- bs-stepper css -->
<link rel="stylesheet" href="{{  asset('css/bs-stepper.css') }}">

<!-- bs-stepper js -->
<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="container py-5">
<div class="card border-danger">
<div class="card-body">
    <div class="mb-5 p-1 bg-white">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Complaints Form</h3>
            <a href="{{ route('complaints.view') }}" class="btn btn-primary">View Filed Complaint Reports</a>
        </div>
        <div id="stepper1" class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
                <div class="step" data-target="#test-l-1">
                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Permission</span>
                    </button>
                </div>
                <div class="bs-stepper-line"></div>
                <div class="step" data-target="#test-l-2">
                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2" disabled>
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Complainant Information</span>
                    </button>
                </div>
                <div class="bs-stepper-line"></div>
                <div class="step" data-target="#test-l-3">
                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3" disabled>
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Report</span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
            <form class="needs-validation" onSubmit="return false" novalidate  method="POST" action="{{ route('complaints.post') }} ">
                @csrf
                    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                Data Privacy Consent
                            </label>
                            <p>In accordance with <b>RA 10173 or Data Privacy Act of 2012</b> , I consent to the following terms and conditions on the collection, use, processing and disclosure of my personal data: I am aware that the office has collected and stored my personal data upon accomplishment of this form. These data include my full name, contact details like addresses, and landline/mobile numbers. I express my consent for the MSU IIT NMPC to collect, store my personal information. I hereby affirm my right to be informed, object to processing, access, and rectify and to suspend or withdraw my personal data pursuant to the provisions of the RA 10173 and its implementing rules and regulations. By clicking the Next button below, I warrant that I have read, understood all of the above provisions, and agreed with its full implementation.</p>
                            <div class="invalid-feedback">
                                You must check the checkbox to proceed.
                            </div>
                        </div>
                        <button class="btn btn-primary" onclick="validateCheckbox()">Next</button>
                    </div>

                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="c_fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="c_fname" id="c_fname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="c_lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="c_lname" id="c_lname" required>
                            </div>
                            <div class="col-12">
                                <label for="c_contactno" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" name="c_contactno" id="c_contactno" placeholder="+63" required>
                            </div>
                            <div class="col-12">
                                <label for="c_email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="c_email" id="c_email" placeholder="name@gmail.com">
                            </div>
                        </div>
                        <div class="mt-2">
                        <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                        <button class="btn btn-primary" onclick="validatePersonalInformation()">Next</button>
                        </div>
                    </div>

                    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger3">

                    <div class="row g-3">
                            <div class="col-md-6">
                                <label for="c_name_accused" class="form-label">Name of Accused Personnel/Employee</label>
                                <input type="text" class="form-control" name="c_name_accused" id="c_name_accused" required>
                            </div>
                            <div class="col-md-6">
                                <label for="c_position" class="form-label">Position</label>
                                <input type="text" class="form-control" name="c_position" id="c_position" required>
                            </div>
                            <div class="col-12">
                                <label for="c_department" class="form-label">Department</label>
                                <input type="text" class="form-control" name="c_department" id="c_department" required>
                            </div>
                            <div class="col-12">
                                <label for="offense" class="form-label">Offense Committed by the Personnel</label>
                                <input type="text" class="form-control" name="offense" id="offense" placeholder="(Slow Service, Aggressive Personnel)" required>
                            </div>
                            <div class="col-12">
                                <label for="narration" class="form-label">Narration of Events</label>
                                <textarea class="form-control" name="narration" id="narration" placeholder="Write your narration on what happened" required></textarea>
                                <div class="invalid-feedback">This field is required.</div>
                            </div>
                            <div class="col-12">
                                <label for="date_incident" class="form-label">Date of Incident</label>
                                <input type="date" class="form-control" name="date_of_incident" id="date_of_incident" required>
                            </div>

                        </div>

                        <button class="btn btn-primary mt-2" onclick="stepper1.previous()">Previous</button>
                        <button type="submit" class="btn btn-primary mt-2" onclick="validateAndSubmit()" id="w_submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
  var stepper1;

document.addEventListener('DOMContentLoaded', function () {
    var stepperEl = document.querySelector('#stepper1');
    stepper1 = new Stepper(stepperEl, {
        linear: false, // Set to true if you want a linear flow through steps
        animation: true, // Set to false if you don't want animations
    });
});

function validateCheckbox() {
    var checkbox = document.getElementById('flexCheckDefault');
    var form = document.querySelector('.bs-stepper-content form');

    if (checkbox.checked) {
        stepper1.next();
        form.classList.remove('was-validated');
    } else {
        checkbox.setCustomValidity("You must check the checkbox to proceed.");
        form.classList.add('was-validated');
    }
}

function validatePersonalInformation() {
    var fname = document.getElementById('c_fname');
    var lname = document.getElementById('c_lname');
    var contactno = document.getElementById('c_contactno');
    var form = document.querySelector('.bs-stepper-content form');

    // Check if the required fields are filled in
    if (fname.value.trim() !== '' && lname.value.trim() !== '' && contactno.value.trim() !== '') {
        // Proceed to the next step if the fields are not empty
        stepper1.next();
        form.classList.remove('was-validated');
    } else {
        // Show validation feedback if the fields are empty
        form.classList.add('was-validated');
    }
}

function validateAndSubmit() {
    var accused = document.getElementById('c_name_accused');
    var position = document.getElementById('c_position');
    var dept = document.getElementById('c_department');
    var misconduct = document.getElementById('offense');
    var dateIncident = document.getElementById('date_of_incident');
    var furtherInfos = document.getElementById('narration');
    var form = document.querySelector('.bs-stepper-content form');

    // Check if all required fields are filled in
    if (
        accused.value.trim() !== '' &&
        position.value.trim() !== '' &&
        dept.value.trim() !== '' &&
        misconduct.value.trim() !== '' &&
        dateIncident.value.trim() !== '' &&
        furtherInfos.value.trim() !== ''
    ) {
        // Proceed to submission if all checks pass
        form.submit();
    } else {
        // Show validation feedback for the empty fields
        form.classList.add('was-validated');
    }
}

document.getElementById('stepper1trigger2').addEventListener('click', function () {
    validatePersonalInformation();
});

/// Handle form submission when the 'Submit' button is clicked
document.querySelector('.bs-stepper-content form').addEventListener('submit', function (event) {
    // Check if the form is on the final step
    if (stepper1 && stepper1.current && stepper1.current.classList.contains('bs-stepper-pane')) {
        // Perform any additional validation if needed
        validateAndSubmit();
    } else {
        // If not on the final step, prevent the default form submission behavior
        event.preventDefault();
    }
});
</script>
@endsection