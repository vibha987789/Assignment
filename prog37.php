
<html>
    <head>
      <title>practical 37</title>
    </head>
    <body>
        <form>
            Name<input type="text" name="name"><br>
            Age<input type="number" name="age"><br>
            <button>Save</button>
        </form>

    <?php
     $name=$_GET['name'];
     echo "$name";
     $age=$_GET['age'];
     echo "$age";
  ?>
    </body>
</html>
