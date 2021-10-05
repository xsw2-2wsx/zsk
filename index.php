<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php if(!$_POST['amount']): ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3>Podaj ilosc osob w rodzinie</h3>
        <input type="text" name="amount" placeholder="Ilosc osob">
        <input type="submit" value="zatwierdz">
    </form>
    <?php endif; ?>

    <?php if($_POST['amount']): ?>
    <span>Ilosc osob: <?php echo $_POST['amount'] ?></span>
    </br>
    <a href="<?php $_SERVER['PHP_SELF']?>">Powrot</a>
    <?php endif; ?>
</body>
</html>

