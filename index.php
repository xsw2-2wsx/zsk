<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php if(!$_POST['amount'] and !$_POST['age1']): ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3>Podaj ilosc osob w rodzinie</h3>
        <input type="text" name="amount" placeholder="Ilosc osob">
        <input type="submit" value="zatwierdz">
    </form>
    <?php endif; ?>

    <?php 
        if($_POST['amount'] and !$_POST['age1']) {
            $addr = $_SERVER['PHP_SELF'];
            echo <<< END
            <form action="$addr" method="POST">
            END;
            for($i = 1; $i <= (int) $_POST['amount']; $i++) {
                echo <<< END
                <p>Wiek osoby $i: </p>
                <input type="number" required placeholder="wiek" name="age$i">
                END;
            }
            echo '</br></br><button type="submit">Zatwierdz</button></form>';
        }
    ?>

    <?php 
        if($_POST['age1']) {
            $sum = 0;
            $i = 1;

            while($_POST['age'.$i]) {
                $sum += (int) $_POST['age'.$i];
                $i++;
            }

            $avg = $sum / $i;

            $addr = $_SERVER["PHP_SELF"];
            echo <<< END
                Suma wieku: $sum </br>
                Ilosc osob: $i </br>
                Sredni wiek: $avg </br>
                <a href="$addr">Powrot</a>
            END;
            
        }
    ?>
</body>


</html>

