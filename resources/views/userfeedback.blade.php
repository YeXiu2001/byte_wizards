@extends('bootstrap')
@section('title', 'User Feedback')
@section('content')
@extends('navbar')
<!-- Include SweetAlert2 from CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container py-4"> <!-- Add padding to create space -->
  <div class="card border-primary">
    <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Userfeedback Form</h3>
            <a href="{{ route('userfeedback.view') }}" class="btn btn-primary">View Submitted Userfeedback</a>
        </div>
      <p class="card-text"><b>Member Details (Optional)</b></p>
      <!-- form start -->
      <form action="#" method="POST" id="feedbackForm">
        @csrf
      <div class="row mb-2">
          <div class="col-md-6">
              <label for="name"><b>Name</b></label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Juan Dela Cruz">
          </div>
          <div class="col-md-6">
              <label for="contact"><b>Contact No.</b></label>
              <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact No.">
          </div>
      </div>
        <p class="card-text pt-2"><b>Required Forms</b></p>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="rating" id="rating" placeholder="Scale 1-9" required min="1" max="9">
            <label for="rating">Satisfaction Rating (Highest = 9; Lowest = 1)</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Describe your issues" name="issues" id="issues" style="height: 100px" required></textarea>
            <label for="issues">Describe your Reactions or Issues</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Input your suggestions" name="suggestions" id="suggestions" style="height: 100px" required></textarea>
            <label for="suggestions">Kindly give us your suggestions</label>
        </div>
        <button type="button" class="btn btn-primary" onclick="showConfirmation()">Submit</button>
        </form>
      <!-- form end -->
    </div>
  </div>
</div>

<script>
  function showConfirmation() {
    var form = document.getElementById('feedbackForm');

    // Check if the form is valid before showing the confirmation
    if (form.checkValidity()) {
      Swal.fire({
        title: 'Warning!',
        text: 'Are you sure you want to submit this feedback? This action cannot be undone.',
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
            text: 'Your feedback has been submitted successfully.',
            icon: 'success',
            position: 'bottom-end', // Set position to lower right
            timer: 2300, // Adjust the duration (in milliseconds)
            timerProgressBar: true, // Display a progress bar
            showConfirmButton: false, // Hide the "OK" button
          });
        }
      });
    } else {
      // If the form is not valid, trigger HTML5 validation
      form.reportValidity();
    }
  }
</script>




@endsection