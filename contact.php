<?php
require 'admin/config.php';
?>
    <!DOCTYPE html>
    <html xmlns='http://www.w3.org/1999/xhtml'>

    <head>
        <title>Nexware Technologies LLC - Xerox Printer and Copiers, BOS ERP System</title>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
        <link type='text/css' href='css/Modulecss.css' rel='StyleSheet' />
        <link rel='shortcut icon' href='images/template/favicon.png' />
        <link href='css/plugins.css' rel='stylesheet' />
        <link href='css/screen.css' rel='stylesheet' />
        <link rel='stylesheet' href='css/style.css'>
        <script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
        <meta charset='utf-8' />
        <link href='css/jquerysctipttop.css' rel='stylesheet' type='text/css'>
        <script src='js/jquery-2.1.1.min.js' type='text/javascript'></script>
        <script src='js/scrolls.js'></script>
        <meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1' />
        <meta name='description' content='We will take care of all your office equipment needs, including copiers, printers, managed print services, and document management software' />
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

        <div class='hero-inner'>
            <h2>Contact Us</h2>
            <picture>
                <source srcset='images/content/inner-hero/buttons.jpg' media='(min-width: 1000px)'>
                <source srcset='images/content/inner-hero/buttons-a.jpg' media='(min-width: 765px)'>
                <img srcset='images/content/inner-hero/buttons-a.jpg' alt='slide 1'>
            </picture>
        </div>

        <?php
                if (isset($_POST['contact_submit'])) {
                      $FirstName      = $_POST['FirstName'];
                      $LastName       = $_POST['LastName'];
                      $Company        = $_POST['Company'];
                      $WorkPhone      = $_POST['WorkPhone'];
                      $EmailAddress   = $_POST['EmailAddress'];
                      $select_phone   = $_POST['select_phone'];
                      $about_us       = $_POST['about_us'];
                      $comment        = $_POST['comment'];


                      $msg = "
                            <table class='tabledefault'>
                                <tbody>
                                    <tr>
                                        <td id='title'>
                                            <b>Summary of web form submission:</b><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id='name'>
                                            <b>FirstName</b><br>".$FirstName."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id='name'>
                                            <b>LastName</b><br>".$LastName."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id='name'>
                                            <b>Company</b><br>".$Company."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id='name'>
                                            <b> Work Phone Number </b><br>".  $WorkPhone ."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id='name'>
                                            <b> Email Address </b><br>". $EmailAddress ."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id='name'>
                                            <b> Preferred Contact Method </b><br>". $select_phone ."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id='name'>
                                            <b> How Did You Hear about Us?  </b><br>". $about_us ."
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id='name'>
                                            <b> Comments/Questions </b><br>". $comment ."
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            ";
                   $headers  = 'MIME-Version: 1.0' . "\r\n";
                   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                   mail("info@nexware.ae","Contact Us - ".$Company ,$msg, $headers);
                   mail("sheeraj77@gmail.com","Contact Us - ".$Company,$msg, $headers);
                   mail("crishyj@outlook.com","Contact Us - ".$Company,$msg, $headers);
                         echo "
                        <div id = 'wrap'>
                            <div class ='row'>
                                <div class='columns large-12'>
                                    <main>
                                        <h1>
                                            Thank you for your submission
                                        </h1
                                        <p>Your submission has been verified successfully.</p>
                                        <p><span class='error'></span></p>
                                        <div class='webform-results'>
                                                <table class='tabledefault'>
                                                    <tbody>
                                                        <tr>
                                                            <td id='title'>
                                                                <b>Summary of web form submission:</b><br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id='name'>
                                                                <b>FirstName</b><br>".$FirstName."
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id='name'>
                                                                <b>LastName</b><br>".$LastName."
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id='name'>
                                                                <b>Company</b><br>".$Company."
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id='name'>
                                                                <b> Work Phone Number </b><br>".  $WorkPhone ."
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id='name'>
                                                                <b> Email Address </b><br>". $EmailAddress ."
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id='name'>
                                                                <b> Preferred Contact Method </b><br>". $select_phone ."
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id='name'>
                                                                <b> How Did You Hear about Us?  </b><br>". $about_us ."
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id='name'>
                                                                <b> Comments/Questions </b><br>". $comment ."
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                              
                                        </div>
                                    </main>
                                </div>
                            </div>
                        </div>
                    ";

                }
                else {
                      echo "


        <div id='wrap'>
            <main>

                <div class='row'>
                 <h1>Contact Us</h1>
                    <div class='small-12 large-6 columns'>
                        <p><strong>Thank you for your interest</strong> in Nexware Technologies. Please complete the form to the right and we will contact you as soon as possible. </p>
                        <h3>Main Office:</h3>
                        <p>PO Box 87297, Office M06, AI Habtoor
                            <br> Khabaisi Building, Salah AI Din Road,
                            <br> Deira, Dubai, UAE
                            <br>
                            <strong>Phone:</strong> +971(4) 286 1212
                            <br>
                            <strong>Email:</strong> info@nexware.ae
                            <br>

                        </div>

                        <div class='small-12 large-6 columns'>
                            <form method='post' enctype='multipart/form-data' action=''>
                                <div class='row'>
                                    <div class='small-12 large-12 columns'>
                                        <label for='FirstName'>First Name <span class='req'>*</span></label>
                                        <br>
                                        <input type='text' name='FirstName' id='FirstName' class='cat_textbox' maxlength='255' required>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='small-12 large-12 columns'>
                                        <label for='LastName'>Last Name <span class='req'>*</span></label>
                                        <br>
                                        <input type='text' name='LastName' id='LastName' class='cat_textbox' maxlength='255' required>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='small-12 large-12 columns'>
                                        <label for='Company'>Company <span class='req'>*</span></label>
                                        <br>
                                        <input type='text' name='Company' id='Company' class='cat_textbox' maxlength='255' required>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='small-12 large-12 columns'>
                                        <label for='WorkPhone'>Work Phone Number <span class='req'>*</span></label>
                                        <br>
                                        <input type='text' name='WorkPhone' id='WorkPhone' class='cat_textbox' maxlength='255' required>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='small-12 large-12 columns'>
                                        <label for='EmailAddress'>Email Address <span class='req'>*</span></label>
                                        <br>
                                        <input type='text' name='EmailAddress' id='EmailAddress' class='cat_textbox' maxlength='255' required>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='small-12 large-12 columns'>
                                        <label>Preferred Contact Method</label>
                                        <br>
                                        <input type='radio' name='select_phone' id='select_phone' value='Phone'>Phone
                                        <br>
                                        <input type='radio' name='select_phone' id='select_mail' value='Email'>Email
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='small-12 large-12 columns'>
                                        <label for='about_us'>How Did You Hear about Us? <span class='req'>*</span></label>
                                        <br>
                                        <input type='text' maxlength='4000' name='about_us' id='about_us' class='cat_textbox' required>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='small-12 large-12 columns'>
                                        <label for='comment'>Comments/Questions</label>
                                        <br>
                                        <textarea name='comment' id='comment' cols='10' rows='4' class='cat_listbox' onkeydown='if(this.value.length>=4000)this.value=this.value.substring(0,3999);' required></textarea>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='small-12 large-12 columns'>
                                        <input type='submit' id='catwebformbutton' value='Submit' class='button' name = 'contact_submit'>
                                    </div>
                                </div>
                                <script type='text/javascript' src='http://www.dbsconnected.com/CatalystScripts/ValidationFunctions.js?vs=b1566.r451189-phase1'></script>
                                <script type='text/javascript'>
                                    var submitcount21772 = 0;

                                    function checkWholeForm21772(theForm) {
                                        var why = '';
                                        if (theForm.FirstName) why += isEmpty(theForm.FirstName.value, 'First Name');
                                        if (theForm.LastName) why += isEmpty(theForm.LastName.value, 'Last Name');
                                        if (theForm.Company) why += isEmpty(theForm.Company.value, 'Company Name');
                                        if (theForm.WorkPhone) why += isEmpty(theForm.WorkPhone.value, 'Work Phone Number');
                                        if (theForm.EmailAddress) why += checkEmail(theForm.EmailAddress.value);
                                        if (theForm.CaptchaV2) why += captchaIsInvalid(theForm, 'Enter Word Verification in box below', 'Please enter the correct Word Verification as seen in the image');
                                        if (theForm.CAT_Custom_1286707) why += isEmpty(theForm.CAT_Custom_1286707.value, 'How Did You Hear about Us?');
                                        if (why != '') {
                                            alert(why);
                                            return false;
                                        }
                                        if (submitcount21772 == 0) {
                                            submitcount21772++;
                                            theForm.submit();
                                            return false;
                                        } else {
                                            alert('Form submission is in progress.');
                                            return false;
                                        }
                                    }
                                    //]]>
                                </script>
                            </form>
                        </div>
                    </div>

            </main>

            </div>
            ";}

      ?>

<?php
    $sql = "SELECT * FROM first ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {
        echo"
        <div class='demo'></div>
        <footer role='contentinfo'>
            <div class='row'>
                <div class='columns medium-3'>
                    <a href=''><img src='images/template/dbs-logo-alt.png' alt='Diversified Business Solutions Logo' /></a>
                    <ul class='omega'>
                        <li class='addr'>".$row['office_add']."
                        </li>
                        <li class='phone'><strong>Phone</strong> <a href='tel:".$row['phone']."'>".$row['phone']."</a></li>
                        <li class='support'><strong>Email</strong> <a href=''>".$row['email']."</a></li>

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
                    <a href='' target='_blank'><img src='images/template/logo-wbenc.png' alt='Certified Women's Business Enterprise Business' / style = 'margin-top: 3px;'></a>
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
                        <p class='copy'>&copy; <span class='auto-copy'></span> Diversified Business Solutions (DBS). All Rights Reserved.
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
                $(document).ready(function(){
                  $('#back_btn').click(function(){
                    window.history.back();
                  });
                });
            </script>

    </body>

    </html>
