<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-primary">Student Corner</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ambassadors</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="#" class="dropdown-item">Benedict Anemba</a>
                        <a href="#" class="dropdown-item">Daniel</a>
                        <a href="#" class="dropdown-item">Stephen</a>
                        <a href="#" class="dropdown-item">Malachi</a>
                        <a href="#" class="dropdown-item">Thessy</a>
                        <a href="#" class="dropdown-item"></a>
                    </div>

                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Universities</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="https://www.fachhochschulen.ac.at/en/" target="_blank" class="dropdown-item">FH-Austria</a>
                        <a href="https://www.studienwahl.at/en" target="_blank" class="dropdown-item">All Universities (Austria)</a>
                        <a href="https://studyinaustria.at/en/study/institutions/private-universities" target="_blank" class="dropdown-item">Private Universities (Austria)</a>
                    </div>

                </div>
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#appointment" class="btn btn-primary px-4">Book Session</a>
        </div>
    </nav>
</div>
