<?php 

include("conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM cursos WHERE id = $id";

mysqli_query($conexao, $sql);

header("location:index.php");




?>