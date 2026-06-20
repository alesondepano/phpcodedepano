<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Length Conversion</h1>

<form method="POST">
    <div class="calculator-section">
        <label>Enter Value:</label>
        <input type="number" name="value" step="0.01"S
            value="<?php echo isset($_POST['value']) ? $_POST['value'] : 1; ?>">
        <button type="submit">ENTER</button>
    </div>
</form>

<?php
$num = isset($_POST['value']) ? floatval($_POST['value']) : 1;

// METRIC
echo "<table>";
echo "<tr class='title-row'><td colspan='6'>METRIC CONVERSIONS</td></tr>";

echo "<tr><td>$num centimetre</td><td>=</td><td>".($num*10)." millimetres</td><td>$num cm</td><td>=</td><td>".($num*10)." mm</td></tr>";

echo "<tr><td>$num decimetre</td><td>=</td><td>".($num*10)." centimetres</td><td>$num dm</td><td>=</td><td>".($num*10)." cm</td></tr>";

echo "<tr><td>$num metre</td><td>=</td><td>".($num*100)." centimetres</td><td>$num m</td><td>=</td><td>".($num*100)." cm</td></tr>";

echo "<tr><td>$num kilometre</td><td>=</td><td>".($num*1000)." metres</td><td>$num km</td><td>=</td><td>".($num*1000)." m</td></tr>";

echo "</table>";


// IMPERIAL
echo "<table>";
echo "<tr class='title-row'><td colspan='6'>IMPERIAL CONVERSIONS</td></tr>";

echo "<tr><td>$num foot</td><td>=</td><td>".($num*12)." inches</td><td>$num ft</td><td>=</td><td>".($num*12)." in</td></tr>";

echo "<tr><td>$num yard</td><td>=</td><td>".($num*3)." feet</td><td>$num yd</td><td>=</td><td>".($num*3)." ft</td></tr>";

echo "<tr><td>$num chain</td><td>=</td><td>".($num*22)." yards</td><td>$num ch</td><td>=</td><td>".($num*22)." yd</td></tr>";

echo "<tr><td>$num furlong</td><td>=</td><td>".($num*220)." yards (or 10 chains)</td><td>$num fur</td><td>=</td><td>".($num*220)." yd (or 10 ch)</td></tr>";

echo "<tr><td>$num mile</td><td>=</td><td>".($num*1760)." yards (or 8 furlongs)</td><td>$num mi</td><td>=</td><td>".($num*1760)." yd (or 8 fur)</td></tr>";

echo "</table>";


// METRIC → IMPERIAL
echo "<table>";
echo "<tr class='title-row'><td colspan='6'>METRIC TO IMPERIAL CONVERSIONS</td></tr>";

echo "<tr><td>$num millimetre</td><td>=</td><td>".number_format($num*0.03937,5)." inches</td><td>$num mm</td><td>=</td><td>".number_format($num*0.03937,5)." in</td></tr>";

echo "<tr><td>$num centimetre</td><td>=</td><td>".number_format($num*0.39370,5)." inches</td><td>$num cm</td><td>=</td><td>".number_format($num*0.39370,5)." in</td></tr>";

echo "<tr><td>$num metre</td><td>=</td><td>".number_format($num*39.37,5)." inches</td><td>$num m</td><td>=</td><td>".number_format($num*39.37,5)." in</td></tr>";

echo "<tr><td>$num metre</td><td>=</td><td>".number_format($num*3.28084,5)." feet</td><td>$num m</td><td>=</td><td>".number_format($num*3.28084,5)." ft</td></tr>";

echo "<tr><td>$num metre</td><td>=</td><td>".number_format($num*1.09361,5)." yards</td><td>$num m</td><td>=</td><td>".number_format($num*1.09361,5)." yd</td></tr>";

echo "<tr><td>$num kilometre</td><td>=</td><td>".number_format($num*0.62137,5)." miles</td><td>$num km</td><td>=</td><td>".number_format($num*0.62137,5)." mi</td></tr>";

echo "</table>";


// IMPERIAL → METRIC
echo "<table>";
echo "<tr class='title-row'><td colspan='6'>IMPERIAL TO METRIC CONVERSIONS</td></tr>";

echo "<tr><td>$num inch</td><td>=</td><td>".($num*2.54)." centimetres</td><td>$num in</td><td>=</td><td>".($num*2.54)." cm</td></tr>";

echo "<tr><td>$num foot</td><td>=</td><td>".($num*30.48)." centimetres</td><td>$num ft</td><td>=</td><td>".($num*30.48)." cm</td></tr>";

echo "<tr><td>$num yard</td><td>=</td><td>".($num*91.44)." centimetres</td><td>$num yd</td><td>=</td><td>".($num*91.44)." cm</td></tr>";

echo "<tr><td>$num yard</td><td>=</td><td>".($num*0.9144)." metres</td><td>$num yd</td><td>=</td><td>".($num*0.9144)." m</td></tr>";

echo "<tr><td>$num mile</td><td>=</td><td>".($num*1609.344)." metres</td><td>$num mi</td><td>=</td><td>".($num*1609.344)." m</td></tr>";

echo "<tr><td>$num mile</td><td>=</td><td>".($num*1.609344)." kilometres</td><td>$num mi</td><td>=</td><td>".($num*1.609344)." km</td></tr>";

echo "</table>";
?>

</body>
</html>