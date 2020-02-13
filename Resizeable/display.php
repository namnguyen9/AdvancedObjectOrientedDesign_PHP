<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once('HasArea.php');
    include_once('Circle.php');
    include_once('Rectangle.php');
    include_once('Square.php');

    echo "<h3>Trước</h3>";
    $shapes[0] = new Circle("Hình tròn", 5);
    $shapes[1] = new Rectangle("Hình chữ nhật", 5, 10);
    $shapes[2] = new Square("Hình vuông", 5);
    
    foreach ($shapes as $shape) {
        echo $shape->GetArea() . "<br/>";
    }


    echo "<h3>Sau</h3>";
    $shapes[0] = new Circle("Hình tròn", 5);
    $shapes[1] = new Rectangle("Hình chữ nhật", 5, 10);
    $shapes[2] = new Square("Hình vuông", 5);
    $shapes[0]->resize(rand(1, 100));
    $shapes[1]->resize(rand(1, 100));
    $shapes[2]->resize(rand(1, 100));

    foreach ($shapes as $shape) {
        echo $shape->GetArea() . "<br/>";
    }

    ?>

</body>

</html>