<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <p>Кількість чаю:</p>
    <input type="range" name="water" value="0" min="50" max="1000" step="50" oninput="this.nextElementSibling.value = this.value">
    <input type="text" value="0" oninput="this.previousElementSibling.value = this.value">
    <p>Кількість цукру:</p>
    <input type="range" name="sugar" value="0" min="0" max="10" step="0.5" oninput="this.nextElementSibling.value = this.value">
    <input   type="text" value="0" oninput="this.previousElementSibling.value = this.value"><br>
    <p>Обери розмiр<br>
     <select name="size" size="3" multiple="multiple">
     <option value="small">Маленька</option>
     <option value="medium">Середня</option>
    <option value="big">Велика</option>
    </select></p>
    <button style="display:flex ;" type="submit" value="send">Замовити</button>
</body>
</html>
<?php
  $water = $_POST["water"];
  $sugar= $_POST["sugar"];
  $size = $_POST["size"];
  
  $result = "<ul?>
            <ul>Ваше замовлення</ul>
            <li>Розмiр чашки $size </li>
            <li> Об'ємом: $water мл.</li>
            <li>Цукру: $sugar л.</li>
            </ul>";
            echo $result;


            if ($size == "small" ) {
                $size = 150;
            }
            else if ($size == "medium" ) {
                $size = 250;
            }
            else if ($size == "big" ) {
                $size = 350;
            }
            echo ("<h3>Процес </h3>");
                    while($water > 0){   
                    for ($i = 50; $i <= $size && $water > 0; $i += 50, $water -= 50) {
                        echo("<p>Налято ".$i." мл.</p>");
                    }
                   
                    if($water >= 0) {
                        echo("<h5>Беремо наступну чашку</h5>");
                    }
                }

?>