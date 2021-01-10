<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Satisfy&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="bank.css">
    <style>
table {
border-collapse: collapse;
width: 70%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
border:1px solid black;
padding: 4px;
margin: 25px;
}
th {
background-color: black;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
#bank19{
    color: yellowgreen;
    margin: 30px;
}
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
    <table><h3 id="bank19">Transaction History:</h3>
    <hr>
<tr>
<th>Customers</th>


<th>CURRENT_BALANCE</th>


</tr>
<?php
$sender= filter_input(INPUT_POST,'s_name');
$conn = mysqli_connect("localhost", "root", "", "apnabank");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT CUSTOMER_NAME,CURRENT_BALANCE FROM  customer ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["CUSTOMER_NAME"]. "</td><td>" .  $row["CURRENT_BALANCE"] . "</td></tr>"

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