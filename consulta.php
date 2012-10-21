<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="config.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1 align="center">Lista de Funcionarios</h1>

<?php include 'menu.php'; ?>

<table border="1" class="bordatabela">
  <tr>
    <td>nome</td>
    <td>endereço</td>
    <td>bairro</td>
    <td>cidade/UF</td>
    <td>Data Nasc</td>
    <td>telefone</td>
    <td>cpf</td>
    <td>rg</td>
    <td>#</td>
    <td>#</td>
  </tr>
<?php
$sql='SELECT * FROM funcionario';
include 'conecta.php';

$resultado=mysql_query($sql);

while($linha = mysql_fetch_assoc($resultado)) { ?>
  <tr>
    <td><?php echo $linha['nome']; ?></td>
    <td><?php echo $linha['endereco']; ?></td>
    <td><?php echo $linha['bairro']; ?></td>
    <td><?php echo $linha['cidade']; ?>/<?php echo $linha['estado']; ?></td>
    <td><?php echo $linha['data']; ?></td>
    <td><?php echo $linha['telefone']; ?></td>
    <td><?php echo $linha['cpf']; ?></td>
    <td><?php echo $linha['rg']; ?></td>
    <td><a href="alterar.php?id=<?php echo $linha['id']; ?>">Editar</a></td>
    <td><a href="excluir.php?id=<?php echo $linha['id']; ?>">Excluir</a></td>
  </tr>
<?php } ?>
</table>
</body>
</html>
