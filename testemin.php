<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<title>X-GAMES</title>
<link rel="stylesheet" type="text/css" href="Estilo/carrinho.css" />
</head>
<body>
<nav id="menu">
<div class="menu">
  <ul class="menu-list">
    <li><a href="X Games.html">Home</a></li>
	<li><a href="Sobre.html">Sobre</a></li>
    <li>
      <a href="#">Modalidades</a>
       <ul class="sub-menu">
        <li><a href="skate.html">Skateboarding</a></li>
        <li><a href="motocross.html">Motocross</a></li>
        <li><a href="bmx.html">BMX</a></li>
        <li><a href="snow.html">Snowboarding</a></li>
		<li><a href="esqui.html">Esqui</a></li>
		<li><a href="Surf.html">Surf</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Tickets</a>
       <ul class="sub-menu">
        <li><a href="Aspen.html">Aspen</a></li>
        <li><a href="Min.html">Minneapolis</a></li>
        <li><a href="Nor.html">Norway</a></li>
        <li><a href="#">Sydney</a></li>
      </ul>
   </ul>
</div>
</nav>
<div id="principal">


<div style="
 display: flex;
 align-items: center;
 justify-content: center;
 flex-direction: column;
">
<form action="teste.php"method="post"></form>
<img src="carrinho.png">

<?php
$quant=$_POST["quant"];
$tipo=$_POST["tipo"];
if ($tipo=="Camarote"){
	$total=$quant*220;
echo "O valor total da compra é: R$ ".$total;
}
elseif($tipo=="Arquibancada"){
	$total=$quant*150;
echo "O valor total da compra é: R$ ".$total;
}
elseif ($tipo=="Acesso"){
	$total=$quant*450;
echo "O valor total da compra é: R$ ".$total;
}
else{
	echo "erro";
}
?>
<br> Deseja finalizar a compra? </br>
<p><form action="fim.html"/><input type="submit" value="Finalizar compra"/></form> <form action="Min.html"/><input type="submit" value="Não finalizar compra"/></form></p>
</div>
</body>
</html>