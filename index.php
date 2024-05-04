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
    
    <!-- News Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5"><?php echo $lang["News"]?></h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row g-3">

                <?php
                
                while (have_posts()) {
                    the_post();
                    
                ?>    

                <div class="col-xl-4 col-lg-6">
                    <div class="blog-item bg-light">
                        <img class="img-fluid w-100" src="<?php if ( has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php endif; ?>
                        " alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-light mb-2"></i>
                                <p class="m-0 text-white"><?php the_date(); ?></p>
                            </div>
                            <a class="h4 m-0 text-truncate text-dark me-4" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-primary p-4">
                            <div class="d-flex align-items-center">
                            <small class="text">Posted by <?php the_author(); ?></small>
                            </div>
                        </div>
                    </div>
                </div>

                <?php }
                    wp_reset_query(); 
                ?>

            </div>
        </div>
    </div>
    <!-- News End -->

    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div> 

<footer>
<!-- Footer Start -->
    <div class="container-fluid bg-primary bg-footer text-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light"><?php echo $lang['Get In Touch']?></h4>
                    <hr class="w-25 text-light mb-4" style="opacity: 1;">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-light me-2"></i><?php echo $lang['Blue Building Annex 3F,']?> <br> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $lang['1-3-9 Hirakawa-cho,']?><br> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $lang['Chiyoda-ku, Tokyo,']?><br> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $lang['102-0093, Japan.']?></p>
                        <p class="mb-2"><i class="fas fa-envelope text-light me-2"></i>info@jiim.co.jp</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary"><?php echo $lang['Get In Touch']?></h4>
                    <hr class="w-25 text-primary mb-4" style="opacity: 1;">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-light me-2"></i><?php echo $lang['SME Tower 6th Floor']?> <br> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $lang['Jl. Jend. Gatot Subroto,']?><br> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $lang['Kav. 94, Jakarta-Selatan,']?><br> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $lang['Indonesia 12780.']?></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light"><?php echo $lang['Our Project']?></h4>
                    <hr class="w-25 text-light mb-4" style="opacity: 1;">
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="/collaboration-with-sme"><i class="fa fa-angle-right me-2"></i><?php echo $lang['SME Support']?></a>
                        <a class="text-light mb-2" href="/human-resource-development"><i class="fa fa-angle-right me-2"></i><?php echo $lang['Human Resource Development']?></a>
                        <a class="text-light mb-2" href="/business-consultation/"><i class="fa fa-angle-right me-2"></i><?php echo $lang['Business Consulting']?></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light"><?php echo $lang['Quick Links']?></h4>
                    <hr class="w-25 text-light mb-4" style="opacity: 1;">
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="/Home"><i class="fa fa-angle-right me-2"></i><?php echo $lang['Home']?></a>
                        <a class="text-light mb-2" href="/news"><i class="fa fa-angle-right me-2"></i><?php echo $lang['Latest News']?></a>
                        <a class="text-light mb-2" href="/project-overview"><i class="fa fa-angle-right me-2"></i><?php echo $lang['Project Overview']?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light text-dark py-4">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-0 text-center text-md-start">
                    <p class="mb-md-0">Copyright &copy; <a class="text-dark fw-bold">Japan-Indonesia Investment & Management Inc.</a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
<!-- Footer End -->

<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

</footer>

    <?php wp_footer();?>

</body>
</html>