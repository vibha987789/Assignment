<html>
    <head>
    <title>practical 40</title>
    </head>
    <body>
        <form action="" method="POST">
      Enter your Name<input type="text" name="username"><br>
      <button>Submit</button>

        </form>
     <?php
     
      $name = $_POST['username'];
      echo "Welcome, $name!";
    
     ?>
     

    </body>
</html>