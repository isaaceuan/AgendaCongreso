<?php 
$conexion=mysqli_connect('localhost','root','','agenda_cita');
$horario=$_POST['hora'];

	$sql="SELECT 
			 hora 
		from horario 
		where id_horario='$horario'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>SELECT 2 horario</label> 
			<select id='hora' name='set'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[0]).'</option>';
	}

	echo  $cadena."</select>";
	

?>