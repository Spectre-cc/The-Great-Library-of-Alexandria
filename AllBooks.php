<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="rsrcs/logo.ico">
    <link rel="stylesheet" href="rsrcs/style.css">
    <title>All Books</title>
</head>
<body>

<?php include('Index.php'); ?>

<div class="container">
    <!------------------------Search Bar------------------------------->
    <div id="searchcontainer">
        <form id="searchForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input required type="text" placeholder="Search.." name="search" id="searchBar">
            <input type="submit" name="submit" value="Search" style="width:50px;font-size:14px;padding-left:2px;"><br>
            <label><strong>Filter by:</strong></label>
            <input required type="radio" id="filter1" name="filter" value="bookTitle">
            <label for="filter1">Title</label>
            <input required type="radio" id="filter2" name="filter" value="bookAuthor">
            <label for="filter2">Author</label>
            <input required type="radio" id="filter3" name="filter" value="year">
            <label for="filter3">Year</label>
            <input required type="radio" id="filter4" name="filter" value="genre">
            <label for="filter4">Genre</label>
        </form>
    </div>
    <!------------------------Search Bar------------------------------->

<div class="functionCon">
<div id="tables">
    <table id="ABtable">
        <caption id="AB">Books</caption>
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

if(isset($_POST['submit'])){
    $search=$_POST['search'];
    $filter=$_POST['filter'];
    $query="select * from Book where bookTitle like '%$search%' order by $filter ASC";
    $run=mysqli_query($con, $query) or die(mysqli_error());
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

}
else{
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
}
?>
<!-- Display Data into Table --->

    </table>
</div>
</div>
</div>
    
</body>
</html>



