<?php
require 'admin/config.php';
?>
    <!DOCTYPE html>
    <html xmlns='http://www.w3.org/1999/xhtml'>

    <head>
        <title>Nexware Technologies LLC - Xerox Printer and Copiers, BOS ERP System</title>
        <meta charset='utf-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
        <meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1' />
        <meta name='keyword' content='Nexware, Dubai, Sharjah, Ajman, Abu Dhabi, Ras Al Khaima, Fujairah, Al Ain, United Arab Emirates' />
        <meta name='description' content='Xerox, Xerox Printer, Xerox Copier, Xerox Multifunction Printer, Colour Printer, Scanner, Photocopier, Digital Printer, Production Printer, Digital Printer, Photocopier, Wide Format Printer, IT solutions, Print Management Services' />
        <meta name='description' content='Estimation Software, Print MIS software, ERP software, Business management software' />
        <link type='text/css' href='css/Modulecss.css' rel='StyleSheet' />
        <link rel='shortcut icon' href='images/template/favicon.png' />
        <link href='css/plugins.css' rel='stylesheet' />
        <link href='css/screen.css' rel='stylesheet' />
        <link rel='stylesheet' href='css/style.css'>
        <script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
        <link href='css/jquerysctipttop.css' rel='stylesheet' type='text/css'>
        <script src='js/jquery-2.1.1.min.js' type='text/javascript'></script>
        <script src='js/scrolls.js'></script>
      
    </head>

    <body>
        <header role='banner'>
            <div class='contain-to-grid'>
                <nav class='top-bar' data-topbar role='navigation'>

                    <ul class='utility right uty-b'>
                        <li class='u-phone'>
                            <a href='tel:(858) 565-2737'><strong>Phone:</strong> +971 4 286 1212</a>
                        </li>
                        <li class='u-support'>
                            <a href='tel:(858) 565-4845'><strong>Email:</strong>  info@nexware.ae</a>
                        </li>
                        <li class='u-facebook'><a href='https://www.facebook.com/nexwareuae/'>Facebook</a>
                        </li>

                        <li class='u-linkedin'><a href='https://www.linkedin.com/company/nexware-technologies/'>Linkedin</a>
                        </li>

                    </ul>
                    <ul class='title-area'>
                        <li class='name'>
                            <a href='index.php' title='Diversified Business Solutions Home Page' id='logo'>
                                <img src='images/template/logo.png' alt='Diversified Business Solutions Logo' />
                            </a>
                        </li>
                        <li class='toggle-topbar menu-icon'><a href='#'><span>Menu</span></a></li>
                    </ul>
                    <section class='top-bar-section'>
                        <ul class='right'>
                            <li>
                                <a href='index.php'>Home</a>
                            </li>

                            <li class='has-dropdown not-click'>
                                <a href='xerox.php'>Xerox Printers </a>
                                <ul class='dropdown'>
                                    <li class='title back js-generated'>
                                        <h5>
                                            <a href='javascript:void(0)'>Back</a>
                                        </h5>
                                    </li>
                                    <li>
                                        <a href='copies_printers.php'>Xerox Colour Multifunction Printers</a>
                                        <ul class='dropdown'>
                                            <li><img class='spotlight' src=''></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href='mono.php'> Xerox Monochrome Multifunction Printers</a>
                                        <ul class='dropdown'>
                                            <li><img class='spotlight' src=''></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href='production.php'> Xerox Production Printers</a>
                                        <ul class='dropdown'>
                                            <li><img class='spotlight' src=''></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href='managed.php'> Managed Production Printers</a>
                                        <ul class='dropdown'>
                                            <li><img class='spotlight' src=''></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href='supplies.php'> Printer Supplies</a>
                                        <ul class='dropdown'>
                                            <li><img class='spotlight' src=''></li>
                                        </ul>
                                    </li>
                                    <li><img class='spotlight' src=''></li>
                                </ul>
                            </li>
                            <li class='has-dropdown not-click'>
                                <a href='qe.php'>ERP System </a>
                                <ul class='dropdown'>
                                    <li class='title back js-generated'>
                                        <h5>
                                            <a href='javascript:void(0)'>Back</a>
                                        </h5>
                                    </li>
                                    <li>
                                        <a href='bp.php'>BOSPrint <br> Printing Business Software</a>
                                        <ul class='dropdown'>
                                            <li><img class='spotlight' src=''></li>
                                        </ul>
                                    </li>

                                     <li>
                                        <a href='be.php'>BOSEnterprise <br> ERP System for all SMEs</a>
                                        <ul class='dropdown'>
                                            <li><img class='spotlight' src=''></li>
                                        </ul>
                                    </li>

                                     <li>
                                        <a href='pricing.php'>Pricing</a>
                                        <ul class='dropdown'>
                                            <li><img class='spotlight' src=''></li>
                                        </ul>
                                    </li>
                                    <li><img class='spotlight' src=''></li>
                                </ul>
                            </li>

                            <li>
                                <a href='client.php'>Clients</a>
                            </li>
                            <li>
                                <a href='about.php'>About Us</a>
                            </li>
                            <li>
                                <a href='request.php'>Request Printer Quote</a>
                            </li>
                            <li>
                                <a href='contact.php'>Contact</a>
                            </li>
                        </ul>
                    </section>
                </nav>
            </div>
        </header>

