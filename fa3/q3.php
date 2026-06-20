<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Defined Function</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="header-panel">
        <h1>User Defined Function</h1>
    

    <?php
    
    function my_function($a, $b, $c) {
        $addition = $a + $b + $c;
        $subtraction = $a - $b - $c;
        $multiplication = $a * $b * $c;
        $division = $a / $b / $c;

        return array($addition, $subtraction, $multiplication, $division);
    }

    
    $param1 = 25;
    $param2 = 13;
    $param3 = 6;

    
    $results = my_function($param1, $param2, $param3);
    ?>

    <table class="roster-table">
        <thead>
            <tr>
                <th>Operation</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2" style="text-align:center;">
                    My Parameter Values: <?php echo "$param1, $param2, $param3"; ?>
                </td>
            </tr>
            <tr>
                <td>Addition</td>
                <td><?php echo $results[0]; ?></td>
            </tr>
            <tr>
                <td>Subtraction</td>
                <td><?php echo $results[1]; ?></td>
            </tr>
            <tr>
                <td>Multiplication</td>
                <td><?php echo $results[2]; ?></td>
            </tr>
            <tr>
                <td>Division</td>
                <td><?php echo $results[3]; ?></td>
            </tr>
        </tbody>
    </table>

</div>

       <div class="button-center">
    <button class="back-btn" onclick="history.back()">⬅ Go Back</button>
</div>

</body>
</html>