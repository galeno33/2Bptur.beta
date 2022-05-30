<?php

    include ('../conexao/conexao.php');
    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim de ocorrência</title>
    <!----deixando a pagina responsivo---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--<link href="https://bptur2.000webhostapp.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap-grid.min.css">
    <!--<link rel="stylesheet" href="../audiencia/aud.css">-->
    <link rel="stylesheet" href="bo.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">


</head>
<body>


<div class="container-row " style="min-width: auto; max-width: 100%;">
   <header class="w-auto p-1 row navbar navbar-dark bg-primary flex-md-nowrap p-0 shadow">
   <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../home/home.php">VOLTAR</a>
   </header>   

   <main >
            <div class="modal-header mx-4" >
                <h5 class="modal-title col-md-6" id="ModalLabel">OCORRÊNCIA</h5>
                
                <div class="col-md-1">
                    <label for="inputNumber" class="form-label">
                        <?php
                                $BO = "1032"; //substituir o "1030" pelo valor vindo do js ou php
                                $_SESSION['BO'] = $BO;
                                echo $_SESSION['BO'];
                        ?>
                    </label>
                    <!--<input type="Number" class="form-control" id="inputoletim" name="inputBoletim" placeholder="1003">-->
                   <a href="#" type="button" class="btn btn-primary" id="butãoBO" >Num.BO</a> 
                </div>
               
            </div>

    <div class="container my-5 col-md-12">

        <form class="row g-3" action="bo.php" method="POST">
            <div class="col-md-6">
                <label for="inputFato" class="form-label">Fato</label>
                <!--<input type="email" class="form-control" id="inputEmail4">-->
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione o fato ocorrido</option>
                    <option value="1">Furto</option>
                    <option value="2">Roubo</option>
                    <option value="3">Violência domestica</option>
                </select>
                <div>
                    qualificação do fato.
                </div>
            </div>
           
            <div class="col-md-2">
                <label for="dataOcorrencia" class="form-label">data</label>
                <input type="date" id="dataOcorrência" name="dataOcorrencia" lang="pt-br" step="0.25" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="detalhes" class="form-label">hora</label>
                <input type="time" name="hora" id="hora" class="form-control">
            </div>

            <div class="modal-header" >
                <h5 class="modal-title" id="ModalLabel">ENVOLVIDOS</h5>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
          
            <div class="col-md-12 shadow-sm mx-1" style="margin-left: 5px;" >
                <div class="col-md-11">      

                       <?php

                       $boletim = $_SESSION['BO'];

                           $sql_envolvido = "SELECT * FROM controleenvolvido WHERE numero_bo = $boletim"; 
                            $res_envolvido = mysqli_query($conn, $sql_envolvido) or die ("[ERROR], consulta indisponivel.");

                            while($row_envolvido = mysqli_fetch_assoc($res_envolvido)){

                                    $envolvido = $row_envolvido['envolvido'];
                                    $nome_envolvido = $row_envolvido['nome_envolvido'];
                                    $sexo = $row_envolvido['sexo'];
                                    $data_nascimento = $row_envolvido['data_nascimento'];
                                    $endereco = $row_envolvido['endereço'];
                                    $numeroResid = $row_envolvido['numero_residencia'];
                                    $mae = $row_envolvido['mae'];
                                    $municipio = $row_envolvido['municipio'];

                                  
                                    

                                    echo "<div class='container my-5' style='' text-align: auto;'>";
                                    
                                        echo "<div class='col-md-12 p-1 modal-header' >";
                                        echo  "<h2 class='style='text-align: center'>";
                                            echo "<label for='detalhes' class='form-label' >".$envolvido."</label>";
                                            //echo "<input type='text' name='hora' id='hora' class='form-control' value=''>";
                                        echo "</h2>";
                                        echo "</div>";

                                        
                                        echo "<div class='col-12 modal-header'>";
                                        echo  "<p>";
                                            echo "<label for='detalhes' class='form-label'>";
                                            echo "<strong>Nome: </strong>".$nome_envolvido."</label>";
                                            
                                           // echo "<input type='text' name='hora' id='hora' class='form-control' value=''>";
                                        echo  "</p>";
                                        echo "</div>";

                                        echo "<div class='col-md-12 modal-header'>";
                                        echo  "<p>";
                                            echo "<label for='detalhes' class='form-label'>";
                                            echo "<strong>Sexo: </strong>".$sexo."</label>";
                                           // echo "<input type='text' name='hora' id='hora' class='form-control' value=''>";
                                        echo  "</p>";
                                        echo "</div>";
                                    
                                        echo "<div class='col-12 modal-header'>";
                                        echo  "<p>";
                                            echo "<label for='detalhes' class='form-label'>";
                                            echo "<strong>Data de Nascimento: </strong>".$data_nascimento."</label>";
                                            //echo "<input type='text' name='hora' id='hora' class='form-control' value=''>";
                                        echo  "</p>";
                                        echo "</div>";
                                        
                                        echo "<div class='col-md-12 modal-header'>";
                                        echo  "<p>";
                                            echo "<label for='detalhes' class='form-label'>";
                                            echo "<strong>Endereço: </strong>".$endereco."</label>";
                                            //echo "<input type='text' name='hora' id='hora' class='form-control' value=''>";
                                        echo  "</p>";
                                        echo "</div>";

                                        echo "<div class='col-md-12 modal-header'>";
                                        echo  "<p>";
                                            echo "<label for='detalhes' class='form-label'>";
                                            echo "<strong>Numero: </strong>".$numeroResid."</label>";
                                            //echo "<input type='text' name='hora' id='hora' class='form-control' value=''>";
                                        echo  "</p>";
                                        echo "</div>";

                                        echo "<div class='col-md-12 modal-header'>";
                                        echo  "<p>";
                                            echo "<label for='detalhes' class='form-label'>";
                                            echo "<strong>Mãe: </strong>".$mae."</label>";
                                            //echo "<input type='text' name='hora' id='hora' class='form-control' value=''>";
                                        echo  "</p>";
                                        echo "</div>";

                                        echo "<div class='col-md-12 modal-header'>";
                                        echo  "<p>";
                                            echo "<label for='detalhes' class='form-label'>";
                                            echo "<strong>Cidade: </strong>".$municipio."</label>";
                                            //echo "<input type='text' name='hora' id='hora' class='form-control' value=''>";
                                        echo  "</p>";
                                        echo "</div>";

                                    echo "</div>";

                                    
                            }

                        ?>
                        <!--<a href="bo.php?add=" type="submit" name="add" id="butãoModal" class="btn btn-danger"  value="Salvar">-->
                </div>
            </div>

            <div class="col-md-2" id="divBut">
            <!---------------*******************Butão modal boletim*****************************--------------------------------->
                <button id="butãoModal" name="addEnvolvido" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="55" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </button>
            </div>

            <div class="modal-header" >
                <h5 class="modal-title" id="ModalLabel">HISTÓRICO</h5>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">histórico</label>
                <textarea class="form-control" id="historico" name="historico" rows="3">ola mundo</textarea>
            </div>

            <!------------------------------------------------------------------------------------------------------------>
            <div class="modal-header" >
                <h5 class="modal-title" id="ModalLabel">EFETIVO EMPENHADO</h5>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <!-- Button trigger modal -->
            <div class="col-md-2" id="divBut">
                <button type="button" id="butãoModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#efetivoModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="55" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </button>
            </div>

           


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar BO</button>
            </div>
        </form>
    </div>

   </main>
