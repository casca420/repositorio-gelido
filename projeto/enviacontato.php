<?php

ini_set ( 'default_charset' , 'utf8' ) ;
if ( isset ( $_POST[ 'enviar' ] ) ) {

       $nome = htmlspecialchars(strip_tags($_POST[ 'nome' ])) ;
       $email = strip_tags(trim($_POST[ 'email' ])) ;
       $assunto = htmlspecialchars(strip_tags($_POST[ 'assunto' ])) ;
       $mensagem = htmlspecialchars(strip_tags($_POST[ 'mensagem' ])) ;


       if ( ( ! empty ( $_POST[ 'email' ] ))) {

              $email = $_POST[ 'email' ] ;
              if ( filter_var ( $email , FILTER_VALIDATE_EMAIL ) ) {
                     require 'Email.php' ;
                     $corpo = 'WQI Consultoria  Contato- '  . " Código: ". $nome = $_POST[ 'nome' ] . " Email:  " . $email = $_POST[ 'email' ] . " Assunto: " . $assunto = $_POST[ 'assunto' ] . " Mensagem ". $mensagem = $_POST[ 'mensagem' ]  ;
                     $assunto = 'Site - WQI Consultoria - ' ;
                     $razao = $_POST[ 'nome' ] ;
                     $email = Email::enviaNovoEmail ( $corpo , $assunto , $email , $razao ) ;
              }
       }
       else {
              echo "<script>alert('Ivalido!');top.location.href='https://wqiconsultoria.com.br/contato';</script>" ;
       }
}
unset ( $_POST );



