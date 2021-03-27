<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$control = $_POST['control'];
$carrera = $_POST['carrera'];
$materia = $_POST['materia'];
$profe = $_POST['profe'];
$horario = $_POST['horario'];
$fecha = $_POST['fecha'];
$tema = $_POST['tema'];
$duda = $_POST['duda'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Su numero de Control es: " . $control . " \r\n";
$message .= "Es de la Carrera: " . $carrera . " \r\n";
$message .= "Asesoria de la Materia: " . $materia . " \r\n";
$message .= "El Tema de es:" . $tema . " \r\n";
$message .= "Horario solicitado: " . $horario . " \r\n";
$message .= "Fecha soliciada: " . $fecha . " \r\n";
$message .= "La duda es: " . $_POST['duda'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'milenioflavio@hotmail.com';
$asunto = 'Mensaje de PRECOMPC';
switch ($profe){
	case 1: $para = pablo.vb@gamadero2.tecnm.mx;
			break;
	case 2: $para = pablo.vera.bus@gmail.com;
			break;	
	case 3: $para = pablo.vera.bus2@gmail.com;
			break;						

}
mail($para, $asunto, utf8_decode($message), $header);

header("Location:asesorias_ciencias_basicas.html");
?>