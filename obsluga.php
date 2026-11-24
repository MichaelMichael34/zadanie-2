<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="formularz" name="formularz">
        <form action="" method='post'>
            <input type='text' , name='ImieNazwisko' , value="Imie i Nazwisko ucznia">
            <select name='Ocena'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
            </select><br>
            <input type='text' name='przedmiot' value='przedmiot'>
            <button type='submit' value='zapisz' name='zapisz'>Zapisz</button>
        </form>
    </div>
    <?php
    $nazwap = 'oceny.txt';


    if (isset($_POST['zapisz'])) {

        if ($istnieje = file_exists($nazwap)) {
            echo "istenieje . $istnieje";
        } else {
            echo "nie istnieje";
        }
        echo "<Br>";


        $open = fopen($nazwap, "a");

        if ($open) {
            echo "Tutaj dopisujemy te dane: " . $_POST['ImieNazwisko'] . "<br>";


            $linia = $_POST['ImieNazwisko'] . "-" . $_POST['przedmiot'] . "\n";
            fwrite($open, $linia);

            fclose($open);
        }
    }

    ?>
</body>

</html>