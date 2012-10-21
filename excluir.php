<?php
$id=$_GET['id'];
$sql="delete from funcionario where id=$id";
include 'conecta.php';
$resultado=mysql_query($sql);
?>
<script type="text/javascript">
alert('funcionario excluido');
</script>
<?php 
header("Location:consulta.php");
?>