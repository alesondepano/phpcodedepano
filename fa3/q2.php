<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Operations</title>
    <link rel="stylesheet" href="style.css"> <!-- your CSS file -->
</head>
<body>

<div class="container">
    <div class="header-panel">
        <h1>Array Operations Result</h1>
    </div>

    <?php
        
        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        
        $sum = array_sum($numbers);

        
        $difference = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            $difference -= $numbers[$i];
        }

        
        $product = array_product($numbers);

        
        $quotient = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            $quotient /= $numbers[$i];
        }
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
                    Array List: <?php echo implode(", ", $numbers); ?>
                </td>
            </tr>
            <tr>
                <td>Addition</td>
                <td><?php echo $sum; ?></td>
            </tr>
            <tr>
                <td>Subtraction</td>
                <td><?php echo $difference; ?></td>
            </tr>
            <tr>
                <td>Multiplication</td>
                <td><?php echo $product; ?></td>
            </tr>
            <tr>
                <td>Division</td>
                <td><?php echo $quotient; ?></td>
            </tr>
        </tbody>
    </table>
</div>

    <div class="button-center">
    <button class="back-btn" onclick="history.back()">⬅ Go Back</button>
</div>





</body>
</html>
