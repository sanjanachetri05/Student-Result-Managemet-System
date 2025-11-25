<?php session_start(); include('config.php');
if(isset($_POST['login'])) {
    $q = $dbh->prepare("SELECT * FROM admin WHERE username=:u AND password=:p");
    $q->execute([':u'=>$_POST['u'], ':p'=>$_POST['p']]);
    if($q->rowCount()>0){ $_SESSION['alogin']=$_POST['u']; header("location:admin.php"); }
}
if(isset($_GET['out'])){ session_destroy(); header("location:index.php"); }
?>
<!DOCTYPE html><html><head><title>Admin</title><link rel="stylesheet" href="style.css"></head><body>
<div class="navbar"><h1>Admin</h1><a href="index.php">Home</a> <?php if(isset($_SESSION['alogin'])) echo "<a href='admin.php?out=true'>Logout</a>"; ?></div>
<div class="container">
<?php if(!isset($_SESSION['alogin'])) { ?>
  <form method="post">
    <input type="text" name="u" placeholder="Username (admin)" required>
    <input type="password" name="p" placeholder="Password (admin)" required>
    <button type="submit" name="login">Login</button>
  </form>
<?php } else { ?>
  <h2>Student List</h2>
  <table><tr><th>Roll ID</th><th>Name</th><th>Class</th></tr>
  <?php
  $q = $dbh->query("SELECT * FROM students");
  while($r=$q->fetch(PDO::FETCH_OBJ)) echo "<tr><td>{$r->rollid}</td><td>{$r->name}</td><td>{$r->class}</td></tr>";
  ?></table>
<?php } ?>
</div></body></html>