<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "ComparableCircle.php";

    $circleOne = new ComparableCircle('circleOne', 8);
    $circleTwo = new ComparableCircle('circleTwo', 2);

    var_dump($circleOne->compareTo($circleTwo));
    ?>
</body>
</html>