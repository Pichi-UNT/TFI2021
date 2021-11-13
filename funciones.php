<?php     
function Conectar(){
        $servidor = 'localhost';
        $usuario = 'root';
        $clave = 'zeus3009';
        $db = 'tfi-bd(gestion sistemas de salud)';
        $conexion = mysqli_connect($servidor, $usuario, $clave, $db);
        if(!$conexion){
            echo "Error al Conectar";
        } else{
            return($conexion);
        }
    }

    function Desconectar($conexion){
        if($conexion){
            mysqli_close($conexion);
        } else{
            echo "No se pudo Desconectar";
        }
    } 
    
?>

<?php 
 
    function obtenerEnfermedades(){
        $conexion=Conectar();
        $consulta="SELECT * from enfermedad";
		$result=mysqli_query($conexion,$consulta);
        while ($fila = mysqli_fetch_row($result)) {
            $resultado[] = $fila;
        }

        return $resultado;
    }  


		
?>
