<?php 
include("dbh.php");
//AddMember
if(isset($_POST['submit'])){
        $memberFullname=$_POST['FullName'];
        $memberContact=$_POST['ContactNumber'];
        $memberAddress=$_POST['Address'];
        $query="insert into Member(fullName,contactNumber,address) values('$memberFullname','$memberContact','$memberAddress')";
        $run=mysqli_query($con, $query) or die(mysqli_error());
        header("Location: AllMembers.php");
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
    <title>Add Member</title>
</head>

<?php include('Index.php'); ?>

<div class="container">
<div class="functionCon">
        <form id="AddMForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h2>Add New Member</h2><br>
                <label for="FullName"><strong>Full Name</strong></label>
                <input required type="text" id="FullName" name="FullName" placeholder="Insert Full Name Here...">
                <label for="CNumber"><strong>Contact Number</strong></label>
                <input required type="text" id="CNumber" name="ContactNumber" placeholder="Insert Contact Number Here...">
                <label for="Address"><strong>Address</strong></label>
                <input required type="text" id="Address" name="Address" placeholder="Insert Address Here...">
                <input type="submit" name="submit" value="Add">
        </form>
</div>
</div>

<body>
    
</body>
</html>