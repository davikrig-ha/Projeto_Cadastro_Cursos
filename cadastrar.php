<?php 

//conexao

include("conexao.php");

//variaveis

$curso = $_POST["curso"];
$valor = $_POST["valor"];
$area = $_POST["area"];

//print test
echo $curso."<hr>";
echo $valor."<hr>";
echo $area."<hr>";

//conexao com banco 

$sql = "INSERT INTO cursos values(null, '$curso', $valor, '$area')";

//executar conexao
mysqli_query($conexao, $sql);


//recarregamento automatico da pagina
header("location:index.php");

?>