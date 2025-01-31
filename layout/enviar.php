<?php
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $visitor_message = "";
    $recipient = "ventas@4idsa.com";
    
    if(isset($_POST['visitor_name'])) {
      $visitor_name = filter_var($_POST['visitor_name']);
    }
    
    if(isset($_POST['visitor_email'])) {
    	$visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
    	$visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
    
    if(isset($_POST['email_title'])) {
    	$email_title = filter_var($_POST['email_title']);
    }
    
    
    if(isset($_POST['visitor_message'])) {
    	$visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
    
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
    
    if(mail($recipient, $email_title, $visitor_message, $headers)) {
    	echo "<p>Gracias por contactar con nosotros, $visitor_name. Recibirá una respuesta dentro de 24 horas.</p>";
    } else {
    	echo '<p>Lo sentimos pero el correo electrónico no se envió.</p>';
    }
    
} else {
    echo '<p>Lo sentimos en este momento no se encuentra activo el servidor, intente mas tardé</p>';
}
?>
