<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <div class="content">
        <?php
		include("funciones.php");
 /*
		header("Location: pruebaPaciente.php");
        exit();
*/
		// Taking all 5 values from the form data(input)
		$nombre = $_POST['nombre'];
		$dni = (int)$_POST['dni'];
		$sexo = $_POST['sexo'];
		$telefono = (int)$_POST['telefono'];
        $riesgo = (int)$_POST['riesgo'];
        $fecha_nac = date('Y-m-d',strtotime($_POST['fecha_nac']));
        
        $data = array($riesgo,$dni,$telefono,$nombre,strtotime($fecha_nac));

        foreach ($data as $value) {
            echo gettype($value), "\n";
        }
        
        


		$q = "INSERT INTO paciente VALUES (NULL,$riesgo,$dni,$telefono,$nombre,$fecha_nac,NULL)";
		$result = mysqli_query(Conectar(),$q)

		
		?>
    </div>
</body>

</html>