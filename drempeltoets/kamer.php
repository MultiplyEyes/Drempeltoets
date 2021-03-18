<title>Product</title>
<?php 
    include_once 'header.php';
    require_once 'includes/dbh.inc.pdo.php';
    require_once 'includes/dbh.inc.php';
    //een melding als er nog maar 2 of minder kamers over zijn
    $sql="SELECT COUNT(*) FROM kamer WHERE active = 0";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_fetch_assoc($result)['COUNT(*)'];
    if($count <= 2){
        $message = "Warning only ".$count. " room(s) left";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    //Hier mee kan je tabel zien van reserveren
      $db = new database();
      $reserveren = $db->select("SELECT * FROM reserveren", []);
      $columns = array_keys($reserveren[0]);
      $row_data = array_values($reserveren);
    ?>
    <table border 1px solid>
      <tr>
        <?php
        foreach ($columns as $column) {
          echo "<th><strong> $column </strong></th>";
        }
        ?>
        <th><strong> Option </strong></th>
        <?php
          foreach($row_data as $rows){
            echo "<tr>";
            foreach($rows as $data){
              echo "<td>$data</td>";
            }?>
            <td>
              <a href="kamer/edit.php?reserveren_id=<?php echo $rows['id']?>">edit</a>
              <a href="kamer/delete.php?id=<?php echo $rows['id']?>">delete</a>
            </td>
        </tr>
      <?php } ?>
      </tr>
    </table>
    <button onclick="window.print();">Print Me</button><br>
<?php

  include_once 'footer.php';
?>