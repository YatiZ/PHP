<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Telling the time</h3>
    <?php $hour = date('h') ?>
    <p>
         <?php
           if($hour < 12 || $hour > 1){
            echo "<b>Night Time</b>";
           }else{
            echo "<i>Day Time</i>";
           }
        ?> 
        <?php if($hour < 6 || $hour > 18) : ?>
            <b>Night Time</b>
        <?php else: ?>
            <i>Day Time</i>
        <?php endif ?>

    </p>
    
</body>
</html>