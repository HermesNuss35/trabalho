<?php
$id=$_GET['id'];
$sql="select * from funcionario where id=$id";
include 'conecta.php';
$resultado=mysql_query($sql);
$linha=mysql_fetch_assoc($resultado);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CADASTRO DE CLIENTES COM BANCO DE DADOS E PHP</title>

<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.nome.value=="")
{
alert("O Campo nome é obrigatório!");
return false;
}
else
if(document.cadastro.email.value=="")
{
alert("O Campo email é obrigatório!");
return false;
}
else
if(document.cadastro.endereco.value=="")
{
alert("O Campo endereço é obrigatório!");
return false;
}
else
if(document.cadastro.cidade.value=="")
{
alert("O Campo Cidade é obrigatório!");
return false;
}
else
if(document.cadastro.estado.value=="")
{
alert("O Campo Estado é obrigatório!");
return false;
}
else
if(document.cadastro.bairro.value=="")
{
alert("O Campo Bairro é obrigatório!");
return false;
}
else
if(document.cadastro.pais.value=="")
{
alert("O Campo país é obrigatório!");
return false;
}
else
if(document.cadastro.login.value=="")
{
alert("O Campo Login é obrigatório!");
return false;
}
else
if(document.cadastro.senha.value=="")
{
alert("Digite uma senha!");
return false;
}
else
return true;
}
<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script>
<script>
function mascara(src, mask){
var i = src.value.length;
var saida = mask.substring(0,1);
var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
{
src.value += texto.substring(0,1);
}
function mascara(src, mask){
var i = src.value.length;
var saida = mask.substring(1,2);
var texto = mask.substring(i)
if (texto.substring(1,2) != saida)
{
src.value += texto.substring(0,1);
}
} 
</script>
<link href="config.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include 'menu.php';
?>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php"  onSubmit="return validaCampo(); return false;">
  <table width="625" border="0">
    <tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" value="<?php echo $linha['nome']?>" id="nome" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
      <tr>
    <td>Telefone</td>
    <td><input type="text" name="telefone" id="telefone" value="<?php echo $linha['telefone']?>" size="70" maxlength="60"</td>
    </tr>
      <tr>
     <td>Endereço:</td>
      <td><input name="endereco" type="text" id="endereco" value="<?php echo $linha['endereco']?>" size="70" maxlength="70" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Cidade:</td>
      <td><input name="cidade" type="text" value="<?php echo $linha['cidade']?>" id="cidade" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Estado:</td>
      <td><select name="estado" value="<?php echo $linha['estado']?>" id="estado">
        <option>Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
          </select>
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Bairro:</td>
      <td><input name="bairro" type="text" value="<?php echo $linha['bairro']?>" id="bairro" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>País:</td>
      <td><input name="pais" type="text" value="<?php echo $linha['pais']?>" id="pais" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
      <tr>
          <td>CPF</td>
         <td> <input  type="text" name="cpf" value="<?php echo $linha['cpf']?>" onKeyPress="mascara(this, '###.###.###-##')" maxlength="14" />
         <span class="style1">*</span></td>
         </tr>
         <tr>
          <td>RG</td>
         <td> <input type="text" name="rg" value="<?php echo $linha['rg']?>" onKeyPress="mascara(this, '#.###.###-#')" maxlength="11" />
         <span class="style1">*</span></td>
    </tr>
    <tr>

</tr>
    </tr>
    <tr>
      <td colspan="2"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Concluir!" /> 
 
          <input name="limpar" type="reset" id="limpar" value="Limpar !" />        
 
          <span class="style1">* Campos com * são obrigatórios!</span></p>
      <p>  </p></td>
    </tr>
  </table>
</form>
</body>
</html>
