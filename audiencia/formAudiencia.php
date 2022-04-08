<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audiências</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--<link href="https://bptur2.000webhostapp.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap-grid.min.css">
    <!--<link rel="stylesheet" href="../audiencia/aud.css">-->

</head>

<body>
    
    <div class="container-row " style="min-width: auto; max-width: 100%;">
        
            <header class="w-auto p-1 row navbar navbar-dark bg-primary flex-md-nowrap p-0 shadow">
                <!--<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="https://bptur2.000webhostapp.com/principal/home.html">2º BPTUR - BARRERINHAS</a>-->
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../audiencia/audiencias.php">VOLTAR</a>
                    
                                
            </header>

                       
           <main> 

                <div class="modal-header" >
                    <h5 class="modal-title" id="ModalLabel">Lançamento de audiência</h5>
                        <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                </div>
               
                    <div class="container my-5">

                        <form class="row g-3" id="form_cadastro" action="lancarAudiencia.php" method="POST" enctype="multipart/form-data">    

                            <!-------------------------Matricula----------------------------->
                            <div  class="col-md-4 form-group">
                                <label for="Number" class="control-label">Matricula</label>
                                <input type="number" name="matricula" id="matricula" class="form-control"> <!--type de text para numero-->
                            </div>

                            <!-------------------------nome---------------------------->
                            <div class="form-group">
                                <label for="produto" class="control-label">nome</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                                <br>
                        
                            <!-------------------------data da audiência------------------------------->
                            <div class="form-group">
                                <label for="preco" class="control-label">data</label>
                                <input type="date" id="data" name="data" lang="en" step="0.25" class="form-control">
                                <!---<input type="number" name="preco" id="preco" onchange="setTwoNumberDecimal" min="0" max="100" step="0.25" value="0.00" />-->
                            </div><!-----verificar o lançamento dos valores no banco de dados----->

                            <!-------------------------Hora da audiência------------------------------->
                            <div class="form-group">
                                <label for="detalhes" class="control-label">hora</label>
                                <input type="time" name="hora" id="hora" class="form-control">
                            </div>

                            <!------------------------butão do modal-------------------------->
                            <div class="modal-footer col-12" >
                            
                                    <!--butão de upload de arquivos pdf-->
                                    <input type="file" id="arquivo" name="arquivo" class="btn btn-success" value="Arquivos">
                                <input type="submit" name="salvar" class="btn btn-primary"  value="Salvar">
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