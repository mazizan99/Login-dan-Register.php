<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<?php
include 'functions.php';
?>

<?=template_header('Home')?>

<div class="content">
	<h2>Selamat Datang</h2>
</div>

<?=template_footer()?>
</body>
</html>
