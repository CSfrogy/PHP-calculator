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
            <form action="#" method="post">
                <label for="number1">Please enter a number:</label>
                <input type="text" id="number1" name="number1">
                <label for="number2">Please enter a number:</label>
                <input type="text" id="number2" name="number2">
                <label for="operator">Choose an operator:</label>

                <select name="operator" id="operator">
                    <option value="add">+</option>
                    <option value="sub">-</option>
                    <option value="multi">*</option>
                    <option value="div">/</option>
                </select>
                <button>Calculate</button>
                <label for="result">Result:</label>
                <input type="text" id="result" name="result">
            </form>
        </div>
    </main>
</body>
</html>
