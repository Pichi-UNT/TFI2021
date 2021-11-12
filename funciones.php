<?php 

	$conexion=mysqli_connect('localhost','root','zeus3009','tfi-bd(gestion sistemas de salud)');

 ?>

<?php 
		$sql="SELECT * from dnu";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
?>