<?php
//include ("../audiencia/lancamento.php");
include ("../conexao/conexao.php");

    //==========================DELETE ARQUIVOS===================================
      
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        //$mysqli->query("DELETE FROM audiencia WHERE id=$id") or die ($mysqli->error());
       $del = "DELETE FROM audiencia WHERE id=$id";
       $resultadoDel = mysqli_query($conn, $del) or die ("Erro ao deletar arquivo!");
       echo  "<script>alert('Arquivo deletado com sucesso!');</script>";
       header('Location:../audiencia/totalAudiencia.php');
    }


?>