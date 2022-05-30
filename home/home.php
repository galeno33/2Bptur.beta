<?php
    
    include ("../conexao/conexao.php");
     session_start();

    /*$slqHome = "SELECT usuario.matricula FROM  usuario";
    $resultHome = mysqli_query($conn, $slqHome);

    while($rowHome = mysqli_fetch_assoc($resultHome)){

        $matriculaHome = $rowHome['matricula'];*/
       
    
    //}

   

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <!--<link href="https://bptur2.000webhostapp.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <!--<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.bundle.min.css">
    <!-- Custom styles for this template -->
    <link href="../home/home.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" id="cabeça" style="margin: auto;" href="#">2º BPTUR - BARREIRINHAS</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
       
        

    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

                <header class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <i class="bi bi-person-fill"></i>
                    <a class='nav-link' aria-current='page' href='../usuario/verUsuarios.php' style="border:solid; margin-right:auto"><strong>Usuario</strong></a>
                    <div class="">
                            <strong>
                                <?php 
                                   
                                        //if((isset($_SESSION['matricula'])==$usuario) and (isset($_SESSION['senha'])==$password)){
                                           
                                            $logado = $_SESSION['matricula'];
                                            echo "<h5>" .$logado; "<h5>"
                                            //echo "ola mundo!";

                                ?>
                               
                            </strong>
                         </div>
                </header>


                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class='nav-item'>
                                     <a class='nav-link' aria-current='page' href='../audiencia/totalAudiencia.php'>
                                         <?php 
                                         //==================O ACESSO A PAGINA COM O TOTAL DAS AUDIÊNCIAS SOMENTE ALGUMAS MATRICULAS===================
                                             $matriculaHome = $_SESSION['matricula'];

                                             if($matriculaHome == 2518124 || $matriculaHome == 846025){
                                                $audTotal = "Audiência Lançada";
                                                echo $audTotal;
                                            }

                                         ?>
                                         
                                     </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="../permulta/permulta.php">
                                <span data-feather="file"></span> Permulta
                            </a>
                        </li>
                        <li class="nav-item">
                            <!--<a class="nav-link" href="https://bptur2.000webhostapp.com/audiência/audiencia.php">-->
                            <a class="nav-link" href="../audiencia/audiencias.php">
                                <span data-feather="plus-square"></span> Audiência
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../boletimOcorrencia/formBoletim.php">
                                <span data-feather="file"></span> Boletim de ocorrência
                            </a>
                        </li>

                    </ul>


                    <ul class="navbar-nav px-3">
                        <li class="nav-item text-nowrap">
                            <!--<a class="nav-link" href="https://bptur2.000webhostapp.com/index.html">Sair</a>-->
                            <a class="nav-link" href="../../bptur2/index.html">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!---<div id="painel" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Painel</h1>

                </div>-->

                <div class="card text-white bg-primary mb-3" style="max-width: 18rem; margin-top: 20px;">
                    <div class="card-header"><a href="#" style="color: white;">OCORRÊNCIAS</a></div>
                    <div class="card-body">
                        <h2 class="card-title">2.00</h2>
                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                    </div>
                </div>

                <div class="card text-white bg-primary mb-3" style="max-width: 18rem; margin-top: 20px;">
                    <div class="card-header"><a href="#" style="color: white;">ARMAS APREENDIDAS</a></div>
                    <div class="card-body">
                        <h2 class="card-title">2.00</h2>
                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                    </div>
                </div>



                <!--------------------------------------------CARROSSEL-------------------------------------------->

                <!--<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" id="carrossel">
                        <div class="carousel-item active">
                            <img src="../img/2bptur003-750x430.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/2bptur002-750x430.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/2bptur-750x430.jpeg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>-->


                <!------------------------------------------FIM DO CARROSSEL--------------------------------------->
            </main>
        </div>
    </div>

    <!--------------------------------------------FOOTER RODA PÉ----------------------------------------------------------->
    <br>

    <div class="footer text-center px-1 py-5 ">
        <p class="fs-5 mb-4">copyright&copy;GalenoWeb.</p>
    </div>



    <!---------------------------------------FIM DO FOOTER RODA PÉ------------------------------------------------------->

    <!--<script src="https://bptur2.000webhostapp.com/bootstrap/js/bootstrap.bundle.min.js"></script>-->
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <!--<script src="dashboard.js"></script>-->
</body>

</html>