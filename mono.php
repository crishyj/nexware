<?php
require 'admin/config.php';
?>
    <!DOCTYPE html>
    <html xmlns='http://www.w3.org/1999/xhtml'>

    <head>
        <title>Nexware Technologies LLC - Xerox Printer and Copiers, BOS ERP System</title>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1' />
        <meta name='description' content='We will take care of all your office equipment needs, including copiers, printers, managed print services, and document management software' />
        <link rel='shortcut icon' href='images/template/favicon.png' />
        <link href='css/plugins.css' rel='stylesheet' />
        <link href='css/screen.css' rel='stylesheet' />
        <link href='css/Modulecss.css' rel='StyleSheet' />
        <link href='css/plugins.css' rel='stylesheet' />
        <link href='css/screen.css' rel='stylesheet' />
        <link href='css/bootstrap.min.css' rel='stylesheet'>
        <link href='css/style.css' rel='stylesheet'>
        <link href='css/fonts/fontawesome/css/all.min.css' rel='stylesheet'>
        <link href='css/jquerysctipttop.css' rel='stylesheet' type='text/css'>
        <script src='js/jquery-2.1.1.min.js' type='text/javascript'></script>
        <script src='js/popper.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/scrolls.js'></script>
        <script src='js/custom.js'></script>
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
                            <a href='tel:(858) 565-4845'><strong>Support:</strong>  info@nexware.ae</a>
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
        <div class='hero-inner'>
            <h2>Xerox Printers</h2>
            <picture>
                <source srcset='images/content/inner-hero/buttons.jpg' media='(min-width: 1000px)'>
                <source srcset='images/content/inner-hero/buttons-a.jpg' media='(min-width: 765px)'>
                <img srcset='images/content/inner-hero/buttons-a.jpg' alt='slide 1'>
            </picture>
        </div>
