<html>
<head>
<title>Hello Page</title>
</head>
<body>

<form action="">
Name<input type="text" name="name"><br>
<button>Submit</button>
</form>    
</body>         
</html>

<?php
   $name= $_GET['name'];    
      echo "hello $name";
?>
