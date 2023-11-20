<!DOCTYPE html>
<!-- saved from url=(0064)https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>userIndex</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <?php
        require "comun/header.php";
    ?>

    <!-- Begin page content -->
    <main role="main" class="container">
      <br>
      <br>
      <br>

        <form action="/user/store/" method="post">

            <label for="">name</label>
            <input type="text" name="name" id="">
            <br>
            <label for="">surname</label>
            <input type="text" name="surname" id="">
            <br>
            <label for="">email </label>
            <input type="text" name="email " id="">
            <br>
            <label for="">birthdate</label>
            <input type="date" name="birthdate" id="">
            <br>
            <label for="">password</label>
            <input type="text" name="password" id="">
            <br>
            <label for="">active</label>
            <input type="number" name="active" id="">
            <br>
            <label for="">admin</label>
            <input type="number" name="admin" id="">

            <input type="submit" value="envio">
        </form>

     </main>

     <?php
        require "comun/footer.php";
    ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/jquery-3.2.1.slim.min.js.descargar" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/popper.min.js.descargar"></script>
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/bootstrap.min.js.descargar"></script>
  

</body></html>
