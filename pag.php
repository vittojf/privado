<?php include 'conexion.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
 
  <body style="background:LAVENDER;">
 
  <!--Barra de arriba-->

  <div  >
  <nav class="navbar navbar-expand-lg navbar-light bg-light "  >
  <a class="navbar-brand" href="#">
 
  <a class="navbar-brand" href="#"> <img src="http://localhost/PDVSA/img/SIGAS.png " width="90" height="90" style="margin-left:10%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto" style="margin:auto;">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Asesoramiento</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Solicitud de cambio</a>
          <a class="dropdown-item" href="#"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Costos</a>
        </div>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Contacto</a>
      </li>
    </ul>

    <a href="inicio.php" class="btn btn-outline my-2 my-sm-100.p-3 mb-2 bg-warning text-dark"  style="margin-right:2px;"  >iniciar Sección</a>
    
    <a href="pag.php"  class="btn btn-outline my-2 my-sm-100.p-3 mb-2 bg-warning text-dark" >Crear Cuenta</a>
  </div>
</nav>


  <!-- formulario-->
 





<div class="card border-warning mb-3. shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 700px; margin:auto; margin-top: 8%;">
  <div class="card-header " style="font-size:25pt; padding-left:40%;"><b >Registro</div>
  <div class="card-body mx-auto">
   
<form class="needs-validation " novalidate action="guardar.php" method="post" >

  <div class="form-row ">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Empresa / Usuario</label>
      <input type="text" class="form-control" id="validationTooltip01" name="empresa" placeholder="PDVSA" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-6 mb-3">
      <label for="validationTooltipUsername">RIF</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">J -</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername"  placeholder="0000000000" name="rif"aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Ciudad</label>
      <input type="text" class="form-control" id="validationTooltip03" name="ciudad" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip04">Estado</label>
      <select class="custom-select" id="validationTooltip04" required name="estado">
        <option selected disabled value="" >Choose...</option>
        <option>Caracas</option>
        <option>Miranda</option>
        <option>Falcon</option>
        <option>Maracaibo</option>
      </select>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
      
   
    </div>
   
    </div>
    <div class="form-row">
    <div class="col-md-6 mb-3" >
      <label for="validationTooltip03">Correo</label>
      <input type="email" max="10" class="form-control" id="validationTooltip03" name="Correo" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    
    <div class="form-row">
    <div class="col-md-12 mb-3" >
      <label for="validationTooltip03">Contraseña</label>
      <input type="password" class="form-control" id="validationTooltip03" name="contraseña" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    
  </div>
  
  
  <button class="btn btn-primary mt-3" type="submit" style="margin-left:40%;">Registrarse</button>
</form>

 </div>
    </div>
    </div>


    <!--Footer-->
    <footer class="page-footer.font-small.unique-color-dark" style="background:DIMGRAY; margin-top:10%;">

  <div style="background-color: ORANGE;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0" style="font-size:20pt;">Conectate con nosotros!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">SIGAS-PDVSA</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
         <i class="fas fa-home mr-3 "></i>Petróleos de Venezuela, S.A.
Avenida. Libertador con calle El Empalme
Complejo MinPetróleo - PDVSA,
La Campiña, Caracas - Venezuela.</p>
      
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background:BLACK; color:white;">
  
  <img src="http://localhost/PDVSA/img/gb1.png " width="323px" height="52.5px" style="margin-right:2%;"></a>
<a class="navbar-brand" href="#">
<img src="http://localhost/PDVSA/img/SIGAB.png " width="40" height="40" style="margin-right:2%;"></a>

 <a href=""><img src="http://localhost/PDVSA/img/pdvsa.png " width="38" height="40" style="margin-left:1%;"></a> 
  

 <p  style="font-size:9pt; margin:1% 0%;">Copyright © PDVSA - Petróleos de Venezuela, S.A.. Todos los derechos Reservados.</p>
</div>

  <!-- Copyright -->

</footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>