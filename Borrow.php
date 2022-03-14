<?php 
include("dbh.php");
//Borrow
if(isset($_POST['submit'])){
    $Booktitle=$_POST['BookTitle'];
    $MemberName=$_POST['MemberName'];
    $BorrowDate=$_POST['BorrowDate'];
    $query="insert into BorrowerHistory(book_bookTitle,member_fullName,borrowDate) values('$Booktitle','$MemberName','$BorrowDate')";
    $run=mysqli_query($con, $query) or die(mysqli_error());
    header("Location: BorrowHistory.php");
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
    <title>Borrow Book</title>
</head>
<body>

<?php include('Index.php'); ?>

<div class="container">
<div class="functionCon">

<div id="tables">
    <table id="ABtable">
        <tr>
            <th>Book ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Genre</th>
        </tr>

<!-- Display Data into Table --->
<?php
//Database Connection
include("dbh.php");

//Query and Display
$query = "select * from Book";
$run = mysqli_query($con,$query);
$result = $con-> query($query);
if($result-> num_rows>0){
    while($data= $result-> fetch_assoc()){
        echo "
                <tr>
                    <td>".$data['bookID']."</td>
                    <td>".$data['bookTitle']."</td>
                    <td>".$data['bookAuthor']."</td>
                    <td>".$data['year']."</td>
                    <td>".$data['genre']."</td>
                </tr>
        ";
    }
}
?>
<!-- Display Data into Table --->
    </table>
</div>

<form id="BForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h2>Borrow Book</h2><br>
            <label for="Booktitle"><strong>Book Title</strong></label>
            <input required type="text" id="Booktitle" name="BookTitle" placeholder="Insert Book Title Here...">
            <label for="MName"><strong>Member Name</strong></label>
            <input required type="text" id="MName" name="MemberName" placeholder="Insert Member Name Here...">
            <label for="BDate"><strong>Borrow Date</strong></label>
            <input required type="date" id="BDate" name="BorrowDate">
            <input type="submit" name="submit" value="Borrow">
        </form>
</div>
</div>

</body>
</html>