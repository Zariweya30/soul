<!DOCTYPE html>
<html>
<head>
     <title></title>

</head>
<body>
<?php

$s = "sql10.freesqldatabase.com";
$bd = "sql10365446";
$u = "sql10365446";
$p = "mJyb9quYye";

$conex=new mysqli($s,$u,$p,$bd);
$consulta = "SELECT * FROM clientes";
$resultado =mysqli_query($conex, $consulta);

if ($resultado) {
     while($row = $resultado->fetch_array()){
          $ord = $row['orden'];
          $lin = $row['link'];
          ?>
          <div>
               <h2><?php echo $ord;?></h2>
               <h2><?php echo $lin;?></h2>
          </div>
          <?php 

     }
}

?>
</body>
</html>
