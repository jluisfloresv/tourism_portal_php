<?php 
    require "../script/admin/configuracion.php";
    $con=conectar();
    $consulta=mysqli_query($con,"select * from tb_contacto");
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contactos - Administrador</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <?php
            include 'inc/menu.inc';
        ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Contactos Registrados</h1>
                        <div class="panel panel-default">
                            <div class="panel-heading">Funciones</div>
                            <div class="panel-body">
                                <div class="form-inline section">
                                  <div class="form-group">
                                    <button id="btnAgre" onclick="habilitar_agregar()" class="btn btn-info">Nuevo</button>
                                  </div>
                                  <div class="form-group">
                                    <button id="btnModi" onclick="habilitar_modificar()" class="btn btn-warning" disabled>Modificar</button>
                                  </div>
                                  <div class="form-group">
                                    <button id="btnElim" onclick="habilitar_eliminar()" class="btn btn-danger" disabled>Eliminar</button>
                                  </div>
                                  <div class="form-group">
                                  <a href="../reportes/contactos.php" class="btn btn-primary" target="_blank" onClick="window.open(this.href, this.target, 'width=800,height=600'); return false;">Generar Reporte</a>
                                  </div>
                                  <div class="form-group pull-right">
                                    <label>Buscar</label>
                                    <input type="text" name="q" id="q" class="form-control" id="search"onkeyup="doSearch();" >
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                        <table class="table table-bordered" id="resultados"> 
                        <thead> 
                        <tr class="info"> 
                            <th width="50px">Seleccionar</th>
                            <th>Codigo</th> 
                            <th>Nombre</th> 
                            <th>Email</th> 
                            <th>Asunto</th>
                            <th>Mesaje</th> 
                            <th>Contacta</th> 
                        </tr> 
                        </thead> 
                        <tbody>
                        <?php
                            while($row=mysqli_fetch_array($consulta)){ 
                        ?>
                        <tr> 
                        <td>
                            <input type="radio" name="selectReg" 
                            onclick="pasarDatos('<?php echo $row['idContacto']; ?>',
                                                '<?php echo $row['con_nombre']; ?>',
                                                '<?php echo $row['con_email']; ?>',
                                                '<?php echo $row['con_asunto']; ?>',
                                                '<?php echo $row['con_mensaje']; ?>',
                                                '<?php echo $row['con_contactante']; ?>',)">
                        </td>
                        <td><?php echo $row['idContacto']; ?></td> 
                        <td><?php echo $row['con_nombre']; ?></td> 
                        <td><?php echo $row['con_email']; ?></td> 
                        <td><?php echo $row['con_asunto']; ?></td>
                        <td><?php echo $row['con_mensaje']; ?></td>
                        <td><?php echo $row['con_contactante']; ?></td>
                        </tr> 
                        <?php
                            }
                        ?>
                         </tbody> 
                         </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

        </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    <form enctype="multipart/form-data" id="form-destino" action="../script/admin/mantenimientocontactos.php" method="POST" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                                <label>Id:</label>
                                <input type="text" class="form-control" id="id" name="id" readonly>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Asunto:</label>
                                <input type="text" class="form-control" id="asunto" name="asunto" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Mensaje:</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>ID Contacta:</label>
                                <input type="text" class="form-control" id="contacta" name="contacta">
                                <small>Si deja vacio se considera anonimo.</small>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" name="operacion" id="btnoperacion" value="Insertar">
                </div>
          </div>
      </div>
    </form>
    <script type="text/javascript">

        function habilitar_agregar() {
            document.getElementById("form-destino").reset();
            $("#form-destino").find('.modal-title').text("Agregar Registro");
            $("#btnoperacion").val('Insertar');
            $("#form-destino").modal('show');

        }
        function habilitar_modificar() {
            $("#form-destino").find('.modal-title').text("Modificar Registro");
            $("#btnoperacion").val('Modificar');
            $("#form-destino").modal('show');
        }
        function habilitar_eliminar() {
            $("#form-destino").find('.modal-title').text("Eiminar Registro");
            $("#btnoperacion").val('Eliminar');
            $("#form-destino").modal('show');
        }
        function pasarDatos(id, nombre, email, asunto, mensaje,  contacta){

            document.getElementById('btnModi').disabled=false;
            document.getElementById('btnElim').disabled=false;
            document.getElementById('id').value=id;
            document.getElementById('nombre').value=nombre;
            document.getElementById('email').value=email;
            document.getElementById('asunto').value=asunto;
            document.getElementById('mensaje').value=mensaje;
            document.getElementById('contacta').value=contacta;
        }
    </script>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/metisMenu.min.js"></script>
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="../js/doSearch.js"></script>
</body>

</html>
