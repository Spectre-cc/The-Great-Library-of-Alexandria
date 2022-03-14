<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="rsrcs/logo.ico">
    <link rel="stylesheet" href="rsrcs/style.css">
    <title>Borrow History</title>
</head>
<body>
<?php include('Index.php'); ?>

<div class="container">
<div class="functionCon">
<div id="tables">
    <table id="BHtable">
        <caption>Borrow History</caption>
        <tr>
            <th>Borrower ID</th>
            <th>Book Borrowed</th>
            <th>Borrower</th>
            <th>Date Borrowed</th>
            <th>Date Returned</th>
        </tr>

<!-- Display Data into Table --->
<?php
//Database Connection
include("dbh.php");

//Query and Display
$query = "select * from BorrowerHistory";
$run = mysqli_query($con,$query);
$result = $con-> query($query);
if($result-> num_rows>0){
    while($data= $result-> fetch_assoc()){
        echo "
                <tr>
                    <td>".$data['bhID']."</td>
                    <td>".$data['book_bookTitle']."</td>
                    <td>".$data['member_fullName']."</td>
                    <td>".$data['borrowDate']."</td>
                    <td>".$data['returnDate']."</td>
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