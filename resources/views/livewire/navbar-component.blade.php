<div>
    <nav class="navbar navbar-expand-lg" style="background-color: #132257;">
        <div class="container">
            <div class="container d-flex">
                <a class="navbar-brand text-white" href="{{ url('/') }}">CHEAPTALK</a>
            
            <!-- <form class="d-flex"> -->
                <!-- <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search"> -->
                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            <!-- </form> -->
            </div>

            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link text-white" aria-current="page" href="{{ url('/categories') }}">Categories</a>
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Business</a></li>
                        <li><a class="dropdown-item" href="#">Religion</a></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                        <li><a class="dropdown-item" href="#">Romance</a></li>
                        <li><a class="dropdown-item" href="#">Business</a></li>
                        <li><a class="dropdown-item" href="#">Education</a></li>
                    </ul> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
