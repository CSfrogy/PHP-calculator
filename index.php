<?php
require_once 'function.php';

$calculator = new Calculator();

if(isset($_POST['submit'])){
    $calculator->calculate();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>SimpleCount</title>
</head>
<body>
    <main class="main-container">
        <div class="form-container">
            <form method="post">

                <label for="number1">Please enter a first number:</label>
                <input type="number" id="number1" name="number1" value="<?= htmlspecialchars($_POST['number1'] ?? '') ?>">


                <label for="operator">Choose an operator:</label>
                <select name="operator" id="operator">
                    <?php
                    $currentOperator = $_POST['operator'] ?? 'add';
                    $operators = [
                        'add' => '+',
                        'sub' => '-',
                        'multi' => '*',
                        'div' => '/'
                    ];
                    foreach ($operators as $value => $symbol) {
                        $selected = $currentOperator === $value ? ' selected' : '';
                        echo "<option value=\"$value\"$selected>$symbol</option>";
                    }
                    ?>
                </select>

                <label for="number2">Please enter a second number:</label>
                <input type="number" id="number2" name="number2" value="<?= htmlspecialchars($_POST['number2'] ?? '')  ?>">

                <button name="submit" type="submit">Calculate</button>

                <label for="result">Result:</label>
                <input type="text" id="result" name="result" value="<?= htmlspecialchars($calculator->getResult()) ?>" readonly>
            </form>
        </div>
    </main>
</body>
</html>
