
<?php 
session_start();

echo "<html><head><title>Área do Usuário</title>\n";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
echo "<link rel=stylesheet href=\"../Css.php\" type=\"text/css\">\n";

echo "<script language=\"javascript\" src=\"../reload.js\"></script>\n";
echo "</head><body onload=\"Comecar()\" onunload=\"Parar()\"><table border=1 width=\"100%\">\n";
echo "<tr><td nowrap bgcolor=\"#aaaaee\" align=center>";
echo "<img src=\"../images/smallballoontransp.png\" alt=\"\">";
echo "<font color=\"#000000\">Imagem</font>";
echo "</td><td bgcolor=\"#aaaaee\" width=\"99%\">\n";
echo "Usuário: " . $_SESSION['usuario']['nome'] . "\n";


echo "</table>\n";
echo "<table border=0 width=\"100%\" align=center>\n";
echo " <tr>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=verCad.php>Ver Dados Cadastrais</a></td>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=alterarCad.php>Alterar Dados Cadastrais</a></td>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=verAtivi.php>Ver Atividades Contratadas </a></td>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=histoVisitas.php>Histórico de Visitas</a></td>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=../index.php?logout=true>Sair</a></td>\n";
echo " </tr>\n"; 
echo "</table>\n";
?>

<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>

<body>
<table width="100%" height="100%" border="0">
  		<tr align="center" valign="middle"> 
    		<td>
<form method="POST" action="alterarCad.php">
<div class="body"></div>
		
        
        <div style="display:inline; text-align:left; margin:-98px;"> 
        <label>Nome Completo:</label><br />
         <?php
		        echo ("<input type='text' value = " . $_SESSION['usuario']['nome'] . " name='nome' id='nome' style=' height:20px; width:230px'><br><br>");
         ?>
        </div>
        
        <div style="display:inline; text-align:left; margin:-52px;">
        <label>Data de Nascimento:</label><br />
        
        <input type="text" placeholder = 'dd/mm/aaaa' value = <?php echo ($_SESSION['usuario']['data']) ?> name='data_nascimento' id='data_nascimento' style=' height:20px; width:230px' maxlength='10' OnKeyPress="formatar('##/##/####', this)" ><br><br>
        
        
		    </div>
        
        
        <div style="display:inline; text-align:left; margin:-185px;">
        <label>Sexo:</label><br />
		<select name="sexo" id="sexo" style=" height:20px; width:230px">
     			<option <?php if($_SESSION['usuario']['sexo'] == "feminino") echo "selected"; ?> value='feminino'>Feminino</option>
  			  <option <?php if($_SESSION['usuario']['sexo'] == "masculino") echo "selected"; ?> value='masculino'>Masculino</option>
   
		</select><br><br>
       	</div>
       
       	<div style="display:inline; text-align:left; margin:-205px;"> 
        <label>RG:</label><br>
		<input type="text" name="rg" value = <?php echo ($_SESSION['usuario']['rg']) ?>  placeholder = "00.000.000-0" id="rg" style=" height:20px; width:230px" maxlength="12" OnKeyPress="formatar('##.###.###-#', this)" ><br><br>
        </div>
        
         <div style="display:inline; text-align:left; margin:-113px;">
        <label>Mensalidade:</label><br />
		<select name="mensalidade" id="mensalidade" style=" height:20px; width:230px">
            <option <?php if($_SESSION['usuario']['mensalidade'] == "30") echo "selected"; ?> value="30">R$ 30,00</option>
  			    <option <?php if($_SESSION['usuario']['mensalidade'] == "40") echo "selected"; ?> value="40">R$ 40,00</option>
            <option <?php if($_SESSION['usuario']['mensalidade'] == "45") echo "selected"; ?> value="45">R$ 45,00</option>
            <option <?php if($_SESSION['usuario']['mensalidade'] == "140") echo "selected"; ?> value="140">R$ 140,00</option>
		</select><br><br>
       	</div>
        
        <div style="display:inline; text-align:left; margin:-128px;"> 
        <label>Dependentes:</label><br>
		<input type="text" value = "" name="dependentes[]" id="0" style=" height:20px; width:230px"><br>     
<input type='hidden' name='hidden' id='hidden' style=" height:20px; width:230px"><br>
        </div>
        
        <div style="display:inline; text-align:left; margin:-158px;"> 
        <label >Usuário:</label><br />
		<input type="text" value = <?php echo ($_SESSION['usuario']['login']) ?> name="login" id="login" style=" height:20px; width:230px"><br><br>
        </div>
        
        <div style="display:inline; text-align:left; margin:-120px;"> 
        <label>Senha Atual:</label><br />
		<input type="password" value = "" name="senha" id="senha" style=" height:20px; width:230px"><br><br>
        </div>

         <div style="display:inline; text-align:left; margin:-125px;"> 
        <label>Nova Senha:</label><br />
		<input type="password" placeholder = "******" name="senha" id="senha" style=" height:20px; width:230px"><br><br>
        </div>
        
		<input type="submit" value="Alterar" id="alterar" name="alterar" style=" height:20px; width:230px"><br><br>
        
				
</div>
			
</form>
			</td>
  		</tr>
</table>
</body>