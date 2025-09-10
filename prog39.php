<html>
    <head>
<title>practical 39</title>
    </head>
    <body>
        <form action="">
        <input type="number" name="marks">
        <button type="submit">submit</button><br>
        </form>
    <?php
     $marks = $_GET['marks'];
     if ($marks >= 40) {
     echo "Marks: $marks <br> Result: PASS";
     } else {
      echo "Marks: $marks <br> Result: FAIL";
     }
   ?>

    </body>
</html>