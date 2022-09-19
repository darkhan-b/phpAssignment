
<?php require_once "db_connection.php";

$sql_function = "SELECT * FROM client";
$results = mysqli_query($connection, $sql_function);


       class Client{
           private $first_name;
           private $last_name;
           private $email;
           private $phone;
           private $password;
           private $tariff_id;
           private $tariff_date;
           private $balance;
           private $next_charge_date;
           function setFirstName($first_name){
               $this->first_name = $first_name;
           }
           function setLastName($last_name){
               $this->last_name = $last_name;
           }
           function setEmail($email){
               $this->email = $email;
           }
           function setPhone($phone){
               $this->phone = $phone;
           }
           function setPassword($password){
               $this->password = $password;
           }
           function setTariffId($tariff_id){
               $this->tariff_id = $tariff_id;
           }
           function setTariffActivation($tariff_date){
               $this->tariff_date = $tariff_date;
           }
           function setBalance($balance){
               $this->balance = $balance;
           }
           function setNextCharge($next_charge_date){
               $this->next_charge_date = $next_charge_date;
           }
           function getFirstName(){
               return $this->first_name;
           }
           function getLastName(){
               return $this->last_name;
           }
           function getEmail(){
               return $this->email;
           }
           function getPhone(){
               return $this->phone;
           }
           function getPassword(){
               return $this->password;
           }
           function getTariffId(){
               return $this->tariff_id;
           }
           function getTariffActivation(){
               return $this->tariff_date;
           }
           function getBalance(){
               return $this->balance;
           }
           function getNextCharge(){
               return $this->next_charge_date;
           }
           function __construct($first_name, $last_name = '', $email = '',$phone = '', $password = '', $tariff_id = '',
                                $tariff_date = '', $balance = '', $next_charge_date = ''){
               $this->first_name = $first_name;
               $this->last_name = $last_name;
               $this->email = $email;
               $this->phone = $phone;
               $this->password = $password;
               $this->tariff_id = $tariff_id;
               $this->tariff_date = $tariff_date;
               $this->balance = $balance;
               $this->next_charge_date = $next_charge_date;
           }
           public static function formTable(){
               echo "<tr>
               <td>First name</td>
               <td>Last name</td>
               <td>Email</td>
               <td>Phone</td>
               <td>Password</td>
               <td>Date</td>
               <td>Balance</td>
               <td>Next charge date</td>
               </tr>";
           }
       }
       echo "<b>Client table</b><p><table>";
       Client::formTable();
       mysqli_free_result($results);
       $results = mysqli_query($connection, $sql_function);
       while($client = mysqli_fetch_object($results)){

       $ph1 = new Client("");
       $first_name_table = $ph1->getFirstName
       ($ph1->setFirstName($client->first_name));

       $last_name_table = $ph1->getLastName
       ($ph1->setLastName($client->last_name));

       $email_table = $ph1->getEmail
       ($ph1->setEmail($client->email));

       $phone_table = $ph1->getEmail
       ($ph1->setEmail($client->phone));

       $password_table = $ph1->getPassword
       ($ph1->setPassword($client->password));

       $tariff_date_table = $ph1->getTariffActivation
       ($ph1->setTariffActivation($client->tariff_date));

       $balance_table = $ph1->getBalance
       ($ph1->setBalance($client->balance));

      $charge_table = $ph1->getNextCharge
      ($ph1->setNextCharge($client->Next_charge_date));

       echo "<tr>
       <td>$first_name_table</td>
       <td> $last_name_table</td>
       <td>$email_table</td>
       <td>$phone_table</td>
       <td>$password_table</td>
       <td>$tariff_date_table</td>
       <td>$balance_table</td>
       <td>$charge_table</td></tr>";
       }
       echo "</table>";
       ?>
<style media="screen">
  table,td {
    border: 1px solid red;
  }
</style>

<p><p><b>Client table</b> <p><p>
<?php
        class Tariff_Client extends Client{
            const tariffname = "number";
            final function formTable2(){
                echo "<tr>
                <td>First name</td>
                <td>Last name</td>
                </tr>";
            }
        }
        echo "<table>";
        Tariff_Client::formTable2();
        $results = mysqli_query($connection, $sql_function);
        while($client = mysqli_fetch_object($results)){
            $h1 = new Tariff_Client("");
            $h1->setFirstName($client->first_name);
            $h1->setLastName($client->last_name);
            $h1->setTariffId($client->tariff_id);

            echo "<tr>
            <td>$client->first_name</td>
            <td>$client->last_name</td>
            <td>$client->tariff_id</td>

            </tr>";
            }
        echo "</table>";
        ?>

