<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];

	ini_set('sendmail_from', 'hola@arturoruge.com');

	  //Asunto
	 $asunto = "Correo Enviado desde arturoruge.com";

	 //Correo del destinatario
	 $para = $correo; 

	 //Cuerpo
	 $contenido = "	<html>
						<center><body>
							<div style='background-color : #B7D6D1;'>
								<img src='http://arturoruge.com/img/logo_ar.png' href='http://www.arturoruge.com' alt='Arturo Ruge'/>
							</div>";

	 $contenido .= "<p>Hola <span style='color : #B7D6D1; font-weight : bold;'>Los datos de contacto son:!</span><br><br>
				    Nombre: ".$nombre."<br>
				    Email: ".$email."<br>
				    Comentarios: ".$comentarios."<br>
				   
				    <small style='color : #FEC8D6;'>Este email fue enviado con php</small></p>
				    </body></center>
				    </html>";

	 //Cabecera
	 $cabecera = "From: $nombre \r\n"; //Remitente
     $cabecera .= "Bcc: arturoruge@gmail.com, hola@arturoruge.com\r\n"; //Copia oculta
	 $cabecera .= "Content-type: text/html; charset=UTF-8\r\n";
	               
	 // Enviar mail
	$resultado= mail($para, $asunto, $contenido, $cabecera);
	if($resultado){
                echo "Tu mail ha sido enviado exitosamente. Espera mi mail, te estare escribiendo lo más pronto posible!!!!.";
		
	}else{
		echo "Ocurrió un problema al enviar el mail, intenta más tarde por favor";
	}