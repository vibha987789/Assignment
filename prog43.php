<html>
    <head>
      <title>practical 43</title>
    </head>
    <body>
        <form action="" method="POST">
          Which is your favorite programming language?:<br><br>

         <select name="language">
         <option value="PYTHON">PYTHON</option>
         <option value="JAVASCRIPT">JAVASCRIPT</option>
         <option value="PHP">PHP</option>
         </select><br><br>
         <button>Submit</button>
      
         <?php
           $lang=$_POST['language'];
           echo "Your favorite programming language is:<br><br> $lang";
         ?>
       
        </form>
    </body>
</html>