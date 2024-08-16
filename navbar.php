<?php
// Get the current page name
$current_page = basename($_SERVER['PHP_SELF']);
?>

<body>
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>+94 772453108</h2>
                            <p>For Appointment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">
                <img src="img/favicon.ico" alt="">
                Pathmashalaa
                
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.php" class="nav-item nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
                    <!-- <a href="about.php" class="nav-item nav-link">About</a> -->
                    <a href="service.php" class="nav-item nav-link <?php echo $current_page == 'service.php' ? 'active' : ''; ?>">Service</a>
                    <a href="price.php" class="nav-item nav-link <?php echo $current_page == 'price.php' ? 'active' : ''; ?>">Price</a>
                    <a href="class.php" class="nav-item nav-link <?php echo $current_page == 'class.php' ? 'active' : ''; ?>">Class</a>
                    <!-- <a href="team.php" class="nav-item nav-link">Trainer</a> -->
                    <!-- <a href="portfolio.php" class="nav-item nav-link">Pose</a> -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <a href="blog.php" class="dropdown-item">Blog Grid</a>
                            <a href="single.php" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> -->
                    <a href="contact.php" class="nav-item nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a>
                </div>
            </div>
        </div>
    </div>