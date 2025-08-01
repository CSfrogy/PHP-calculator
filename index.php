<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SimpleCount</title>
</head>
<body>
    <div class="main-container">
        <form method="post" action="#">
            <label for="number1">Please enter a number:</label>
                <input type="number" id="number1" name="number1">
            <label for="number2">Please enter a number:</label>
                <input type="number" id="number2" name="number2">
            <label for="operator">Choose an operator:</label>

            <select name="operator" id="operator">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="multi">*</option>
                <option value="div">/</option>
            </select>
            <input type="submit" value="Submit">
            <p>Result:</p>
        </form>
    </div>
</body>
</html>