</div>

<form>

    <input type="hidden" name="nome" value="ola mundo" >
</form>


<!--------------Modal para editar e adcionar dados da ocorrência---------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Envolvido</h5>
            <h4 style="border-left: 40px;">

           
                <?php
                       // echo $_SESSION['BO'];
                ?>
            </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="g-3" id="form_cadastro" action="bo.php" method="POST" enctype="multipart/form-data" >
            <div class="col-2">
            <label for="recipient-name" class="form-label">B.O</label> 
            <input type="number" class="form-control" id="numeroBo" name="endereco" value="<?php 
                        
                        echo $_SESSION['BO'];  
                        
                ?>">
            
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Vitima
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault">
                <label class="form-check-label" for="flexRadioDefault2">
                    Autor
                </label>
            </div>  

            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">nome:</label>
                <input type="text" class="form-control" id="nameEnvolv" name="nameEnvolv">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="opcoes" name="sexo">
                    <option selected>Sexo</option>
                    <option value="1" id="masc" >Masculino</option>
                    <option value="2" id="fem" >Feminino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dataNascimento" class="control-label">data de nascimento</label>
                <input type="date" id="dataNascimento" name="dataNascimento" lang="pt" step="0.25" class="form-control">
                <!---<input type="number" name="preco" id="preco" onchange="setTwoNumberDecimal" min="0" max="100" step="0.25" value="0.00" />-->
            </div>

            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
            <div class="mb-2">
                <label for="numeroResid" class="col-form-label">numero:</label>
                <input type="number" class="form-control" id="numeroResid" name="numeroResid">
            </div>

            <div class="mb-3">
                <label for="mae" class="col-form-label">Mãe:</label>
                <input type="text" class="form-control" id="mae" name="mae">
            </div>

            <div class="mb-3">
                <label for="municipioResid" class="col-form-label">Municipio:</label>
                <input type="text" class="form-control" id="municipioResid" name="municipioResid">
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <input type="submit" name="salvar" class="btn btn-primary"  value="Salvar">
                    <!--<button type="button" onclick="enviar()" class="btn btn-primary">Salvar dados</button>-->
            </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
<!------------------------******************************MODAL GUARNIÇÃO**************************------------------------>



<!-- Modal -->
<div class="modal fade" id="efetivoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="md-2">
                <label for="numeroResid" class="col-form-label">ID/Matricula</label>
                <input type="number" class="form-control" id="numeroResid" name="numeroResid">
            </div>

            <div class="md-3">
                <label for="recipient-name" class="col-form-label">Nome</label>
                <input type="text" class="form-control" id="nameEnvolv" name="nameEnvolv">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


   
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!--<script type="text/javascript">
           
        show_cart();

           function show_cart(){
               $.ajax({
                   method: "POST",
                   url: "http://localhost/projetos/bptur2/boletimOcorrencia/bo.php",
                   success: function(data){
                        $(".show_res") .html(data);
                   }
               });
            }
    </script>-->

    <script src="bo.js"></script>
    <!--<script src="https://bptur2.000webhostapp.com/bootstrap/js/bootstrap.bundle.min.js"></script>-->
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 

</body>
</html>