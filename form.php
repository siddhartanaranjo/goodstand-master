<?php
    if (isset($_POST['submit'])) {
        $name    = null;
        $mail    = null;
        $phone   = null;
        $mensaje = null;

        $name    = $_POST['name'];
        $mail    = $_POST['email'];
        $phone   = $_POST['phone'];
        $mensaje = $_POST['message'];
        

        if ($name != null && strlen(trim($name)) > 0 ) {
            $name = $name;
        }
        else {
            $name = null;
        }
        if ($mail != null && strlen(trim($mail)) > 0 ) {
            $mail = $mail;
        }
        else {
            $mail = null;
        }
        if ($phone != null && strlen(trim($phone)) > 0 ) {
            $phone = $phone;
        }
        else {
            $phone = null;
        }
        if ($mensaje != null && strlen(trim($mensaje)) > 0 ) {
            $mensaje = $mensaje;
        }
        else {
            $mensaje = null;
        }
        
        $mailTo   = 'contacto@goodstand.com.mx';
        $subject  = 'Contacto desde Goodstand.com.mx';
        $message  = 'Nombre: '.$name.'\n';
        $message .= 'Mail: '.$mail.'\n';
        $message .= 'Telefono: '.$phone.'\n';
        $message .= 'Mensaje: '.$mensaje.'\n';
        mail($mailTo, $subject, $message);
        $isEmailSended = mail($mail, $subject, $message);
        if($isEmailSended){
            // header("Location: gracias.html");
            $respuesta = 'Tú mail ha sido enviado exitosamente';
        }
        else{
            $respuesta = 'Ha ocurrido un error por favor vuelve a intentarlo';
        }
    }
    else{
        $respuesta = "como llegaste aqui?";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5; url=http://goodstand.com.mx/" />
    <title>Correo</title>
</head>
<body>
    <div class="wrapper">
        <h1><?php echo $respuesta ?></h1>
        <FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
    </div>
</body>
</html>
