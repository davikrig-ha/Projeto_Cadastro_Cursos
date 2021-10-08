<?php 


include("conexao.php");

$id = $_GET["id"];


$sql = "SELECT * from cursos WHERE id = $id";

$resultdo = mysqli_query($conexao, $sql);

while($indice = mysqli_fetch_assoc($resultdo)){
    $curso = $indice["nome_curso"];
    $valor = $indice["valor"];
    $area = $indice["area"];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<form method="post" action="editar.php">
<input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="text" name="curso" placeholder="Curso" value="<?php echo $curso ?>" class="form-control">
    <input type="number" name="valor" placeholder="valor" value="<?php echo $valor ?>" class="form-control">
    <select name="area" class="form-control">
        <option> <?php echo $area ?> </option>
       <option>Desenvolvimento</option>
       <option>Design Gráfico</option>
       <option>Marketing</option>
       <option>Engenharia</option>
       <option>Banco de dados</option>
    </select>

        <input type="submit" value="Editar" class="btn btn-primary">
    </form>
    
</body>
</html>