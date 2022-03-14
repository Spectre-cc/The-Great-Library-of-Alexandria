<?php 
include("dbh.php");
//Delete Member
if(isset($_POST['submit'])){
    $MemberID=$_POST['MemberID'];
    $query="delete from Member where memberID='$MemberID'";
    $run=mysqli_query($con, $query);
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
    <title>Delete Member</title>
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

<p style="font-size:large; text-align:center; margin:0px;">Please Enter Member ID of the Member that you want to Delete.</p>

    <form id="DMForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Delete Member</h2>
        <input required type="number" id="deleteID" name="MemberID" placeholder="Member ID">
        <input type="submit" name="submit" value="Delete">
    </form>
</div>
</div>

</body>
</html>