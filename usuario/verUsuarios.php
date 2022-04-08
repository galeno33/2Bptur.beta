<?php
    include ("../conexao/conexao.php");
    session_start();

    $usuario = $_SESSION['matricula'];

    $sql = "SELECT id, nome_completo, nomeGuerra, posto, senha FROM usuario
     WHERE id = $usuario";
    $result = mysqli_query($conn, $sql) or die ("Erro ao tentar consultar Audiências!!!");

    while($rowUsuario = mysqli_fetch_assoc($result)){
        $id = $rowUsuario['id'];
        $nome = $rowUsuario['nome_completo'];
        $nomeGuerra = $rowUsuario['nomeGuerra'];
        $posto = $rowUsuario['posto'];
        $senha = $rowUsuario['senha'];
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
    <link rel="stylesheet" href="../usuario/usuario.css">


    <title>Usuario</title>
  </head>
  <body>

    <header class="w-auto p-1 row navbar navbar-dark bg-primary flex-md-nowrap p-0 shadow">
        <!--<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="https://bptur2.000webhostapp.com/principal/home.html">2º BPTUR - BARRERINHAS</a>-->
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../home/home.php">VOLTAR</a>                
                                
    </header>

    <main>

        <div class="container my-5" id="area">
            <form class="row g-3" method="POST" id="formulario" >

                <!--<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">-->
                   
                    <h2><?php echo $nome ?></h2>
                    <!--<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">-->
                <!--</div>-->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <label for="formGroupExampleInput" class="form-label">ID:</label>
                    <h5><?php echo $id;?></h5>
                    <!--<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">-->
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <label for="formGroupExampleInput2" class="form-label">POSTO:</label>
                    <h5><?php echo $posto ?></h5>
                    <!--<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">-->
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mb-3">
                    <label for="formGroupExampleInput2" class="form-label">NOME DE GUERRA:</label>
                    <h5><?php echo $nomeGuerra ?></h5>
                    <!--<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">-->
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mb-3">
                    <label for="formGroupExampleInput2" class="form-label">SENHA:</label>
                    <h5><?php echo $senha ?></h5>
                    <!--<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">-->
                </div>
                
                <div class="col-12">
                <a href="../usuario/updateUsuario.php?updUsuario=<?php echo $id;?>" class="btn btn-primary w-100">Editar</a>
                </div>
            </form>
        </div>


    </main>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>