<?php require('./navbar.php'); ?>

<?php ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  </head>
  <body>
    <div class = "container">
        <div class="row">
            <div class = "container">
                <center>
                    <h1>Agenda tu proxima cita....</h1>
                </center>
                <hr class="bg-info">
                <form action="insertar_cita.php" method="post">
                    <div class="row">
                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Nombre (S)</label>
                                <div class='input-group date'>
                                    <input type="text" name="nombre" id='nombre' class="form-control" placeholder="Nombre (S)" required >
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <div class='input-group date'>
                                    <input type="text" name="app" id='app' class="form-control" placeholder="Apellido Paterno" required >
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <div class='input-group date'>
                                    <input type="text" name="apm" id='apm' class="form-control" placeholder="Apellido Materno" required >
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Fecha de la Cita</label>
                                <div class='input-group date'>
                                    <input type="date" name="fechnac" id='fechnac' class="form-control"  required >
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Hora de la Cita</label>
                                <div class='input-group date'>
                                    <input type="time" name="hcita" id='hcita' class="form-control" placeholder="hora de la cita" required >
                                </div>
                            </div>
                            <br>
                        </div>
                
                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Teléfono </label>
                                <div class='input-group date'>
                                    <input type="text" name="tel" id='tel' class="form-control" placeholder="Telefono" required >
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Correo electronico</label>
                                <div class='input-group date'>
                                    <input type="email" name="email" id='email' class="form-control" placeholder="Correo electronico" required >
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">REGISTRAR CITA</button>
                </form>
            </div>
        </div>
        <hr class="bg-info">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

<?php require('./footer.php'); ?>