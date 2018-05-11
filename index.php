<?php
require_once("functions.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <input type="number" name="a" value="<?php echo $_GET['a'];?>">x
    <input type="number" name="b" value="<?php echo $_GET['b'];?>">
    <button>=</button>
</form>
<div class="resultat">
    <?php
    echo multiplier($_GET['a'],$_GET['b']);
    ?>
</div>
</body>
</html>