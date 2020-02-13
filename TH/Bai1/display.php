<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once('Tiger.php');
    include_once('Chicken.php');
    include_once('Edible.php');
    include_once('Fruits.php');
    include_once('Apple.php');
    include_once('Orange.php');

    $animals[0] = new Tiger();
    $animals[1] = new Chicken();
    foreach ($animals as $animal) {
        echo $animal->makeSound();
        if ($animal instanceof Chicken) {
            echo $animal->howToEat();
        }
    }

    $fruits[0] = new Apple();
    $fruits[1] = new Orange();
    foreach ($fruits as $fruit) {
        echo $fruit->howToEat() . "<br>";
    }
    ?>
</body>

</html>