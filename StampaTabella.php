<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa Tabella</title>
</head>
<body>
    <?php
      function stampaTabella($m, $n){
         echo "<table>";
          for ($i = 0; $i < $m; $i++){
            echo "<tr>";
             for ($j=0; $j < $n; $j++){
                echo "<td>" . $i . "," . $j . "</td>";
             }
          }

          echo "</table>";
      }
    ?>
    
</body>
</html>