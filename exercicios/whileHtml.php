<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP misturado com html</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
            border: none;
        }
        html,body{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .num{
            width: 200px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid black;
            box-shadow: 5px 5px 0px black;
            margin-bottom: 10px;
            font-size: 2rem;
        }   
    </style>
</head>

<body>
    <?php
    $num = 0;
    while ($num <= 10) {
    ?>
        <div class="num"><?php echo $num ?></div>
    <?php
    $num++;
        }
    ?>
</body>

</html>