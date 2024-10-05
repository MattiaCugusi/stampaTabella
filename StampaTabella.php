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
         echo "<table style = 'border-collapse: collapse; border: 1px solid black'>";
          for ($i = 0; $i < $m; $i++){
            echo "<tr>";
             for ($j=0; $j < $n; $j++){
                echo "<td style= 'border: 1px solid black; padding: 10px 10px 10px 10px'>" . $i . "," . $j . "</td>";
             }
             echo "</tr>";
          }

          echo "</table>";
      }

      $righe = rand(1,10);
      $colonne = rand(1,10);

      stampaTabella($righe,$colonne);

    ?>
    
</body>
</html>