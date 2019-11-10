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
                              $desc1_1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc1_1'])));
                              $desc1_2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc1_2'])));


                              $sql1 = "UPDATE price SET desc1='$desc1' WHERE id=1";
                              $sql2 = "UPDATE price SET desc1_1='$desc1_1' WHERE id=1";
                              $sql2 = "UPDATE price SET desc1_2='$desc1_2' WHERE id=1";

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

                                $sql1 = "UPDATE price SET desc2='$desc2' WHERE id=1";
                                $sql2 = "UPDATE price SET desc2_1='$desc2_1' WHERE id=1";
                                $sql3 = "UPDATE price SET desc2_2='$desc2_2' WHERE id=1";
                                $sql4 = "UPDATE price SET desc2_3='$desc2_3' WHERE id=1";
                                $sql5 = "UPDATE price SET desc2_4='$desc2_4' WHERE id=1";

                                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) ) {
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

                                $sql1 = "UPDATE price SET desc3='$desc3' WHERE id=1";
                                $sql2 = "UPDATE price SET desc3_1='$desc3_1' WHERE id=1";
                                $sql3 = "UPDATE price SET desc3_2='$desc3_2' WHERE id=1";
                                $sql4 = "UPDATE price SET desc3_3='$desc3_3' WHERE id=1";

                                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE)) {
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

                                $sql1 = "UPDATE price SET desc4='$desc4' WHERE id=1";
                                $sql2 = "UPDATE price SET desc4_1='$desc4_1' WHERE id=1";

                                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
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

                                $sql1 = "UPDATE price SET desc5='$desc5' WHERE id=1";
                                $sql2 = "UPDATE price SET desc5_1='$desc5_1' WHERE id=1";

                                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
                                    echo "<script>
                                      history.go(-1);
                                    </script>";
                                } else {
                                      echo "Error updating record: " . $conn->error;
                                }
                              }
                          }

                          elseif (isset($_POST['p6'])) {
                            if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                                $desc6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc6'])));
                                $desc6_1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc6_1'])));
                                $desc6_2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc6_2'])));
                                $desc6_3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc6_3'])));

                                $sql1 = "UPDATE price SET desc6='$desc6' WHERE id=1";
                                $sql2 = "UPDATE price SET desc6_1='$desc6_1' WHERE id=1";
                                $sql3 = "UPDATE price SET desc6_2='$desc6_2' WHERE id=1";
                                $sql4 = "UPDATE price SET desc6_3='$desc6_3' WHERE id=1";

                                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE)) {
                                    echo "<script>
                                      history.go(-1);
                                    </script>";
                                } else {
                                      echo "Error updating record: " . $conn->error;
                                }
                              }
                          }

                          elseif (isset($_POST['p7'])) {
                            if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                                $desc7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc7'])));
                                $desc7_1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc7_1'])));
                                $desc7_2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc7_2'])));
                                $desc7_3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc7_3'])));
                                $t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t1'])));
                                $t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t2'])));
                                $t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t3'])));
                                $t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t4'])));
                                $t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t5'])));
                                $t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t6'])));
                                $t7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t7'])));
                                $t8 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t8'])));
                                $t9 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t9'])));

                                $sql1   = "UPDATE price SET desc7='$desc7' WHERE id=1";
                                $sql2   = "UPDATE price SET desc7_1='$desc7_1' WHERE id=1";
                                $sql3   = "UPDATE price SET desc7_2='$desc7_2' WHERE id=1";
                                $sql4   = "UPDATE price SET desc7_3='$desc7_3' WHERE id=1";
                                $sql5   = "UPDATE price SET t1='$t1' WHERE id=1";
                                $sql6   = "UPDATE price SET t2='$t2' WHERE id=1";
                                $sql7   = "UPDATE price SET t3='$t3' WHERE id=1";
                                $sql8   = "UPDATE price SET t4='$t4' WHERE id=1";
                                $sql9   = "UPDATE price SET t5='$t5' WHERE id=1";
                                $sql10  = "UPDATE price SET t6='$t6' WHERE id=1";
                                $sql11  = "UPDATE price SET t7='$t7' WHERE id=1";
                                $sql12  = "UPDATE price SET t8='$t8' WHERE id=1";
                                $sql13  = "UPDATE price SET t9='$t9' WHERE id=1";

                                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                                    && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE) && ($conn->query($sql9) === TRUE) && ($conn->query($sql10) === TRUE) && ($conn->query($sql11) === TRUE)  && ($conn->query($sql12) === TRUE)
                                    && ($conn->query($sql13) === TRUE) ) {
                                    echo "<script>
                                      history.go(-1);
                                    </script>";
                                } else {
                                      echo "Error updating record: " . $conn->error;
                                }
                              }
                          }

                          elseif (isset($_POST['p8'])) {
                            if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                                $desc8 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc8'])));
                                $desc8_1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc8_1'])));

                                $sql1 = "UPDATE price SET desc8='$desc8' WHERE id=1";
                                $sql2 = "UPDATE price SET desc8_1='$desc8_1' WHERE id=1";


                                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) ) {
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

  $sql = "SELECT * FROM price ORDER BY id DESC LIMIT 1";
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
                            <label for='desc1'>Title1</label>
                            <textarea class = 'form-control' name = 'desc1' id = 'desc1'>".$row['desc1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc1_1'>Text1</label>
                            <textarea class = 'form-control' name = 'desc1_1' id = 'desc1_1'>".$row['desc1_1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc1_2'>Text2</label>
                            <textarea class = 'form-control' name = 'desc1_2' id = 'desc1_2'>".$row['desc1_2']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p1'> Update Contents </button>
                          </div>
                    </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group'>
                            <label for='desc2'>Title2</label>
                            <textarea class = 'form-control' name = 'desc2' id = 'desc2'>".$row['desc2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_1'>Text1</label>
                            <textarea class = 'form-control' name = 'desc2_1' id = 'desc2_1'>".$row['desc2_1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_2'>Text2</label>
                            <textarea class = 'form-control' name = 'desc2_2' id = 'desc2_2'>".$row['desc2_2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_3'>Text3</label>
                            <textarea class = 'form-control' name = 'desc2_3' id = 'desc2_3'>".$row['desc2_3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc2_4'>Text4</label>
                            <textarea class = 'form-control' name = 'desc2_4' id = 'desc2_4'>".$row['desc2_4']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p2'> Update Contents </button>
                          </div>
                    </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group'>
                            <label for='desc3'>Title3</label>
                            <textarea class = 'form-control' name = 'desc3' id = 'desc3'>".$row['desc3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc3_1'>Text1</label>
                            <textarea class = 'form-control' name = 'desc3_1' id = 'desc3_1'>".$row['desc3_1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc3_2'>Text2</label>
                            <textarea class = 'form-control' name = 'desc3_2' id = 'desc3_2'>".$row['desc3_2']." </textarea>
                          </div>


                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p3'> Update Contents </button>
                          </div>
                    </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group'>
                            <label for='desc4'>Title4</label>
                            <textarea class = 'form-control' name = 'desc4' id = 'desc4'>".$row['desc4']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p4'> Update Contents </button>
                          </div>
                    </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group'>
                            <label for='desc5'>Title5</label>
                            <textarea class = 'form-control' name = 'desc5' id = 'desc5'>".$row['desc5']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc5_1'>Text1</label>
                            <textarea class = 'form-control' name = 'desc5_1' id = 'desc5_1'>".$row['desc5_1']." </textarea>
                          </div>


                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p5'> Update Contents </button>
                          </div>
                    </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group'>
                            <label for='desc6'>Title6</label>
                            <textarea class = 'form-control' name = 'desc6' id = 'desc6'>".$row['desc6']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc6_1'>Text1</label>
                            <textarea class = 'form-control' name = 'desc6_1' id = 'desc6_1'>".$row['desc6_1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc6_2'>Text2</label>
                            <textarea class = 'form-control' name = 'desc6_2' id = 'desc6_2'>".$row['desc6_2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc6_3'>Text3</label>
                            <textarea class = 'form-control' name = 'desc6_3' id = 'desc6_3'>".$row['desc6_3']." </textarea>
                          </div>


                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p6'> Update Contents </button>
                          </div>
                    </form>

                  </div>

              </div>

              <div class='col-sm-6'>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group'>
                            <label for='desc7'>Title7</label>
                            <textarea class = 'form-control' name = 'desc7' id = 'desc7'>".$row['desc7']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc7_1'>Text1</label>
                            <textarea class = 'form-control' name = 'desc7_1' id = 'desc7_1'>".$row['desc7_1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc7_2'>Text2</label>
                            <textarea class = 'form-control' name = 'desc7_2' id = 'desc7_2'>".$row['desc7_2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc7_3'>Text3</label>
                            <textarea class = 'form-control' name = 'desc7_3' id = 'desc7_3'>".$row['desc7_3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='t1'>List1</label>
                            <textarea class = 'form-control' name = 't1' id = 't1'>".$row['t1']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='t2'>List2</label>
                            <textarea class = 'form-control' name = 't2' id = 't2'>".$row['t2']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='t3'>List3</label>
                            <textarea class = 'form-control' name = 't3' id = 't3'>".$row['t3']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='t4'>List4</label>
                            <textarea class = 'form-control' name = 't4' id = 't4'>".$row['t4']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='t5'>List5</label>
                            <textarea class = 'form-control' name = 't5' id = 't5'>".$row['t5']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='t6'>List6</label>
                            <textarea class = 'form-control' name = 't6' id = 't6'>".$row['t6']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='t7'>List7</label>
                            <textarea class = 'form-control' name = 't7' id = 't7'>".$row['t7']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='t8'>List8</label>
                            <textarea class = 'form-control' name = 't8' id = 't8'>".$row['t8']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='t9'>List9</label>
                            <textarea class = 'form-control' name = 't9' id = 't9'>".$row['t9']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p7'> Update Contents </button>
                          </div>
                    </form>

                  </div>

                  <div class='group'>

                    <form action='' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                          <div class='form-group'>
                            <label for='desc8'>Title8</label>
                            <textarea class = 'form-control' name = 'desc8' id = 'desc8'>".$row['desc8']." </textarea>
                          </div>

                          <div class='form-group'>
                            <label for='desc8_1'>Text1</label>
                            <textarea class = 'form-control' name = 'desc8_1' id = 'desc8_1'>".$row['desc8_1']." </textarea>
                          </div>

                          <div class='form-group' style = 'text-align:center;'>
                            <button type='submit' class = 'btn btn-success' name = 'p8'> Update Contents </button>
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
