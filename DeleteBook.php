<?php 
include("dbh.php");
//Delete Book
if(isset($_POST['submit'])){
    $BookID=$_POST['BookID'];
    $query="delete from Book where bookID='$BookID'";
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
    <title>Delete Book</title>
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

<p style="font-size:large; text-align:center; margin:0px;">Please Enter Book ID of the Book that you want to Delete.</p>

    <form id="DBForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h2>Delete Book</h2>
            <input required type="number" id="deleteID" name="BookID" placeholder="Book ID">
            <input type="submit" name="submit" value="Delete">
    </form>
</div>
</div>

</body>
</html>