<html>
    <head>
     <title>practical 42</title>
    </head>
    <body>
        <form action="" method="POST">
        First Number<input type="number" name="num1"><br><br>
        Second Number<input type="number" name="num2"><br><br>
        <select name="opration">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
        </select><br><br>
      <button>Submit</button>
        </form>
        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $opration = $_POST['opration'];
        $result ="";
        if ($opration == "+") {
          echo "Result = " . ($num1 + $num2);
    }
        if ($opration == "-") {
          echo "Result = " . ($num1 - $num2);
     }
        if ($opration == "*") {
          echo "Result = " . ($num1 * $num2);
     }  
         if ($opration == "/") {
           echo "Result = " . ($num1 / $num2);
     }   
        else {
              $result = " Submission";
          }
          echo "$result";
        ?>
    </body>
</html>