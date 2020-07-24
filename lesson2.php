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
        echo $num.$multiplier.$i.$equals.$num*$i;
        echo '<br/>';
    }
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
    <h1>Урок 2</h1>
    <?php create_table(); ?>
</main>
<?php require_once "footer.php"?>
</body>
</html>
