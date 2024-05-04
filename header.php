<?php
    include "config.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="icon">
    
    <?php wp_head(); ?>

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-0 text-center text-lg-end mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark py-2 px-3 border-end border-primary" href="/Contact">
                            <i class="fa fa-map-marker-alt text-primary me-2"></i>
                            <?php echo $lang['Blue Building Annex 3F, Tokyo']?>
                        </a>
                        <a class="text-dark py-2 px-3 border-end border-primary" href="/Contact">
                            <i class="fa fa-map-marker-alt text-primary me-2"></i>
                            <?php echo $lang['SME Tower 6th Floor, Jakarta Selatan']?>
                        </a>
                        <a class="text-dark py-2 px-3" href="mailto:info@jiim.co.jp?subject=Contact Us" target="blank">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            info@jiim.co.jp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-dark shadow-sm px-5 py-3 py-lg-0">
        <!-- Adding Logo -->
        <div id="logo-img">
            <a href="/Home">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="JIIM Logo">
            </a>
        </div>
        <!-- Adding Three Lines Bar Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <i class="fas fa-bars text-dark"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4 border-5 border-primary text">
                <!-- 1 Home -->
                <a href="/Home" class="nav-item nav-link text-primary">
                    <?php echo $lang['Home']?>
                </a>
                <!-- 2 Project -->
                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle text-primary" data-bs-toggle="dropdown">
                        <?php echo $lang['Project']?>
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="/project-overview" class="dropdown-item">
                            <?php echo $lang['Project Overview']?>
                        </a>
                        <a href="/collaboration-with-sme" class="dropdown-item">
                            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang['SME Support']?>
                        </a>
                        <a href="/human-resource-development" class="dropdown-item">
                            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang['Human Resources Development']?>
                        </a>
                        <a href="/business-consultation" class="dropdown-item">
                            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lang['Business Consultation']?>
                        </a>
                    </div>
                </div>
                <!-- 3 News -->
                <a href="/news" class="nav-item nav-link text-primary">
                    <?php echo $lang['News']?>
                </a>
                <!-- 4 About Us -->
                <div class="nav-item dropdown">
                    <a href="/about" class="nav-link dropdown-toggle text-primary" data-bs-toggle="dropdown">
                        <?php echo $lang['About Us']?>
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="/about" class="dropdown-item">
                            <?php echo $lang['CEO Message']?>
                        </a>
                    </div>
                </div>
                <!-- 5 Contact -->
                <a href="/contact" class="nav-item nav-link text-primary">
                    <?php echo $lang['Contact']?>
                </a>
                <!-- 6 What's New -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-primary" data-bs-toggle="dropdown">
                        <?php echo $lang["What's New"]?>
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="/startupone" class="dropdown-item">
                            <?php echo $lang['Business Matching']?>
                        </a>
                    </div>
                </div>
                
                <!-- 7 Language -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-primary" data-bs-toggle="dropdown">
                        <?php echo $lang['Language']?>
                    </a>
			            <div class="dropdown-menu m-0">
            				<a href="?lang=en" class="dropdown-item">English</a>
            				<a href="?lang=jp" class="dropdown-item">日本語</a>
			            </div>
		        </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->