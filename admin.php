<?php require_once "db_connection.php";
if(isset($_POST["username"]) && isset($_POST["password1"])) {
  $login = $_POST["username"];
  $password = $_POST["password1"];
  if ($login == "UserDarkhan" && $password == "darkhan234") {
      header("Location: json.php");
  }
}

if(isset($_POST["admin"]) && isset($_POST["password2"])) {
  $login = $_POST["admin"];
  $password = $_POST["password2"];
  if ($login == "DarkhanAdmin" && $password == "darkhan123") {
      header("Location: adminpanel.php");
  }
}
?>
<center>
  <h3>Enter for all data</h3><p>
<form method="post">
  Login : <input type="text" name="username" placeholder="Your login" style="margin-left: 30px;"><p>
  PassAdmin: <input type="password" name="password1" placeholder="Your password"><p>
    <input type="submit" name="btn1" value="enter">
</form><p><p>
  <h3>Enter for client transactions</h3><p>
  <form method="post">
  Login : <input type="text" name="admin" placeholder="Your login" style="margin-left: 30px;"><p>
  PassAdmin: <input type="password" name="password2" placeholder="Your password"><p>
    <input type="submit" name="btn1" value="enter">
  </form></center>
