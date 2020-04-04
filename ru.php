<?php
$x = 1;
// for ($x; $x <= 20; $x++) {
//     echo "Hello" . $x;
// }
if (isset($_POST["btn"])) {
    // $x += $x;
    // echo "Clicked".$x;
    for ($x; $x <= 20; $x++) {
        echo "<br>";
        echo "Hello\r\n" . $x ;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="autoincrease.php" method="post">
        <input type="submit" value="Click" name="btn">
    </form>
</body>

</html>
