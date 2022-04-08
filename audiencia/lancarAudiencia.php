<?php

    include ('../conexao/conexao.php'); // Carrega os dados da conexão!	
    //include ('../../bptur2/conexao/sessao.php');
    //include ('../audiencia/uploadArq.php');
    //include ('../audiencia/audiencia.php');




    if(isset($_FILES['arquivo'])){
                
        $arquiv = $_FILES['arquivo'];
            //var_dump($_FILES);
        if($arquiv['error']){
            die("Falha ao enviar arquivo");
        }
            if($arquiv['size'] > 2097152){
                die("Arquivo muito grande! Max: 2MB");
            }
            $pasta = "../arquivos/";
            $nomeArquivo = $arquiv['name'];
            $tmp = $arquiv['tmp_name'];
            //$novoNomeArquiv = uniqid();
            //extenção para identificar o tipo do arquivo a ser tratado
            $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
            //$novoNomeArquiv = md5(time()) . "." . $extensao;
                if($extensao != "pdf"){
                    die("O arquivo não está em pdf, por favor converta-o para pdf.");
                }
            // .estensão APOIS O .$nomeArquivo
                    if( $carregado = move_uploaded_file(($tmp ), $pasta . $nomeArquivo )){
                        //echo "arquivo carregado com sucesso!";
                        echo  "<script>alert('Arquivo enviado com Sucesso!');</script>";
                    }
    }
    //$Narquiv = $novoNomeArquiv . "." . $extensao;
   // $Narquiv = $novoNomeArquiv;

    //=================codigo para adaptar o cadastrar======================//


    if(isset($_POST['salvar'])){
        if( empty($_POST['matricula']) || empty($_POST['nome']) 
            || empty($_POST['data']) || empty($_POST['hora']) )//====obriga a preencher todos os campos
        {
            echo "Por favor preencha todos os campos requeridos";
        }else{

            $matricula = $_POST['matricula'];
            $nome = $_POST['nome'];//===relacionar name="produto" e criando um variavel
            $data = $_POST['data'];
            $hora = $_POST['hora'];
        
        // $arquiv = [$arquiv];
            if($conn === false){
                die ("Error: Ao se conectar." .mysqli_connect_error());
            }


            
            $sql = "INSERT INTO audiencia (`matricula`, `nome_completo`, `dia_mes`, `hora`, `arquivos`)
                    VALUES ($matricula, '$nome','$data','$hora', '$nomeArquivo')";//inserir os outros campos do formulario de cadastro de produtos
            
              
            //$sql = "INSERT INTO audiencia VALUES ($matricula, '$nome','$data','$hora', '$nomeArquivo')";//inserir os outros campos do formulario de cadastro de produtos


            if(mysqli_query($conn, $sql)){
                echo "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Informações cadastradas com sucesso</div>";
            }else{
                echo "<div class='alert alert-danger'>Error: Informações não cadastradas. </div>";
            }

            mysqli_close($conn);
            /*
            if($conn->query($sql) === TRUE){
            
                echo "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Informações cadastradas com sucesso</div>";
            }else{
                echo "<div class='alert alert-danger'>Error: Informações não cadastradas. </div>";
            }*/
        }
    }


?>