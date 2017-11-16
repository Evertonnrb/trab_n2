<?php
        include '../classes/conexao.php';
                
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $uf = $_GET['uf'];
        $cidade = $_GET['cidade'];
        $estado = $_GET['estado'];
        
        $query = "INSERT INTO aluno (nome,sobrenome,cpf,endereco,uf,cidade,estado)
         VALUES ('$nome','$sobrenome','$cpf','$endereco','$uf','$cidade',$estado)";
    
        mysqli_query ($dbc,$query)
        or die("Erro ao salvar registros");
    
        echo "<a href='../home.html'>Aluno cadastrado a lista</a>";
    
        mysqli_close($dbc);
?>