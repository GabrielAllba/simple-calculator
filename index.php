<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="./index.php" method="POST">
            First num: <input type="number" name="num1"><br><br>
            Operator: <input type="text" name="operator"><br><br>
            Second num: <input type="number" name="num2"><br>
            <br><input type="submit">
        </form>
        <?php
      
        $num1 = $_POST["num1"];
        $operator = $_POST["operator"];
        $num2 = $_POST["num2"];

        if($operator == "+"){
            echo $num1 + $num2;
        }
        elseif($operator == "-"){
            echo $num1 - $num2;
        }
        elseif($operator == "/" || $operator == ":"){
            echo $num1 / $num2;
        }
        elseif($operator == "*" || $operator == "x" || $operator == "X"){
            echo $num1 * $num2;
        }
        else{
            echo "Invalid Operator";
        }

        ?>
    </body>
</html>