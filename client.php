<!DOCTYPE html>
<html>
    <head>
       
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <style>
            table, tr, td{
                border: 3px solid red;
                border-collapse: collapse
            }
        </style>
    </head>
    <body>
        <script>
            var objXMLHttpRequest = new XMLHttpRequest();
            objXMLHttpRequest.onreadystatechange = function() {
                if(objXMLHttpRequest.readyState === 4) {
                    if(objXMLHttpRequest.status === 200) {
                        alert('Success');
                    }
                }
            }
            objXMLHttpRequest.open('GET', 'client.php');
            objXMLHttpRequest.send();
        </script>
        <script>
            $.ajax('client.php',{
                //--JQUERY--
                //--AJAX--
                success: function(data){
                    alert('AJAX with jQuery works fine !');
                },
                error: function() {
                    alert('There was some error performing the AJAX call!');
                }
            });
        </script>
        <script>
            $(document).ready(function(){
                //--JQUERY--
                //--AJAX--
                var $clicked = false;
                $("#hideshow").click(function(){
                    if(!$clicked){
                        $("#div1").hide();
                        $clicked = true;
                    }else{
                        $("#div1").show();
                        $clicked = false;
                    }
                });

            })
        </script>
        <?php
session_start();
if(!isset($_SESSION["email"])){
    header("Location: client.php");
    exit();
}
?>
        <?php
        //--DB CONNECTION--
        include('db_connection.php');

        ?>
        Hello, <?php
        $this_email = $_SESSION['email'];
        //--SELECT--
        $get_f_name = "SELECT * FROM client WHERE email='$this_email'";
        $thisresult = mysqli_query($connection, $get_f_name);
        $rowrow = mysqli_fetch_array($thisresult);
        echo $rowrow['first_name']." !";
        ?>
        <br><br>
        <button id = "hideshow">hide</button>
        <div id = "div1">
            <p id = "my_email">Your email - <?php echo $_SESSION['email']; ?></p>
            <p id = "my_l_name">Your surname - <?php
                //--SELECT--
                $get_l_name = "SELECT * FROM `client` WHERE email='$this_email'";
                $result_l_name = mysqli_query($connection, $get_l_name);
                $row_l_name = mysqli_fetch_array($result_l_name);
                echo $row_l_name['last_name'];
                ?>
            </p>
            <p id = "my_tariff_id">Your tariff id - <?php
                $tariff_id;
                //--SELECT--
                $get_tariff_id = "SELECT * FROM `client` WHERE email='$this_email'";
                $result_tariff_id = mysqli_query($connection, $get_tariff_id);
                $row_tariff_id = mysqli_fetch_array($result_tariff_id);
                echo $row_tariff_id['tariff_id'];
                $tariff_id = (int)$row_tariff_id['tariff_id'];
                ?>
            </p>
            <p>Tariff title - <?php
                  $tariff_id;
                $sql_get_tariff_name = "SELECT * FROM `tariff` WHERE tariff_id = '$tariff_id'";
                $result_sql_get_tariff_name = mysqli_query($connection, $sql_get_tariff_name);
                $row_tariff_name = mysqli_fetch_array($result_sql_get_tariff_name);
                echo $row_tariff_name['tariff_name'];
                ?>
            </p>
            <p>Tariff price - <?php
                echo $row_tariff_price['tariff_price'];
                ?>
            </p>
            <p>Internet - <?php
                echo $row_tariff_gbs['internet'];
                ?>
            </p>
            <p>Minutes - <?php
                echo $row_tariff_minutes['minutes'];
                ?>
            </p>
            <p>Tariff activation date - <?php
                echo $row_activation_date['tariff_date'];
                ?>
            </p>
            <p>Your balance - <?php
                echo $row_balance['balance'];
                ?>
            </p>
            <p>Next charge date - <?php
                echo $row_next_charge_date['Next_charge_date'];
                ?>
            </p>
        </div>

    </body>
</html>
