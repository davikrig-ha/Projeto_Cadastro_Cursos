<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php e mysql</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form method="post" action="cadastrar.php">
    <input type="text" name="curso" placeholder="Curso" class="form-control">
    <input type="number" name="valor" placeholder="valor" class="form-control">
    <select name="area" class="form-control">
       <option>Desenvolvimento</option>
       <option>Design Gráfico</option>
       <option>Marketing</option>
       <option>Engenharia</option>
       <option>Banco de dados</option>
    </select>

        <input type="submit" value="Cadastrar" class="btn btn-outline-dark">
    </form>

    <table class="table">
        <tr>
            <td>Curso</td>
            <td>Valor</td>
            <td>Área</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>

        <?php
        //conexao com banco
        include("conexao.php");

        //sql
        $sql = "SELECT * FROM cursos";

        //executar
        $resultados = mysqli_query($conexao, $sql);

        while($indice = mysqli_fetch_assoc($resultados)){
           echo "<tr>";
           echo "<td>".$indice["nome_curso"]."</td>";
           echo "<td>".$indice["valor"]."</td>";
           echo "<td>".$indice["area"]."</td>";
           echo "<td><a href='formulario_editar.php?id=".$indice["id"]."'>Editar</a></td>";
           echo "<td><a href='excluir.php?id=".$indice["id"]."'>Excluir</a></td>";
           echo "<tr>";
        }



 
        ?>
    </table>
    
</body>
</html>


