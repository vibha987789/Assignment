<html>
<head>
<title>Hello Page</title>
</head>
<body>
        <?php
        if (isset($_GET['name'])) {
            $name = htmlspecialchars($_GET['name']); 
            echo "<h1>Hello, $name!</h1>";
        } else {
            echo "<h1>Hello, Rahul</h1>";
        }
    ?>

</body>
</html>