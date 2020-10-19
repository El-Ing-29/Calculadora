<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
</head>
<body>
	<hr>
	<h1 align="center">Calculadora basica</h1>
	<hr>
	<div align="center">
	<form action="<?php echo base_url(); ?>/mandarPost" method="post"> 
		<br>
		<h1>Ingrese el primer valor:</h1>
		<input type="text" name="valor1" placeholder="valor 1" style='width:300px; height:50px'>
		<br>
		<h1>Ingrese el segundo valor:</h1>
		<input type="text" name="valor2" placeholder="valor 2" style='width:300px; height:50px'>
		<br>
		<h1>Seleccione la Operacion:</h1>
		<h1>
			<button id="sum" name="sum" style='width:70px; height:40px'> + </button>
			<button id="res" name="res" style='width:70px; height:40px'> - </button>
			<button id="mul" name="mul" style='width:70px; height:40px'> * </button>
			<button id="div" name="div" style='width:70px; height:40px'> / </button>
		</h1>
	</form>
	</div>
</body>
</html>