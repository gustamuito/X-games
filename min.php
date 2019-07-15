<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<title>X-GAMES</title>
<link rel="stylesheet" type="text/css" href="Estilo/Estilo.css" />.
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
        <li><a href="#">Minneapolis</a></li>
        <li><a href="Nor.html">Norway</a></li>
        <li><a href="Sydn.html">Sydney</a></li>
      </ul>
   </ul>
</div>
</nav>
<div id="principal">
<p> Está chegando o tão e aguardado evento de esportes radicais do mundo, X GAMES Minneapolis, garante seus ingressos! </p>
<p>Arquibancada normal: 150,00 </p>
<p> Camarote:R$220,00</p>
<p> Camarote + Acesso a área dos atletas: R$ 450,00 </p>
<form action="teste.php"method="post"><input type="text" placeholder="Numero de ingressos: "name="quant"/><form action="teste.php"method="post"><input type="text" placeholder="Tipo de Ingresso: "name="quant"/><input type="submit" value="Comprar"/> </form>
<div style="
 display: flex;
 align-items: center;
 justify-content: center;
 flex-direction:column;
">
<form action="min.php"method="post"></form>
<?php
$quant=$_POST["quant"];
$tipo=$_POST["tipo"];
if ($tipo=="Arquibancada"){
$total=$quant*150;
echo "O valor total da compra é: R$ ".$total; 
}elseif ($tipo=="camarote"){
	$total=$quant*220;
	echo "O valor total da compra é: R$ ".$total; 
}elseif($tipo=="camarote2"){
	$total=$quant*450;
	echo "O valor total da compra é: R$ ".$total;
}else{
	echo "ERRO!!";
}
?>
<img src="minneapolis.jpg">
</div>
</body>
</html>
