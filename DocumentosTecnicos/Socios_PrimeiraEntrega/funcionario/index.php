
<?php 
session_start();

echo "<html><head><title>Área do Funcionário</title>\n";
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