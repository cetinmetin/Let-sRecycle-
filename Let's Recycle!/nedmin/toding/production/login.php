<?php 
session_start();
error_reporting(0);
  if($_SESSION["login"])
    header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Geri Dönüşüm Admin Paneli! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="../../config/index.php">
              <h1>Giriş Formu</h1>
              <small><?php if($_SESSION["userWarning"]) echo $_SESSION["userWarning"]; ?></small>
              <div>
                <input type="text" class="form-control" name="username" id="username" placeholder="Kullanıcı Adı" required=""/>
              </div>
              <div>
                <input type="password" class="form-control" name="password" id="password" placeholder="Şifre" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default" name="login" id="login" value="Giriş Yap" />
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Geri Dönüşüm Admin Paneli !</h1>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
