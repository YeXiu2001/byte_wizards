@extends('bootstrap')
@section('title', 'whistleblower')
@section('content')
@extends('navbar')

<!-- bs-stepper css -->
<link rel="stylesheet" href="{{  asset('css/bs-stepper.css') }}">

<!-- bs-stepper js -->
<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Include SweetAlert2 from CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container py-5">
<div class="card border-primary">
    <div class="card-body">
    <div class="mb-5 p-1 bg-white">
    <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Whistleblower Form</h3>
            <a href="{{ route('whistleblower.view') }}" class="btn btn-primary">View Filed Whistleblower Reports</a>
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
                        <span class="bs-stepper-label">Personal Information</span>
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
            <form class="needs-validation" onSubmit="return false" novalidate  method="POST" action="{{ route('whistleblower.post') }} ">
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
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fname" id="fname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lname" required>
                            </div>
                            <div class="col-12">
                                <label for="num" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" name="contactno" id="contactno" placeholder="+63" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@gmail.com">
                            </div>
                        </div>
                        <div class="mt-2">
                        <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                        <button class="btn btn-primary" onclick="validatePersonalInformation()">Next</button></div>
                    </div>

                    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger3">

                    <div class="row g-3">
                            <div class="col-md-6">
                                <label for="accused" class="form-label">Name of Accused Personnel</label>
                                <input type="text" class="form-control" name="name_accused" id="name_accused" required>
                            </div>
                            <div class="col-md-6">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" class="form-control" name="position" id="position" required>
                            </div>
                            <div class="col-12">
                                <label for="dept" class="form-label">Department</label>
                                <input type="text" class="form-control" name="department" id="department" required>
                            </div>
                            <div class="col-12">
                                <label for="misconduct" class="form-label">misconduct</label>
                                <input type="text" class="form-control" name="misconduct" id="misconduct" placeholder="(e.g. Bribery, Corruption, Harassment, Discrimination)" required>
                            </div>
                            <div class="col-12">
                                <label for="involved" class="form-label">Persons Involved</label>
                                <input type="text" class="form-control" name="persons_involved" id="persons_involved" placeholder="Name of Persons Involved" required>
                            </div>
                            <div class="col-12">
                                <label for="date_incident" class="form-label">Date of Incident</label>
                                <input type="date" class="form-control" name="date_of_incident" id="date_of_incident" required>
                            </div>
                            <div class="col-12">
                                <label for="further_infos" class="form-label">Further Information</label>
                                <textarea class="form-control" name="further_infos" id="further_infos" placeholder="Write further information" required></textarea>
                                <div class="invalid-feedback">This field is required.</div>
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
    var fname = document.getElementById('fname');
    var lname = document.getElementById('lname');
    var contactno = document.getElementById('contactno');
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
    var accused = document.getElementById('name_accused');
    var position = document.getElementById('position');
    var dept = document.getElementById('department');
    var misconduct = document.getElementById('misconduct');
    var involved = document.getElementById('persons_involved');
    var dateIncident = document.getElementById('date_of_incident');
    var furtherInfos = document.getElementById('further_infos');
    var form = document.querySelector('.bs-stepper-content form');

    // Check if all required fields are filled in
    if (
        accused.value.trim() !== '' &&
        position.value.trim() !== '' &&
        dept.value.trim() !== '' &&
        misconduct.value.trim() !== '' &&
        involved.value.trim() !== '' &&
        dateIncident.value.trim() !== '' &&
        furtherInfos.value.trim() !== ''
    ) {
         // Show SweetAlert2 confirmation
         Swal.fire({
            title: 'Warning!',
            text: 'Are you sure you want to submit this whistleblower report? This action cannot be undone.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user confirms, submit the form
                form.submit();

                 // Show success Swal after form submission with a delay of 1500 milliseconds (1.5 seconds)
                 Swal.fire({
                    title: 'Success!',
                    text: 'Whistleblower report submitted successfully.',
                    icon: 'success',
                    position: 'bottom-end', // Set position to lower right
                    timer: 2300, // Adjust the duration (in milliseconds)
                    timerProgressBar: true, // Display a progress bar
                    showConfirmButton: false, // Hide the "OK" button
                });
            }
        });
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