<!DOCTYPE html>
<html lang="fr">
  
<head>
  <title>formulaire 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

 <?php

echo "<table>";

for($x = 0; $x <=10 ; $x++) {

  $res=$x*8;
  echo "<tr><td> 8 x ".$x."=</td><td>".$res."</td></tr>";
}
echo "</table>";
?>
<body>
  
</body>
  
  </html>