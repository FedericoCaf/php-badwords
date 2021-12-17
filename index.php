<?php 

$badword = $_GET['badword'];
$paragrafo = 'Il Napoli ha perso, ' . $badword . '!';
$paragrafoCensurato = str_replace($badword, '***', $paragrafo);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<body>

<h1> <?php echo $paragrafo; ?> </h1>
<p> La lunghezza della frase è di
 <strong>
   <?php echo strlen($paragrafo) . ' ';?>
</strong>
 caratteri </p>

 <h2>
  <?php echo $paragrafoCensurato ?>
  </h2>

  <p> La lunghezza della frase censurata è di
 <strong>
   <?php echo strlen($paragrafoCensurato) . ' ';?>
</strong>
 caratteri </p>

  
</body>
</html>