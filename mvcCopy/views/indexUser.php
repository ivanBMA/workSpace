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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="estilo/css/bootstrap.min.css" rel="stylesheet">
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
      <a href="/user/create">Crear un usuario nuevo</a>
      <?php 
        //print_r($users);

       
        echo "<table class='table'>";
        echo "<tr><td class='bg-info'>ID </td>";
          echo "<td class='bg-info'> name </td>";
          echo "<td class='bg-info'> surname </td>";
          echo "<td class='bg-info'> email </td>";
          echo "<td class='bg-info'> birthdate </td>";
          echo "<td class='bg-info'> password </td>";
          echo "<td class='bg-info'> active </td>";
          echo "<td class='bg-info'> admin </td>";
          echo "<td class='bg-info'>  </td>";
          echo "<td class='bg-info'>  </td>";
          echo "<td class='bg-info'>  </td>";
          echo "<td class='bg-info'>  </td></tr>";

        foreach ($users as $row) {
          echo "<tr><td> " . $row->id . "</td>";
          echo "<td>  " . $row->name . "</td>";
          echo "<td>  " . $row->surname . "</td>";
          echo "<td>  " . $row->email . "</td>";
          echo "<td>  " . $row->birthdate->format('d/m/Y') . "</td>";
          echo "<td>  " . $row->password . "</td>";
          echo "<td>  " . $row->active . "</td>";
          echo "<td>  " . $row->admin . "</td>";
          echo "<td><a href='/user/show/$row->id '> mas </a></td>";
          echo "<td><a href='/user/updateA/$row->id'>   update </a></td>";
          echo "<td><a href='/user/borrar/$row->id'>   borrar </a></td>";

          echo "<td><a href='/user/contraseñaDefault/$row->id'> resetear contraseña </a></td></tr>";
          //onclick="return confirm('Estas seguro de borrarlo?')"

        }
        echo "<tr><td><a href='/user/allContraseñaDefault/'> resetear todas las contraseñas </a></td><tr>";
        echo "</table>";
        echo "<a href='/user/crearPdf/'> crearPdf </a>";
        

        
      ?>

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