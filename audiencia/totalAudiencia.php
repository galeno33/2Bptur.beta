<?php
        include "../conexao/conexao.php";
       
              
        
?>       
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audiências</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="https://bptur2.000webhostapp.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap-grid.min.css">
    <!--<link rel="stylesheet" href="../audiencia/aud.css">-->

</head>

<body>
    
    <div class="container-row w-auto d-grid gap-0 p-2 bg-light" style="min-width: auto; max-width: 100%;">
        
            <header class="w-auto p-1 row navbar navbar-dark bg-primary flex-md-nowrap p-0 shadow">
                <!--<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="https://bptur2.000webhostapp.com/principal/home.html">2º BPTUR - BARRERINHAS</a>-->
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../home/home.php"><- 2º BPTUR - BARRERINHAS</a>
               
                                
            </header>

                        <div id="aud" style="margin-right: 10px;">
                                    <!--tag para cadastrar produtos-->
                            <a href="../audiencia/formAudiencia.php" class="btn btn-success">
                                <span>Lançar Audiencia</span></a>
                                    <!--tag para deletar produtos-->
                                    <!--<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>-->   
                        </div>
            

        <table border = '2' class="table table-striped table-hover" >
            <tr class="gap-1 w-auto p-2 bg-light">
            <td>NOME COMPLETO</td>
            <td>DATA</td>
            <td>HORA</td>
            <td>ARQUIVO</td>
            </tr>
        
                 
            <?php
                //=================CODIGO PARA RETORNO DOS DADOS=================================
                    //session_start();
                    //$usuario = $_SESSION['matricula'];
              
                    //substituir ordem_serviço pela tabela do banco de dados Audiencia
                    $sql = "SELECT * FROM audiencia";
                    $result = mysqli_query($conn, $sql) or die ("Erro ao tentar consultar Audiências!!!");


                    
           
                        //if(($result) AND ($result->num_rows != 0)){
                            while($row = mysqli_fetch_assoc($result)){
                                //substituir
                                $nome = $row['nome_completo'];
                                $dia = $row['dia_mes'];
                                $hora = $row['hora'];
                                $arquivo = $row['arquivos'];
                                
                                echo "<tr>";
                                echo "<td>".$nome."</td>";
                                echo "<td>".$dia."</td>";
                                echo "<td>".$hora."</td>";
            ?>                               

                                <th>
                                   <a  href="../arquivos/<?php echo $arquivo?>" download> Download </a>
                                </th>
                                <th>
                                    <a href="../audiencia/deleteAud.php?delete=<?php echo $id=$row['id'];?>" class="btn btn-danger">Delete</a>
                                </th>
                            <?php    

                            //./downAud.php?
                              echo "</tr>";
                            }
                        
                           // mysqli_close($conn);
                        //}

                // echo "</table>";
            
                            ?>
        </table>    

    </div>

    <!--<script src="https://bptur2.000webhostapp.com/bootstrap/js/bootstrap.bundle.min.js"></script>-->
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>