<?php 
include("dbh.php");
//AddBook
if(isset($_POST['submit'])){
    $bookTitle=$_POST['BookTitle'];
    $bookAuthor=$_POST['BookAuthor'];
    $bookYear=$_POST['YearPublished'];
    $bookGenre=$_POST['Genre'];
    $query="insert into Book(bookTitle,bookAuthor,year,genre) values('$bookTitle','$bookAuthor','$bookYear','$bookGenre')";
    $run=mysqli_query($con, $query) or die(mysqli_error());
    header("Location: AllBooks.php");
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
    <title>Add Book</title>
</head>

<?php include('Index.php'); ?>

<div class="container">
    <div class="functionCon">
    <form id="AddBForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Add New Book</h2><br>
        <label for="Btitle"><strong>Title</strong></label>
        <input required type="text" id="Btitle" name="BookTitle" placeholder="Insert Book Title Here...">
        <label for="Bauthor"><strong>Book Author</strong></label>
        <input required type="text" id="Bauthor" name="BookAuthor" placeholder="Insert Book Author Here...">
        <label for="Byear"><strong>Year Published</strong></label>
        <input required type="number" id="Byear" name="YearPublished" placeholder="Insert Year Published Here...">
        <label for="Bgenre"><strong>Genre</strong></label>
        <input required type="text" id="Bgenre" name="Genre" placeholder="Insert Book Genre Here...">
        <input type="submit" name="submit" value="Add">
    </form>
    </div>
</div>

<body>
    
</body>
</html>