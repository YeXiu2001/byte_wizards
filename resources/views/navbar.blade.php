<nav class="navbar navbar-expand-lg bg-white sticky-top" style="border-bottom: 2px solid red;">
    <div class="container-fluid">
        <img src="{{ asset('img/msuiitcoop-logo-sm.png') }}" alt="iitpic">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex justify-content-center"> <!-- Use d-flex and justify-content-center classes to center nav-links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{ route('index.home') }}"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('userfeedback.home') }}"><b>Userfeedback</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('complaints.home') }}"><b>Complaint</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('whistleblower.home') }}"><b>Whistleblower</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
