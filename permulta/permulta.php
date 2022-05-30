<?php



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

                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../home/home.php"><i class="fa fa-chevron-left"></i>VOLTAR</a>
               
                                
            </header>

        <main>

        <div class="container my-5 col-md-12">
        <form class="row g-3">
            
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Permultando</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Nome do permultando">
            </div>
            <!--<div class="col-md-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                </svg>
            </div>--->
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Permultado</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Nome do permultado">
            </div>
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>                
        </div>   

    </main>      

    </div>

    <!--<script src="https://bptur2.000webhostapp.com/bootstrap/js/bootstrap.bundle.min.js"></script>-->
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>