<?php 
session_start();

echo "<html><head><title>Team's Page</title>\n";
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
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=verCad.php>Dados Cadastrais</a></td>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=alterarCad.php>Alterar Dados</a></td>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=alterarDependentes.php>Alterar Dependentes</a></td>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=verAtivi.php>Atividades Contratadas </a></td>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=histoVisitas.php>Histórico de Visitas</a></td>\n";
echo "  <td align=center width=\"12%\"><a class=menu style=\"font-weight:bold\" href=../index.php?logout=true>Sair</a></td>\n";
echo " </tr>\n"; 
echo "</table>\n";

?>

<body>
  <table width="100%" height="100%" border="0">
        <tr align="center" valign="middle"> 
          <td>
            <form method="POST" action="verCad.php">
      
          
              <div style="display:inline; text-align:left; margin:-98px;"> 
                <label>Nome Completo:</label><br />
                 <?php
                    echo ("<input type='text' value = " . $_SESSION['usuario']['nome'] . " name='nome' id='nome' style=' height:20px; width:230px' readonly><br><br>");
                 ?>
              </div>
              
              <div style="display:inline; text-align:left; margin:-52px;">
                <label>Data de Nascimento:</label><br />        
                <input type="text" placeholder = 'dd/mm/aaaa' value = <?php echo ($_SESSION['usuario']['data']) ?> name='data_nascimento' id='data_nascimento' style=' height:20px; width:230px' maxlength='10' OnKeyPress="formatar('##/##/####', this)" readonly><br><br>     
              </div>
              
              
              <div style="display:inline; text-align:left; margin:-185px;">
                <label>Sexo:</label><br />
                <input type= "text" name="sexo" value= <?php echo ($_SESSION['usuario']['sexo']) ?> id="sexo" style=" height:20px; width:230px" readonly><br><br>        
              </div>
             
              <div style="display:inline; text-align:left; margin:-205px;"> 
                <label>RG:</label><br>
                <input type="text" name="rg" value = <?php echo ($_SESSION['usuario']['rg']) ?>  placeholder = "00.000.000-0" id="rg" style=" height:20px; width:230px" maxlength="12" OnKeyPress="formatar('##.###.###-#', this)" readonly><br><br>
              </div>
              
                            
              <div style="display:inline; text-align:left; margin:-112px;">
                <label>Mensalidade:</label><br />        
                <input type="text" value = <?php echo ("R$" . $_SESSION['usuario']['mensalidade'] . ",00") ?> name='mensalidade' id='mensalidade' style=' height:20px; width:230px' maxlength='10' OnKeyPress="formatar('##/##/####', this)" readonly><br><br>     
              </div>

              <div style="display:inline; text-align:left; margin:-115px;"> 
                <label>Dependentes:</label><br>
                <input type="text" value = "" name="dependentes[]" id="0" style=" height:20px; width:230px"><br>     
                <input type='hidden' name='hidden' id='hidden' style=" height:20px; width:230px"><br>
              </div>
              
              <div style="display:inline; text-align:left; margin:-158px;"> 
                <label >Usuário:</label><br />
                <input type="text" value = <?php echo ($_SESSION['usuario']['login']) ?> name="login" id="login" style=" height:20px; width:230px" readonly><br><br>
              </div>                            
            </form>
          </td>
        </tr>
  </table>
</body>