<?php
    include "../includes/dbh.inc.pdo.php";
    $db=new database();

    if(isset($_GET['reserveren_id'])){
        $reserveren = $db->select("SELECT * FROM reserveren WHERE id = :reserveren_id", ['reserveren_id'=>$_GET['reserveren_id']]); 
    }
//hier update de gegevens van reserveren
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $sql = "UPDATE reserveren SET startdatum=:startdatum, einddatum=:einddatum, Naam=:Naam, adres=:adres, woonplaats=:woonplaats, kamer_id=:kamer_id WHERE id=:reserveren_id";
            
            
        $placeholder = [  
            'startdatum'=>$_POST['startdatum'],
            'einddatum'=>$_POST['einddatum'],
            'Naam'=>$_POST['Naam'],
            'adres'=>$_POST['adres'],
            'woonplaats'=>$_POST['woonplaats'],
            'kamer_id'=>$_POST['kamer_id'],
            'reserveren_id'=>$_POST['reserveren_id']
        ];
        print_r($placeholder);
            
        $db->update_delete($sql, $placeholder);
    }
?>
    <form action="edit.php" method="post">
        <input type="hidden" name="reserveren_id" value="<?php echo isset($_GET['reserveren_id']) ? $_GET['reserveren_id'] : '' ?>">
        <input type="date" name="startdatum" placeholder="startdatum" value="<?php echo isset($reserveren) ? $reserveren[0]['startdatum'] : ''?>">
        <input type="date" name="einddatum" placeholder="einddatum" value="<?php echo isset($reserveren) ? $reserveren[0]['einddatum'] : ''?>">
        <input type="text" name="Naam" placeholder="Naam" value="<?php echo isset($reserveren) ? $reserveren[0]['Naam'] : ''?>">
        <input type="text" name="adres" placeholder="adres" value="<?php echo isset($reserveren) ? $reserveren[0]['adres'] : ''?>">
        <input type="text" name="woonplaats" placeholder="woonplaats" value="<?php echo isset($reserveren) ? $reserveren[0]['woonplaats'] : ''?>">
        <input type="number" name="kamer_id" placeholder="kamer_id" value="<?php echo isset($reserveren) ? $reserveren[0]['kamer_id'] : ''?>">
        <input type="submit" value="Edit">
    </form>
</form>
    
</body>
</html>