<p><p><b>Tariff table</b><p><p>

        <?php
        $sql_function = "SELECT * FROM tariff";
        $results = mysqli_query($connection, $sql_function);
        $tariffs = mysqli_fetch_all($results);
                class Tariff{
                    private $tariff_name;
                    private $tariff_price;
                    private $internet;
                    private $minutes;
                    function setName($tariff_name){
                        $this->tariff_name = $tariff_name;
                    }
                    function setPrice($tariff_price){
                        $this->tariff_price = $tariff_price;
                    }
                    function setInternet($internet){
                        $this->internet = $internet;
                    }
                    function setMinutes($minutes){
                        $this->minutes = $minutes;
                    }

                    function getName(){
                        return $this->tariff_name;
                    }

                    function getPrice(){
                        return $this->tariff_price;
                    }
                    function getInternet(){
                        return $this->internet;
                    }
                    function getMinutes(){
                        return $this->minutes;
                    }
                    function __construct($tariff_name = '', $tariff_price = '', $internet = '', $minutes = ''){
                        $this->tariff_name = $tariff_name;
                        $this->tariff_price = $tariff_price;
                        $this->internet = $internet;
                        $this->minutes = $minutes;
                    }

                    public static function Table2(){
                        echo "<tr>
                        <td>Tariff name</td>
                        <td>Tariff Price</td>
                        <td>Internet</td>
                        <td>Minutes</td>
                        </tr>";
                }
                }
                echo "<table>";
                Tariff::Table2();
                mysqli_free_result($results);
                $results = mysqli_query($connection, $sql_function);
                while($tariffs = mysqli_fetch_object($results)){

                    $h2 = new Tariff("");
                    $tariff_name_table = $h2->getName($h2->setName($tariffs->tariff_name));
                    $tariff_price_table = $h2->getPrice($h2->setPrice($tariffs->tariff_price));
                    $tariff_internet_table = $h2->getInternet($h2->setInternet($tariffs->internet));
                    $tariff_minutes_table = $h2->getMinutes($h2->setMinutes($tariffs->minutes));
                    echo "<tr>
                    <td>$tariff_name_table</td>
                    <td>$tariff_price_table</td>
                    <td>$tariff_internet_table</td>
                    <td>$tariff_minutes_table</td>
                    </tr>";
                }
                echo "</table>";
                ?>
                <p><p><b>Services Table</b><p><P>
                <?php
                $sql_function = "SELECT * FROM services";
                $results = mysqli_query($connection, $sql_function);

                        class Services  {
                            public $service_name;
                            public $service_price;
                            function setName($service_name){
                                $this->service_name = $service_name;
                            }
                            function setPrice($service_price){
                                $this->service_price = $service_price;
                            }
                            function getName(){
                                return $this->service_name;
                            }
                            function getPrice(){
                                return $this->service_price;
                            }
                            function __construct($service_name = '', $service_price = ''){
                                $this->service_name = $service_name;
                                $this->service_price = $service_price;
                            }
                          final static function Table3(){
                                echo "<tr>
                                <td>Service name</td>
                                <td>Price</td>
                                </tr>";
                        }
                        }

                        echo "<table>";
                        Services::Table3();

                        mysqli_free_result($results);
                        $results = mysqli_query($connection, $sql_function);
                        while($services = mysqli_fetch_object($results)){
                            $ph2 = new Services("");
                            $service_name_table = $ph2->getName($ph2->setName($services->service_name));
                            $service_price_table = $ph2->getPrice($ph2->setPrice($services->service_price));
                            echo "<tr><td>$service_name_table</td>
                                  <td>$service_price_table</td></tr>";
                        }
                        echo "</table>";
                        ?>
