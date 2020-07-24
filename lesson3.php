<?php
$msg = false;
if (isset($_POST['form']) && strlen($_POST['form']))
    $msg = strrev($_POST['form']);
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
    <h1>Урок 3</h1>
    <?= htmlentities($msg); ?>
    <form method="post">
        <label for="form">Введите текст</label>
        <input type="text" name="form" id="form">
        <input type="submit" value="Отправить">
    </form>
</main>
<?php require_once "footer.php"?>
</body>
</html>
