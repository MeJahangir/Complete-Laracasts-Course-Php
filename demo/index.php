<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?Php

        $number = new input();

        

        $name = 'md jahangir alam';
        $read = true;

        if ($read) {
            $masage = "You Have Read $name";
        }else{
            $masage = "You Have Not Read $name";
        }
    ?>

    <h1>
        <?php echo $masage; ?>
    </h1>
</body>
</html>