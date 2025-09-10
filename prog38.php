<html>
    <head>
     <title>practical 38</title>
    </head>
    <body>
    <form action="">
       Enter a first number<input type="text" name="num1"><br>
       Enter a second number<input type="text" name="num2"><br>
       <button>Submit</button>
     </form>
   <?php
     $num1=$_GET['num1'];
     echo "$num1";
     $num2=$_GET['num2'];
     echo "$num2 <br>";

     $sum=$num1+$num2;
     echo "Sum: $sum ";
   ?>
    </body>
</html>