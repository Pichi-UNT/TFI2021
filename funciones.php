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
        $consulta="SELECT * from vista_enfermedad";
		$result=mysqli_query($conexion,$consulta);
        while ($fila = mysqli_fetch_row($result)) {
            $resultado[] = $fila;
        }
        Desconectar($conexion);
        return $resultado;
    }  
    
    
    function obtenerHospitales(){
        $conexion=Conectar();
        $consulta="SELECT * from hospital";
        $result = mysqli_query($conexion,$consulta);
        while ($row = mysqli_fetch_row($result)) {
            $rows[] = $row;
        }
        Desconectar($conexion);
        return $rows;
    }
  
    function buscarPacientePorDNI($dni){
        $conexion=Conectar();
        $consulta="SELECT * from vista_datospaciente where dni={$dni};";
        $result = mysqli_query($conexion,$consulta);
        while ($row = mysqli_fetch_row($result)) {
            $rows[] = $row;
        }
        Desconectar($conexion);
        return $rows;
    }
	
    function insert(){
        $nombre = $_POST['nombre'];
		$dni = (int)$_POST['dni'];
		$sexo = $_POST['sexo'];
		$telefono = (int)$_POST['telefono'];
        $riesgo = (int)$_POST['riesgo'];
        $fecha_nac = date('Y-m-d',strtotime($_POST['fecha_nac']));

		$q = "INSERT INTO paciente VALUES (NULL,$riesgo,$dni,$telefono,$nombre,$fecha_nac,NULL)";
		$result = mysqli_query(Conectar(),$q);

    }

    function obtenerViajesPaciente($dni){
        $conexion=Conectar();
        $consulta="SELECT * from vista_viajespacientes where dni={$dni};";
        $result = mysqli_query($conexion,$consulta);
        $rows=null;
        while ($row = mysqli_fetch_row($result)) {
            $rows[] = $row;
        }
        Desconectar($conexion);
        return $rows;

    }

     
    function obtenerInfectologos(){
        $conexion=Conectar();
        $consulta="SELECT * from vista_infectologos";
		$result=mysqli_query($conexion,$consulta);
        $resultado=null;
        while ($fila = mysqli_fetch_row($result)) {
            $resultado[] = $fila;
        }
        Desconectar($conexion);
        return $resultado;
    }

    function buscarHistorialClinico($dni){
        $conexion=Conectar();
        $consulta="SELECT * from vista_historialpaciente where dniPaciente={$dni};";
        $result = mysqli_query($conexion,$consulta);
        $rows=null;
        while ($row = mysqli_fetch_row($result)) {
            $rows[] = $row;
        }
        Desconectar($conexion);
        return $rows;

    }

    function obtenerInternados(){
        $conexion=Conectar();
        $consulta="SELECT * from vista_internados";
		$result=mysqli_query($conexion,$consulta);
        $resultado=null;
        while ($fila = mysqli_fetch_row($result)) {
            $resultado[] = $fila;
        }
        Desconectar($conexion);
        return $resultado;
    }

    function obtenerVacunas(){
        $conexion=Conectar();
        $consulta="SELECT * from vista_internados";
		$result=mysqli_query($conexion,$consulta);
        $resultado=null;
        while ($fila = mysqli_fetch_row($result)) {
            $resultado[] = $fila;
        }
        Desconectar($conexion);
        return $resultado;
    }

?>
