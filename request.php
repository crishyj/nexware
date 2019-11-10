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
            <h2>Request Printer Quote</h2>
            <picture>
                <source srcset='images/content/inner-hero/buttons.jpg' media='(min-width: 1000px)'>
                <source srcset='images/content/inner-hero/buttons-a.jpg' media='(min-width: 765px)'>
                <img srcset='images/content/inner-hero/buttons-a.jpg' alt='slide 1'>
            </picture>
        </div>

<?php
        if (isset($_POST['rquest_submit'])) {
              $name           = $_POST['FullName'];
              $Company        = $_POST['Company'];
              $WorkPhone      = $_POST['WorkPhone'];
              $EmailAddress   = $_POST['EmailAddress'];
              $WorkAddress    = $_POST['WorkAddress'];
              $WorkCity       = $_POST['WorkCity'];
              $WorkState      = $_POST['WorkState'];
              $WorkZip        = $_POST['WorkZip'];
              $WorkCountry    = $_POST['WorkCountry'];
              $current_device = $_POST['current_device'];
              $what_device    = $_POST['what_device'];
              $current_copier = json_encode($_POST['current_copier']); 
              $machine_type   = json_encode($_POST['machine_type']);
              $machine_count  = $_POST['machine_count'];
              $machine_speed  = $_POST['machine_speed'];
              $monthly_volume = $_POST['monthly_volume'];
              $paper_size     = json_encode($_POST['paper_size']);
              $paper_weight   = $_POST['paper_weight'];
              $multi          = json_encode($_POST['multi']);
              $delivery       = $_POST['delivery'];
              $agree          = $_POST['agree'];
              $other_time     = $_POST['other_time'];
              $purchase       = json_encode($_POST['purchase']);
              $additional     = $_POST['additional'];

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
                                <b>Full Name</b><br>".$name."
                            </td>
                        </tr>
                        
                        <tr>
                            <td id='name'>
                                <b>Company</b><br>".$Company."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b>Work Phone Number</b><br>".$WorkPhone."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> Email Address </b><br>".  $EmailAddress ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> WorkAddress </b><br>". $WorkAddress ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> City </b><br>". $WorkCity ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> State </b><br>". $WorkState ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> Zipcode </b><br>". $WorkZip ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> Country </b><br>". $WorkCountry ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> Are you looking to upgrade your current device?:  </b><br>". $current_device ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> If so, what device(s)?  </b><br>". $what_device ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> Do you currently own or lease your copier?  </b><br>". $current_copier ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> Please select the type(s) of machine(s) you are interested in:  </b><br>". $machine_type ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> How many machines are you looking for? </b><br>". $machine_count ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> What speed of machine are you looking for? </b><br>". $machine_speed ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> What is your projected monthly copy volume? </b><br>". $monthly_volume ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> What paper sizes do you require? </b><br>". $paper_size ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> Do you use heavy paper weights? </b><br>". $paper_weight ."
                            </td>
                        </tr>
                        <tr>
                            <td id='name'>
                                <b> What multifunctional product functions needs do you require?  </b><br>". $multi ."
                            </td>
                        </tr>
                         <tr>
                            <td id='name'>
                                <b>When would you require delivery of machine(s)?</b><br>".$delivery."
                            </td>
                        </tr>
                         <tr>
                            <td id='name'>
                                <b>Would you like information on a Maintenance Agreement?</b><br>".$agree."
                            </td>
                        </tr>
                         <tr>
                            <td id='name'>
                                <b>If other, please specify a time:</b><br>".$other_time."
                            </td>
                        </tr>
                         <tr>
                            <td id='name'>
                                <b>What purchase option do you require? </b><br>".$purchase."
                            </td>
                        </tr>
                         <tr>
                            <td id='name'>
                                <b> Is there any additional information you would like us to know to help give you the most precise quote possible? </b><br>".$additional."
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            ";
           $headers  = 'MIME-Version: 1.0' . "\r\n";
           $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          
          mail("info@nexware.ae","Request a Printer Quote - ".$Company ,$msg, $headers);
          mail("sheeraj77@gmail.com","Request a Printer Quote - ".$Company ,$msg, $headers);
          mail("crishyj@outlook.com","Request a Printer Quote - ".$Company,$msg, $headers);
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
                                                        <b>Full Name</b><br>".$name."
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td id='name'>
                                                        <b>Company</b><br>".$Company."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b>Work Phone Number</b><br>".$WorkPhone."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> Email Address </b><br>".  $EmailAddress ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> WorkAddress </b><br>". $WorkAddress ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> City </b><br>". $WorkCity ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> State </b><br>". $WorkState ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> Zipcode </b><br>". $WorkZip ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> Country </b><br>". $WorkCountry ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> Are you looking to upgrade your current device?:  </b><br>". $current_device ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> If so, what device(s)?  </b><br>". $what_device ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> Do you currently own or lease your copier?  </b><br>". $current_copier ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> Please select the type(s) of machine(s) you are interested in:  </b><br>". $machine_type ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> How many machines are you looking for? </b><br>". $machine_count ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> What speed of machine are you looking for? </b><br>". $machine_speed ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> What is your projected monthly copy volume? </b><br>". $monthly_volume ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> What paper sizes do you require? </b><br>". $paper_size ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> Do you use heavy paper weights? </b><br>". $paper_weight ."
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id='name'>
                                                        <b> What multifunctional product functions needs do you require?  </b><br>". $multi ."
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td id='name'>
                                                        <b>When would you require delivery of machine(s)?</b><br>".$delivery."
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td id='name'>
                                                        <b>Would you like information on a Maintenance Agreement?</b><br>".$agree."
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td id='name'>
                                                        <b>If other, please specify a time:</b><br>".$other_time."
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td id='name'>
                                                        <b>What purchase option do you require? </b><br>".$purchase."
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td id='name'>
                                                        <b> Is there any additional information you would like us to know to help give you the most precise quote possible? </b><br>".$additional."
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
          <div class='row1'>
            <div class='row'>
                <div class='columns large-12'>
                    <main>
                        <h1>Request a Printer Quote</h1>
                        <p><strong>Thank you for your interest</strong> in Nexware Technologies. Please complete the form below with as much information as you can provide and we will get in touch with you with a quote based on your needs. We look forward to working with you!</p>
                        <form method='post'  enctype='multipart/form-data' action=''>
                            <table cellspacing='0' cellpadding='2' border='0' class='webform' style='border-spacing: 25px 0px; border-collapse: unset; width: 100%;'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label for='FullName'>Full Name <span class='req'>*</span></label>
                                            <br>
                                            <input type='text' name='FullName' id='FullName' class='cat_textbox' maxlength='255' required> </td>
                                        <td>
                                            <label for='Company'>Company <span class='req'>*</span></label>
                                            <br>
                                            <input type='text' name='Company' id='Company' class='cat_textbox' maxlength='255' required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='WorkPhone'>Work Phone Number</label>
                                            <br>
                                            <input type='text' name='WorkPhone' id='WorkPhone' class='cat_textbox' maxlength='255' required>
                                        </td>
                                        <td>
                                            <label for='EmailAddress'>Email Address <span class='req'>*</span></label>
                                            <br>
                                            <input type='email' name='EmailAddress' id='EmailAddress' class='cat_textbox' maxlength='255' required> </td>
                                    </tr>
                                    <tr>
                                        <td colspan='2'>
                                            <label for='WorkAddress'>Work Address</label>
                                            <br>
                                            <input type='text' name='WorkAddress' id='WorkAddress' class='cat_textbox' maxlength='500' required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='WorkCity'>City</label>
                                            <br>
                                            <input type='text' name='WorkCity' id='WorkCity' class='cat_textbox' maxlength='255' required>
                                        </td>
                                        <td>
                                            <label for='WorkState'>State</label>
                                            <br>
                                            <input type='text' name='WorkState' id='WorkState' class='cat_textbox' maxlength='255' required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='WorkZip'>Zipcode/Postcode</label>
                                            <br>
                                            <input type='text' name='WorkZip' id='WorkZip' class='cat_textbox' maxlength='255' required>
                                        </td>
                                        <td>
                                            <label for='WorkCountry'>Country</label>
                                            <br>
                                            <select name='WorkCountry' id='WorkCountry' class='cat_dropdown'>
                                                <option value=' '>-- Select Country --</option>
                                                <option value='AF'>AFGHANISTAN</option>
                                                <option value='AX'>ALAND ISLANDS</option>
                                                <option value='AL'>ALBANIA</option>
                                                <option value='DZ'>ALGERIA</option>
                                                <option value='AS'>AMERICAN SAMOA</option>
                                                <option value='AD'>ANDORRA</option>
                                                <option value='AO'>ANGOLA</option>
                                                <option value='AI'>ANGUILLA</option>
                                                <option value='AQ'>ANTARCTICA</option>
                                                <option value='AG'>ANTIGUA AND BARBUDA</option>
                                                <option value='AR'>ARGENTINA</option>
                                                <option value='AM'>ARMENIA</option>
                                                <option value='AW'>ARUBA</option>
                                                <option value='AU'>AUSTRALIA</option>
                                                <option value='AT'>AUSTRIA</option>
                                                <option value='AZ'>AZERBAIJAN</option>
                                                <option value='BS'>BAHAMAS</option>
                                                <option value='BH'>BAHRAIN</option>
                                                <option value='BD'>BANGLADESH</option>
                                                <option value='BB'>BARBADOS</option>
                                                <option value='BY'>BELARUS</option>
                                                <option value='BE'>BELGIUM</option>
                                                <option value='BZ'>BELIZE</option>
                                                <option value='BJ'>BENIN</option>
                                                <option value='BM'>BERMUDA</option>
                                                <option value='BT'>BHUTAN</option>
                                                <option value='BO'>BOLIVIA</option>
                                                <option value='BA'>BOSNIA AND HERZEGOVINA</option>
                                                <option value='BW'>BOTSWANA</option>
                                                <option value='BV'>BOUVET ISLAND</option>
                                                <option value='BR'>BRAZIL</option>
                                                <option value='IO'>BRITISH INDIAN OCEAN TERRITORY</option>
                                                <option value='BN'>BRUNEI DARUSSALAM</option>
                                                <option value='BG'>BULGARIA</option>
                                                <option value='BF'>BURKINA FASO</option>
                                                <option value='BI'>BURUNDI</option>
                                                <option value='KH'>CAMBODIA</option>
                                                <option value='CM'>CAMEROON</option>
                                                <option value='CA'>CANADA</option>
                                                <option value='CV'>CAPE VERDE</option>
                                                <option value='KY'>CAYMAN ISLANDS</option>
                                                <option value='CF'>CENTRAL AFRICAN REPUBLIC</option>
                                                <option value='TD'>CHAD</option>
                                                <option value='CL'>CHILE</option>
                                                <option value='CN'>CHINA</option>
                                                <option value='CX'>CHRISTMAS ISLAND</option>
                                                <option value='CC'>COCOS (KEELING) ISLANDS</option>
                                                <option value='CO'>COLOMBIA</option>
                                                <option value='KM'>COMOROS</option>
                                                <option value='CG'>CONGO</option>
                                                <option value='CD'>CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                                                <option value='CK'>COOK ISLANDS</option>
                                                <option value='CR'>COSTA RICA</option>
                                                <option value='CI'>CÔTE DIVOIRE</option>
                                                <option value='HR'>CROATIA</option>
                                                <option value='CU'>CUBA</option>
                                                <option value='CY'>CYPRUS</option>
                                                <option value='CZ'>CZECH REPUBLIC</option>
                                                <option value='DK'>DENMARK</option>
                                                <option value='DJ'>DJIBOUTI</option>
                                                <option value='DM'>DOMINICA</option>
                                                <option value='DO'>DOMINICAN REPUBLIC</option>
                                                <option value='EC'>ECUADOR</option>
                                                <option value='EG'>EGYPT</option>
                                                <option value='SV'>EL SALVADOR</option>
                                                <option value='GQ'>EQUATORIAL GUINEA</option>
                                                <option value='ER'>ERITREA</option>
                                                <option value='EE'>ESTONIA</option>
                                                <option value='ET'>ETHIOPIA</option>
                                                <option value='FK'>FALKLAND ISLANDS (MALVINAS)</option>
                                                <option value='FO'>FAROE ISLANDS</option>
                                                <option value='FJ'>FIJI</option>
                                                <option value='FI'>FINLAND</option>
                                                <option value='FR'>FRANCE</option>
                                                <option value='GF'>FRENCH GUIANA</option>
                                                <option value='PF'>FRENCH POLYNESIA</option>
                                                <option value='TF'>FRENCH SOUTHERN TERRITORIES</option>
                                                <option value='GA'>GABON</option>
                                                <option value='GM'>GAMBIA</option>
                                                <option value='GE'>GEORGIA</option>
                                                <option value='DE'>GERMANY</option>
                                                <option value='GH'>GHANA</option>
                                                <option value='GI'>GIBRALTAR</option>
                                                <option value='GR'>GREECE</option>
                                                <option value='GL'>GREENLAND</option>
                                                <option value='GD'>GRENADA</option>
                                                <option value='GP'>GUADELOUPE</option>
                                                <option value='GU'>GUAM</option>
                                                <option value='GT'>GUATEMALA</option>
                                                <option value='GG'>GUERNSEY</option>
                                                <option value='GN'>GUINEA</option>
                                                <option value='GW'>GUINEA-BISSAU</option>
                                                <option value='GY'>GUYANA</option>
                                                <option value='HT'>HAITI</option>
                                                <option value='HM'>HEARD ISLAND AND MCDONALD ISLANDS</option>
                                                <option value='VA'>HOLY SEE (VATICAN CITY STATE)</option>
                                                <option value='HN'>HONDURAS</option>
                                                <option value='HK'>HONG KONG</option>
                                                <option value='HU'>HUNGARY</option>
                                                <option value='IS'>ICELAND</option>
                                                <option value='IN'>INDIA</option>
                                                <option value='ID'>INDONESIA</option>
                                                <option value='IR'>IRAN, ISLAMIC REPUBLIC OF</option>
                                                <option value='IQ'>IRAQ</option>
                                                <option value='IE'>IRELAND</option>
                                                <option value='IL'>ISRAEL</option>
                                                <option value='IT'>ITALY</option>
                                                <option value='JM'>JAMAICA</option>
                                                <option value='JP'>JAPAN</option>
                                                <option value='JE'>JERSEY</option>
                                                <option value='JO'>JORDAN</option>
                                                <option value='KZ'>KAZAKHSTAN</option>
                                                <option value='KE'>KENYA</option>
                                                <option value='KI'>KIRIBATI</option>
                                                <option value='KP'>KOREA, DEMOCRATIC PEOPLE  &apos;  S REPUBLIC OF</option>
                                                <option value='KR'>KOREA, REPUBLIC OF</option>
                                                <option value='KW'>KUWAIT</option>
                                                <option value='KG'>KYRGYZSTAN</option>
                                                <option value='LA'>LAO PEOPLE &apos;S DEMOCRATIC REPUBLIC</option>
                                                <option value='LV'>LATVIA</option>
                                                <option value='LB'>LEBANON</option>
                                                <option value='LS'>LESOTHO</option>
                                                <option value='LR'>LIBERIA</option>
                                                <option value='LY'>LIBYAN ARAB JAMAHIRIYA</option>
                                                <option value='LI'>LIECHTENSTEIN</option>
                                                <option value='LT'>LITHUANIA</option>
                                                <option value='LU'>LUXEMBOURG</option>
                                                <option value='MO'>MACAO</option>
                                                <option value='MK'>MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                                                <option value='MG'>MADAGASCAR</option>
                                                <option value='MW'>MALAWI</option>
                                                <option value='MY'>MALAYSIA</option>
                                                <option value='MV'>MALDIVES</option>
                                                <option value='ML'>MALI</option>
                                                <option value='MT'>MALTA</option>
                                                <option value='MH'>MARSHALL ISLANDS</option>
                                                <option value='MQ'>MARTINIQUE</option>
                                                <option value='MR'>MAURITANIA</option>
                                                <option value='MU'>MAURITIUS</option>
                                                <option value='YT'>MAYOTTE</option>
                                                <option value='MX'>MEXICO</option>
                                                <option value='FM'>MICRONESIA, FEDERATED STATES OF</option>
                                                <option value='MD'>MOLDOVA, REPUBLIC OF</option>
                                                <option value='MC'>MONACO</option>
                                                <option value='MN'>MONGOLIA</option>
                                                <option value='ME'>MONTENEGRO</option>
                                                <option value='MS'>MONTSERRAT</option>
                                                <option value='MA'>MOROCCO</option>
                                                <option value='MZ'>MOZAMBIQUE</option>
                                                <option value='MM'>MYANMAR</option>
                                                <option value='NA'>NAMIBIA</option>
                                                <option value='NR'>NAURU</option>
                                                <option value='NP'>NEPAL</option>
                                                <option value='NL'>NETHERLANDS</option>
                                                <option value='AN'>NETHERLANDS ANTILLES</option>
                                                <option value='NC'>NEW CALEDONIA</option>
                                                <option value='NZ'>NEW ZEALAND</option>
                                                <option value='NI'>NICARAGUA</option>
                                                <option value='NE'>NIGER</option>
                                                <option value='NG'>NIGERIA</option>
                                                <option value='NU'>NIUE</option>
                                                <option value='NF'>NORFOLK ISLAND</option>
                                                <option value='MP'>NORTHERN MARIANA ISLANDS</option>
                                                <option value='NO'>NORWAY</option>
                                                <option value='OM'>OMAN</option>
                                                <option value='PK'>PAKISTAN</option>
                                                <option value='PW'>PALAU</option>
                                                <option value='PS'>PALESTINIAN TERRITORY, OCCUPIED</option>
                                                <option value='PA'>PANAMA</option>
                                                <option value='PG'>PAPUA NEW GUINEA</option>
                                                <option value='PY'>PARAGUAY</option>
                                                <option value='PE'>PERU</option>
                                                <option value='PH'>PHILIPPINES</option>
                                                <option value='PN'>PITCAIRN</option>
                                                <option value='PL'>POLAND</option>
                                                <option value='PT'>PORTUGAL</option>
                                                <option value='PR'>PUERTO RICO</option>
                                                <option value='QA'>QATAR</option>
                                                <option value='RE'>REUNION</option>
                                                <option value='RO'>ROMANIA</option>
                                                <option value='RU'>RUSSIAN FEDERATION</option>
                                                <option value='RW'>RWANDA</option>
                                                <option value='BL'>SAINT BARTHÉLEMY</option>
                                                <option value='SH'>SAINT HELENA</option>
                                                <option value='KN'>SAINT KITTS AND NEVIS</option>
                                                <option value='LC'>SAINT LUCIA</option>
                                                <option value='MF'>SAINT MARTIN</option>
                                                <option value='PM'>SAINT PIERRE AND MIQUELON</option>
                                                <option value='VC'>SAINT VINCENT AND THE GRENADINES</option>
                                                <option value='WS'>SAMOA</option>
                                                <option value='SM'>SAN MARINO</option>
                                                <option value='ST'>SAO TOME AND PRINCIPE</option>
                                                <option value='SA'>SAUDI ARABIA</option>
                                                <option value='SN'>SENEGAL</option>
                                                <option value='RS'>SERBIA</option>
                                                <option value='CS'>SERBIA AND MONTENEGRO</option>
                                                <option value='SC'>SEYCHELLES</option>
                                                <option value='SL'>SIERRA LEONE</option>
                                                <option value='SG'>SINGAPORE</option>
                                                <option value='SK'>SLOVAKIA</option>
                                                <option value='SI'>SLOVENIA</option>
                                                <option value='SB'>SOLOMON ISLANDS</option>
                                                <option value='SO'>SOMALIA</option>
                                                <option value='ZA'>SOUTH AFRICA</option>
                                                <option value='GS'>SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                                <option value='ES'>SPAIN</option>
                                                <option value='LK'>SRI LANKA</option>
                                                <option value='SD'>SUDAN</option>
                                                <option value='SR'>SURINAME</option>
                                                <option value='SJ'>SVALBARD AND JAN MAYEN</option>
                                                <option value='SZ'>SWAZILAND</option>
                                                <option value='SE'>SWEDEN</option>
                                                <option value='CH'>SWITZERLAND</option>
                                                <option value='SY'>SYRIAN ARAB REPUBLIC</option>
                                                <option value='TW'>TAIWAN</option>
                                                <option value='TJ'>TAJIKISTAN</option>
                                                <option value='TZ'>TANZANIA, UNITED REPUBLIC OF</option>
                                                <option value='TH'>THAILAND</option>
                                                <option value='TL'>TIMOR-LESTE</option>
                                                <option value='TG'>TOGO</option>
                                                <option value='TK'>TOKELAU</option>
                                                <option value='TO'>TONGA</option>
                                                <option value='TT'>TRINIDAD AND TOBAGO</option>
                                                <option value='TN'>TUNISIA</option>
                                                <option value='TR'>TURKEY</option>
                                                <option value='TM'>TURKMENISTAN</option>
                                                <option value='TC'>TURKS AND CAICOS ISLANDS</option>
                                                <option value='TV'>TUVALU</option>
                                                <option value='UG'>UGANDA</option>
                                                <option value='UA'>UKRAINE</option>
                                                <option value='AE' selected='selected'>UNITED ARAB EMIRATES</option>
                                                <option value='GB'>UNITED KINGDOM</option>
                                                <option value='US'>UNITED STATES</option>
                                                <option value='UM'>UNITED STATES MINOR OUTLYING ISLANDS</option>
                                                <option value='UY'>URUGUAY</option>
                                                <option value='UZ'>UZBEKISTAN</option>
                                                <option value='VU'>VANUATU</option>
                                                <option value='VE'>VENEZUELA</option>
                                                <option value='VN'>VIETNAM</option>
                                                <option value='VG'>VIRGIN ISLANDS, BRITISH</option>
                                                <option value='VI'>VIRGIN ISLANDS, U.S.</option>
                                                <option value='WF'>WALLIS AND FUTUNA</option>
                                                <option value='EH'>WESTERN SAHARA</option>
                                                <option value='YE'>YEMEN</option>
                                                <option value='ZM'>ZAMBIA</option>
                                                <option value='ZW'>ZIMBABWE</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td valign='top' colspan='2'>
                                            <hr style='border-color: #e42945; border-width: 2px; border-radius: 20px;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign='top'>
                                            <label>Are you looking to upgrade your current device?</label>
                                            <br>
                                            <input type='radio' name='current_device' id='CAT_Custom_1178986_0' value='Yes' required>Yes
                                            <br>
                                            <input type='radio' name='current_device' id='CAT_Custom_1178986_1' value='No' required>No</td>
                                        <td valign='top'>
                                            <label for='CAT_Custom_1178987'>If so, what device(s)?</label>
                                            <br>
                                            <textarea name='what_device' id='CAT_Custom_1178987' cols='10' rows='4' class='cat_listbox' ></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign='top'>
                                            <label>Do you currently own or lease your copier? <span class='req'>*</span></label>
                                            <br>
                                            <input type='checkbox' name='current_copier[]' id='CAT_Custom_1178988_0' value='Own' >Own
                                            <br>
                                            <input type='checkbox' name='current_copier[]' id='CAT_Custom_1178988_1' value='Lease' >Lease
                                            <br>
                                            <input type='checkbox' name='current_copier[]' id='CAT_Custom_1178988_2' value='N/A (You do not currently have a device)' >N/A (You do not currently have a device)</td>
                                    </tr>
                                    <tr>
                                        <td valign='top' colspan='2'>
                                            <label>Please select the type(s) of machine(s) you are interested in: <span class='req'>*</span></label>
                                            <br>
                                            <input type='checkbox' name='machine_type[]'  value='Colour Laser Printer' >Colour Laser Printer
                                            <br>
                                            <input type='checkbox' name='machine_type[]'  value='B/W Laser Printer' >B/W Laser Printer
                                            <br>
                                            <input type='checkbox' name='machine_type[]'  value='Colour Multifunction Printer' >Colour Multifunction Printer
                                            <br>
                                            <input type='checkbox' name='machine_type[]'  value='B/W Multifunction Printer' >B/W Multifunction Printer
                                            <br>
                                            <input type='checkbox' name='machine_type[]'  value='Production Printer' >Production Printer
                                            <br>
                                            <input type='checkbox' name='machine_type[]'  value='Managed Print Services(MPS)' >Managed Print Services(MPS)
                                            <br>
                                            <input type='checkbox' name='machine_type[]'  value='Printer Supplies' >Printer Supplies
                                            <br>
                                            <input type='checkbox' name='machine_type[]'  value='Other' >Other</td>
                                    </tr>
                                    <tr>
                                        <td valign='top'>
                                            <label>How many machines are you looking for? <span class='req'>*</span></label>
                                            <br>
                                            <input type='radio' name='machine_count' id='CAT_Custom_1178993_0' value='1-2' required>1-2
                                            <br>
                                            <input type='radio' name='machine_count' id='CAT_Custom_1178993_1' value='3-5' required>3-5
                                            <br>
                                            <input type='radio' name='machine_count' id='CAT_Custom_1178993_2' value='6+' required>6+</td>
                                        <td valign='top'>
                                            <label>What speed of machine are you looking for? <span class='req'>*</span></label>
                                            <br>
                                            <input type='radio' name='machine_speed' id='CAT_Custom_1178994_0' value='15-20 pages per minute' required>15-20 pages per minute
                                            <br>
                                            <input type='radio' name='machine_speed' id='CAT_Custom_1178994_1' value='21-30 pages per minute' required>21-30 pages per minute
                                            <br>
                                            <input type='radio' name='machine_speed' id='CAT_Custom_1178994_2' value='31-45 pages per minute' required>31-45 pages per minute
                                            <br>
                                            <input type='radio' name='machine_speed' id='CAT_Custom_1178994_3' value='46+ pages per minute' required>46+ pages per minute</td>
                                    </tr>
                                    <tr>
                                        <td valign='top'>
                                            <label>What is your projected monthly copy volume? <span class='req'>*</span></label>
                                            <br>
                                            <input type='radio' name='monthly_volume' id='CAT_Custom_1178997_0' value='Low Volume (Less than 3000 copies/month)' required>Low Volume (Less than 3000 copies/month)
                                            <br>
                                            <input type='radio' name='monthly_volume' id='CAT_Custom_1178997_1' value='Medium Volume (3000 - 10000 copies/month)' required>Medium Volume (3000 - 10000 copies/month)
                                            <br>
                                            <input type='radio' name='monthly_volume' id='CAT_Custom_1178997_2' value='High Volume (10000 - 30000 copies/month)' required>High Volume (10000 - 30000 copies/month)
                                            <br>
                                            <input type='radio' name='monthly_volume' id='CAT_Custom_1178997_3' value='Very High Volume (30000+ copies/month)' required>Very High Volume (30000+ copies/month)
                                            <br>
                                            <input type='radio' name='monthly_volume' id='CAT_Custom_1178997_4' value='Not Sure'>Not Sure</td>
                                        <td valign='top'>
                                            <label>What paper sizes do you require? (please check all that apply) <span class='req'>*</span></label>
                                            <br>
                                            <input type='checkbox' name='paper_size[]' id='CAT_Custom_1179000_0' value='210mm x 297mm (A4)' >210mm x 297mm (A4)
                                            <br>
                                            <input type='checkbox' name='paper_size[]' id='CAT_Custom_1179000_0' value='297mm x 420mm (A3)' >297mm x 420mm (A3)
                                            <br>
                                            <input type='checkbox' name='paper_size[]' id='CAT_Custom_1179000_0' value='320mm x 450mm (SRA3)' >320mm x 450mm (SRA3)
                                            <br>
                                            <input type='checkbox' name='paper_size[]' id='CAT_Custom_1179000_0' value='420mm x 594mm (A2)' >420mm x 594mm (A2)
                                            <br>
                                            <input type='checkbox' name='paper_size[]' id='CAT_Custom_1179000_0' value='594mm x 841mm (A1)' >594mm x 841mm (A1)
                                            <br>
                                            <input type='checkbox' name='paper_size[]' id='CAT_Custom_1179000_0' value='841mm x 1180mm (A0)' >841mm x 1180mm (A0)
                                            <br>
                                            <input type='checkbox' name='paper_size[]' id='CAT_Custom_1179000_3' value='All of the above' >Other Sizes</td>
                                    </tr>
                                    <tr>
                                        <td valign='top' colspan='2'>
                                            <label>Do you use heavy paper weights? <span class='req'>*</span></label>
                                            <br>
                                            <input type='radio' name='paper_weight' id='CAT_Custom_1179001_0' value='Yes' required>Yes
                                            <br>
                                            <input type='radio' name='paper_weight' id='CAT_Custom_1179001_1' value='No' required>No</td>
                                    </tr>
                                    <tr>
                                        <td valign='top' colspan='2'>
                                            <label>What multifunctional product functions needs do you require? <span class='req'>*</span></label>
                                            <br>
                                            <input type='checkbox' name='multi[]' id='CAT_Custom_1179005_0' value='Color' >Color
                                            <br>
                                            <input type='checkbox' name='multi[]' id='CAT_Custom_1179005_1' value='Printing' >Printing
                                            <br>
                                            <input type='checkbox' name='multi[]' id='CAT_Custom_1179005_2' value='Scanning' >Scanning
                                            <br>
                                            <input type='checkbox' name='multi[]' id='CAT_Custom_1179005_3' value='Faxing' >Faxing
                                            <br>
                                            <input type='checkbox' name='multi[]' id='CAT_Custom_1179005_4' value='Emailing' >Emailing
                                            <br>
                                            <input type='checkbox' name='multi[]' id='CAT_Custom_1179005_5' value='Document Storage  &amp; Retrieval' >Document Storage &amp; Retrieval
                                            <br>
                                            <input type='checkbox' name='multi[]' id='CAT_Custom_1179005_6' value='No additional functions required' >No additional functions required
                                            <br>
                                            <input type='checkbox' name='multi[]' id='CAT_Custom_1179005_7' value='Not sure' >Not sure</td>
                                    </tr>
                                    <tr>
                                        <td valign='top'>
                                            <label>When would you require delivery of machine(s)? <span class='req'>*</span></label>
                                            <br>
                                            <input type='radio' name='delivery' id='CAT_Custom_1179007_0' value='ASAP' required>ASAP
                                            <br>
                                            <input type='radio' name='delivery' id='CAT_Custom_1179007_1' value='2 Weeks' required>2 Weeks
                                            <br>
                                            <input type='radio' name='delivery' id='CAT_Custom_1179007_2' value='1 Month' required>1 Month
                                            <br>
                                            <input type='radio' name='delivery' id='CAT_Custom_1179007_3' value='Other' required>Other</td>
                                        <td valign='top'>
                                            <label>Would you like information on a Maintenance Agreement? <span class='req'>*</span></label>
                                            <br>
                                            <input type='radio' name='agree' id='CAT_Custom_1179006_0' value='Yes' required>Yes
                                            <br>
                                            <input type='radio' name='agree' id='CAT_Custom_1179006_1' value='No' required>No</td>
                                    </tr>
                                    <tr>
                                        <td valign='top'>
                                            <label for='CAT_Custom_1179008'>If other, please specify a time:</label>
                                            <br>
                                            <input type='text' maxlength='4000' name='other_time'other_ id='CAT_Custom_1179008' class='cat_textbox'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign='top' colspan='2'>
                                            <label>What purchase option do you require? <span class='req'>*</span></label>
                                            <br>
                                            <input type='checkbox' name='purchase[]' id='CAT_Custom_1179014_0' value='36 month lease' >36 month lease
                                            <br>
                                            <input type='checkbox' name='purchase[]' id='CAT_Custom_1179014_1' value='48 month lease' >48 month lease
                                            <br>
                                            <input type='checkbox' name='purchase[]' id='CAT_Custom_1179014_2' value='60 month lease' >60 month lease
                                            <br>
                                            <input type='checkbox' name='purchase[]' id='CAT_Custom_1179014_4' value='Outright Purchase' >Outright Purchase

                                    <tr>
                                        <td valign='top' style='width: 50%;'>
                                            <label for='CAT_Custom_1179016'>Is there any additional information you would like us to know to help give you the most precise quote possible?</label>
                                            <br>
                                            <textarea name='additional' id='CAT_Custom_1179016' cols='10' rows='4' class='cat_listbox' required></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                            <input type='submit' id='catwebformbutton' value='Submit' class='button' name = 'rquest_submit'>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </main>
                </div>
            </div>
        </div>
      </div>";}

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
        </script>

    </body>

    </html>
