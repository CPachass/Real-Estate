<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>

    <!--Styles-->
    <link rel="preload" href="build/css/app.css" as="style">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header no_select <?php echo $homepage? "homepage" : ""; ?>">
        <div class="dark-mode_logo container">
            <img src="build/img/dark-mode.svg" alt="dark mode image">
        </div>
        <div class="container header_content">
            <div class="nav-bar">
                <div class="header_logo">
                    <a href="/">
                        <img src="build/img/logo.svg" alt="logo image">
                    </a>
                </div>
                <div class="menu_expand hidden">
                    <img src="build/img/barras.svg" alt="menu button">
                </div>
                <nav class="hidden">
                    <a href="about-us.php">About us</a>
                    <a href="advertisements.php">Advertisements</a>
                    <a href="blog.php">Blog</a>
                    <a href="contact.php">Contact</a>
                </nav>
            </div>
            <?php echo $homepage? "<h1>Sale of House and Exclusive Luxury Apartments.</h1>" : ""; ?>
        </div>
    </header> <!-- .header -->