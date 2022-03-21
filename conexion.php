<?php
	$conexion= new mysqli("localhost","id17125726_brychxpin","Vf@PJ6\GJtAsAPSy","id17125726_brychxpinfb");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallooo la conexion");
	}
	else {
		printf("Estas conectado alv");
	}
?>