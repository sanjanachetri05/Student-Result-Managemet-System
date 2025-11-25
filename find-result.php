<?php session_start(); ?>
<!DOCTYPE html>
<html><head><title>Student Result Management System</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="navbar"><h1>Student Result Management System</h1><a href="index.php">Home</a></div>
<div class="container">
  <form action="result.php" method="post">
    <label>Enter Roll ID:</label>
    <input type="text" name="rollid" required placeholder="Ex: 101">
    <button type="submit">Search</button>
  </form>
</div></body></html>