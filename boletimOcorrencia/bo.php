<?php
    session_start();
    include ('../conexao/conexao.php');
    //$contador;
    //$output = "";

    
            $numeroBo = $_SESSION['BO'];
           
            if(isset($_POST['salvar'])){

                //echo "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Teste de chamada.</div>";

                /*if(empty($_POST['numeroBo']) || empty($_POST['flexRadioDefault']) || empty($_POST['nameEnvolv']) || empty($_POST['sexo'])
                     || empty($_POST['dataNascimento']) || empty($_POST['endereco']) || empty($_POST['numeroResid']) 
                     || empty($_POST['mae']) || empty($_POST['municipioResid']) ){
                        echo "Por favor preencha todos os campos requeridos";
                }else{*/
                       
                    //$numeroBo = $_GET['numeroBo'];
                    $envolvido = isset($_POST['flexRadioDefault']);
                    $nomeEnvolvido = $_POST['nameEnvolv'];
                    $genero = isset($_POST['sexo']);
                    $dataNascimento = $_POST['dataNascimento'];
                    $endereco = $_POST['endereco'];
                    $numeroResid = $_POST['numeroResid'];
                    $mae = $_POST['mae'];
                    $cidade = $_POST['municipioResid'];

                    //$contador++;
                
                    if($genero = 0){
                        $genero = "Masculino";
                    }else{
                        $genero = "Feminino";
                    }

                    if($envolvido = 0){
                        $envolvido = "Vitima";
                    }else{
                        $envolvido = "Autor";
                    }

                    if($conn === false){
                        die ("Error: Ao se conectar." .mysqli_connect_error());
                    }


                    $sql = "INSERT INTO controleenvolvido (`numero_bo`, `envolvido`, `nome_envolvido`, `sexo`, `data_nascimento`, `endereço`, `numero_residencia`, `mae`, `municipio`)
                    VALUES ($numeroBo, '$envolvido','$nomeEnvolvido','$genero', '$dataNascimento', '$endereco', $numeroResid, '$mae', '$cidade')";


                    if(mysqli_query($conn, $sql)){
                        echo "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Informações cadastradas com sucesso</div>";
                    }else{
                        echo "<div class='alert alert-danger'>Error: Informações não cadastradas. </div>";
                    }

                    mysqli_close($conn);

                //}
            //
            }

       
     //$_SESSION['output'] = $output;

     header('Location:../boletimOcorrencia/formBoletim.php');


    


?>