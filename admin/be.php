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
                              $desc1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc1'])));
                              $video = mysqli_real_escape_string($conn,strip_tags(trim($_POST['video'])));


                              $sql1 = "UPDATE be SET desc1='$desc1' WHERE id=1";
                              $sql2 = "UPDATE be SET video='$video' WHERE id=1";

                              if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
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
                                  $desc2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc2'])));
                                  $desc2_1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc2_1'])));
                                  $desc2_2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc2_2'])));
                                  $desc2_3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc2_3'])));
                                  $desc2_4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc2_4'])));
                                  $desc2_5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc2_5'])));
                                  $desc2_6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc2_6'])));
                                  $desc2_7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc2_7'])));

                                  move_uploaded_file($_FILES['img1']['tmp_name'], $product."bos_p7.png");
                                  move_uploaded_file($_FILES['img2']['tmp_name'], $product."bos_p8.png");

                                  $sql1 = "UPDATE be SET desc2='$desc2' WHERE id=1";
                                  $sql2 = "UPDATE be SET desc2_1='$desc2_1' WHERE id=1";
                                  $sql3 = "UPDATE be SET desc2_2='$desc2_2' WHERE id=1";
                                  $sql4 = "UPDATE be SET desc2_3='$desc2_3' WHERE id=1";
                                  $sql5 = "UPDATE be SET desc2_4='$desc2_4' WHERE id=1";
                                  $sql6 = "UPDATE be SET desc2_5='$desc2_5' WHERE id=1";
                                  $sql7 = "UPDATE be SET desc2_6='$desc2_6' WHERE id=1";
                                  $sql8 = "UPDATE be SET desc2_7='$desc2_7' WHERE id=1";

                                  if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                                && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE) ) {
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
                                    $desc3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc3'])));
                                    $desc3_1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc3_1'])));
                                    $desc3_2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc3_2'])));
                                    $desc3_3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc3_3'])));
                                    $desc3_4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc3_4'])));
                                    $desc3_5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc3_5'])));
                                    $desc3_6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc3_6'])));
                                    $desc3_7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc3_7'])));

                                    move_uploaded_file($_FILES['img3']['tmp_name'], $product."bos_p9.png");

                                    $sql1 = "UPDATE be SET desc3='$desc3' WHERE id=1";
                                    $sql2 = "UPDATE be SET desc3_1='$desc3_1' WHERE id=1";
                                    $sql3 = "UPDATE be SET desc3_2='$desc3_2' WHERE id=1";
                                    $sql4 = "UPDATE be SET desc3_3='$desc3_3' WHERE id=1";
                                    $sql5 = "UPDATE be SET desc3_4='$desc3_4' WHERE id=1";
                                    $sql6 = "UPDATE be SET desc3_5='$desc3_5' WHERE id=1";
                                    $sql7 = "UPDATE be SET desc3_6='$desc3_6' WHERE id=1";
                                    $sql8 = "UPDATE be SET desc3_7='$desc3_7' WHERE id=1";

                                    if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                                  && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE) ) {
                                      echo "<script>
                                        history.go(-1);
                                      </script>";
                                    } else {
                                        echo "Error updating record: " . $conn->error;
                                    }
                                  }
                                }


                                elseif (isset($_POST['p4'])) {
                                    if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                                      $desc4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4'])));
                                      $desc4_1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4_1'])));
                                      $desc4_2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4_2'])));
                                      $desc4_3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4_3'])));
                                      $desc4_4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4_4'])));
                                      $desc4_5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4_5'])));
                                      $desc4_6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4_6'])));
                                      $desc4_7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4_7'])));
                                      $desc4_8 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4_8'])));
                                      $desc4_9 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc4_9'])));

                                      move_uploaded_file($_FILES['img4']['tmp_name'], $product."bos_p10.png");

                                      $sql1 = "UPDATE be SET desc4='$desc4' WHERE id=1";
                                      $sql2 = "UPDATE be SET desc4_1='$desc4_1' WHERE id=1";
                                      $sql3 = "UPDATE be SET desc4_2='$desc4_2' WHERE id=1";
                                      $sql4 = "UPDATE be SET desc4_3='$desc4_3' WHERE id=1";
                                      $sql5 = "UPDATE be SET desc4_4='$desc4_4' WHERE id=1";
                                      $sql6 = "UPDATE be SET desc4_5='$desc4_5' WHERE id=1";
                                      $sql7 = "UPDATE be SET desc4_6='$desc4_6' WHERE id=1";
                                      $sql8 = "UPDATE be SET desc4_7='$desc4_7' WHERE id=1";
                                      $sql9 = "UPDATE be SET desc4_8='$desc4_8' WHERE id=1";
                                      $sql10 = "UPDATE be SET desc4_9='$desc4_9' WHERE id=1";

                                      if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                                    && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE) && ($conn->query($sql9) === TRUE) && ($conn->query($sql10) === TRUE) ) {
                                        echo "<script>
                                          history.go(-1);
                                        </script>";
                                      } else {
                                          echo "Error updating record: " . $conn->error;
                                      }
                                    }
                                  }

                                  elseif (isset($_POST['p5'])) {
                                      if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                                        $desc5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc5'])));
                                        $desc5_1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc5_1'])));
                                        $desc5_2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc5_2'])));
                                        $desc5_3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc5_3'])));
                                        $desc5_4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc5_4'])));


                                        move_uploaded_file($_FILES['img5']['tmp_name'], $product."bos_p11.png");

                                        $sql1 = "UPDATE be SET desc5='$desc5' WHERE id=1";
                                        $sql2 = "UPDATE be SET desc5_1='$desc5_1' WHERE id=1";
                                        $sql3 = "UPDATE be SET desc5_2='$desc5_2' WHERE id=1";
                                        $sql4 = "UPDATE be SET desc5_3='$desc5_3' WHERE id=1";
                                        $sql5 = "UPDATE be SET desc5_4='$desc5_4' WHERE id=1";


                                        if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE))
                                        {
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
          <a class='app-menu__item active' href='#' data-toggle='treeview'>
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

  $sql = "SELECT * FROM be ORDER BY id DESC LIMIT 1";
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

                      <div class='form-group'>
                        <label for='desc1'>Description1</label>
                        <textarea class = 'form-control' name = 'desc1' id = 'desc1'>".$row['desc1']." </textarea>
                      </div>

                      <div class='form-group'>
                        <label for='video'>video</label>
                        <input type='text' class='form-control' id='video' name = 'video' value='". $row['video'] ."' required>
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
                            <label for='img1'>Image1</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='img1' name='img1' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>


                          <div class='form-group custom-file'>
                            <label for='img2'>Image2</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='img2' name='img2' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='desc2'>Description2</label>
                            <textarea class = 'form-control' name = 'desc2' id = 'desc2'>".$row['desc2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_1'>Item1</label>
                            <textarea class = 'form-control' name = 'desc2_1' id = 'desc2_1'>".$row['desc2_1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_2'>Item2</label>
                            <textarea class = 'form-control' name = 'desc2_2' id = 'desc2_2'>".$row['desc2_2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_3'>Item3</label>
                            <textarea class = 'form-control' name = 'desc2_3' id = 'desc2_3'>".$row['desc2_3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_4'>Item4</label>
                            <textarea class = 'form-control' name = 'desc2_4' id = 'desc2_4'>".$row['desc2_4']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_5'>Item5</label>
                            <textarea class = 'form-control' name = 'desc2_5' id = 'desc2_5'>".$row['desc2_5']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_6'>Item6</label>
                            <textarea class = 'form-control' name = 'desc2_6' id = 'desc2_6'>".$row['desc2_6']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_7'>Item7</label>
                            <textarea class = 'form-control' name = 'desc2_7' id = 'desc2_7'>".$row['desc2_7']." </textarea>
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
                            <label for='img3'>Image3</label>

                              <div class='custom-file'>

                              <input type='file' class='custom-file-input' id='slider3_a' name='slider3_a'  >
                              <label class='custom-file-label' for='foundation_image1'>Choose file</label>

                                <input type='file' class='custom-file-input' id='img3' name='img3' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='desc3'>Description3</label>
                            <textarea class = 'form-control' name = 'desc3' id = 'desc3'>".$row['desc3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc3_1'>Item1</label>
                            <textarea class = 'form-control' name = 'desc3_1' id = 'desc3_1'>".$row['desc3_1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc3_2'>Item2</label>
                            <textarea class = 'form-control' name = 'desc3_2' id = 'desc3_2'>".$row['desc3_2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc3_3'>Item3</label>
                            <textarea class = 'form-control' name = 'desc3_3' id = 'desc3_3'>".$row['desc3_3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc3_4'>Item4</label>
                            <textarea class = 'form-control' name = 'desc3_4' id = 'desc3_4'>".$row['desc3_4']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc3_5'>Item5</label>
                            <textarea class = 'form-control' name = 'desc3_5' id = 'desc3_5'>".$row['desc3_5']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc3_6'>Item6</label>
                            <textarea class = 'form-control' name = 'desc3_6' id = 'desc3_6'>".$row['desc3_6']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc3_7'>Item7</label>
                            <textarea class = 'form-control' name = 'desc3_7' id = 'desc3_7'>".$row['desc3_7']." </textarea>
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
                            <label for='img4'>Image4</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='img4' name='img4' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='desc4'>Description4</label>
                            <textarea class = 'form-control' name = 'desc4' id = 'desc4'>".$row['desc4']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc4_1'>Item1</label>
                            <textarea class = 'form-control' name = 'desc4_1' id = 'desc4_1'>".$row['desc4_1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc4_2'>Item2</label>
                            <textarea class = 'form-control' name = 'desc4_2' id = 'desc4_2'>".$row['desc4_2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc4_3'>Item3</label>
                            <textarea class = 'form-control' name = 'desc4_3' id = 'desc4_3'>".$row['desc4_3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc4_4'>Item4</label>
                            <textarea class = 'form-control' name = 'desc4_4' id = 'desc4_4'>".$row['desc4_4']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc4_5'>Item5</label>
                            <textarea class = 'form-control' name = 'desc4_5' id = 'desc4_5'>".$row['desc4_5']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc4_6'>Item6</label>
                            <textarea class = 'form-control' name = 'desc4_6' id = 'desc4_6'>".$row['desc4_6']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc4_7'>Item7</label>
                            <textarea class = 'form-control' name = 'desc4_7' id = 'desc4_7'>".$row['desc4_7']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc4_8'>Item8</label>
                            <textarea class = 'form-control' name = 'desc4_8' id = 'desc4_8'>".$row['desc4_8']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc4_9'>Item9</label>
                            <textarea class = 'form-control' name = 'desc4_9' id = 'desc4_9'>".$row['desc4_9']." </textarea>
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
                            <label for='img5'>Image5</label>
                              <div class='custom-file'>
                                <input type='file' class='custom-file-input' id='img5' name='img5' >
                                <label class='custom-file-label' for='foundation_image1'>Choose file</label>
                              </div>
                          </div>

                          <div class='form-group'>
                            <label for='desc5'>Description5</label>
                            <textarea class = 'form-control' name = 'desc5' id = 'desc5'>".$row['desc5']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc5_1'>Item1</label>
                            <textarea class = 'form-control' name = 'desc5_1' id = 'desc5_1'>".$row['desc5_1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc5_2'>Item2</label>
                            <textarea class = 'form-control' name = 'desc5_2' id = 'desc5_2'>".$row['desc5_2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc5_3'>Item3</label>
                            <textarea class = 'form-control' name = 'desc5_3' id = 'desc5_3'>".$row['desc5_3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc5_4'>Item4</label>
                            <textarea class = 'form-control' name = 'desc5_4' id = 'desc5_4'>".$row['desc5_4']." </textarea>
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
