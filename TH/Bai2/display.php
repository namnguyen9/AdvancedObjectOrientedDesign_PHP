<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "CircleComparator.php";

    $circleOne = new Circle("circleOne", 4);
    $circleTwo = new Circle("circleTwo", 4);
    $circleComparator = new CircleComparator();
    var_dump($circleComparator->compare($circleOne, $circleTwo));

    ?>
</body>

</html>