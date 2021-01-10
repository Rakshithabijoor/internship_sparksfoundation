<?php
$username= filter_input(INPUT_POST,'name');
$email= filter_input(INPUT_POST,'email');
$phone= filter_input(INPUT_POST,'phone');
$address=filter_input(INPUT_POST,'address');
$amount=filter_input(INPUT_POST,'amount');
if(!empty($username)){
   
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
            $sql="INSERT INTO  customer (CUSTOMER_NAME,EMAIL,ADDRESS,PHONE,CURRENT_BALANCE)
            values('$username','$email','$address','$phone','$amount')";
            if($conn->query($sql)){
                
                include 'bank.html';
            }
            else{
                echo"Error".$sql."
                ".$conn->error;
            }
            $conn->close();
        }
       
    }
    else{
        echo"Username should not be empty";
        die();
    }


?>