<?php

    session_start();


    $output = "";
        //while(isset($_POST['salvar'])){
            
            if(isset($_POST['salvar'])){

            $envolvido = $_POST['flexRadioDefault'];
            $nomeEnvolvido = $_POST['nameEnvolv'];
            $genero = $_POST['sexo'];
            $dataNascimento = $_POST['dataNascimento'];
            $endereco = $_POST['endereco'];
            $numeroResid = $_POST['numeroResid'];
            $mae = $_POST['mae'];
            $cidade = $_POST['municipioResid'];

            

            //$formEnvolvido = [
               // $envolvido
            // $nomeEnvolvido,
            // $genero,
            // $dataNascimento,
            // $endereco,
            // $numeroResid,
            // $mae,
            // $cidade
            //];
            if($envolvido = [1]){
                $envolvido = "Vitima";
            }else{
                $envolvido = "Autor";
            }

            
            

                $output .= "<div class='col-mb-3'>
                            <input type='hidden' name='nome' value='$envolvido' id='nome'>
                            <label for='recipient-name' class='col-form-label'> ".$envolvido."</label>
                            </div>";

            
                    
                }

            //

        //}
        $output = $_SESSION['out'];
        header('Location:../boletimOcorrencia/formBoletim.php');


        /*<div class="mb-3">
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
        </div>*/


?>