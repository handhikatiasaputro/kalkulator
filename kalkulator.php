<?php

$bilangan_1 = $_GET['bilangan_1'];
$bilangan_2= $_GET['bilangan_2'];
$operator= $_GET['operator'];

if($operator == '+')
{
    $result = $bilangan_1 + $bilangan_2;
}
elseif($operator == '-')
{
    $result = $bilangan_1 - $bilangan_2;
}
elseif($operator == '*')
{
    $result = $bilangan_1 * $bilangan_2;
}
elseif($operator == '/')
{
    $result = $bilangan_1 / $bilangan_2;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="kalku">
            <h1>Kalkulator</h1>
            <form action="" >
                <div>
                     <input type="number" name="bilangan_1" placeholder="Masukan Bilangan Satu" class="card1">
                </div>
                <div>
                     <input type="number" name="bilangan_2" placeholder="Masukan Bilangan Dua" class="card1">
                </div>
                <select name="operator" class="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>                 
                </select>
                <button type="submit" class="hitung">Hitung</button>
            </form>
            <div>
                <input type="text" name="angka" value="<?php echo $result ?>"  class="card2">
           </div>
        </div>
        <div class="clear-boath"></div>
    </div>
</body>
</html>