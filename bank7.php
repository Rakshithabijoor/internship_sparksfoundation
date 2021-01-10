<!DOCTYPE html>
<html>
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Satisfy&display=swap" rel="stylesheet">
    
<title>Table with database</title>
<style>
table,td,th,tr {
border:1px solid black;
border-collapse: collapse;
font-size: 23px;

}
th {
background-color: black;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
     <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="bank.html">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bank3.php">View_Customers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bank1.html">Create_Account</a>
        </li>
        
    </ul>
<table>
<tr>

<th>Customer_Name</th>

<th>Customer_Email</th>
<th>Address</th>
<th>Customer_phone</th>
<



</tr>

<?php
$name= filter_input(INPUT_POST,'s_name');

$conn = mysqli_connect("localhost", "root", "", "apnabank");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT CUSTOMER_NAME,EMAIL,ADDRESS,PHONE FROM  customer ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["CUSTOMER_NAME"]. "</td><td>" .  $row["EMAIL"] . "</td><td>".$row["ADDRESS"]."</td><td>".$row["PHONE"]."</td></tr>"

;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>

</html>
