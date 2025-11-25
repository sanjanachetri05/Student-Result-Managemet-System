<?php include('config.php');
$rollid = $_POST['rollid'];
$q = $dbh->prepare("SELECT * FROM students WHERE rollid = :r");
$q->execute([':r' => $rollid]);
$std = $q->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html><html><head><title>Result</title><link rel="stylesheet" href="style.css"></head><body>
<div class="navbar"><h1>Result</h1><a href="find-result.php">Back</a></div>
<div class="container">
<?php if($q->rowCount() > 0) { ?>
  <h3>Name: <?php echo $std->name; ?> | Roll ID: <?php echo $std->rollid; ?></h3>
  <table><tr><th>Subject</th><th>Marks</th></tr>
  <?php
  $q2 = $dbh->prepare("SELECT * FROM results WHERE rollid = :r");
  $q2->execute([':r' => $rollid]);
  while($row = $q2->fetch(PDO::FETCH_OBJ)){
      echo "<tr><td>{$row->subject}</td><td>{$row->marks}</td></tr>";
  } ?>
  </table>
  <button onclick="window.print()">Print</button>
<?php } else { echo "<h3>Invalid Roll ID</h3><a href='find-result.php'>Try Again</a>"; } ?>
</div></body></html>