<?php require ('./navbar.php'); ?>

<?php
    session_start();
    $usuarios=$_SESSION['usuario'];
    if(!isset($usuarios)){
        header("location:tablacitas.php");
    }else{
        echo"<center><h1>Hola $usuarios</h1></center>";
        echo"<center><button type='submit' class='btn btn-danger'><a href='logout.php'>Salir</a></button></center>";
    }
?>

<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <link rel="stylesheet" href="css/tabla.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.1/css/fixedHeader.bootstrap5.min.css">

  <title>Citas registradas</title>
</head>

</header>

    <hr class="bg-warning">

    <center>
        <h1>Citas registradas</h1>
    </center>

    <hr class="bg-warning">
    <?php include('./conexion.php'); ?>

<?php include('./conexion.php'); ?>

    <div class="scroll_horizontal">
        <table id="example" class="table table-dark table-bordered display responsivegene" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido Paterno</th>
                    <th class="text-center">Apellido Materno</th>
                    <th class="text-center">Fecha de la Cita</th>
                    <th class="text-center">Hora de la Cita</th>
                    <th class="text-center">Teléfono</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            
            <?php include('conexion.php');
                $sql = "SELECT * FROM citas";
                $consulta = mysqli_query($conexion, $sql);
                while ($r = mysqli_fetch_assoc($consulta)) {
                    echo"<tr>
                        <td class='text-center'>"  .$r['nombre']."</td>
                        <td class='text-center'>" . $r['app']. "</td>
                        <td class='text-center'>" . $r['apm'] ."</td>
                        <td class='text-center'>" . $r['fechnac'] ."</td>
                        <td class='text-center'>" . $r['hcita'] ."</td>
                        <td class='text-center'> ". $r['tel']. "</td>
                        <td class='text-center'> ". $r['email']. "</td>
                        <td class='text-center'>
                            <a href=\"editar_cita.php?id=" .$r['id']."\">
                                <button class='btn btn-primary'>
                                    <i class='fas fa-edit'></i>
                                </button>
                            </a>     
                                
                            <a href=\"eliminar_cita.php?id=". $r['id']."\">
                                <button class='btn btn-danger'>
                                    <i class='fas fa-trash'></i>
                                </button>
                            </a>
                        </td>
                    </tr>";
                }
            ?>
        </table>
    </div>
    <hr class="bg-warning">

<?php include('./conexion.php'); ?>


<?php require('./footer.php'); ?>