<?php 

include("conexao.php");

$id = $_POST["id"];
$curso = $_POST["nome_curso"];
$valor = $_POST["valor"];
$area = $_POST["area"];

$sql = "UPDATE cursos SET nome_curso='$curso', valor=$valor, area='$area' Where id=$id";

mysqli_query($conexao, $sql);

header("Location:index.php");

?>