
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
<form method="post"><label>Hệ số a: </label><input type="text" name="hsa"><br><br>
    <label>Hệ số b: </label><input type="text" name="hsb"><br><br>
    <label>Hệ số c: </label><input type="text" name="hsc"><br><br>
    <input type="submit" value="Giải Phương trình"><br><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'QuadraticEquation.php';

    $a = $_POST['hsa'];
    $b = $_POST['hsb'];
    $c = $_POST['hsc'];
    $data = new QuadraticEquation($a, $b, $c);
    echo $data->getRoot();
}
?>
</body>
</html>