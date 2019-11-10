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
                              $p1_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p1_title'])));
                              $p1_desc = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p1_desc'])));
                              $p1_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p1_t1'])));
                              $p1_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p1_t2'])));
                              $p1_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p1_t3'])));
                              $p1_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p1_t4'])));
                              $p1_t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p1_t5'])));
                              $p1_t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p1_t6'])));

                              $sql1 = "UPDATE copies SET p1_title='$p1_title' WHERE id=1";
                              $sql2 = "UPDATE copies SET p1_desc='$p1_desc' WHERE id=1";
                              $sql3 = "UPDATE copies SET p1_t1='$p1_t1' WHERE id=1";
                              $sql4 = "UPDATE copies SET p1_t2='$p1_t2' WHERE id=1";
                              $sql5 = "UPDATE copies SET p1_t3='$p1_t3' WHERE id=1";
                              $sql6 = "UPDATE copies SET p1_t4='$p1_t4' WHERE id=1";
                              $sql7 = "UPDATE copies SET p1_t5='$p1_t5' WHERE id=1";
                              $sql8 = "UPDATE copies SET p1_t6='$p1_t6' WHERE id=1";

                              move_uploaded_file($_FILES['p1_img']['tmp_name'], $product."p1.png");

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
                                $p2_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p2_title'])));
                                $p2_desc = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p2_desc'])));
                                $p2_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p2_t1'])));
                                $p2_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p2_t2'])));
                                $p2_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p2_t3'])));
                                $p2_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p2_t4'])));
                                $p2_t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p2_t5'])));
                                $p2_t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p2_t6'])));
                                $p2_t7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p2_t7'])));

                                $sql1 = "UPDATE copies SET p2_title='$p2_title' WHERE id=1";
                                $sql2 = "UPDATE copies SET p2_desc='$p2_desc' WHERE id=1";
                                $sql3 = "UPDATE copies SET p2_t1='$p2_t1' WHERE id=1";
                                $sql4 = "UPDATE copies SET p2_t2='$p2_t2' WHERE id=1";
                                $sql5 = "UPDATE copies SET p2_t3='$p2_t3' WHERE id=1";
                                $sql6 = "UPDATE copies SET p2_t4='$p2_t4' WHERE id=1";
                                $sql7 = "UPDATE copies SET p2_t5='$p2_t5' WHERE id=1";
                                $sql8 = "UPDATE copies SET p2_t6='$p2_t6' WHERE id=1";
                                $sql9 = "UPDATE copies SET p2_t7='$p2_t7' WHERE id=1";

                                move_uploaded_file($_FILES['p2_img']['tmp_name'], $product."p2.png");

                                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                              && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE) && ($conn->query($sql9) === TRUE)) {
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
                                  $p3_title = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_title'])));
                                  $p3_desc = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_desc'])));
                                  $p3_t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t1'])));
                                  $p3_t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t2'])));
                                  $p3_t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t3'])));
                                  $p3_t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t4'])));
                                  $p3_t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t5'])));
                                  $p3_t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t6'])));
                                  $p3_t7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t7'])));
                                  $p3_t8 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t8'])));
                                  $p3_t9 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t9'])));
                                  $p3_t10 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['p3_t10'])));

                                  $sql1 = "UPDATE copies SET p3_title='$p3_title' WHERE id=1";
                                  $sql2 = "UPDATE copies SET p3_desc='$p3_desc' WHERE id=1";
                                  $sql3 = "UPDATE copies SET p3_t1='$p3_t1' WHERE id=1";
                                  $sql4 = "UPDATE copies SET p3_t2='$p3_t2' WHERE id=1";
                                  $sql5 = "UPDATE copies SET p3_t3='$p3_t3' WHERE id=1";
                                  $sql6 = "UPDATE copies SET p3_t4='$p3_t4' WHERE id=1";
                                  $sql7 = "UPDATE copies SET p3_t5='$p3_t5' WHERE id=1";
                                  $sql8 = "UPDATE copies SET p3_t6='$p3_t6' WHERE id=1";
                                  $sql9 = "UPDATE copies SET p3_t7='$p3_t7' WHERE id=1";
                                  $sql10 = "UPDATE copies SET p3_t8='$p3_t8' WHERE id=1";
                                  $sql11 = "UPDATE copies SET p3_t9='$p3_t9' WHERE id=1";
                                  $sql12 = "UPDATE copies SET p3_t10='$p3_t10' WHERE id=1";

                                  move_uploaded_file($_FILES['p3_img']['tmp_name'], $product."p3.png");

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

  $sql = "SELECT * FROM copies ORDER BY id DESC LIMIT 1";
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
                            <label for='p1_img'>Product1 Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='p1_img' name='p1_img' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='p1_title'>Product1 Title</label>
                            <input type='text' class='form-control' id='p1_title' name = 'p1_title' value='". $row['p1_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p1_desc'>Product1 Description</label>
                            <input type='text' class='form-control' id='p1_desc' name = 'p1_desc' value='". $row['p1_desc'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p1_t1'>Product1 Properties1</label>
                            <input type='text' class='form-control' id='p1_t1' name = 'p1_t1' value='". $row['p1_t1'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p1_t2'>Product1 Properties2</label>
                            <input type='text' class='form-control' id='p1_t2' name = 'p1_t2' value='". $row['p1_t2'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p1_t3'>Product1 Properties3</label>
                            <input type='text' class='form-control' id='p1_t3' name = 'p1_t3' value='". $row['p1_t3'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p1_t4'>Product1 Properties4</label>
                            <input type='text' class='form-control' id='p1_t4' name = 'p1_t4' value='". $row['p1_t4'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p1_t5'>Product1 Properties5</label>
                            <input type='text' class='form-control' id='p1_t5' name = 'p1_t5' value='". $row['p1_t5'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p1_t6'>Product1 Properties6</label>
                            <input type='text' class='form-control' id='p1_t6' name = 'p1_t6' value='". $row['p1_t6'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p1_t7'>Product1 Properties6</label>
                            <input type='text' class='form-control' id='p1_t7' name = 'p1_t7' value='". $row['p1_t7'] ."' required>
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
                            <label for='p2_img'>Product2 Image</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='p2_img' name='p2_img'  >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='p2_title'>Product2 Title</label>
                            <input type='text' class='form-control' id='p2_title' name = 'p2_title' value='". $row['p2_title'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p2_desc'>Product2 Description</label>
                            <input type='text' class='form-control' id='p2_desc' name = 'p2_desc' value='". $row['p2_desc'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p2_t1'>Product2 Properties1</label>
                            <input type='text' class='form-control' id='p2_t1' name = 'p2_t1' value='". $row['p2_t1'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p2_t2'>Product2 Properties2</label>
                            <input type='text' class='form-control' id='p2_t2' name = 'p2_t2' value='". $row['p2_t2'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p2_t3'>Product2 Properties3</label>
                            <input type='text' class='form-control' id='p2_t3' name = 'p2_t3' value='". $row['p2_t3'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p2_t4'>Product2 Properties4</label>
                            <input type='text' class='form-control' id='p2_t4' name = 'p2_t4' value='". $row['p2_t4'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p2_t5'>Product2 Properties5</label>
                            <input type='text' class='form-control' id='p2_t5' name = 'p2_t5' value='". $row['p2_t5'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p2_t6'>Product2 Properties6</label>
                            <input type='text' class='form-control' id='p2_t6' name = 'p2_t6' value='". $row['p2_t6'] ."' required>
                          </div>

                          <div class='form-group'>
                            <label for='p2_t7'>Product2 Properties7</label>
                            <input type='text' class='form-control' id='p2_t7' name = 'p2_t7' value='". $row['p2_t7'] ."' required>
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
                          <label for='p3_img'>Product3 Image</label>
                            <div class='custom-file'>
                              <input type='file' class='custom-file-input' id='p3_img' name='p3_img' >
                              <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                            </div>
                        </div>

                        <div class='form-group'>
                          <label for='p3_title'>Product3 Title</label>
                          <input type='text' class='form-control' id='p3_title' name = 'p3_title' value='". $row['p3_title'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_desc'>Product3 Description</label>
                          <input type='text' class='form-control' id='p3_desc' name = 'p3_desc' value='". $row['p3_desc'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t1'>Product3 Properties1</label>
                          <input type='text' class='form-control' id='p3_t1' name = 'p3_t1' value='". $row['p3_t1'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t2'>Product3 Properties2</label>
                          <input type='text' class='form-control' id='p3_t2' name = 'p3_t2' value='". $row['p3_t2'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t3'>Product3 Properties3</label>
                          <input type='text' class='form-control' id='p3_t3' name = 'p3_t3' value='". $row['p3_t3'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t4'>Product3 Properties4</label>
                          <input type='text' class='form-control' id='p3_t4' name = 'p3_t4' value='". $row['p3_t4'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t5'>Product3 Properties5</label>
                          <input type='text' class='form-control' id='p3_t5' name = 'p3_t5' value='". $row['p3_t5'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t6'>Product3 Properties6</label>
                          <input type='text' class='form-control' id='p3_t6' name = 'p3_t6' value='". $row['p3_t6'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t7'>Product3 Properties7</label>
                          <input type='text' class='form-control' id='p3_t7' name = 'p3_t7' value='". $row['p3_t7'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t8'>Product3 Properties8</label>
                          <input type='text' class='form-control' id='p3_t8' name = 'p3_t8' value='". $row['p3_t8'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t9'>Product3 Properties9</label>
                          <input type='text' class='form-control' id='p3_t9' name = 'p3_t9' value='". $row['p3_t9'] ."' required>
                        </div>

                        <div class='form-group'>
                          <label for='p3_t10'>Product3 Properties10</label>
                          <input type='text' class='form-control' id='p3_t10' name = 'p3_t10' value='". $row['p3_t10'] ."' required>
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
