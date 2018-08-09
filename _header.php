<?php
if($_SERVER['SERVER_NAME'] == 'localhost') {
   header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
   header('Cache-Control: no-store, no-cache, must-revalidate');
   header('Cache-Control: post-check=0, pre-check=0', FALSE);
   header('Pragma: no-cache');
}
?>
<!DOCTYPE html>
<head>
	<title>Salve o Mundão</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/global.css">
</head>
<body>


<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="index.php#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SOBRE</a>
    <a href="index.php#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SHOWS</a>
    <a href="index.php#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTATOS</a>
	<a href="listartigos.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MÚSICAS</a>
   
   
  </div>
</div>


<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="index.php#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SOBRE</a>
  <a href="index.php#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SHOWS</a>
  <a href="index.php#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTATOS</a>
  <a href="listartigos.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MÚSICAS</a>
</div>
	</nav>
	<content>