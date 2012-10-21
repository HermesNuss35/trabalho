<?php
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$cidade=$_POST['cidade'];
$telefone=$_POST['telefone'];
if(isset($_POST['estado'])){
	$estado=$_POST['estado'];
}else{
?>
<script type="text/javascript">
alert('Você deve seecionar o estado');
window.location='formulario.php';
</script>
<?php
}
$bairro=$_POST['bairro'];
$pais=$_POST['pais'];
$cpf=$_POST['cpf'];
$rg=$_POST['rg'];
include 'conecta.php';

$sql="INSERT INTO funcionario(id,nome,endereco,cidade,telefone,estado,bairro,pais,cpf,rg) VALUES(null,'$nome','$endereco','$cidade','$telefone','$estado','$bairro','$pais','$cpf','$rg')";

$resultado = mysql_query($sql);

if($resultado === false){
echo mysql_error();
echo 'Não foi possivel Cadastrar o funcionário';
?>
<a href="consulta.php">Consulta</a>
<?php
}else{
echo 'cadastro realizado';
header("Location:consulta.php");
}
?>
