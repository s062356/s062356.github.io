<?php
if (! isset ( $_GET ["page"] ) || $_GET ["page"] == "") {
	$_GET ["page"] = "main";
}
if (! file_exists ( "pages/" . $_GET ["page"] . ".php" )) {
	$_GET ["page"] = "main";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "include/meta.php"; ?>
    </head>
    <body>
        <div id="wrapper">
            <?php include "include/header.php"; ?>
            <?php include "include/side-nav.php"; ?>
            <?php include "pages/".$_GET["page"].".php"; ?>
            <?php include "include/footer.php"; ?>
        </div>
    </body>
</html>