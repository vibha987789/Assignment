<html>
    <head>
     <title>practical 44</title>
    </head>
    <body>
        <form action="" method="POST">
        Name<input type="text" name="name"><br><br>
        Email<input type="email" name="email"><br><br>
        Massege<textarea name="massege"></textarea><br><br>
       <input type="submit" name="submit">

        </form>
        <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $massege = $_POST['massege'];

        echo "Thank you, $name! Your feedback has been submitted.";

        ?>
    </body>
</html>