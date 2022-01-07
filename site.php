<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $name = "riel";
            echo "<h1>There once was a man named ${name}</h1>";
            echo "<h1>His short name is ${name}</h1>";
            echo "<h1>hello ${name}</h1>";
            echo "<h1>".strlen($name)."</h1>";
            echo substr($name, 0, 3)."<br><br>";
            echo abs(-200)."<br><br>";
            echo pow(4,2)."<br><br>";
            echo max(2, 10)."<br><br>";


            
        ?>
        
        <!-- <form action="" method="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <input type="submit">
        </form>
        
        <?php /*
            echo $_GET["num1"]. "+". $_GET["num2"]. " = ". $_GET["num1"] + $_GET["num2"];
        ?>
        <form action="" method="get">
            Noun<br>
            <input type="text" name="noun">
            <br>
            celebrity<br>
            <input type="text" name="celebrity">
            <input type="submit">
        </form>
        <?php 
            $noun = $_GET["noun"];
            $celebrity= $_GET["celebrity"];

            echo "Roses are $noun";
            echo "$celebrity is $noun";
            */
            
        ?>
         -->
         
         <!-- <form action="site.php" method="post">
             Password: <input type="password" name="password">
             <input type="submit">
         </form> -->
        
         
         <?php 
         /*
            echo $_POST["password"];
            */
            $arrays = ["gabriel", "allba", "shemi", "yuma", "is", 12, "years old boy"];
            echo implode(" ", $arrays);
            echo "<br><br>";
            print_r($arrays)."<br><br>";
            echo count($arrays)."<br><br>";
         ?>

         <!-- <form action="site.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Bananas: <input type="checkbox" name="fruits[]" value="bananas"><br>
            <input type="submit">
         </form>

         <form action="site.php" method="POST">
             Input your name: <input type="text" name="name"><br><br>
             <input type="submit">
         </form> -->
         <?php 
         /*
            $fruits = $_POST["fruits"];
            echo $fruits[0];
            echo $fruits[1];
            echo $fruits[2]; */
            $associative_array = ["Riel" => 4, "Gabriel" => "A", "Allba" => "A+"];
            echo $associative_array[$_POST["name"]];

         ?>
    </body>
</html>