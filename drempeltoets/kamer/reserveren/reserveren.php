<?php
require_once '../../includes/dbh.inc.php';

if($_POST){
    $kamerNummer = $_POST["kamerNummer"];
    $sDatum = $_POST["sDatum"];
    $eDatum = $_POST["eDatum"];
    $naam = $_POST["naam"];
    $adres = $_POST["adres"];
    $postcode = $_POST["postcode"];
    $woonplaats = $_POST["woonplaats"];
    //Het insert alle informatie naar de reseveren tabel
    $sql = "INSERT INTO reserveren (startdatum,einddatum,Naam,adres,postcode,woonplaats,kamer_id) VALUES ('$sDatum', '$eDatum', '$naam', '$adres', '$postcode','$woonplaats','$kamerNummer')";

    if($conn->query($sql) === TRUE) {
        echo "<p>Geresiveerd</p>";
        echo "<a href='../../index.php'><button>Back</button></a>";
    }else{
        echo "ERROR" . $sql . '' . $conn->connect_error;
    }
    //Dit update de Active van kamer tabel hier mee kan ik zeggen dat de kamer word gebruikt
    $sql = "UPDATE kamer SET active='1' WHERE id='$kamerNummer'";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Geresiveerd</p>";
    }

    $conn->close();
}
?>
<button onclick="window.print();">print</button>
<!--Het laten zien van de data-->
<table border 1px solid>
    <tr>
        <td>kamerNummer</td>
        <td>StartDatum</td>
        <td>einddatum</td>
        <td>naam</td>
        <td>adres</td>
        <td>postcode</td>
        <td>woonplaats</td>
    </tr>
    <tr>
    <?php
    Echo "<td>$kamerNummer</td>";
    Echo "<td>$sDatum</td>";
    Echo "<td>$eDatum</td>";
    Echo "<td>$naam</td>";
    Echo "<td>$adres</td>";
    Echo "<td>$postcode</td>";
    echo "<td>$woonplaats</td>";
    ?>
    </tr>
<table>

