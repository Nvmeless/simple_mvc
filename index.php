<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Php MVC</title>
</head>
<body>
<nav id="navFirstMenu">
    <ul  id="firstMenu">
        <li id="logo"><img src=""></li>
        <?php
        include "./includes/menus/menu.php";
        ?>
    </ul>
</nav>
<nav>
    <ul id="asideMenu">
        <?php
        $category = $_GET['category'];
        $category .= ".inc.php";
        include "./includes/menus/$category";
        ?>
    </ul>
</nav>
<section id="content">

    <?php
    $page = $_GET['page'];
    $page .= ".inc.php";
    include "./includes/$page";
    ?>

    </section>

<footer>
    <?php
    include "./includes/footer.inc.php";
    ?>
</footer>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: Nvmeless
 * Date: 15/11/2018
 * Time: 11:07
 */
