<?php  

require_once __DIR__ . ('/fitness.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Negozio</title>
</head>
<body>
  <h1>ITEM GENERALE (questa è la classe base NONNO)</h1>
  <?php 
  echo "<h2>" . $item->name . "</h2>" . " : " . "<h3>" . $item->price . "</h3>"
  ?>
  <h1>ITEM GENERALE + TECNOLOGY (qui ho annidato PADRE)</h1>
  <?php 
  echo "<h2>" . $item2->name . "</h2>" . " : " . "<h3>" . $item2->price . "</h3>" .  " - " . "<h3>" . $item2->brand . "</h3>"
  ?>
  <h1>ITEM GENERALE + FITNESS (qui ho annidato ancora FIGLIO) </h1>
  <?php 
  echo "<h2>" . $item3->name . "</h2>" . " : " . "<h3>" . $item3->price . "</h3>" . " - " . "<h3>" . $item3->brand . "</h3>" .  " - "  . "<h3>" . $item3->sport . "</h3>"
  ?>

</body>
</html>