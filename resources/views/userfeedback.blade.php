@extends('bootstrap')
@section('title', 'User Feedback')
@section('content')
@extends('navbar')

<div class="container py-4"> <!-- Add padding to create space -->
  <div class="card border-danger">
    <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Userfeedback Form</h3>
            <a href="{{ route('userfeedback.view') }}" class="btn btn-primary">View Submitted Userfeedback</a>
        </div>
      <p class="card-text"><b>Member Details (Optional)</b></p>
      <!-- form start -->
      <form action="#" method="POST">
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
            <input type="text" class="form-control" name="rating" id="rating" placeholder="Scale 1-10" required>
            <label for="rating">Satisfaction Rating (Highest = 10; Lowest = 1)</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Describe your issues" name="issues" id="issues" style="height: 100px" required></textarea>
            <label for="issues">Describe your Issues</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Input your suggestions" name="suggestions" id="suggestions" style="height: 100px" required></textarea>
            <label for="suggestions">Your Suggestions</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      <!-- form end -->
    </div>
  </div>
</div>



@endsection