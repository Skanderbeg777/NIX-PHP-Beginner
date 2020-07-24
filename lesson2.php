<?php

function create_table()
{
    echo '<table>';
    create_row(1, 5);
    create_row(6, 10);
    echo '</table>';
}

function create_row($from, $to)
{
    echo '<tr>';
    for ($i = $from; $i <= $to; $i++){
        echo '<td>';
        create_block($i);
        echo '</td>';
    }
    echo '</tr>';
}

function create_block($num)
{
    $multiplier = " x ";
    $equals = " = ";
    for ($i = 1; $i <= 10; $i++){
        echo add_colors($num).$multiplier.add_colors($i).$equals.add_colors($num*$i);
        echo '<br/>';
    }
}

function add_colors($num)
{
    $num = str_split(strval($num));
    foreach ($num as &$char){
        if ($char == 1){
            $char = '<span style="color: red;">1</span>';
        } elseif ($char == 2){
            $char = '<span style="color: green;">2</span>';
        } elseif ($char == 3){
            $char = '<span style="color: yellow;">3</span>';
        } elseif ($char == 4){
            $char = '<span style="color: blue;">4</span>';
        }
    }
    return implode($num);
}

?>

<html lang="ru">
<head>
    <title>NIX Education</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <?php require_once "nav.php" ?>
</header>
<main>
    <a href="https://github.com/Skanderbeg777/NIX-PHP-Beginner/commit/fcddd874c16aea7e35bd308b9a728b34e08db97e"><h1>Урок 2</h1></a>
    <?php create_table(); ?>
</main>
<?php require_once "footer.php"?>
</body>
</html>
