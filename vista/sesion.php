<?php
 session_start();
 if(isset($_SESSION['ID_USUARIO'])){
   header('location: ../vista/dashboard.php');

 }
 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="css/sesion.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header class="header">

        <a href="../index.html" class="logo"> <i class="fas fa-heartbeat"></i> Medicarte</a>

        <a href="" class="btn_action">iniciar</a></li>
    </header>
</body>


<div class="login-wrapper">
    <div class="login-left">
      <img  src="image/session-slash.jpg">
      <div class="h1">INGRESAR</div>
    </div>
    <div class="login-right">
    <form class="form-signin needs-validation" novalidate method="post" action="../controlador/action/act_login.php">

        <div class="h2">INGRESAR</div>
        <div class="form-group">


        <div class="">
            <label for="validationCustom01" class="form-label"></label>
            <input type="text" id="Email" name="username" placeholder="cedula" class="form-control" id=" validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
            
          </div>

          <div class="">
            <label for="validationCustomUsername" class="form-label"></label>
            <div class="input-group has-validation">
              <input type="password" id="Password" name="password" placeholder="Password" class="form-control" id="validationCustom01"  required>
              </div>
          </div>


         
          <button class="btn-home " name="submit" value="submit">
        Iniciar<span class="fas fa-chevron-right"></span></a>
        </button>
        </form>
  

    </div>
  </div>




<script src="..js/ajax.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script>
    var openLoginRight = document.querySelector('.h1');
    var loginWrapper = document.querySelector('.login-wrapper');
    openLoginRight.addEventListener('click', function () {
      loginWrapper.classList.toggle('open');
    });
  </script>



<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<script src="../vista/js/jquery-3.6.4.min.js"></script>

<script src="../vista/js/sesion.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>