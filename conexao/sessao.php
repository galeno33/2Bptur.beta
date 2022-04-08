<?php
    //iniciar sessão
    session_start();

    if(isset($_SESSION["Matricula"]) && $_SESSION["password"] === true){
        //header( 'Location: https://bptur2.000webhostapp.com/');
        header( 'Location: http://localhost/projetos/bptur2/');
        exit;
    }

?>