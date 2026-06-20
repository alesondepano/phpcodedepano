<!DOCTYPE html>
<html>
<head>
    <title>String Functions in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="header-panel">
    <h1> PHP String Functions</h1>
</div>

<table class="roster-table">
<tr>
    <th>Name</th>
    <th>Characters</th>
    <th>Uppercase First</th>
    <th>Replace Vowels</th>
    <th>Position of "a"</th>
    <th>Reverse</th>
</tr>

<?php

$names = [
    "chrisa", "john doe", "maria clara", "alex santos", "daniel cruz",
    "sarah lee", "mark anthony", "julia reyes", "paul garcia", "anna dela cruz",
    "leo king", "carl james", "ella mae", "kevin tan", "rose ann",
    "angelica joy", "frank lim", "harry potter", "linda cruz", "nathan scott"
];

foreach ($names as $name) {

    $length = strlen($name);
    $ucName = ucfirst($name);
    $replaceVowels = str_ireplace(['a','e','i','o','u'], '@', $name);
    $pos = strpos($name, 'a');
    $posDisplay = ($pos !== false) ? $pos + 1 : "Not Found";
    $reverse = strrev($name);

    echo "<tr>
        <td>$name</td>
        <td>$length</td>
        <td>$ucName</td>
        <td>$replaceVowels</td>
        <td>$posDisplay</td>
        <td>$reverse</td>
    </tr>";
}
?>

</table>


</div>

</body>
</html>
``