<?php
      
      
      include ('../conexao/conexao.php');
      //include ('../cenexao/sessao.php');

      $usuario = $_POST['Matricula'];
      $password = $_POST['password'];
      //$log = $_GET['submeter'];

      //====================================================================================
        //to prevent from mysqli injection  
        $usuario = stripcslashes($usuario);  
        $password = stripcslashes($password); 
        //$log = stripcslanshes($log); 
        $usuario = mysqli_real_escape_string($conn, $usuario);  
        $password = mysqli_real_escape_string($conn, $password);
        //$log = mysqli_real_escape_string($conn, $log);  
      
        $sql = "SELECT nomeGuerra, id, senha FROM usuario WHERE id = '$usuario' and senha = '$password'";  //MUDEI DE MATRICULA PARA ID DO BANCO DE DADOS
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $row_usuario = mysqli_fetch_assoc($result);

            //$log = $row_usuario['nome_de_guerra'];
        //===================================================================================
          //$id_logado = $row_usuario['id'];
           session_start();
          //if((isset($_SESSION['matricula'])==$usuario) and (isset($_SESSION['senha'])==$password)){

                
                $_SESSION['matricula'] = $usuario;
                $_SESSION['senha'] = $password;
                //$_SESSION['nome'] = $row_usuario["nomeGuerra"];
           
          //}

        
        //===================================================================================

            if($count == 1){ 
                
                
                
                    //if($usuario==846025 || $usuario==846523){
                       //header('Location: https://bptur2.000webhostapp.com/principal/home.html');
                      
                        header('Location: ../../bptur2/home/home.php');  //home
                        
                        
                           while($row_usuario){
                            echo $row_usuario['matricula'];
                           
                            } 

                            
                        
                            /*while($row_usuario = mysqli_fetch_array($result)){
                                $usuario = $row_usuario['matricula'];
                                //$password = $row_usuario['senha'];
                            }*/
                        exit; 
                    //}else{

                        /*session_start();
                        $_SESSION['usuario_logado'] = $id_logado;
                        header('Location:http://localhost/projetos/bptur_sistem/usuarios/homeUsuario.php');
                        }*/
                       // echo "<h1> Erro:</h1>"; 
                    //}
            }  
            else{ 
                header('Location:http://localhost/projetos/bptur2/index.html');
                echo "<h1> Falha no Login. Invalid username or password.</h1>";   
                } 
        //====================================================================================

        
?>