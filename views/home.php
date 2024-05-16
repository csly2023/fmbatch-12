<?php include "includes/header.php"; ?>
    <!--<header>-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-3 bg-danger py-5">LOGO</div>-->
    <!--            <div class="col-md-3 bg-success py-5">BANNER</div>-->
    <!--            <div class="col-md-3 bg-success py-5">BANNER</div>-->
    <!--            <div class="col-md-3 bg-success py-5">BANNER</div>-->
    <!--            <div class="col-md-3 bg-success py-5">BANNER</div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</header>-->

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

        <div class="container">
            <a href="" class="navbar-brand">My App</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li><a href="" class="nav-link">Home</a></li>
                    <li><a href="" class="nav-link">About</a></li>
                    <li class="dropdown">
                        <a href="" class="nav-link dropdown-toggle"
                                            data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Service One</a></li>
                            <li><a href="" class="dropdown-item">Service two</a></li>
                            <li><a href="" class="dropdown-item">Service three</a></li>
                        </ul>
                    </li>
                    <li><a href="" class="nav-link">Notice</a></li>
                    <li><a href="" class="nav-link">Gallery</a></li>
                    <li><a href="" class="nav-link">Career</a></li>
                    <li><a href="" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/s1.jpg" alt="" class="w-100" height="550">
                <div class="carousel-caption">
                    <h1>This is image one caption</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur enim harum laborum tempora. Amet blanditiis distinctio dolor, dolorem doloribus excepturi iusto non numquam optio possimus quam reprehenderit similique sint sunt.</p>
                    <a href="" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/s2.jpg" alt="" class="w-100" height="550">
            </div>
            <div class="carousel-item">
                <img src="assets/img/s3.jpg" alt="" class="w-100" height="550">
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="prev">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


<?php include "includes/footer.php"; ?>