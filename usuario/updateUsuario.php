<?php

    include('../conexao/conexao.php');

    //======================implemetar o butão atualizar cadastro ==================================
    $id_matricula = $_GET['updUsuario'];
    $upg = "SELECT * FROM usuario WHERE id = $id_matricula";
    $res=mysqli_query($conn, $upg);
    while($row = mysqli_fetch_assoc($res)){

        $id = $row['id'];
        $nome = $row['nome_completo'];
        $nomeGuerra = $row['nomeGuerra'];
        $posto = $row['posto'];
        $senha = $row['senha'];
    }
    //=========================================UPDATE USUARIO======================================
    if(isset($_POST['updateUsuario'])){
        $id_matricula = $_POST['matricula'];
        $posto = $_POST['posto'];
        $nome = $_POST['nome']; 
        $nomeGuerra = $_POST['nomeGuerra'];
        $senha = $_POST['senha'];

        $upg = "UPDATE `usuario` SET id=$id_matricula,
                                   nome_completo= '$nome',
                                   nomeGuerra= '$nomeGuerra',
                                   posto=$posto,
                                   senha=$senha WHERE id=$id_matricula";
        $res=mysqli_query($conn, $upg);
            if($res){
                //echo "Atualizado com sucesso!";
                header('Location:../usuario/verUsuarios.php');
            }else{
                die(mysqli_error($conn));
            }
    }



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ATUALIZAR USUARIO</title>
  </head>
  <body>

  <header class="w-auto p-1 row navbar navbar-dark bg-primary flex-md-nowrap p-0 shadow">
        <!--<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="https://bptur2.000webhostapp.com/principal/home.html">2º BPTUR - BARRERINHAS</a>-->
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../usuario/verUsuarios.php">VOLTAR</a>                
                                
    </header>
    
    <main>
        <div class="container my-5">
            <form class="row g-3" method="POST">
                
                <div class="col-md-4">
                    <label for="inputNumber" class="form-label">ID:</label>
                    <input type="Number" name="matricula" class="form-control" id="inputCity" value="<?php echo $id; ?>">
                </div>

                <div class="col-md-4">
                    <label for="inputNumber" class="form-label">POSTO</label>
                    <input type="text" name="posto" class="form-control" id="inputCity" value="<?php echo $posto; ?>">
                </div>

                <div class="col-md-6">
                    <label for="inputName" class="form-label">Nome Completo:</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputGuerra" class="form-label">Nome de Guerra</label>
                    <input type="text" name="nomeGuerra" class="form-control" value="<?php echo $nomeGuerra; ?>">
                </div>
               
                
                <!----==============atualizar senha=================================---->
                <div class="col-md-2">
                    <label for="inputNumber" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" value="<?php echo $senha; ?>">
                    <input type="checkbox" onclick="mostrarSenha()"> Mostrar senha
                </div>
                
                <div class="col-12">
                    <button type="submit" name="updateUsuario" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>


    </main>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="../cadastro/vizualizarSenha.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
