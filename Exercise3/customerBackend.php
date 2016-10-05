<?php
echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';
echo "<title>Pokemart Receipt</title>";

$pokeball  = $_POST["pokeball"];
$potion    = $_POST["potion"];
$rareCandy = $_POST["rareCandy"];
$shipping  = $_POST["shipping"];
$email  = $_POST["email"];
$password  = $_POST["password"];
$shippingType = "";
$total = ($pokeball*25) + ($potion*50) + ($rareCandy*100) + ($shipping);

if($shipping == 0){
    $shippingType = "Free 7-day";
} else if ($shipping == 5){
    $shippingType = "3-day";
} else if ($shipping == 50){
    $shippingType = "Overnight";
}




echo "<br><br><br><br><br><br><br><br><br>";


echo"<center>";

echo"<p> Welcome new user!! </p>";
echo"<p> The email you registered under is: $email";
echo"<p> Your password is: $password";
echo"<br><br>";

echo"<table border='thick' style='background-color:white'>";

echo"<tr>";
echo"<td> <img class='item' src='seal.png'> </td>";
echo"<td><span class='itemName'> Quantity </span></td>";
echo"<td><span class='itemName'> Cost Per Item </span></td>";
echo"<td><span class='itemName'> Sub Total </span></tb>";
echo"</tr>";

echo"<tr>";
echo"<td><span class='itemName'> Pokeball </span></td>";
echo"<td><span class='itemName'> $pokeball </span></td>";
echo"<td><span class='itemName'> $25.00 </span></tb>";
$pokeball = $pokeball*25;
echo"<td><span class='itemName'> $$pokeball </span></tb>";
echo"</tr>";

echo"<tr>";
echo"<td><span class='itemName'> Potion </span></td>";
echo"<td><span class='itemName'> $potion </span></td>";
echo"<td><span class='itemName'> $50.00 </span></tb>";
$potion = $potion*50;
echo"<td><span class='itemName'> $$potion </span></tb>";
echo"</tr>";

echo"<tr>";
echo"<td><span class='itemName'> Rare Candy </span></td>";
echo"<td><span class='itemName'> $rareCandy </span></td>";
echo"<td><span class='itemName'> $100.00 </span></tb>";
$rareCandy = $rareCandy*100;
echo"<td><span class='itemName'> $$rareCandy </span></tb>";
echo"</tr>";

echo"<tr>";
echo"<td><span class='itemName'> Shipping </span></td>";
echo"<td colspan='2'><span class='itemName'> $shippingType </span></td>";
echo"<td><span class='itemName'> $$shipping </span></tb>";
echo"</tr>";

echo"<tr>";
echo"<td class='total' colspan='3'><span class='itemName'> Total Cost </span></td>";
echo"<td><span class='itemName'> $$total </span></td>";
echo"</tr>";


echo"</table>";


echo"</center>";

?>