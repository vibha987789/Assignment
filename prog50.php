<?php
if (isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    setcookie("site_theme", $theme, time() + (86400 * 30));
    $_COOKIE['site_theme'] = $theme; 
}

$theme = isset($_COOKIE['site_theme']) ? $_COOKIE['site_theme'] : "light";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference</title>
    <style>
        body.light {
            background-color: white;
            color: black;
            font-family: Arial, sans-serif;
        }
        body.dark {
            background-color: #121212;
            color: white;
            font-family: Arial, sans-serif;
        }
        .btn {
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .light-btn { background: #f0f0f0; color: #000; }
        .dark-btn { background: #333; color: #fff; }
    </style>
</head>
<body class="<?php echo $theme; ?>">
    <h1>Welcome to My Website</h1>
    <p>Current Theme: <strong><?php echo ucfirst($theme); ?> Mode</strong></p>

    <form method="post">
        <button type="submit" name="theme" value="light" class="btn light-btn">Light Mode</button>
        <button type="submit" name="theme" value="dark" class="btn dark-btn">Dark Mode</button>
    </form>
</body>
</html>
