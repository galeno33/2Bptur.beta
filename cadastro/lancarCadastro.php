<?php

	include ("../conexao/conexao.php"); // Carrega os dados da conexão!	
	//include "sessão.php";


  //=================codigo para buscar informações do ordem de serviço======================//


            if(isset($_POST['salvar'])){
                if( empty($_POST['matricula']) || empty($_POST['nome']) || empty($_POST['nomeGuerra'])
                    || empty($_POST['posto']) || empty($_POST['senha']) )//====buscar do html
                    {
                        echo "Please fillout all required fields";
                    }else{
                        $id = $_POST['matricula'];
                        $nome = $_POST['nome'];
                        $nomeGuerra = $_POST['nomeGuerra'];//===relacionar name="produto" e criando um variavel
                        $posto = $_POST['posto'];
                        $senha = $_POST['senha'];
                        //$situacao = $_POST['situacao'];
                        
                      
                            $sql = "INSERT INTO usuario (`id`, `nome_completo`, `nomeGuerra`, `posto`, `senha`)
                            VALUES ($id,'$nome', '$nomeGuerra','$posto', $senha)";//inserir os outros campos do formulario de cadastro de produtos


                             if( $conn->query($sql) === TRUE){
                                //Alerta após o lançamento da ordem de serviços e o retorna ao formulario de lançamento
                                echo  "<script>alert('Cadastro enviado com Sucesso!');</script>";
                                 header('Location:../cadastro/cadastroUsuario.php');// "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Informações cadastradas com sucesso</div>";
                                }else{
                                echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
                                }
                            
                    }
            }
            

?>