<p><p><b>Service Transactions</b><p><p>

                        <?php

                                class ServiceTrans{
                                    private $user_id;
                                    private $service_id;
                                    private $date;
                                    protected $balance_before;
                                    private $charge_price;
                                    protected $balance_after;

                                    function setUserId($user_id){
                                        $this->user_id = $user_id;
                                    }
                                    function setServiceId($service_id){
                                        $this->service_id = $service_id;
                                    }
                                    function setTransactionDay($date){
                                        $this->date = $date;
                                    }
                                    function setBalanceBefore($balance_before){
                                        $this->balance_before = $balance_before;
                                    }
                                    function setChargePrice($charge_price){
                                          $this->charge_price = $charge_price;
                                      }
                                    function setBalanceAfter($balance_after){
                                        $this->balance_after = $balance_after;
                                    }

                                    function getUserId(){
                                        return $this->user_id;
                                    }
                                    function getServiceId(){
                                        return $this->service_id;
                                    }
                                    function getTransactionDay(){
                                        return $this->date;
                                    }
                                    function getBalanceBefore(){
                                        return $this->balance_before;
                                    }
                                    function getChargePrice(){
                                        return $this->charge_price;
                                    }
                                    function getBalanceAfter(){
                                        return $this->balance_after;
                                    }

                                    function __construct($user_id = '', $service_id = '', $date = '', $balance_before = '', $balance_after = '', $charge_price = ''){
                                        $this->user_id = $user_id;
                                        $this->service_id = $service_id;
                                        $this->date = $date;
                                        $this->balance_before = $balance_before;
                                        $this->balance_after = $balance_after;
                                        $this->charge_price = $charge_price;
                                    }
                                    static function Table4(){
                                        echo "<tr>
                                        <td>User ID</td>
                                        <td>Service ID</td>
                                        <td>Transaction date</td>
                                        <td>Balance before</td>
                                        <td>ChargePrice</td>
                                        <td>Balance after</td>
                                        </tr>";
                                    }
                                }
                                $sql_function = "SELECT * FROM transaction_service";
                                $results = mysqli_query($connection, $sql_function);
                                echo "<table>";
                                ServiceTrans::Table4();
                                while($trans1 = mysqli_fetch_object($results)){
                                    $ff1 = new ServiceTrans("");
                                    $user_id_table = $ff1->getUserId($ff1->
                                    setUserId($trans1->user_id));
                                    $service_id_table = $ff1->getServiceId($ff1->
                                    setServiceId($trans1->service_id));

                                    $transaction_date_table = $ff1->
                                        getTransactionDay($ff1->setTransactionDay($trans1->date));

                                    $balance_before_table = $ff1->
                                        getBalanceBefore($ff1->setBalanceBefore($trans1->balance_before));

                                    $balance_after_table = $ff1->
                                        getBalanceAfter($ff1->setBalanceAfter($trans1->balance_after));

                                    $charge_price_table = $ff1->
                                        getChargePrice($ff1->setChargePrice($trans1->charge_price));


                                    echo "<tr><td>$user_id_table</td>
                                    <td>$service_id_table</td>
                                    <td>$transaction_date_table</td>
                                    <td>$balance_before_table</td>
                                    <td>$charge_price_table</td>
                                    <td>$balance_after_table</td></tr>";

                                }
                                echo "</table>";
                                ?>
<p><p><b>Tariff transactions</b><p><p>
  <?php

          class TariffTrans{
              private $user_id;
              private $tariff_id;
              private $date;
              protected $balance_before;
              private $charge_price;
              protected $balance_after;

              function setUserId($user_id){
                  $this->user_id = $user_id;
              }
              function setServiceId($tariff_id){
                  $this->tariff_id = $tariff_id;
              }
              function setTransactionDay($date){
                  $this->date = $date;
              }
              function setBalanceBefore($balance_before){
                  $this->balance_before = $balance_before;
              }
              function setChargePrice($charge_price){
                    $this->charge_price = $charge_price;
                }
              function setBalanceAfter($balance_after){
                  $this->balance_after = $balance_after;
              }

              function getUserId(){
                  return $this->user_id;
              }
              function getServiceId(){
                  return $this->tariff_id;
              }
              function getTransactionDay(){
                  return $this->date;
              }
              function getBalanceBefore(){
                  return $this->balance_before;
              }
              function getChargePrice(){
                  return $this->charge_price;
              }
              function getBalanceAfter(){
                  return $this->balance_after;
              }

              function __construct($user_id = '', $tariff_id = '', $date = '', $balance_before = '', $balance_after = '', $charge_price = ''){
                  $this->user_id = $user_id;
                  $this->tariff_id = $tariff_id;
                  $this->date = $date;
                  $this->balance_before = $balance_before;
                  $this->balance_after = $balance_after;
                  $this->charge_price = $charge_price;
              }
              static function Table5(){
                  echo "<tr>
                  <td>User ID</td>
                  <td>Tariff ID</td>
                  <td>Transaction date</td>
                  <td>Balance before</td>
                  <td>ChargePrice</td>
                  <td>Balance after</td>
                  </tr>";
              }
          }
          $sql_function = "SELECT * FROM tariff_transactions";
          $results = mysqli_query($connection, $sql_function);
          echo "<table>";
          TariffTrans::Table5();
          while($trans1 = mysqli_fetch_object($results)){
              $ff1 = new TariffTrans("");
              $user_id_table = $ff1->getUserId($ff1->
              setUserId($trans1->user_id));
              $service_id_table = $ff1->getServiceId($ff1->
              setServiceId($trans1->tariff_id));

              $transaction_date_table = $ff1->
                  getTransactionDay($ff1->setTransactionDay($trans1->date));

              $balance_before_table = $ff1->
                  getBalanceBefore($ff1->setBalanceBefore($trans1->balance_before));

              $balance_after_table = $ff1->
                  getBalanceAfter($ff1->setBalanceAfter($trans1->balance_after));

              $charge_price_table = $ff1->
                  getChargePrice($ff1->setChargePrice($trans1->charge_price));


              echo "<tr><td>$user_id_table</td>
              <td>$service_id_table</td>
              <td>$transaction_date_table</td>
              <td>$balance_before_table</td>
              <td>$charge_price_table</td>
              <td>$balance_after_table</td></tr>";

          }
          echo "</table>";
          ?>
