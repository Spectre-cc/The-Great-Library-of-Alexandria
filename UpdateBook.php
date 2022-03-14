<?php 
include("dbh.php");
//Update Book
if(isset($_POST['submit'])){
    $BookID=$_POST['BookID'];
    $BookTitle=$_POST['BookTitle'];
    $BookAuthor=$_POST['BookAuthor'];
    $YearPublished=$_POST['YearPublished'];
    $Genre=$_POST['Genre'];
    $query="update Book set bookTitle='$BookTitle', bookAuthor='$BookAuthor', year='$YearPublished', genre='$Genre' where bookID='$BookID'";
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

    <script>
        function instruction(){
            alert("Instruction:\nPlease Enter ID of the book that you want to update.");
    </script>

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

        </tr>
    </table>
</div>

<p style="font-size:large; text-align:center; margin:0px;">Please Enter Book ID of the Book that you want to Update.</p>

<form id="UBForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h2>Update Book</h2><br>
    <label for="BID"><strong>Book ID</strong></label>
    <input required type="number" id="BID" name="BookID" placeholder="Insert Member ID Here...">
    <label for="Booktitle"><strong>Book Title</strong></label>
    <input required type="text" id="Booktitle" name="BookTitle" placeholder="Insert Book Title Here...">
    <label for="Bookauthor"><strong>Book Author</strong></label>
    <input required type="text" id="Bookauthor" name="BookAuthor" placeholder="Insert Book Author Here...">
    <label for="Byear"><strong>Year Published</strong></label>
    <input required type="number" id="Byear" name="YearPublished" placeholder="Insert Year Published Here...">
    <label for="Bgenre"><strong>Genre</strong></label>
    <input required type="text" id="Bgenre" name="Genre" placeholder="Insert Book Genre Here...">
    <input type="submit" name="submit" value="Update">
</form>
</div>
</div>

</body>
</html>