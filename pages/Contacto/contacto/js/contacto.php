<?php
        
    header("Location: ../index.html");

    if (!isset($_POST["nombre"])) {
     header("Location: http://www.elHost.com/");
    }else{
        if (!empty($response)) {
            $remitente = $_POST['email'];
                
                
                if (!$_POST || !$totalmente_falso= "0324655847"){

                }else{
                    $nombre = $_POST["author"]; 
                    $email = $_POST["email"];
                    $mensaje = $_POST["message"];

                    $email_message .= "<h3>Contacto desde el sitio de la Fundación de Diabetes Juvenil.</h3><br><br>";
                    $email_message .= "<b>Nombre:</b> ".$nombre."<br>";
                    $email_message .= "<b>Email:</b> ".$email."<br>";
                    $email_message .= "<b>Mensaje:<b> ".$mensaje."<br><br>";
                
                    $headers = "MIME-Version: 1.0\n";
                    $headers .= "Content-type: text/plain; charset=utf-8\n";
                    $headers .= "X-Priority: 3\n";
                    $headers .= "X-MSMail-Priority: Normal\n";
                    $headers .= "X-Mailer: php\n";

                    $headers .= 'From: ' .$email."\r\n".
                    'Reply-To: '.$email."\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                    require('class.phpmailer.php');

                    $mail = new PHPMailer(); 
			        $mail->IsSMTP(); 
			        $mail->SMTPDebug = 1;
			        $mail->SMTPAuth = true;
			        $mail->SMTPSecure = 'ssl';
			        $mail->Host = "smtp.gmail.com";
			        $mail->Port = 465; 
			        $mail->IsHTML(true);
			        //$mail->Username = "testmail@saviasoft.com"; cambiar a uno nuestro
			        //$mail->Password = "testmail12123"; cambiar a uno nuestro
			        //$mail->SetFrom("testmail@saviasoft.com"); cambiar a uno nuestro
			        $mail->Subject = "Contacto desde Fundacion de Diabetes Juvenil";
                    $mail->Body = $email_message;
                    $mail ->AddAddress("lcp.caiza@yavirac.edu.ec");

                    $mail->Send();
                    exit();        
                } 
        }else {
            exit();
        }
    }
    exit();
?>