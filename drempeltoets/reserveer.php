<?php 
        include_once 'header.php';
        require_once 'includes/dbh.inc.pdo.php';
        $db = new database();
        $kamer = $db->select("SELECT id,	Hoeveel_personen,	prijs_per_nacht	 FROM kamer WHERE active = 0", []);
        $columns = array_keys($kamer[0]);
        $row_data = array_values($kamer);
?>
    <title>Reseveer</title>
<div class="form">
    <h2>Reseveren</h2>
    <a href="kamer/reserveren.php"><Button type="button">reserveren</Button></a>
    <table border 1px solid>
      <tr>
        <?php
        foreach ($columns as $column) {
          echo "<th><strong> $column </strong></th>";
        }
        ?>
        <?php
                foreach($row_data as $rows){
                    echo "<tr>";
          foreach($rows as $data){
             echo "<td>$data</td>";
          }?>
        </tr>
      <?php } ?>
      </tr>
    </table>
</div>
<?php
    include_once 'footer.php';
?>