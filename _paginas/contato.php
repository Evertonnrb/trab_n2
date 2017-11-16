<?php
     include '../classes/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
    <link rel="stylesheet" href="../_css/estilos.css">
    
</head>
<body>
        <div class="menu_container">
            <div class="menu">     
            <ul>   
                <li><a href="../home.html">Home</a></li>
                <li><a href="cadastro-alunos.php">Cadastro de alunos</a></li>        
            </ul>    
        </div>
     </div>

     <h2>Informações do aluno</h2>
     

     <?php
        $query = "SELECT * FROM tb_aluno";
        $resultado = mysqli_query($con,$query);
        while($linha = mysql_result($resultado)){
            echo "<div id='linha'>";
                echo "<div class='dc1'>".$linha['co_aluno']."</div>";
                echo "<div class='dc2'>".$linha['cpf_aluno']."</div>";
                echo "<div class='dc3'>".$linha['endereco']."</div>";
                echo "<div class='dc3'>".$linha['co_municipio']."</div>";
                echo "<div class='dc3'>".$linha['dt_inclusao']."</div>";
                echo "<div class='dc3'>".$linha['turma']."</div>";
            echo "</div>";
            
        }
    ?>

    <div class="rodape">
            <p>Tecnologia de Análise e Desenvolvimento de Sistemas</p>
            <p>Desenvolvido por Everton Ribeiro</p>
            <p>RA: 3435746757</p>
        </div>
</body>
</html>