<?php require_once "db_connection.php"; ?>
<center>
        <form method="post">
          <h3>Input data User:</h3><p>
            Your email:
            <input type="text" name="email"><br>
            <p>Your password:
            <input type="password" name="password"><br><br>
            <input type="submit" value="Sign in" name="btn2">
        </form></center>
        <?php 
        session_start();
        if(isset($_POST['email'])){
            $email=stripcslashes($_REQUEST['email']);
            $email= mysqli_real_escape_string($connection, $email);
            $password=stripcslashes($_REQUEST['password']);
            $password= mysqli_real_escape_string($connection, $password);
            $login="SELECT*FROM client
             WHERE email='$email' AND password='$password'";
            $results=mysqli_query($connection, $login);
            $user = mysqli_num_rows($results);
            if($user==1){
                $_SESSION['email']=$email;
                header("Location: client.php");
}
    }
        ?>
