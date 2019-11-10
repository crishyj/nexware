<?php
    require 'config.php';
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>San Diego Copiers, MFPs and Printers | DBS</title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
          if (isset($_POST['login'])) {
          
            if ( !empty( $_POST['csrf_token'] ) ) {
              if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $log_email = mysqli_real_escape_string($conn,strip_tags(trim($_POST['log_email'])));
                $log_pass = mysqli_real_escape_string($conn,strip_tags(trim($_POST['log_pass'])));
                $pass = sha1($log_pass);
                $sql = "SELECT * FROM user WHERE email = '$log_email' && password = '$pass'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    $_SESSION['log_email'] = $log_email;
                    $_SESSION['password'] = $pass;
                      echo"
                      <script>
                          window.location = 'admin.php';
                      </script>
                      ";
                  }
                }
                else{
                    echo "<script>
                    alert('Invalid Email and Password');
                    history.go(-1);
                    </script>";
               }
              }
          }
          else{
            echo "<script>
            alert('Invalid Acess!');
            history.go(-1);
            </script>";
          }

        }
        else{
    ?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Welcome</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="" method = "post">
        <input type="hidden" name="csrf_token" value="<?php echo generateToken('protectedForm'); ?>"/>
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="text" placeholder="Email" name = "log_email"autofocus required>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name = "log_pass" required>
          </div>

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type = "submit" name="login"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>

      </div>
    </section>
    <?php
        }
    ?>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
  </body>
</html>
