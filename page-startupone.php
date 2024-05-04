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
    
    <!-- Startup One Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-left mx-auto mb-5" >
                <h1 class="display-5"><?php echo $lang["Indonesia's first bioplasticizer production"]?></h1>
                <hr class="w-25  text-primary" style="opacity: 1;">
            </div>
            <p class="fs-4 fw-normal text-dark text-left"><i><q><?php echo $lang["Aiming for a sustainable society with chemical products based on biomaterials"]?></q></i><br><br>
            <?php echo $lang["JIIM supports venture companies (startups) originating from Indonesian universities. This time, we will introduce companies that have patents related to bioplasticizer production. This company is looking for a partner company (investor) to produce bioplasticizer in Indonesia."]?><br><br>
            <?php echo $lang["1. Features (strengths)"]?><br>
            <?php echo $lang["- Bioplasticizers are not yet manufactured in Indonesia."]?><br>
            <?php echo $lang["- We hold (or have applied for) patents related to the manufacturing process in Indonesia"]?><br><br>
            <?php echo $lang["2. Why is bioplasticizers necessary?"]?><br>
            <?php echo $lang["- Commonly used plasticizers (phthalates) have already begun to be banned in some developed countries due to their toxicity."]?><br>
            <?php echo $lang["- This company has successfully produced bioplasticizers using plant-based fatty oils (laboratory stage). You can contribute to the realization of a sustainable society."]?><br><br>
            <?php echo $lang["3. Is there a market?"]?><br>
            <?php echo $lang["(Plasticizer production status)"]?><br></p>
            <table class="fs-4 fw-normal text-dark text-left">
              <tr>
                <th><?php echo $lang["  "]?></th>
                <th><?php echo $lang["Worldwide Market"]?></th>
                <th><?php echo $lang["Indonesia Domestic Market"]?></th>
                <th><?php echo $lang["Venture Company Goals"]?></th>
              </tr>
              <tr>
                <td><?php echo $lang["Production Volume"]?></td>
                <td><?php echo $lang["980 million tons"]?></td>
                <td><?php echo $lang["11 million tons"]?></td>
                <td><?php echo $lang["1.5 million tons"]?></td>
              </tr>
              <tr>
                <td><?php echo $lang["Price"]?></td>
                <td><?php echo $lang["USD 170 billion"]?></td>
                <td><?php echo $lang["USD 1.87 billion"]?></td>
                <td><?php echo $lang["USD 2600 million"]?></td>
              </tr>
            </table><br><br>
            <p class="fs-4 fw-normal text-dark text-left"><?php echo $lang["4. Estimated funds (investment amount)"]?><br>
            <?php echo $lang["- USD 2 million (Negotiations required as it depends on the scale of production)"]?><br><br>
    
            <?php echo $lang["5. Others"]?><br>
            <?php echo $lang["- The research and development of this bioplasticizer is mainly carried out by people who have obtained degrees from Japanese universities."]?><br><br>
            <?php echo $lang["If you are interested in the above investment project, please contact us."]?><br><br><br></p>
            
            <p class="fs-4 fw-normal text-dark text-right"><?php echo $lang["(Attachment)"]?></p><br>
            <p class="fs-4 fw-normal text-dark text-left"><?php echo $lang["[Patent information 1]"]?><br>
            <?php echo $lang["Title: PPetroleum and great cleaning made from distillate palm oil fatty acids and ethanolamines and processes the manufacture"]?><br>
            <?php echo $lang["Status: Patented"]?><br>
            <?php echo $lang["Summary: The present invention provides a method for producing a petroleum and grease cleaning agent made from the reaction product of palm oil fatty acid distillate, which is a waste product of the crude palm oil refining process, and monoethanolamine or triethanolamine at room temperature."]?><br><br>
            <?php echo $lang["[Patent information 2]"]?><br>
            <?php echo $lang["Title: Production process of vegetable oil epoxy resin materials and their ester derivatives by metal oxide catalysis without using solvents and mineral acids"]?><br>
            <?php echo $lang["Status: Patent applied (waiting for permission)"]?><br>
            <?php echo $lang["Summary: The present invention relates to a process for the preparation of vegetable oil epoxides and their ester derivatives as plasticizers or precursors for further reactions for the coating, polymer and leather industries."]?><br><br>
            <?php echo $lang["[Patent information 3]"]?><br>
            <?php echo $lang["Title: Room temperature production process of dispersants for heavy to light oil fractions based on palm oil derivatives"]?><br>
            <?php echo $lang["Status: Patent applied (waiting for permission)"]?><br>
            <?php echo $lang["Summary: The present invention provides a grease and oil cleaner produced by reacting palm fatty acid with monoethanolamine, diethanolamine, or triethanolamine in a molar ratio of palm fatty acid/ethanolamine of 1:1 to 1:4 at room temperature. Concerning products and processes for manufacturing."]?><br><br>
            <?php echo $lang["[Patent information 4]"]?><br>
            <?php echo $lang["Title: Production process of photopolymerizing vegetable oil monomer bioacrylate into bio-polyacrylate using ultraviolet rays"]?><br>
            <?php echo $lang["Status: Patent applied (waiting for permission)"]?><br>
            <?php echo $lang["Summary: The present invention relates to a method for producing biopolyacrylate as a coating material for various materials from a bioacrylate epoxide monomer of vegetable oil and its ester derivative."]?><br>
            <?php echo $lang[""]?><br>
            </p>
        </div>
    </div>
    <!-- Startup One End -->
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