<?php
  require 'config.php';
  session_start();
  if (isset($_SESSION['log_email'])){
?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>San Diego Copiers, MFPs and Printers | DBS</title>
    <link rel='icon' type='image/png' sizes='32x32' href='favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='favicon-16x16.png'>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='css/main.css'>
    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='css/jquery.dataTables.css'>
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet' href='css/sweetalert2.min.css'>
    <script src='js/sweetalert2.min.js'></script>

  </head>
  <body class='app sidebar-mini rtl'>
      <?php
            $hero = '../images/content/hero/';
            $product = '../images/product/';
            $template = '../images/template/';
            if (isset($_POST['first'])) {
                if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                  $slider1_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['slider1_title'])));
                  $slider1_text  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['slider1_text'])));
                  $sql1 = "UPDATE first SET slider1_title='$slider1_title' WHERE id=0";
                  $sql2 = "UPDATE first SET slider1_text='$slider1_text' WHERE id=0";

                  if (isset($_FILES['slider1']['tmp_name'])) {
                      move_uploaded_file($_FILES['slider1']['tmp_name'], $hero."slide1.jpg");
                  }

                  if (isset($_FILES['slider1_a']['tmp_name'])) {
                      move_uploaded_file($_FILES['slider1_a']['tmp_name'], $hero."slide1-a.jpg");
                  }

                  if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                    echo "<script>
                      history.go(-1);
                    </script>";
                  } else {
                      echo "Error updating record: " . $conn->error;
                  }
                }
              }

            elseif(isset($_POST['second'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $slider2_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['slider2_title'])));
                $slider2_text  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['slider2_text'])));
                $sql1 = "UPDATE first SET slider2_title='$slider2_title' WHERE id=0";
                $sql2 = "UPDATE first SET slider2_text='$slider2_text' WHERE id=0";

                if (isset($_FILES['slider2']['tmp_name'])) {
                  move_uploaded_file($_FILES['slider2']['tmp_name'], $hero."slide2.jpg");
                }

                if (isset($_FILES['slider2_a']['tmp_name'])) {
                  move_uploaded_file($_FILES['slider2_a']['tmp_name'], $hero."slide2-a.jpg");
                }
                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                  echo "<script>
                    history.go(-1);
                  </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }

            elseif(isset($_POST['third'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $slider3_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['slider3_title'])));
                $slider3_text  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['slider3_text'])));
                $sql1 = "UPDATE first SET slider3_title='$slider3_title' WHERE id=0";
                $sql2 = "UPDATE first SET slider3_text='$slider3_text' WHERE id=0";
                move_uploaded_file($_FILES['slider3']['tmp_name'], $hero."slide3.jpg");
                move_uploaded_file($_FILES['slider3_a']['tmp_name'], $hero."slide3-a.jpg");

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                  echo "<script>
                    history.go(-1);
                  </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }


            elseif(isset($_POST['fourth'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $slider4_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['slider4_title'])));
                $slider4_text  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['slider4_text'])));
                $sql1 = "UPDATE first SET slider4_title='$slider4_title' WHERE id=0";
                $sql2 = "UPDATE first SET slider4_text='$slider4_text' WHERE id=0";
                move_uploaded_file($_FILES['slider4']['tmp_name'], $hero."slide4.jpg");
                move_uploaded_file($_FILES['slider4_a']['tmp_name'], $hero."slide4-a.jpg");

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                  echo "<script>
                    history.go(-1);
                  </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }

            elseif(isset($_POST['box'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $box_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['box_title'])));
                $box_text  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['box_text'])));
                $sql1 = "UPDATE first SET box_title='$box_title' WHERE id=0";
                $sql2 = "UPDATE first SET box_text='$box_text' WHERE id=0";

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                  echo "<script>
                    history.go(-1);
                  </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }

            elseif(isset($_POST['equip'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $equip_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['equip_title'])));
                $equip_text  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['equip_text'])));
                move_uploaded_file($_FILES['equip_ico']['tmp_name'], $template."icon-office-equip.png");
                $sql1 = "UPDATE first SET equip_title='$equip_title' WHERE id=0";
                $sql2 = "UPDATE first SET equip_text='$equip_text' WHERE id=0";

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                  echo "<script>
                    history.go(-1);
                  </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }

            elseif(isset($_POST['manage'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $manage_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['manage_title'])));
                $manage_text  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['manage_text'])));
                move_uploaded_file($_FILES['manage_ico']['tmp_name'], $template."icon-manage-services.png");
                $sql1 = "UPDATE first SET manage_title='$manage_title' WHERE id=0";
                $sql2 = "UPDATE first SET manage_text='$manage_text' WHERE id=0";

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                  echo "<script>
                    history.go(-1);
                  </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }

            elseif(isset($_POST['doc'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $doc_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['doc_title'])));
                $doc_text  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['doc_text'])));
                move_uploaded_file($_FILES['doc_ico']['tmp_name'], $template."icon-doc-management.png");
                $sql1 = "UPDATE first SET doc_title='$doc_title' WHERE id=0";
                $sql2 = "UPDATE first SET doc_text='$doc_text' WHERE id=0";

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                  echo "<script>
                    history.go(-1);
                  </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }

             elseif(isset($_POST['print'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $print_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['print_title'])));
                $print_desc  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['print_desc'])));
                move_uploaded_file($_FILES['print_ico']['tmp_name'], $template."icon-print-services.png");
                $sql1 = "UPDATE first SET print_title='$print_title' WHERE id=0";
                $sql2 = "UPDATE first SET print_desc='$print_desc' WHERE id=0";

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                  echo "<script>
                    history.go(-1);
                  </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }

             elseif(isset($_POST['enterprise'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $enterprise_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['enterprise_title'])));
                $enterprise_desc  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['enterprise_desc'])));
                move_uploaded_file($_FILES['enterprise_ico']['tmp_name'], $template."icon-enterprise-management.png");
                $sql1 = "UPDATE first SET enterprise_title='$enterprise_title' WHERE id=0";
                $sql2 = "UPDATE first SET enterprise_desc='$enterprise_desc' WHERE id=0";

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                  echo "<script>
                    history.go(-1);
                  </script>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }

            elseif(isset($_POST['brand'])){
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                move_uploaded_file($_FILES['brand1']['tmp_name'], $template."logo-toshiba.png");
                move_uploaded_file($_FILES['brand2']['tmp_name'], $template."logo-wbenc.png");
              }
            }

            elseif(isset($_POST['contact'])){
             if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
               $office_add = mysqli_real_escape_string($conn,strip_tags(trim($_POST['office_add'])));
               $phone  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['phone'])));
               $email  = mysqli_real_escape_string($conn,strip_tags(trim($_POST['email'])));

               $sql1 = "UPDATE first SET office_add='$office_add' WHERE id=0";
               $sql2 = "UPDATE first SET phone='$enterprise_desc' WHERE id=0";
               $sql3 = "UPDATE email SET phone='$email' WHERE id=0";

               if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)  && ($conn->query($sql3) === TRUE)) {
                 echo "<script>
                   history.go(-1);
                 </script>";
               } else {
                   echo "Error updating record: " . $conn->error;
               }
             }
           }

        else{
      ?>
    <header class='app-header'>
      <a class='app-header__logo' href=''>Admin</a>
      <a class='app-sidebar__toggle' href='' data-toggle='sidebar' aria-label='Hide Sidebar'></a>
      <ul class='app-nav'>
        <li class='app-search'>
          <a href='logout.php' class = 'logout'>Logout</a>
        </li>
      </ul>
    </header>
    <div class='app-sidebar__overlay' data-toggle='sidebar'></div>
    <aside class='app-sidebar'>
      <div class='app-sidebar__user'><img class='app-sidebar__user-avatar' src='img/admin.png' alt='User Image'>
        <div>
          <p class='app-sidebar__user-designation'>Administrator</p>
        </div>
      </div>
      <ul class='app-menu'>
        <li><a class='app-menu__item active' href='admin.php'><i class='app-menu__icon fa fa-dashboard'></i><span class='app-menu__label'>Home Page Update</span></a></li>
        <li class='treeview'>
         <a class='app-menu__item ' href='#' data-toggle='treeview'>
           <i class='app-menu__icon fa fa-laptop'></i><span class='app-menu__label'>Printers & Copiers </span><i class='treeview-indicator fa fa-angle-right'></i>
         </a>
         <ul class='treeview-menu'>
           <li><a class='treeview-item' href='xerox.php'><i class='icon fa fa-circle-o'></i> Xerox Printers Overview</a></li>
           <li><a class='treeview-item ' href='copies.php'><i class='icon fa fa-circle-o'></i> Colour Multifunction</a></li>
           <li><a class='treeview-item' href='mono.php'><i class='icon fa fa-circle-o'></i> Monochrome Multifunction </a></li>
           <li><a class='treeview-item' href='production.php'><i class='icon fa fa-circle-o'></i> Production Printer Service </a></li>
           <li><a class='treeview-item' href='managed.php'><i class='icon fa fa-circle-o'></i> Managed Print Services </a></li>
           <li><a class='treeview-item' href='supplies.php'><i class='icon fa fa-circle-o'></i> Printer Supplies </a></li>
         </ul>
       </li>
       <li class='treeview'>
        <a class='app-menu__item ' href='#' data-toggle='treeview'>
          <i class='app-menu__icon fa fa-laptop'></i><span class='app-menu__label'>ERP Systems</span><i class='treeview-indicator fa fa-angle-right'></i>
        </a>
        <ul class='treeview-menu'>
          <li><a class='treeview-item' href='qe.php'><i class='icon fa fa-circle-o'></i> ERP Systems Overview</a></li>
          <li><a class='treeview-item ' href='bp.php'><i class='icon fa fa-circle-o'></i> Printing Business Software</a></li>
          <li><a class='treeview-item' href='be.php'><i class='icon fa fa-circle-o'></i> ERP System for all SMEs</a></li>
          <li><a class='treeview-item' href='pricing.php'><i class='icon fa fa-circle-o'></i> Pricing </a></li>
        </ul>
      </li>
       <li><a class='app-menu__item ' href='client.php'><i class='app-menu__icon fa fa-dashboard'></i><span class='app-menu__label'>Clients Page Update </span></a></li>
       <li><a class='app-menu__item ' href='about.php'><i class='app-menu__icon fa fa-dashboard'></i><span class='app-menu__label'>About Us Page Update </span></a></li>
      </ul>
    </aside>
    <main class='app-content'>
      <div class='app-title'>
        <div>
          <h1><i class='fa fa-dashboard'></i> Admin Panel</h1>
        </div>
      </div>
        <div>
<?php

          $sql = "SELECT * FROM first ORDER BY id DESC LIMIT 1";
          $result = $conn->query($sql);

              if ($result->num_rows > 0) {

                  while($row = $result->fetch_assoc()) {
echo"
            <div class='row'>
              <div class='col-sm-6'>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>
                        <div class='form-group'>
                            <label for='slider1_title'>First Slider Title</label>
                            <input type='text' class='form-control' id='slider1_title' name = 'slider1_title' value='". $row['slider1_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='slider1_text'>First Slider Text</label>
                            <textarea class='form-control' id='slider1_text' name = 'slider1_text' required>". $row['slider1_text'] ."</textarea>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='slider1'>First Slider Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='slider1' name='slider1' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='slider1_a'>First Slider Mobile Image</label>
                            <div class='custom-file'>
                              <input type='file' class='custom-file-input' id='slider1_a' name='slider1_a' >
                              <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                            </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'first'> Update Contents </button>
                          </div>
                    </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>
                        <div class='form-group'>
                            <label for='slider2_title'>Second Slider Title</label>
                            <input type='text' class='form-control' id='slider2_title' name = 'slider2_title' value='". $row['slider2_title'] ."'  required>
                          </div>

                          <div class='form-group'>
                            <label for='slider2_text'>Second Slider Text</label>
                            <textarea type='text' class='form-control' id='slider2_text' name = 'slider2_text' required>". $row['slider2_text'] ."</textarea>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='slider2'>Second Slider Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='slider2' name='slider2' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='slider2_a'>Second Slider Mobile Image</label>
                            <div class='custom-file'>
                              <input type='file' class='custom-file-input' id='slider2_a' name='slider2_a' >
                              <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                            </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'second'> Update Contents </button>
                          </div>
                      </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>
                        <div class='form-group'>
                            <label for='slider3_title'>Third Slider Title</label>
                            <input type='text' class='form-control' id='slider3_title' name = 'slider3_title' value='". $row['slider3_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='slider3_text'>Third Slider Text</label>
                            <textarea type='text' class='form-control' id='slider3_text' name = 'slider3_text' required>". $row['slider3_text'] ."</textarea>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='slider3'>Third Slider Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='slider3' name='slider3' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='slider3_a'>Third Slider Mobile Image</label>
                            <div class='custom-file'>
                              <input type='file' class='custom-file-input' id='slider3_a' name='slider3_a'  >
                              <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                            </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'third'> Update Contents </button>
                          </div>
                      </form>

                  </div>


                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>
                        <div class='form-group'>
                            <label for='slider4_title'>Fourth Slider Title</label>
                            <input type='text' class='form-control' id='slider4_title' name = 'slider4_title' value='". $row['slider4_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='slider4_text'>Fourth Slider Text</label>
                            <textarea type='text' class='form-control' id='slider4_text' name = 'slider4_text' required>". $row['slider4_text'] ."</textarea>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='slider4'>Fourth Slider Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='slider4' name='slider4' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='slider4_a'>Fourth Slider Mobile Image</label>
                            <div class='custom-file'>
                              <input type='file' class='custom-file-input' id='slider4_a' name='slider4_a' >
                              <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                            </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'fourth'> Update Contents </button>
                          </div>
                      </form>

                  </div>

                <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>
                        <div class='form-group'>
                            <label for='box_title'>Box Title</label>
                            <input type='text' class='form-control' id='box_title' name = 'box_title' value='". $row['box_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='box_text'>Box Text</label>
                            <textarea type='text' class='form-control' id='box_text' name = 'box_text' required>". $row['box_text'] ."</textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'box'> Update Contents </button>
                          </div>
                      </form>

                  </div>
              </div>

              <div class='col-sm-6'>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>
                        <div class='form-group'>
                            <label for='equip_title'>Office Title</label>
                            <input type='text' class='form-control' id='equip_title' name = 'equip_title' value='". $row['equip_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='equip_text'>Office Text</label>
                            <textarea type='text' class='form-control' id='equip_text' name = 'equip_text' required>". $row['equip_text'] ."</textarea>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='equip_ico'>Office Icon</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='equip_ico' name='equip_ico' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'equip'> Update Contents </button>
                          </div>
                      </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>
                        <div class='form-group'>
                            <label for='manage_title'>Manage Title</label>
                            <input type='text' class='form-control' id='manage_title' name = 'manage_title' value='". $row['manage_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='manage_text'>Manage Text</label>
                            <textarea type='text' class='form-control' id='manage_text' name = 'manage_text' required>". $row['manage_text'] ."</textarea>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='manage_ico'>Manage Icon</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='manage_ico' name='manage_ico' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'manage'> Update Contents </button>
                          </div>
                      </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>
                        <div class='form-group'>
                            <label for='doc_title'>Document Title</label>
                            <input type='text' class='form-control' id='doc_title' name = 'doc_title' value='". $row['doc_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='doc_text'>Document Text</label>
                            <textarea type='text' class='form-control' id='doc_text' name = 'doc_text' required>". $row['doc_text'] ."</textarea>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='doc_ico'>Document Icon</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='doc_ico' name='doc_ico' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'doc'> Update Contents </button>
                          </div>
                      </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>
                        <div class='form-group'>
                            <label for='print_title'>BOSPrint Title</label>
                            <input type='text' class='form-control' id='print_title' name = 'print_title' value='". $row['print_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='print_desc'>BOSPrint Text</label>
                            <textarea type='text' class='form-control' id='print_desc' name = 'print_desc' required>". $row['print_desc'] ."</textarea>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='print_ico'>BOSPrint Icon</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='print_ico' name='print_ico' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'print'> Update Contents </button>
                          </div>
                      </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                        <div class='form-group'>
                            <label for='enterprise_title'>BOSEnterprise Title</label>
                            <input type='text' class='form-control' id='enterprise_title' name = 'enterprise_title' value='". $row['enterprise_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='enterprise_desc'>BOSEnterprise Text</label>
                            <textarea type='text' class='form-control' id='enterprise_desc' name = 'enterprise_desc' required>". $row['enterprise_desc'] ."</textarea>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='enterprise_ico'>BOSEnterprise Icon</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='enterprise_ico' name='enterprise_ico' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'enterprise'> Update Contents </button>
                          </div>
                      </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group custom-file'>
                            <label for='brand1'>First Brand</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='brand1' name='brand1' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group custom-file'>
                            <label for='brand2'>Second Brand</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='brand2' name='brand2' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'brand'> Update Contents </button>
                          </div>
                      </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                        <div class='form-group'>
                          <label for='office_add'>Office Address</label>
                          <textarea type='text' class='form-control' id='office_add' name = 'office_add' required>". $row['office_add'] ."</textarea>
                        </div>

                        <div class='form-group'>
                            <label for='phone'>Phone Number </label>
                            <input type='text' class='form-control' id='phone' name = 'phone' value='". $row['phone'] ."' required>
                          </div>

                          <div class='form-group'>
                              <label for='email'>Email </label>
                              <input type='text' class='form-control' id='email' name = 'email' value='". $row['email'] ."' required>
                            </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'contact'> Update Contents </button>
                          </div>
                      </form>

                  </div>


              </div>
          </div>
    </main>
    <script src='js/jquery-3.2.1.min.js'></script>
    <script src='js/popper.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/main.js'></script>
    <script src='js/plugins/pace.min.js'></script>
    <script type='text/javascript' src='js/plugins/chart.js'></script>
    <script type='text/javascript' src='js/jquery.dataTables.js'></script>

    <script>
      $('.custom-file-input').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
      });
    </script>
    ";
  }
}
else{
  echo '0 results';
}
}
}
    else {
      echo "<script>
      alert('Invalid Acess!');
      history.go(-1);
      </script>";
    } ?>
  </body>
</html>
