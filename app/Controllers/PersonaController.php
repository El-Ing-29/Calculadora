<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{

		$datos = [
					"nombre" => "Roldan Aquino",
					"correo" => "roldan@gmail.com",
					"escuela" => "Tec 1"
				];

		return view('persona', $datos);
	}

	public function persona()
	{

		$datos = [
					"nombre" => "Roldan Aquino",
					"correo" => "roldan@gmail.com",
					"escuela" => "Tec 1"
				];

		return view('persona', $datos);
	}

	public function direccionObtenida($direccion, $p2) {
		echo $direccion.$p2;
	}

	public function contacto() {
		return view('contacto');
	}

	public function pasarPost() {
		if (isset($_POST['sum'])) {
		echo "Valor 1: ",$_POST['valor1'];
		echo "<br>";
		echo "Valor 2: ",$_POST['valor2'];
		echo "<br>";
		echo "Resultado: ",$_POST['valor1']+$_POST['valor2'];
			# code...
		}
		elseif (isset($_POST['res'])) {
		echo "Valor 1: ",$_POST['valor1'];
		echo "<br>";
		echo "Valor 2: ",$_POST['valor2'];
		echo "<br>";
		echo "Resultado: ",$_POST['valor1']-$_POST['valor2'];
			# code...
		}
		elseif (isset($_POST['mul'])) {
		echo "Valor 1: ",$_POST['valor1'];
		echo "<br>";
		echo "Valor 2: ",$_POST['valor2'];
		echo "<br>";
		echo "Resultado: ",$_POST['valor1']*$_POST['valor2'];
			# code...
		}
		elseif (isset($_POST['div'])) {
		echo "Valor 1: ",$_POST['valor1'];
		echo "<br>";
		echo "Valor 2: ",$_POST['valor2'];
		echo "<br>";
		echo "Resultado: ",$_POST['valor1']/$_POST['valor2'];
			# code...
		}
	}
	

}
