<?php

require './phpmail/class.phpmailer.php';

class Email extends PHPMailer
{

    public static
            function enviaNovoEmail($corpo, $assunto, $email, $razao) {
        $mail           = new PHPMailer;
        $mail->IsMail();
        $mail->Host     = "mail.wqiconsultoria.com.br";
        $mail->SMTPAuth = true;
        $mail->Port     = 587;
        $mail->Username = 'wqiconsultoria@wqiconsultoria.com.br';
        $mail->Password = 'bHDE2jZGDYa79EaLK5Ez';

        // Define o remetente
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->From     = "wqiconsultoria@wqiconsultoria.com.br";
        $mail->Sender   = "wqiconsultoria@wqiconsultoria.com.br";
        $mail->FromName = "WQI Consultoria";

        // Define os destinatário(s)
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        if (!empty($email))
        {
            $mail->AddAddress($email, $razao);
        }
	    //$mail->AddCC('brianledze@gmail.com.br', 'Copias');
        $mail->AddBCC('birlen@wqiconsultoria.com.br', 'Birlen WQI Consultoria');

        $mail->IsHTML(true);
        $mail->CharSet = 'utf-8';
        $mail->Subject = $assunto . "http://www.wqiconsultoria.com.br";
        $mail->Body    = $corpo;
        $mail->AltBody = $corpo;

        $enviado = $mail->Send();

        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();

        // Exibe uma mensagem de resultado
        if ($enviado)
        {
           $msg = "E-mail Enviado";
   
   
           echo "<script>
           alert( '$msg!' ); location = 'http://www.wqiconsultoria.com.br/home';
           </script>";
        }
        else
        {
            echo "Não foi possível enviar o e-mail. <br>";
            echo "Informações do erro: " . $mail->ErrorInfo;
        }
    }

}
