<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Add Product</legend>
        <form action="reserveren/reserveren.php" method="POST">
            <table>
                <tr>
                    <th>Welke kamer</th>
                    <td><input type="number" name="kamerNummer"required></td>
                </tr>
                <tr>
                    <th>Startdatum</th>
                    <td><input type="date" name="sDatum" required></td>
                </tr>
                <tr>
                    <th>Einddatum</th>
                    <td><input type="date" name="eDatum" required></td>
                </tr>
                <tr>
                    <th>Naam</th>
                    <td><input type="text" name="naam"required></td>
                </tr>
                <tr>
                    <th>adres</th>
                    <td><input type="text" name="adres"required></td>
                </tr>
                <tr>
                    <th>postcode</th>
                    <td><input type="text" name="postcode"required></td>
                </tr>
                <tr>
                    <th>woonplaats</th>
                    <td><input type="text" name="woonplaats"required></td>
                </tr>
                <tr>
                    <td><button type="submit">Reserveer</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>