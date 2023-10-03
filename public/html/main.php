<?php 
if (isset($_GET["id"])) {
    $work = $w->getWork($_GET["id"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= (isset($_GET["id"]) ? $work["title"] : "Literature"); ?> | Veljko Lončarević</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/styles/style.css"/>

    <link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
</head>
<body>
    <div class="body">
        <?php
        require_once("public/html/navbar.php");
        require_once("public/html/header.php");
        require_once("public/html/contact.php");
        ?>
        <main class="content">
            <?php 
            if (isset($_GET["id"])) {
                require_once("public/html/work.php");
            } else {
                require_once("public/html/list.php");
            }
            ?>
        </main>
        <?php 
        require_once("public/html/footer.php");
        ?>
    </div>
</body>
</html>