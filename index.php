<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Pseudo ylesanne</title>
</head>
<body>

<form action="index.php?" method="get">
    <input name="page">
    <input type="submit">
</form>

<?php
$page = (!empty($_GET['page']) ? $_GET['page'] : 'home');
require($page . '.php')
?>

</body>
</html>