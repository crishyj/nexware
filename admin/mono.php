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
                              $p4_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p4_title'])));
                              $p4_desc = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p4_desc'])));
                              $p4_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p4_t1'])));
                              $p4_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p4_t2'])));
                              $p4_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p4_t3'])));
                              $p4_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p4_t4'])));
                              $p4_t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p4_t5'])));
                              $p4_t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p4_t6'])));

                              $sql1 = "UPDATE mono SET p4_title='$p4_title' WHERE id=1";
                              $sql2 = "UPDATE mono SET p4_desc='$p4_desc' WHERE id=1";
                              $sql3 = "UPDATE mono SET p4_t1='$p4_t1' WHERE id=1";
                              $sql4 = "UPDATE mono SET p4_t2='$p4_t2' WHERE id=1";
                              $sql5 = "UPDATE mono SET p4_t3='$p4_t3' WHERE id=1";
                              $sql6 = "UPDATE mono SET p4_t4='$p4_t4' WHERE id=1";
                              $sql7 = "UPDATE mono SET p4_t5='$p4_t5' WHERE id=1";
                              $sql8 = "UPDATE mono SET p4_t6='$p4_t6' WHERE id=1";

                              move_uploaded_file($_FILES['p4_img']['tmp_name'], $product."p4.png");

                              if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                            && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE)) {
                                echo "<script>
                                  history.go(-1);
                                </script>";
                              } else {
                                  echo "Error updating record: " . $conn->error;
                              }
                            }
                          }

                          elseif (isset($_POST['p2'])) {
                              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                                $p5_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_title'])));
                                $p5_desc = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_desc'])));
                                $p5_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_t1'])));
                                $p5_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_t2'])));
                                $p5_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_t3'])));
                                $p5_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_t4'])));
                                $p5_t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_t5'])));
                                $p5_t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_t6'])));
                                $p5_t7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_t7'])));
                                $p5_t8 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_t8'])));
                                $p5_t9 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p5_t9'])));

                                $sql1 = "UPDATE mono SET p5_title='$p5_title' WHERE id=1";
                                $sql2 = "UPDATE mono SET p5_desc='$p5_desc' WHERE id=1";
                                $sql3 = "UPDATE mono SET p5_t1='$p5_t1' WHERE id=1";
                                $sql4 = "UPDATE mono SET p5_t2='$p5_t2' WHERE id=1";
                                $sql5 = "UPDATE mono SET p5_t3='$p5_t3' WHERE id=1";
                                $sql6 = "UPDATE mono SET p5_t4='$p5_t4' WHERE id=1";
                                $sql7 = "UPDATE mono SET p5_t5='$p5_t5' WHERE id=1";
                                $sql8 = "UPDATE mono SET p5_t6='$p5_t6' WHERE id=1";
                                $sql9 = "UPDATE mono SET p5_t7='$p5_t7' WHERE id=1";
                                $sql10 = "UPDATE mono SET p5_t7='$p5_t8' WHERE id=1";
                                $sql11 = "UPDATE mono SET p5_t7='$p5_t9' WHERE id=1";

                                move_uploaded_file($_FILES['p5_img']['tmp_name'], $product."p5.png");

                                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                              && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE) && ($conn->query($sql9) === TRUE) && ($conn->query($sql10) === TRUE) && ($conn->query($sql11) === TRUE)) {
                                  echo "<script>
                                    history.go(-1);
                                  </script>";
                                } else {
                                    echo "Error updating record: " . $conn->error;
                                }
                              }
                            }

                            elseif (isset($_POST['p3'])) {
                                if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                                  $p6_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_title'])));
                                  $p6_desc = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_desc'])));
                                  $p6_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t1'])));
                                  $p6_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t2'])));
                                  $p6_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t3'])));
                                  $p6_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t4'])));
                                  $p6_t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t5'])));
                                  $p6_t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t6'])));
                                  $p6_t7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t7'])));
                                  $p6_t8 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t8'])));
                                  $p6_t9 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t9'])));
                                  $p6_t10 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p6_t10'])));

                                  $sql1 = "UPDATE mono SET p6_title='$p6_title' WHERE id=1";
                                  $sql2 = "UPDATE mono SET p6_desc='$p6_desc' WHERE id=1";
                                  $sql3 = "UPDATE mono SET p6_t1='$p6_t1' WHERE id=1";
                                  $sql4 = "UPDATE mono SET p6_t2='$p6_t2' WHERE id=1";
                                  $sql5 = "UPDATE mono SET p6_t3='$p6_t3' WHERE id=1";
                                  $sql6 = "UPDATE mono SET p6_t4='$p6_t4' WHERE id=1";
                                  $sql7 = "UPDATE mono SET p6_t5='$p6_t5' WHERE id=1";
                                  $sql8 = "UPDATE mono SET p6_t6='$p6_t6' WHERE id=1";
                                  $sql9 = "UPDATE mono SET p6_t7='$p6_t7' WHERE id=1";
                                  $sql10 = "UPDATE mono SET p6_t8='$p6_t8' WHERE id=1";
                                  $sql11 = "UPDATE mono SET p6_t9='$p6_t9' WHERE id=1";
                                  $sql12 = "UPDATE mono SET p6_t10='$p6_t10' WHERE id=1";

                                  move_uploaded_file($_FILES['p6_img']['tmp_name'], $product."p6.png");

                                  if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                                && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE) && ($conn->query($sql9) === TRUE) && ($conn->query($sql10) === TRUE) && ($conn->query($sql11) === TRUE) && ($conn->query($sql12) === TRUE)) {
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
          <li><a class='app-menu__item ' href='admin.php'><i class='app-menu__icon fa fa-dashboard'></i><span class='app-menu__label'>Home Page Update</span></a></li>
          <li class='treeview'>
           <a class='app-menu__item active' href='#' data-toggle='treeview'>
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

  $sql = "SELECT * FROM mono ORDER BY id DESC LIMIT 1";
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
                            <label for='p4_img'>Product4 Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='p4_img' name='p4_img' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='p4_title'>Product4 Title</label>
                            <input type='text' class='form-control' id='p4_title' name = 'p4_title' value='". $row['p4_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p4_desc'>Product4 Description</label>
                            <input type='text' class='form-control' id='p4_desc' name = 'p4_desc' value='". $row['p4_desc'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p4_t1'>Product4 Properties1</label>
                            <input type='text' class='form-control' id='p4_t1' name = 'p4_t1' value='". $row['p4_t1'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p4_t2'>Product4 Properties2</label>
                            <input type='text' class='form-control' id='p4_t2' name = 'p4_t2' value='". $row['p4_t2'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p4_t3'>Product4 Properties3</label>
                            <input type='text' class='form-control' id='p4_t3' name = 'p4_t3' value='". $row['p4_t3'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p4_t4'>Product4 Properties4</label>
                            <input type='text' class='form-control' id='p4_t4' name = 'p4_t4' value='". $row['p4_t4'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p4_t5'>Product4 Properties5</label>
                            <input type='text' class='form-control' id='p4_t5' name = 'p4_t5' value='". $row['p4_t5'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p4_t6'>Product4 Properties6</label>
                            <input type='text' class='form-control' id='p4_t6' name = 'p4_t6' value='". $row['p4_t6'] ."' required>
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
                            <label for='p5_img'>Product5 Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='p5_img' name='p5_img'  >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='p5_title'>Product5 Title</label>
                            <input type='text' class='form-control' id='p5_title' name = 'p5_title' value='". $row['p5_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_desc'>Product5 Description</label>
                            <input type='text' class='form-control' id='p5_desc' name = 'p5_desc' value='". $row['p5_desc'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_t1'>Product5 Properties1</label>
                            <input type='text' class='form-control' id='p5_t1' name = 'p5_t1' value='". $row['p5_t1'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_t2'>Product5 Properties2</label>
                            <input type='text' class='form-control' id='p5_t2' name = 'p5_t2' value='". $row['p5_t2'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_t3'>Product5 Properties3</label>
                            <input type='text' class='form-control' id='p5_t3' name = 'p5_t3' value='". $row['p5_t3'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_t4'>Product5 Properties4</label>
                            <input type='text' class='form-control' id='p5_t4' name = 'p5_t4' value='". $row['p5_t4'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_t5'>Product5 Properties5</label>
                            <input type='text' class='form-control' id='p5_t5' name = 'p5_t5' value='". $row['p5_t5'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_t6'>Product5 Properties6</label>
                            <input type='text' class='form-control' id='p5_t6' name = 'p5_t6' value='". $row['p5_t6'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_t7'>Product5 Properties7</label>
                            <input type='text' class='form-control' id='p5_t7' name = 'p5_t7' value='". $row['p5_t7'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_t8'>Product5 Properties8</label>
                            <input type='text' class='form-control' id='p5_t8' name = 'p5_t8' value='". $row['p5_t8'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p5_t9'>Product5 Properties9</label>
                            <input type='text' class='form-control' id='p5_t9' name = 'p5_t9' value='". $row['p5_t9'] ."' required>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p2'> Update Contents </button>
                          </div>
                    </form>

                  </div>

              </div>

              <div class='col-sm-6'>

                <div class='group'>

                  <form action='' method='post' enctype='multipart/form-data'>
                      <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                        <div class='form-group custom-file'>
                          <label for='p6_img'>Product6 Image</label>
                            <div class='custom-file'>
                              <input type='file' class='custom-file-input' id='p6_img' name='p6_img' >
                              <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                            </div>
                        </div>

                        <div class='form-group'>
                          <label for='p6_title'>Product6 Title</label>
                          <input type='text' class='form-control' id='p6_title' name = 'p6_title' value='". $row['p6_title'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_desc'>Product6 Description</label>
                          <input type='text' class='form-control' id='p6_desc' name = 'p6_desc' value='". $row['p6_desc'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t1'>Product6 Properties1</label>
                          <input type='text' class='form-control' id='p6_t1' name = 'p6_t1' value='". $row['p6_t1'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t2'>Product6 Properties2</label>
                          <input type='text' class='form-control' id='p6_t2' name = 'p6_t2' value='". $row['p6_t2'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t3'>Product6 Properties3</label>
                          <input type='text' class='form-control' id='p6_t3' name = 'p6_t3' value='". $row['p6_t3'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t4'>Product6 Properties4</label>
                          <input type='text' class='form-control' id='p6_t4' name = 'p6_t4' value='". $row['p6_t4'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t5'>Product6 Properties5</label>
                          <input type='text' class='form-control' id='p6_t5' name = 'p6_t5' value='". $row['p6_t5'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t6'>Product6 Properties6</label>
                          <input type='text' class='form-control' id='p6_t6' name = 'p6_t6' value='". $row['p6_t6'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t7'>Product6 Properties7</label>
                          <input type='text' class='form-control' id='p6_t7' name = 'p6_t7' value='". $row['p6_t7'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t8'>Product6 Properties8</label>
                          <input type='text' class='form-control' id='p6_t8' name = 'p6_t8' value='". $row['p6_t8'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t9'>Product6 Properties9</label>
                          <input type='text' class='form-control' id='p6_t9' name = 'p6_t9' value='". $row['p6_t9'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p6_t10'>Product6 Properties10</label>
                          <input type='text' class='form-control' id='p6_t10' name = 'p6_t10' value='". $row['p6_t10'] ."' required>
                        </div>

                        <div class='form-group' style = 'text-align:center;'>
                          <button type='submit' class = 'btn btn-success' name = 'p3'> Update Contents </button>
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
