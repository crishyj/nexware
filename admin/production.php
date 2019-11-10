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


          if (isset($_POST['p1'])) {
            if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $p7_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p7_title'])));
                $p7_desc1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p7_desc1'])));
                $p7_desc = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p7_desc2'])));
                $p7_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p7_t1'])));
                $p7_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p7_t2'])));
                $p7_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p7_t3'])));
                $p7_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p7_t4'])));

                $sql1 = "UPDATE production SET p7_title='$p7_title' WHERE id=1";
                $sql2 = "UPDATE production SET p7_desc1='$p7_desc1' WHERE id=1";
                $sql3 = "UPDATE production SET p7_desc2='$p7_desc2' WHERE id=1";
                $sql4 = "UPDATE production SET p7_t1='$p7_t1' WHERE id=1";
                $sql5 = "UPDATE production SET p7_t2='$p7_t2' WHERE id=1";
                $sql6 = "UPDATE production SET p7_t3='$p7_t3' WHERE id=1";
                $sql7 = "UPDATE production SET p7_t4='$p7_t4' WHERE id=1";

                move_uploaded_file($_FILES['p7_img']['tmp_name'], $product."p4.png");

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                      && ($conn->query($sql7) === TRUE)) {
                echo "<script>
                          history.go(-1);
                      </script>";
              } else
                {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }

            elseif (isset($_POST['p2'])) {
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                  $p8_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p8_title'])));
                  $p8_desc1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p8_desc1'])));
                  $p8_desc2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p8_desc2'])));
                  $p8_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p8_t1'])));
                  $p8_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p8_t2'])));
                  $p8_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p8_t3'])));
                  $p8_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p8_t4'])));

                  $sql1 = "UPDATE production SET p8_title='$p8_title' WHERE id=1";
                  $sql2 = "UPDATE production SET p8_desc1='$p8_desc1' WHERE id=1";
                  $sql3 = "UPDATE production SET p8_desc2='$p8_desc2' WHERE id=1";
                  $sql4 = "UPDATE production SET p8_t1='$p8_t1' WHERE id=1";
                  $sql5 = "UPDATE production SET p8_t2='$p8_t2' WHERE id=1";
                  $sql6 = "UPDATE production SET p8_t3='$p8_t3' WHERE id=1";
                  $sql7 = "UPDATE production SET p8_t4='$p8_t4' WHERE id=1";

                  move_uploaded_file($_FILES['p8_img']['tmp_name'], $product."p8.png");

                  if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                        && ($conn->query($sql7) === TRUE)) {
                  echo "<script>
                            history.go(-1);
                        </script>";
                } else
                  {
                      echo "Error updating record: " . $conn->error;
                  }
                }
              }

              elseif (isset($_POST['p3'])) {
                if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                    $p9_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p9_title'])));
                    $p9_desc1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p9_desc1'])));
                    $p9_desc2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p9_desc2'])));
                    $p9_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p9_t1'])));
                    $p9_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p9_t2'])));
                    $p9_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p9_t3'])));
                    $p9_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p9_t4'])));
                    $p9_t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p9_t5'])));

                    $sql1 = "UPDATE production SET p9_title='$p9_title' WHERE id=1";
                    $sql2 = "UPDATE production SET p9_desc1='$p9_desc2' WHERE id=1";
                    $sql3 = "UPDATE production SET p9_desc2='$p8_desc2' WHERE id=1";
                    $sql4 = "UPDATE production SET p9_t1='$p9_t1' WHERE id=1";
                    $sql5 = "UPDATE production SET p9_t2='$p9_t2' WHERE id=1";
                    $sql6 = "UPDATE production SET p9_t3='$p9_t3' WHERE id=1";
                    $sql7 = "UPDATE production SET p9_t4='$p9_t4' WHERE id=1";
                    $sql8 = "UPDATE production SET p9_t5='$p9_t5' WHERE id=1";

                    move_uploaded_file($_FILES['p9_img']['tmp_name'], $product."p9.png");

                    if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                          && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE)) {
                    echo "<script>
                              history.go(-1);
                          </script>";
                  } else
                    {
                        echo "Error updating record: " . $conn->error;
                    }
                  }
                }

              elseif(isset($_POST['p4'])) {
                  if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                      $p10_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p10_title'])));
                      $p10_desc1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p10_desc1'])));
                      $p10_desc2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p10_desc2'])));
                      $p10_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p10_t1'])));
                      $p10_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p10_t2'])));
                      $p10_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p10_t3'])));
                      $p10_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p10_t4'])));
                      $p10_t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p10_t5'])));
                      $p10_t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p10_t6'])));

                      $sql1 = "UPDATE production SET p10_title='$p10_title' WHERE id=1";
                      $sql2 = "UPDATE production SET p10_desc1='$p10_desc1' WHERE id=1";
                      $sql3 = "UPDATE production SET p10_desc2='$p10_desc2' WHERE id=1";
                      $sql4 = "UPDATE production SET p10_t1='$p10_t1' WHERE id=1";
                      $sql5 = "UPDATE production SET p10_t2='$p10_t2' WHERE id=1";
                      $sql6 = "UPDATE production SET p10_t3='$p10_t3' WHERE id=1";
                      $sql7 = "UPDATE production SET p10_t4='$p10_t4' WHERE id=1";
                      $sql8 = "UPDATE production SET p10_t5='$p10_t5' WHERE id=1";
                      $sql9 = "UPDATE production SET p10_t6='$p10_t6' WHERE id=1";

                      move_uploaded_file($_FILES['p10_img']['tmp_name'], $product."p10.png");

                      if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                            && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE)  && ($conn->query($sql9) === TRUE)) {
                      echo "<script>
                                history.go(-1);
                            </script>";
                    } else
                      {
                          echo "Error updating record: " . $conn->error;
                      }
                    }
                  }


                  elseif(isset($_POST['p5'])) {
                      if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                          $p11_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p11_title'])));
                          $p11_desc1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p11_desc1'])));
                          $p11_desc2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p11_desc2'])));
                          $p11_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p11_t1'])));
                          $p11_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p11_t2'])));
                          $p11_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p11_t3'])));
                          $p11_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p11_t4'])));
                          $p11_t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p11_t5'])));
                          $p11_t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p11_t6'])));

                          $sql1 = "UPDATE production SET p11_title='$p11_title' WHERE id=1";
                          $sql2 = "UPDATE production SET p11_desc1='$p11_desc1' WHERE id=1";
                          $sql3 = "UPDATE production SET p11_desc2='$p11_desc2' WHERE id=1";
                          $sql4 = "UPDATE production SET p11_t1='$p11_t1' WHERE id=1";
                          $sql5 = "UPDATE production SET p11_t2='$p11_t2' WHERE id=1";
                          $sql6 = "UPDATE production SET p11_t3='$p11_t3' WHERE id=1";
                          $sql7 = "UPDATE production SET p11_t4='$p11_t4' WHERE id=1";
                          $sql8 = "UPDATE production SET p11_t5='$p11_t5' WHERE id=1";
                          $sql9 = "UPDATE production SET p11_t6='$p11_t6' WHERE id=1";

                          move_uploaded_file($_FILES['p11_img']['tmp_name'], $product."p11.png");

                          if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                                && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE)  && ($conn->query($sql9) === TRUE)) {
                          echo "<script>
                                    history.go(-1);
                                </script>";
                        } else
                          {
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
<?php

  $sql = "SELECT * FROM production ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
      echo"
    <main class='app-content'>
      <div class='app-title'>
        <div>
          <h1><i class='fa fa-dashboard'></i> Admin Panel</h1>
        </div>
      </div>
        <div>
            <div class='row'>
              <div class='col-sm-6'>

                  <div class='group'>
                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group custom-file'>
                            <label for='p7_img'>Product7 Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='p7_img' name='p7_img' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='p7_title'>Product7 Title</label>
                            <input type='text' class='form-control' id='p7_title' name = 'p7_title' value='". $row['p7_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p7_desc1'>Product7 Description1</label>
                            <textarea class = 'form-control' name = 'p7_desc1' id = 'p7_desc1'>".$row['p7_desc1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p7_desc2'>Product7 Description2</label>
                            <textarea class = 'form-control' name = 'p7_desc2' id = 'p7_desc2'>".$row['p7_desc2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p7_t1'>Product7 Properties1</label>
                            <textarea class = 'form-control' name = 'p7_t1' id = 'p7_t1'>".$row['p7_t1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p7_t2'>Product7 Properties2</label>
                            <textarea class = 'form-control' name = 'p7_t2' id = 'p7_t2'>".$row['p7_t2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p7_t3'>Product7 Properties3</label>
                            <textarea class = 'form-control' name = 'p7_t3' id = 'p7_t3'>".$row['p7_t3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p7_t4'>Product7 Properties4</label>
                            <textarea class = 'form-control' name = 'p7_t4' id = 'p7_t4'>".$row['p7_t4']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p1'> Update Contents </button>
                          </div>
                    </form>
                  </div>

                  <div class='group'>
                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group custom-file'>
                            <label for='p8_img'>Product8 Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='p8_img' name='p8_img' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='p8_title'>Product8 Title</label>
                            <input type='text' class='form-control' id='p8_title' name = 'p8_title' value='". $row['p8_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p8_desc1'>Product8 Description1</label>
                            <textarea class = 'form-control' name = 'p8_desc1' id = 'p8_desc1'>".$row['p8_desc1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p8_desc2'>Product8 Description2</label>
                            <textarea class = 'form-control' name = 'p8_desc2' id = 'p8_desc2'>".$row['p8_desc2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p8_t1'>Product8 Properties1</label>
                            <textarea class = 'form-control' name = 'p8_t1' id = 'p8_t1'>".$row['p8_t1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p8_t2'>Product8 Properties2</label>
                            <textarea class = 'form-control' name = 'p8_t2' id = 'p8_t2'>".$row['p8_t2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p8_t3'>Product8 Properties3</label>
                            <textarea class = 'form-control' name = 'p8_t3' id = 'p8_t3'>".$row['p8_t3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p8_t4'>Product8 Properties4</label>
                            <textarea class = 'form-control' name = 'p8_t4' id = 'p8_t4'>".$row['p8_t4']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p2'> Update Contents </button>
                          </div>
                    </form>
                  </div>

                  <div class='group'>
                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group custom-file'>
                            <label for='p9_img'>Product9 Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='p9_img' name='p9_img' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='p9_title'>Product9 Title</label>
                            <input type='text' class='form-control' id='p9_title' name = 'p9_title' value='". $row['p9_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p9_desc1'>Product9 Description1</label>
                            <textarea class = 'form-control' name = 'p9_desc1' id = 'p9_desc1'>".$row['p9_desc1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p9_desc2'>Product9 Description2</label>
                            <textarea class = 'form-control' name = 'p9_desc2' id = 'p9_desc2'>".$row['p9_desc2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p9_t1'>Product9 Properties1</label>
                            <textarea class = 'form-control' name = 'p9_t1' id = 'p9_t1'>".$row['p9_t1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p9_t2'>Product9 Properties2</label>
                            <textarea class = 'form-control' name = 'p9_t2' id = 'p9_t2'>".$row['p9_t2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p9_t3'>Product9 Properties3</label>
                            <textarea class = 'form-control' name = 'p9_t3' id = 'p9_t3'>".$row['p9_t3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p9_t4'>Product9 Properties4</label>
                            <textarea class = 'form-control' name = 'p9_t4' id = 'p9_t4'>".$row['p9_t4']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p9_t5'>Product9 Properties5</label>
                            <textarea class = 'form-control' name = 'p9_t5' id = 'p9_t5'>".$row['p9_t5']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p3'> Update Contents </button>
                          </div>
                    </form>
                  </div>
              </div>

              <div class='col-sm-6'>

                  <div class='group'>
                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group custom-file'>
                            <label for='p10_img'>Product10 Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='p10_img' name='p10_img' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='p10_title'>Product10 Title</label>
                            <input type='text' class='form-control' id='p10_title' name = 'p10_title' value='". $row['p10_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p10_desc1'>Product10 Description1</label>
                            <textarea class = 'form-control' name = 'p10_desc1' id = 'p10_desc1'>".$row['p10_desc1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p10_desc2'>Product10 Description2</label>
                            <textarea class = 'form-control' name = 'p10_desc2' id = 'p10_desc2'>".$row['p10_desc2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p10_t1'>Product10 Properties1</label>
                            <textarea class = 'form-control' name = 'p10_t1' id = 'p10_t1'>".$row['p10_t1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p10_t2'>Product10 Properties2</label>
                            <textarea class = 'form-control' name = 'p10_t2' id = 'p10_t2'>".$row['p10_t2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p10_t3'>Product10 Properties3</label>
                            <textarea class = 'form-control' name = 'p10_t3' id = 'p10_t3'>".$row['p10_t3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p10_t4'>Product10 Properties4</label>
                            <textarea class = 'form-control' name = 'p10_t4' id = 'p10_t4'>".$row['p10_t4']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p10_t5'>Product10 Properties5</label>
                            <textarea class = 'form-control' name = 'p10_t5' id = 'p10_t5'>".$row['p10_t5']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p10_t6'>Product10 Properties6</label>
                            <textarea class = 'form-control' name = 'p10_t6' id = 'p10_t6'>".$row['p10_t6']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p4'> Update Contents </button>
                          </div>
                    </form>
                  </div>


                  <div class='group'>
                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group custom-file'>
                            <label for='p11_img'>Product11 Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='p11_img' name='p11_img' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='p11_title'>Product11 Title</label>
                            <input type='text' class='form-control' id='p11_title' name = 'p11_title' value='". $row['p11_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p11_desc1'>Product11 Description1</label>
                            <textarea class = 'form-control' name = 'p11_desc1' id = 'p11_desc1'>".$row['p11_desc1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p11_desc2'>Product11 Description2</label>
                            <textarea class = 'form-control' name = 'p11_desc2' id = 'p11_desc2'>".$row['p11_desc2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p11_t1'>Product11 Properties1</label>
                            <textarea class = 'form-control' name = 'p11_t1' id = 'p11_t1'>".$row['p11_t1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p11_t2'>Product11 Properties2</label>
                            <textarea class = 'form-control' name = 'p11_t2' id = 'p11_t2'>".$row['p11_t2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p11_t3'>Product11 Properties3</label>
                            <textarea class = 'form-control' name = 'p11_t3' id = 'p11_t3'>".$row['p11_t3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p11_t4'>Product11 Properties4</label>
                            <textarea class = 'form-control' name = 'p11_t4' id = 'p11_t4'>".$row['p11_t4']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p11_t5'>Product11 Properties5</label>
                            <textarea class = 'form-control' name = 'p11_t5' id = 'p11_t5'>".$row['p11_t5']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='p11_t6'>Product11 Properties6</label>
                            <textarea class = 'form-control' name = 'p11_t6' id = 'p11_t6'>".$row['p11_t6']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p5'> Update Contents </button>
                          </div>
                    </form>
                  </div>


              </div>
          </div>
        <?php
            }
        ?>
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
