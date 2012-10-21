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
document.cadastro.nome.focus(); 
return false;
}
else
if(document.cadastro.endereco.value=="")
{
alert("O Campo endereço é obrigatório!");
document.cadastro.endereco.focus(); 
return false;
}
else
if(document.cadastro.cidade.value=="")
{
alert("O Campo Cidade é obrigatório!");
document.cadastro.cidade.focus(); 
return false;
}
else
if(document.cadastro.estado.value=="")
{
alert("O Campo Estado é obrigatório!");
document.cadastro.estado.focus(); 
return false;
}
else
if(document.cadastro.bairro.value=="")
{
alert("O Campo Bairro é obrigatório!");
document.cadastro.bairro.focus(); 
return false;
}
else
if(document.cadastro.pais.value=="")
{
alert("O Campo país é obrigatório!");
document.cadastro.pais.focus(); 
return false;
}
else
if(document.cadaastro.rg.value==""){
document.cadastro.rg.focus();
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
} 
function mascara2(src, mask){
var i = src.value.length;
var saida = mask.substring(1,2);
var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
{
src.value += texto.substring(0,1);
}
} 
function verificarCPF(c){
	do{
	c=c.replace(".","");
	}while(c.indexOf(".")>0)
	
	do{
	c=c.replace("-","");
	}while(c.indexOf("-")>0)
    var i;
    s = c;
	if((c==99999999999) || (c==88888888888) || (c==77777777777) || (c==66666666666) || (c==555555555555) || (c==44444444444) || (c==33333333333) || 			    (c==222222222222) || (c==11111111111) || (c==00000000000)){
	alert("O numero de CPF:"+c+" é inválido");
	document.cadastro.cpf.style.borderColor = "#ff0000";
	document.cadastro.cpf.focus();
	return false;
	}
	
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
	
 
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
		document.cadastro.cpf.focus();
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
		document.cadastro.cpf.focus();
        return false;
    }
 
    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
		document.cadastro.cpf.focus();
        return false;
    }
    if (!v) {
	document.cadastro.cpf.style.borderColor="#00ff99";
        
    }
}
</script>

<link href="config.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1 align="center">Cadastro de Funcionario</h1>
<?php
include 'menu.php';
?>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php"  onSubmit="return validaCampo(); return false;">
  <table width="625" border="0">
    <tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
      
      <tr>
     <td>Endereço:</td>
      <td><input name="endereco" type="text" id="endereco" size="70" maxlength="70" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Cidade:</td>
      <td><input name="cidade" type="text" id="cidade" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Estado:</td>
      <td><select name="estado" id="estado">
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
      <td><input name="bairro" type="text" id="bairro" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
    <td>Telefone</td>
    <td><input type="text" name="telefone" onkeypress="mascara2(this,'(##)####-####');" id="telefone"  maxlength="13"</td>
    </tr>
    <tr>
      <td>País:</td>
      <td><input name="pais" type="text" id="pais" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
      <tr>
          <td>CPF</td>
         <td> <input  type="text" name="cpf" onblur="return verificarCPF(this.value)" onkeypress="mascara(this,'###.###.###-##');"  maxlength="14" />
         <span class="style1">*</span></td>
         </tr>
         <tr>
          <td>RG</td>
         <td> <input type="text" name="rg" onKeyPress="mascara(this, '#.###.###-#');" maxlength="11" />
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
