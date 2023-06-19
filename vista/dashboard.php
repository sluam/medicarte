<!-- <?php

session_start();
if (!isset($_SESSION['CEDULA']) || $_SESSION['ROL'] != 1) {
  header('location: ../vista/sesion.php');
  
}

require_once(__DIR__ . "../../modelo/dao/DataSource.php");


  $cedula = $_SESSION['CEDULA'];
  $consulta = "SELECT * FROM receta WHERE paciente_usuario_cedula = $cedula";


  $consulta2="SELECT r.idreceta, m.idmedicamento, m.nombre AS nombre_medicamento FROM receta AS r JOIN dosificacion AS d ON r.idreceta = d.receta_idreceta JOIN medicamento AS m ON d.medicamento_idmedicamento = m.idmedicamento 
  WHERE r.paciente_usuario_cedula = $cedula";

$query2 = mysqli_query($conexion, $consulta2);
$query = mysqli_query($conexion, $consulta);

if ($_SESSION['ROL'] == 1)
    $_SESSION['ROL'] = 'PACIENTE';
?> -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href=" ../vista/css/dashboard.css">
    <link rel="stylesheet" href=" ../vista/css/admin.css">
    <link rel="icon" href="img/logo.png">
    <title>INICIO</title>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>


<body>
    <header class="header">

        <a href="../index.html" class="logo"> <i class="fas fa-heartbeat"></i> Medicarte</a>
        <nav class="navbar">
            <a href="#"><i class="fa-solid fa-house"></i> Inicio</a>
            <a href="#services"><i class="fa-solid fa-bell"></i> Notificaciones</a>

        </nav>

        <div class="dropdown">
            <a class="btn_action" data-bs-toggle="dropdown">
                <span class="nombreusuario" class="active">
                    <?php echo $_SESSION['NOMBRE'] ?>
                </span>
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item  a" href=""><i class="fa-solid fa-house"></i> INICIO</a></li>
                <li><a class="dropdown-item  b" href=""><i class="fa-solid fa-bell"></i> NOTIFICACIONES</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-envelope"></i> MENSAJES</a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                            class="fa-solid fa-right-from-bracket"></i> CERRAR SESION</a></li>

            </ul>
        </div>
    </header>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Listo para salir?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a class="btn rounded-3" style="background: #16a085; color:white; margin:1px 1px 1px 1px;"
                        href="../controlador/action/act_logout.php">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>


    <section class="home" id="home">

        <div class="content">
            <h3>PACIENTE</h3>
        </div>
    </section>










    <div class="container centered" style="display: contents;">
        <header class="perfil">
            <div class=" title">
                <h1>
                    <?php echo $_SESSION['NOMBRE'] ?>
                    <?php echo $_SESSION['APELLIDO'] ?>
                </h1>
                <h3>
                    <?php echo $_SESSION['ROL'] ?>
                </h3>
                CEDULA:
                <?php echo $_SESSION['CEDULA'] ?>
                <hr>
            </div>
        </header>

        <!-- estrutura do projeto -->
        <main class="datos">
            <h4>DATOS PERSONALES</h4>
            <div class="container-datos">

                <ul class="lista-dato">

                    <li>TELEFONO:
                        <?php echo $_SESSION['TELEFONO'] ?>
                    </li>
                    <li> DIRECCION:
                        <?php echo $_SESSION['DIRECCION'] ?>
                    </li>
                </ul>
                <ul class="lista-dato">
                    <li> EDAD:
                        <?php echo $_SESSION['EDAD'] ?>
                    </li>
                    <li> CORREO:
                        <?php echo $_SESSION['CORREO'] ?></a>
                    </li>

                </ul>
            </div>

        </main>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-lg4 my-4">
          <div class="card rounded-3">
            <h4 class="h4usuarios" style="color:white;">RECETAS DEL USUARIO</h4>
          </div>



          <table class="table" id="usuariosRegistrados">
            <thead>
              <tr>
                <th scope="col">idreceta</th>
                <th scope="col">Fecha de expedicion</th>
                <th scope="col">Fecha de vencimiento</th>
                <th scope="col">cedula</th>
                <th scope="col">Aciones</th>
                
                
              </tr>
            </thead>
            <tbody>
              <?php
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                  <td scope="col">
                    <?php echo $data["idreceta"]; ?>
                  </td>
                  <td scope="col">
                    <?php echo $data["fecha_expedicion"]; ?>
                  </td>
                  <td scope="col">
                    <?php echo $data["fecha_vencimiento"]; ?>
                  </td>
                  <td scope="col">
                    <?php echo $data["paciente_usuario_cedula"]; ?>
                  </td>
                  <div id="acciones">
                    <td>
                      <div class="container-fluid">

                            <a href="#agregar1" data-bs-toggle="modal" data-bs-target="#exampleModal1">ver</a>

                      </div>
                    </td>
                  </div>
                </tr>

              </tbody>
              <?php
              }
              ?>

          </table>






        </div>
      </div>

    </div>







    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">MEDICAMENTOS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
        <table class="table" id="usuariosRegistrados">
            <thead>
              <tr>
                <th scope="col">idreceta</th>
                <th scope="col">idmedicamento</th>
                <th scope="col">nombre_medicamento</th>
                
                
                
              </tr>
            </thead>
            <tbody>
              <?php
              while ($data = mysqli_fetch_array($query2)) {
                ?>
                <tr>
                  <td scope="col">
                    <?php echo $data["idreceta"]; ?>
                  </td>
                  <td scope="col">
                    <?php echo $data["idmedicamento"]; ?>
                  </td>
                  <td scope="col">
                    <?php echo $data["nombre_medicamento"]; ?>
                  </td>
                  
                </tr>

              </tbody>
              <?php
              }
              ?>

          </table>

            
           
        </div>
            <div class="modal-footer">

        
          <button type="button" class="btn btn-secondary"
            style="background: #16a085; color:white; margin:1px 1px 1px 1px;" data-bs-dismiss="modal">Close</button>
        </div>



      </div>
    </div>
    </div>
  </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>




    <style>
        .centered {
            position: fixed;
            top: 70%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }

        .container {
            width: 75%;
            height: 50%;
            background: fff;
            color: black;

            padding: 3rem;

            border-radius: 20px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
            display: block;
        }

        /*===== Header =====*/
        .perfil {

            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
        }



        .title {
            margin-left: 1rem;
        }

        .title h1 {

            font-weight: bolder;
            font-size: 2rem;
        }

        .title h3 {
            font-weight: 400;
            font-size: 1.5rem;
        }

        .title p {
            font-weight: 400;
            font-size: 0.8rem;
            color: #949494;
            margin-bottom: 0.3rem;
        }

        /*==== texto animado ===== */





        /*===== Projetos =====*/
        .datos h4 {
            text-align: center;
        }

        .datos {
            margin-top: 1rem;
        }

        .container-datos {

            padding: 1.1rem 1rem;
            background: local;
            display: flex;
            flex-wrap: wrap;
            align-content: left;
            justify-content: space-evenly;
        }

        .container-datos h4 {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }


        .container-datos li {
            font-size: 1.3rem;
        }

        .container-datos a {
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9rem;
            color: var(--title);
        }

        .container-datos a:hover {
            color: #16a085;
        }

        .container-datos li:hover {
            color: #16a085;
        }
    </style>


</body>




</html>