<?php
    $sql = "SELECT * FROM first ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
      echo "
        <div id='hero' class='hero-slider'>
            <div class='item'>
                <picture>
                    <source srcset='images/content/hero/slide1.jpg' media='(min-width: 1000px)'>
                    </source>
                    <source srcset='images/content/hero/slide1-a.jpg' media='(min-width: 765px)'>
                    </source>
                    <img srcset='images/content/hero/slide1-a.jpg' alt='slide 1' />
                </picture>
                <div class='hero-caption'>
                    <div class='row'>
                        <div class='column large-12 subtlety'>
                            <h2>".$row['slider1_title']."</h2>
                            <p>".$row['slider1_text']."</p>
                            <a class='button' href=''>Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='item'>
                <picture>
                    <source srcset='images/content/hero/slide2.jpg' media='(min-width: 1000px)'>
                    </source>
                    <source srcset='images/content/hero/slide2-a.jpg' media='(min-width: 765px)'>
                    </source>
                    <img srcset='images/content/hero/slide2-a.jpg' alt='slide 1' />
                </picture>
                <div class='hero-caption'>
                    <div class='row'>
                        <div class='column large-12 subtlety'>
                            <h2>".$row['slider2_title']."</h2>
                            <p>".$row['slider2_text']."</p>
                            <a class='button' href='#'>Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='item'>
                <picture>
                    <source srcset='images/content/hero/slide3.jpg' media='(min-width: 1000px)'>
                    </source>
                    <source srcset='images/content/hero/slide3-a.jpg' media='(min-width: 765px)'>
                    </source>
                    <img srcset='images/content/hero/slide3-a.jpg' alt='slide 1' />
                </picture>
                <div class='hero-caption'>
                    <div class='row'>
                        <div class='column large-12 subtlety'>
                            <h2>".$row['slider3_title']."</h2>
                            <p>".$row['slider3_text']."</p>
                            <a class='button' href='#'>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='item'>
                <picture>
                    <source srcset='images/content/hero/slide4.jpg' media='(min-width: 1000px)'>
                    </source>
                    <source srcset='images/content/hero/slide4-a.jpg' media='(min-width: 765px)'>
                    </source>
                    <img srcset='images/content/hero/slide4-a.jpg' alt='slide 1' />
                </picture>
                <div class='hero-caption'>
                    <div class='row'>
                        <div class='column large-12 subtlety'>
                            <h2>".$row['slider4_title']."</h2>
                            <p>".$row['slider4_text']."</p>
                            <a class='button' href=''>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id='wrap'>
            <div class='boxen'>
                <div class='box'></div>
            </div>
            <div class='row' role='main'>
                <div class='columns large-6 box-content'>
                    <h1>".$row['box_title']."</h1>
                    <p>".$row['box_text']."</p>
                </div>
                <div class='columns large-5'>
                    <div class='section'>
                        <a href='copies_printers.php'><img src='images/template/icon-office-equip.png' alt='Copiers, MFPs and Printers | DBS San Diego' /></a>
                        <h3>".$row['equip_title']."</h3>
                        <p>".$row['equip_text']."</p>
                        <a class='swoosh' href='copies_printers.php'>Learn More</a>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='columns medium-6'>
                    <div class='section'>
                        <a href='production.php'><img src='images/template/icon-manage-services.png' alt='Managed Print Services | DBS San Diego' /></a>
                        <h3>".$row['manage_title']."</h3>
                        <p>".$row['manage_text']."</p>
                        <a href='production.php' class='swoosh'>Learn More</a>
                    </div>
                </div>
                <div class='columns medium-6'>
                    <div class='section'>
                        <a href='managed.php'><img src='images/template/icon-doc-management.png' alt='Document Management Software | DBS San Diego' /></a>
                        <h3>".$row['doc_title']."</h3>
                        <p>".$row['doc_text']."</p>
                        <a class='swoosh' href='managed.php'>Learn More</a>
                    </div>
                </div>
            </div>
             <div class='row'>
                <div class='columns medium-6'>
                    <div class='section'>
                        <a href='bp.php'><img src='images/template/icon-print-services.png' alt='Managed Print Services | DBS San Diego' /></a>
                        <h3>".$row['print_title']."</h3>
                        <p>".$row['print_desc']."</p>
                        <a href='bp.php' class='swoosh'>Learn More</a>
                    </div>
                </div>
                <div class='columns medium-6'>
                    <div class='section'>
                        <a href='be.php'><img src='images/template/icon-enterprise-management.png' alt='Document Management Software | DBS San Diego' /></a>
                        <h3>".$row['enterprise_title']."</h3>
                        <p>".$row['enterprise_desc']."</p>
                        <a class='swoosh' href='be.php'>Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class='demo'></div>
        <footer role='contentinfo'>
            <div class='row'>
                <div class='columns medium-3'>
                    <a href=''><img src='images/template/dbs-logo-alt.png' alt='Diversified Business Solutions Logo' /></a>
                    <ul class='omega'>
                        <li class='addr'> <span>".$row['office_add']."</span>
                        </li>
                        <li class='phone'><strong>Phone</strong><span> <a href='tel:".$row['phone']."'>".$row['phone']."</a></span></li>
                        <li class='support'><strong>Email</strong><span> <a href=''>".$row['email']."</a></span></li>

                    </ul>
                </div>
                <div class='columns medium-6'>
                    <h4>Quick Links:</h4>
                    <div class='row collapse'>
                        <div class='columns large-4 small-4'>
                            <ul class='alpha'>
                                <li><a href='copies_printers.php'>Xerox Colour Multifunction Printers</a></li>
                                <li><a href='mono.php'>Xerox Monochrome Multifunction Printers</a></li>
                                <li><a href='production.php'>Xerox Production Printers</a></li>
                                <li><a href='managed.php'>Managed Production Printers</a></li>
                                <li><a href='supplies.php'>Printer Supplies</a></li>
                            </ul>
                        </div>
                        <div class='columns large-4 small-4 alpha1'>
                            <ul class='alpha '>
                                <li><a href='bp.php'>BOS Print </a></li>
                                <li><a href='be.php'>BOS Enterprise</a></li>
                                <li><a href='pricing.php'>Pricing</a></li>
                            </ul>
                        </div>
                         <div class='columns large-4 small-4'>
                            <ul class='alpha'>
                                <li><a href='about.php'>About</a></li>
                                <li><a href='request.php'>Quote Request Form</a></li>
                                <li><a href='contact.php'>Contact Form</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class='columns medium-3 alpha2'>
                    <h4>Technology Partners</h4>
                    <a href=''><img src='images/template/logo-toshiba.png' alt='Certified Toshiba Reseller' /></a>
                    <a href='' target='_blank'><img src='images/template/logo-wbenc.png' alt='Certified Women's Business Enterprise Business'  style = 'margin-top: 3px;'></a>
                </div>
            </div>
            ";
          }
        }
       else {
          echo '0 results';
      }
      ?>
            <div class='row'>
                <div class='column large-12'>
                    <p class='copy'>&copy; <span class='auto-copy'></span> Nexware Technologics. All Rights Reserved.
                    </p>
                </div>
            </div>
            <div class='row'>
                <div class='columns large-centered large-4 text-center show-for-touch'>
                    <a href='#' class='user-desktop button'>View Desktop Version</a>
                    <a href='#' class='user-mobile button'>View Mobile Version</a>
                </div>
            </div>
        </footer>
        <script type='text/javascript' src='js/extras.js'></script>
        <script type='text/javascript' src='js/scripts.js'></script>
        <script type='text/javascript'>
            scroller.init();
        </script>

    </body>

    </html>
