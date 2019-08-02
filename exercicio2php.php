<!DOCTYPE html>
<html>
    <link href="cor.css" rel="stylesheet" type="text/css">



<head>

</head>

<body>
      <a>amostra de cor</a>
    <div class="cor">
	
<h1> Cor selecionada: </h1><br>

<?php 
    $r= $_POST["R"];
    $g= $_POST["G"];
    $b= $_POST["B"];
    
    if ($r == null)
        {$r=0;}
    if ($g == null)
    {$g=0;}
    if ($b == null)
    {$b=0;}
    
    
    
    ?>

<p>
    R: <?php echo $r;?>
    G: <?php echo $g;?>
    B: <?php echo $b;?>
</p>

<div style="background-color: rgb(<?php print "$r, $g, $b";?>); position:relative; height:150px; align:center;"></div> 

</div>

   

</body>
</html>

