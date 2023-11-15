<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas2</title>
</head>
<body>
    <h3>tugas1</h3>
    <?php 
    $a = 2;
    while($a <= 20){
        echo "$a<br>";
        $a+=2;
    }
     ?>
     <br><br><br>
     <!-- Ganjil -->
     <?php
     for ($i=1; $i <= 20; $i++ ) {
        if($i % 2 ==1 ) {
            echo "<h1> Ganjil</h1>";
        }else{
            echo $i;
        }
     }
      ?>

</body>
</html>