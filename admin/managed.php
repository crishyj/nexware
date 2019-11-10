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


          if (isset($_POST['p'])) {
            if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $t1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t1'])));
                $t2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t2'])));
                $t3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t3'])));
                $t4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t4'])));
                $t5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t5'])));
                $t6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t6'])));
                $t7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t7'])));
                $t8 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t8'])));
                $t9 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t9'])));
                $t10 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t10'])));
                $t11 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t11'])));
                $t12 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t12'])));
                $t13 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t13'])));
                $t14 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t14'])));
                $t15 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['t15'])));
                $desc1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc1'])));
                $desc2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['desc2'])));

                $sql1 = "UPDATE managed SET t1='$t1' WHERE id=1";
                $sql2 = "UPDATE managed SET t2='$t2' WHERE id=1";
                $sql3 = "UPDATE managed SET t3='$t3' WHERE id=1";
                $sql4 = "UPDATE managed SET t4='$t4' WHERE id=1";
                $sql5 = "UPDATE managed SET t5='$t5' WHERE id=1";
                $sql6 = "UPDATE managed SET t6='$t6' WHERE id=1";
                $sql7 = "UPDATE managed SET t7='$t7' WHERE id=1";
                $sql8 = "UPDATE managed SET t8='$t8' WHERE id=1";
                $sql9 = "UPDATE managed SET t9='$t9' WHERE id=1";
                $sql10 = "UPDATE managed SET t10='$t10' WHERE id=1";
                $sql11 = "UPDATE managed SET t11='$t11' WHERE id=1";
                $sql12 = "UPDATE managed SET t12='$t12' WHERE id=1";
                $sql13 = "UPDATE managed SET t13='$t13' WHERE id=1";
                $sql14 = "UPDATE managed SET t14='$t14' WHERE id=1";
                $sql15 = "UPDATE managed SET t15='$t15' WHERE id=1";
                $sql16 = "UPDATE managed SET desc1='$desc1' WHERE id=1";
                $sql17 = "UPDATE managed SET desc2='$desc2' WHERE id=1";

                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE) && ($conn->query($sql6) === TRUE)
                    && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE) && ($conn->query($sql9) === TRUE) && ($conn->query($sql10) === TRUE) && ($conn->query($sql11) === TRUE) && ($conn->query($sql12) === TRUE)
                    && ($conn->query($sql13) === TRUE) && ($conn->query($sql14) === TRUE) && ($conn->query($sql15) === TRUE) && ($conn->query($sql16) === TRUE) && ($conn->query($sql17) === TRUE)) {
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

  $sql = "SELECT * FROM managed ORDER BY id DESC LIMIT 1";
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
            <div class='group'>
                <form action='' method='post' enctype='multipart/form-data'>
                  <input type='hidden' name='csrf_token' value='". generateToken('protectedForm') ."'/>

                    <div class='form-group'>
                      <label for='t1'>Text1</label>
                      <textarea class = 'form-control' name = 't1' id = 't1'>".$row['t1']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t2'>Text2</label>
                        <textarea class = 'form-control' name = 't2' id = 't2'>".$row['t2']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='desc1'>Description1</label>
                        <textarea class = 'form-control' name = 'desc1' id = 'desc1'>".$row['desc1']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t3'>Text3</label>
                        <textarea class = 'form-control' name = 't3' id = 't3'>".$row['t3']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t4'>Text4</label>
                        <textarea class = 'form-control' name = 't4' id = 't4'>".$row['t4']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t5'>Text5</label>
                        <textarea class = 'form-control' name = 't5' id = 't5'>".$row['t5']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t6'>Text6</label>
                        <textarea class = 'form-control' name = 't6' id = 't6'>".$row['t6']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t7'>Text7</label>
                        <textarea class = 'form-control' name = 't7' id = 't7'>".$row['t7']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t8'>Text8</label>
                        <textarea class = 'form-control' name = 't8' id = 't8'>".$row['t8']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t9'>Text9</label>
                        <textarea class = 'form-control' name = 't9' id = 't9'>".$row['t9']." </textarea>
                    </div>


                    <div class='form-group'>
                        <label for='t10'>Text10</label>
                        <textarea class = 'form-control' name = 't10' id = 't10'>".$row['t10']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='desc2'>Description2</label>
                        <textarea class = 'form-control' name = 'desc2' id = 'desc2'>".$row['desc2']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t11'>Text11</label>
                        <textarea class = 'form-control' name = 't11' id = 't11'>".$row['t11']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t12'>Text12</label>
                        <textarea class = 'form-control' name = 't12' id = 't12'>".$row['t12']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t13'>Text13</label>
                        <textarea class = 'form-control' name = 't13' id = 't13'>".$row['t13']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t14'>Text14</label>
                        <textarea class = 'form-control' name = 't14' id = 't14'>".$row['t14']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='t15'>Text15</label>
                        <textarea class = 'form-control' name = 't15' id = 't15'>".$row['t15']." </textarea>
                    </div>

                    <div class='form-group' style = 'text-align:center;'>
                      <button type='submit' class = 'btn btn-success' name = 'p'> Update Contents </button>
                    </div>
                </form>
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
