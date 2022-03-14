<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="rsrcs/logo.ico">
    <link rel="stylesheet" href="rsrcs/style.css">
    <title>All Members</title>
</head>
<body>

<?php include('Index.php'); ?>

<div class="container">

<div class="functionCon">
<div id="tables">

<table id="Mtable">
                <caption>Members</caption>
                <tr>
                    <th>Member ID</th>
                    <th>Full Name</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                </tr>

<!-- Display Data into Table --->
<?php
//Database Connection
include("dbh.php");

//Query and Display
$query = "select * from Member";
$run = mysqli_query($con,$query);
$result = $con-> query($query);
if($result-> num_rows>0){
    while($data= $result-> fetch_assoc()){
        echo "
                <tr>
                    <td>".$data['memberID']."</td>
                    <td>".$data['fullName']."</td>
                    <td>".$data['contactNumber']."</td>
                    <td>".$data['address']."</td>
                </tr>
        ";
    }
}
?>
<!-- Display Data into Table --->

            </table>
</div>
</div>
</div>
    
</body>
</html>