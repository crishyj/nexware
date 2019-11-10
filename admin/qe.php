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
                $l1 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['l1'])));
                $l2 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['l2'])));
                $l3 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['l3'])));
                $l4 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['l4'])));
                $l5 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['l5'])));
                $l6 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['l6'])));
                $l7 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['l7'])));
                $l8 = mysqli_real_escape_string($conn,strip_tags(trim($_POST['l8'])));


                $sql1 = "UPDATE qe SET t1='$t1' WHERE id=1";
                $sql2 = "UPDATE qe SET t2='$t2' WHERE id=1";
                $sql3 = "UPDATE qe SET l1='$l1' WHERE id=1";
                $sql4 = "UPDATE qe SET l2='$l2' WHERE id=1";
                $sql5 = "UPDATE qe SET l3='$l3' WHERE id=1";
                $sql6 = "UPDATE qe SET l4='$l4' WHERE id=1";
                $sql7 = "UPDATE qe SET l5='$l5' WHERE id=1";
                $sql8 = "UPDATE qe SET l6='$l6' WHERE id=1";
                $sql9 = "UPDATE qe SET l7='$l7' WHERE id=1";
                $sql10 = "UPDATE qe SET l8='$l8' WHERE id=1";


                if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE)
                && ($conn->query($sql6) === TRUE) && ($conn->query($sql7) === TRUE) && ($conn->query($sql8) === TRUE) && ($conn->query($sql9) === TRUE) && ($conn->query($sql10) === TRUE)) {
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

  $sql = "SELECT * FROM qe ORDER BY id DESC LIMIT 1";
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
                        <label for='l1'>Items1</label>
                        <textarea class = 'form-control' name = 'l1' id = 'l1'>".$row['l1']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='l2'>Items2</label>
                        <textarea class = 'form-control' name = 'l2' id = 'l2'>".$row['l2']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='l3'>Items3</label>
                        <textarea class = 'form-control' name = 'l3' id = 'l3'>".$row['l3']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='l4'>Items4</label>
                        <textarea class = 'form-control' name = 'l4' id = 'l4'>".$row['l4']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='l5'>Items5</label>
                        <textarea class = 'form-control' name = 'l5' id = 'l5'>".$row['l5']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='l6'>Items6</label>
                        <textarea class = 'form-control' name = 'l6' id = 'l6'>".$row['l6']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='l7'>Items7</label>
                        <textarea class = 'form-control' name = 'l7' id = 'l7'>".$row['l7']." </textarea>
                    </div>

                    <div class='form-group'>
                        <label for='l8'>Items8</label>
                        <textarea class = 'form-control' name = 'l8' id = 'l8'>".$row['l8']." </textarea>
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
