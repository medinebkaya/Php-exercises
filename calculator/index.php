<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="calculator">
        <h1>Calculator</h1> <br> <br>
        <form action="" method="post">
            <!-- Obtaining data from the user -->
            <input type="number" name="num1" placeholder="num1">
            <br> <br>
            <input type="number" name="num2" placeholder="num2">
            <br> <br>
            <select name="operator" id="">
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
                <option value="mul">Multiply</option>
                <option value="div">Divide</option>
            </select>
            <input type="submit" value="Calculate">
        </form>
        <br>
        <div>
            Result: <span id="result"></span>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch($operator){
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break;
            case 'mul':
                $result = $num1 * $num2;
                break;
            case 'div':
                $result = $num1 / $num2;
                break;
            default:
                $result = "Invalid operator";
        }
        echo "<script>document.getElementById('result').innerHTML = '$result';</script>";
    }
?>