<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h3>tugas 1 </h3>
    <?php
    $i = 1;
    while($i <= 10 ){
        echo "$i";
        $i++;
    }
    ?>
    <br><br><br><br>
    <h3>tugas 2</h3>
    <?php
    $i = 1;
    while($i <= 10 ){
        echo "$i<br>";
        $i++;
    }
    ?>
    <br><br><br><br>
    <h3>tugas 3</h3>
    <?php
    $i = 1;
    $hasil = 2;
    while($i <= 10 ){
        echo "$i + $i = $hasil<br>";
        $i++;
        $hasil = $i+$i ;
    }
    ?>
          <!-- tugas 3 -->
          <h4>cara yang lebih singkat</h4>
      <?php 
      for($i=1; $i <= 10; $i++){
        echo "$i + $i =". $i + $i ."<br>";
      }
       ?>
</html>