<?php
    $sql = "SELECT * FROM mono ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {

   while($row = $result->fetch_assoc()) {
              echo "


        <div id='wrap'>
          <div class='container xerox'>
            <div class='row'>
              <div class='col-sm-3'>
                  <aside role='complementary'>
                      <ul>
                          <li ><a href='xerox.php' class = 'gray'>Xerox Printers Overview</a></li>
                          <li ><a href='copies_printers.php'>Xerox Colour Multifunction Printers</a></li>
                          <li class='selected'><a href='mono.php'>Xerox Monochrome Multifunction Printers</a></li>
                          <li><a href='production.php'>Xerox Production Printers</a></li>
                          <li><a href='managed.php'>Managed Print Services</a></li>
                          <li><a href='supplies.php'>Printer Supplies</a></li>

                      </ul>
                      <div class='feature'>
                          <a href='request.php'>
                              <h4>Request Quote Today</h4>
                              <p>&amp; Get Started</p>
                              <span></span>
                          </a>
                      </div>

                  </aside>
              </div>
                <div class='col-sm-9'>
                  <h1>
                    Xerox Monochrome Multifunction Printers
                  </h1>
                    <div class='row products'>
                      <div class='col-sm-4 products_img'>
                        <img src = 'images/product/p4.png'>
                        <a class='za_btn' href='request.php' target='_self' onmouseover=' this.style.color='#9da6ae'; this.style.backgroundColor='#ffffff'; this.style.borderColor='#9da6ae';' onmouseout='this.style.borderColor='#42484d'; this.style.color='#42484d';'>
                            <span class='button-text'>
                                <span class='icon'>
                                    <i class='fas fa-arrow-right'></i>
                                </span> Request a Quote
                            </span>
                        </a>
                    </div>
                    <div class='col-sm-8'>
                      <h2>
                         ".$row['p4_title']."
                      </h2>
                      <h5>
                        ".$row['p4_desc']."
                      </h5>
                      <ul>
                        <li>
                            ".$row['p4_t1']."
                        </li>
                        <li>
                            ".$row['p4_t2']."
                        </li>
                        <li>
                            ".$row['p4_t3']."
                        </li>
                        <li>
                            ".$row['p4_t4']."
                        </li>
                        <li>
                            ".$row['p4_t5']."
                        </li>
                        <li>
                            ".$row['p4_t6']."
                        </li>
                      </ul>
                    </div>
                </div>
                <div class='row products'>
                    <div class='col-sm-4 products_img'>
                      <img src = 'images/product/p5.png'>
                      <a class='za_btn' href='request.php' target='_self' onmouseover=' this.style.color='#9da6ae'; this.style.backgroundColor='#ffffff'; this.style.borderColor='#9da6ae';' onmouseout='this.style.borderColor='#42484d'; this.style.color='#42484d';'>
                          <span class='button-text'>
                              <span class='icon'>
                                  <i class='fas fa-arrow-right'></i>
                              </span> Request a Quote
                          </span>
                      </a>
                  </div>
                  <div class='col-sm-8'>
                    <h2>
                      ".$row['p5_title']."
                    </h2>
                    <h5>
                      ".$row['p4_desc']."
                    </h5>
                    <ul>
                      <li>
                          ".$row['p5_t1']."
                      </li>
                      <li>
                          ".$row['p5_t2']."
                      </li>
                      <li>
                          ".$row['p5_t3']."
                      </li>
                      <li>
                        <strong>Small footprint:</strong> ".$row['p5_t4']."
                      </li>
                      <li>
                          <strong> Recommended Monthly Print Volume:</strong> ".$row['p5_t5']."
                      </li>
                      <li>
                          <strong>  Color: </strong> ".$row['p5_t6']."
                      </li>
                      <li>
                            <strong> Black:</strong> ".$row['p5_t7']."
                      </li>
                      <li>
                          <strong> Standard paper capacity: </strong> ".$row['p5_t8']."
                      </li>
                      <li>
                          <strong> Maximum paper capacity: </strong> ".$row['p5_t9']."
                      </li>
                    </ul>
                  </div>
              </div>
              <div class='row products'>
                  <div class='col-sm-4 products_img'>
                    <img src = 'images/product/p6.png'>
                    <a class='za_btn' href='request.php' target='_self' onmouseover=' this.style.color='#9da6ae'; this.style.backgroundColor='#ffffff'; this.style.borderColor='#9da6ae';' onmouseout='this.style.borderColor='#42484d'; this.style.color='#42484d';'>
                        <span class='button-text'>
                            <span class='icon'>
                                <i class='fas fa-arrow-right'></i>
                            </span> Request a Quote
                        </span>
                    </a>
                </div>
                <div class='col-sm-8'>
                  <h2>
                    ".$row['p6_title']."
                  </h2>
                  <h5>
                    ".$row['p6_desc']."
                  </h5>
                  <ul>
                    <li>
                        ".$row['p6_t1']."
                    </li>
                    <li>
                          ".$row['p6_t2']."
                    </li>
                    <li>
                    	   ".$row['p6_t3']."
                    </li>
                    <li>
                          ".$row['p6_t4']."
                    </li>
                    <li>
                          ".$row['p6_t5']."
                    </li>
                    <li>
                        <strong> Maximum paper capacity: </strong>   ".$row['p6_t7']."
                    </li>
                    <li>
                        <strong>Recommended Monthly Print Volume:</strong>   ".$row['p6_t8']."
                    </li>
                    <li>
                        <strong>  Speed: </strong>   ".$row['p6_t8']."
                    </li>
                    <li>
                          <strong> Standard paper capacity:</strong>   ".$row['p6_t9']."
                    </li>

                    <li>
                        <strong> Standard paper capacity: </strong>   ".$row['p6_t10']."
                    </li>

                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
  }
}
else {
  echo '0 results';
}
?>
        <?php
    $sql = "SELECT * FROM first ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
      echo "

        <div class='demo'></div>
        <footer role='contentinfo'>
        <div class = 'container'>
            <div class='row'>
                <div class='col-sm-3'>
                    <a href=''><img src='images/template/dbs-logo-alt.png' alt='Diversified Business Solutions Logo' /></a>
                    <ul class='omega'>
                          <li class='addr'>".$row['office_add']."
                          </li>
                          <li class='phone'><strong>Phone</strong> <a href='tel:".$row['phone']."'>".$row['phone']."</a></li>
                          <li class='support'><strong>Email</strong> <a href=''>".$row['email']."</a></li>
                    </ul>
                </div>
                <div class='col-sm-6'>
                    <h4>Quick Links:</h4>
                    <div class='row'>
                        <div class='col-sm-4'>
                            <ul class='alpha'>
                                <li><a href='copies_printers.php'>Xerox Colour Multifunction Printers</a></li>
                                <li><a href='mono.php'>Xerox Monochrome Multifunction Printers</a></li>
                                <li><a href='production.php'>Xerox Production Printers</a></li>
                                <li><a href='managed.php'>Managed Production Printers</a></li>
                                <li><a href='supplies.php'>Printer Supplies</a></li>
                            </ul>
                        </div>
                        <div class='col-sm-4 alpha1'>
                            <ul class='alpha'>
                                <li><a href='bp.php'>BOS Print </a></li>
                                <li><a href='be.php'>BOS Enterprise</a></li>
                                <li><a href='pricing.php'>Pricing</a></li>
                            </ul>
                        </div>
                         <div class='col-sm-4'>
                            <ul class='alpha'>
                                <li><a href='about.php'>About</a></li>
                                <li><a href='request.php'>Quote Request Form</a></li>
                                <li><a href='contact.php'>Contact Form</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class='col-sm-3 alpha2'>
                    <h4>Technology Partners</h4>
                    <a href=''><img src='images/template/logo-toshiba.png' alt='Certified Toshiba Reseller' /></a>
                    <a href='' target='_blank'><img src='images/template/logo-wbenc.png' alt='Certified Women's Business Enterprise Business' / style = 'margin-top: 3px;'></a>
                </div>
            </div>

            ";
          }
        }
       else {
          echo "0 results";
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
            </div>
            </footer>
            <script type='text/javascript' src='js/extras.js'></script>
            <script type='text/javascript' src='js/scripts.js'></script>
            <script type='text/javascript'>
                scroller.init();
            </script>

    </body>

    </html>
