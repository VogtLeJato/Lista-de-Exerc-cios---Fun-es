<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<link rel="stylesheet" href="cor.css">

</head>

<body>

<h1>Resultado da edição de Strings: </h1>

<?php
$operacao= $_POST["operacao"];
$texto= $_POST["texto"];
if ($operacao == null)
    {$textoeditado= $texto;}
?>

<?php  if ($operacao=="tamanho")
        {$textoeditado= strlen($texto);
            if ($textoeditado==1)
                {$textoeditado.= " caractere(incluido espaços)";}
            else {$textoeditado.= " caracteres(incluido espaços)";}}
  elseif ($operacao=="inverter")
        {$textoeditado= strrev($texto);}
  elseif ($operacao=="maiusculas")
        {$textoeditado= strtoupper($texto);}
  elseif ($operacao=="minusculas")
        {$textoeditado= strtolower($texto);}
  elseif ($operacao=="primeiramaiuscula")
        {$textoeditado= ucwords($texto);}
?>

<p> O resultado será:<br> <?php echo $textoeditado ?></p>

</body>

</html>
