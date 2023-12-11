<nav class="navbar navbar-expand-lg bg-white sticky-top" style="border-bottom: 2px solid blue;">
    <div class="container-fluid">
        <img src="{{ asset('img/msuiitcoop-logo-sm.png') }}" alt="iitpic">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav"> <!-- Use justify-content-end class to move items to the right -->
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('index.home') }}"><b>Home</b></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('userfeedback.home') }}"><b>Userfeedback</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('complaints.home') }}"><b>Complaint</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('whistleblower.home') }}"><b>Whistleblower</b></a>
                </li>

                <!-- Add a logout button -->
                <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
