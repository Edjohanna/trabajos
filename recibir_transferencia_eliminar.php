<script src="../js/sweetalert2@10.js"></script>
.
<?php
//Paso 1: Importar la libreria de la BD
require "../config/conexion.php";

//Paso 2: Capturando variables
$cod_eliminar = $_POST["cod_eliminar"];

//Paso 3: Armo la sentencia sql que necesite
$sql = "DELETE FROM transferencias WHERE id=".$cod_eliminar." ";

//Paso 4 enviar la info al servidor
if($conexion->query($sql))
{
    echo "<script>
            Swal.fire({
              title: 'ELIMINADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../borrar_transferencia.html';
              }
            });
          </script>";

}else
{
    echo "<script>
            Swal.fire({
              title: 'Error eliminando',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../borrar_transferencia.html';
              }
            });
          </script>";
}

?>