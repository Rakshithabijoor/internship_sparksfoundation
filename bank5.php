<?php
$sender= filter_input(INPUT_POST,'s_name');
$reciever= filter_input(INPUT_POST,'r_name');
$amount= filter_input(INPUT_POST,'amount');

if(!empty($sender)){
   
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="apnabank";
        //create connection
        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('connect Error ('. mysqli_connect_errno().')'
            .mysqli_connect_error());
        }
        else{
            $sql="UPDATE customer SET CURRENT_BALANCE=CURRENT_BALANCE+$amount WHERE CUSTOMER_NAME='$reciever';";
            $sql.="UPDATE customer SET CURRENT_BALANCE=CURRENT_BALANCE-$amount WHERE CUSTOMER_NAME='$sender';";
            if($conn->multi_query($sql)){
                include 'bank6.php';
            }
            else{
                echo"Error".$sql."
                ".$conn->error;
            }
            $conn->close();
        }
       
    }
    else{
        echo"Sender's name  is empty";
        die();
    }


?>