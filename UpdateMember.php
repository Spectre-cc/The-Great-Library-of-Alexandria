<?php 
include("dbh.php");
//Update Member
if(isset($_POST['submit'])){
    $memberID=$_POST['MemberID'];
    $memberFullname=$_POST['FullName'];
    $memberContact=$_POST['ContactNumber'];
    $memberAddress=$_POST['Address'];
    $query="update Member set fullName='$memberFullname', contactNumber='$memberContact', address='$memberAddress' where memberID='$memberID'";
    $run=mysqli_query($con, $query) or die(mysqli_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rsrcs/style.css">
    <link rel="icon" href="rsrcs/logo.ico">
    <title>Update Book</title>
</head>
<body>

<?php include('Index.php'); ?>

<div class="container">
<div class="functionCon">

<div id="tables">
    <table id="Mtable">
        <tr>
            <th>Member ID</th>
            <th>Full Name</th>
            <th>Contact Number</th>
            <th>Address</th>
        </tr>

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

<p style="font-size:large; text-align:center; margin:0px;">Please Enter Member ID of the Member that you want to Update.</p>

<form id="UMForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h2>Update Member</h2><br>
    <label for="UMID"><strong>Member ID</strong></label>
    <input required type="number" id="UMID" name="MemberID" placeholder="Insert Member ID Here...">
    <label required for="FullName"><strong>Full Name</strong></label>
    <input required type="text" id="FullName" name="FullName" placeholder="Insert Full Name Here...">
    <label for="CNumber"><strong>Contact Number</strong></label>
    <input required type="text" id="CNumber" name="ContactNumber" placeholder="Insert Contact Number Here...">
    <label for="Address"><strong>Address</strong></label>
    <input required type="text" id="Address" name="Address" placeholder="Insert Address Here...">
    <input type="submit" name="submit" value="Update">
</form>
</div>
</div>

</body>
</html>