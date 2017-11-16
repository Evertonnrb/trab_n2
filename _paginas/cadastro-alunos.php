<?php
  include '../classes/conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de alunos</title>
    <link rel="shortcut icon" href="../_img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../_css/estilos.css">
    <script src="../_js/script.js"></script>
</head>
<body>
     <div class="menu_container">
        <div class="menu">
            <ul>
                <li><a href="../home.html">Home</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </div>
    </div>

    <div class="formulario">
            <form  action="../_phpMySQl/addAluno.php" method="post" name="formulario" onsubmit="return validaForm(this);">
              <label for="nome">Nome:</label>
              <input type="text" placeholder="Nome aluno" id="nome" name="nome" required onblur="return campoObg()">
              <label for="sobrenonome">Sobrenome:</label>
              <input type="text" placeholder="Sobrenome" id="sobrenome" name="sobrenome" required>
              <label for="cpf">Cpf:</label>
              <input type="text" placeholder="CPF" id="cpf" name="cpf" required onblur="return validaCpf()">              
              <label for="endereco">Endereço:</label>
              <input type="text" placeholder="endereço" id="endereco" name="endereco" required>
              <label for="uf">UF</label>
              <select name="tabela_uf" id="tabela_uf" >
                  <!--Include php-->
                  <?php
                    $consulta = mysqli_query("SELECT FROM tb_uf ORDER BY sg_uf ASC");

                  ?>
              </select>
              <label for="Cidade">Cidade</label>
              <select name="tabela_cidade" id="tabela_cidade">
                  <!--Include php-->
                  
              </select>
              <label for="uf">Turma</label>
              <select name="tabela_turma" id="tabela_turma" >
                  <!--Include php-->
              </select>
              <input type="submit" value="Salvar" class="btn"> 
                  
            </form>
    </div>


    <div class="rodape">
            <p>Tecnologia de Análise e Desenvolvimento de Sistemas</p>
            <p>Desenvolvido por Everton Ribeiro</p>
            <p>RA: 3435746757</p>
        </div>
</body>
</html>