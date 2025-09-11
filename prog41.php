<html>
    <head>
<title>practical 41</title>
    </head>
    <body>
        <form action="" method="POST">
        Name<input type="text" name="username"><br>
        Password<input type="password" name="password"><br>
        <button>Login</button>

        </form>
        <?php
        if (isset($_POST['username']) && isset($_POST['password'])){
           $name=$_POST['username'];
           $pass=$_POST['password'];
           $username="admin";
           $userpassword=12345;
    
           if($name==$username && $pass==$userpassword){
            echo "login successfull";
           }
           else{
            echo "invalid credential";
          }
        }
        ?>
    </body>
</html>

