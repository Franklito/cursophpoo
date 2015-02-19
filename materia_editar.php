<?php
require_once './Materia.php';

$idmateria = filter_input(INPUT_GET, 'idmateria');

$materia_editar = new Materia();
$registro_materia = $materia_editar->obtener_materia_por_id($idmateria); 

$titulo = "Editar Materia";
$encabezado = "Editar Materia";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <?php include_once './menu.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-7 col-sm-offset-2 col-md-offset-3">
                    <form action="materia_procesar.php" method="post" role="form">
                        <fieldset>
                        <h2><?php echo $encabezado; ?></h2>
                        <hr class="colorgraph">
                        <div style="display:none"><input type="text" value="<?php echo $registro_materia['idmateria'] ?>" name="idmateria"></div>
                        <div style="display:none"><input type="text" value="<?php echo 'editar'; ?>" name="operacion"></div>
                        <div class="form-group">
                            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $registro_materia['nombre']; ?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $registro_materia['descripcion']; ?>">
                            </div>
                        </div>
                        </fieldset>
                        
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-6 col-lg-6 col-md-6 col-sm-offset-2">
                            <input type="submit" value="Guardar" name="submit" class="btn btn-success">
                            <button type="reset" onclick="location.href = 'materia_lista.php'" class="btn btn-success col-sm-offset-2">Cancelar</button>
                        </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
