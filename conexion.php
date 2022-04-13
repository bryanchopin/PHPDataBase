<?php
	$conexion= new mysqli("localhost","brychxpin","12061125","bry");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallooo la conexion");
	}
	else {
		printf("Estas conectado alv");
	}
?>