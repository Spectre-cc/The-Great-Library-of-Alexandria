<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="rsrcs/logo.ico">
    <link rel="stylesheet" href="rsrcs/style.css">
    <title>The Great Library of Alexandria</title>
</head>
<body>

<div id="container">
    <!----------------------Logo and Title-------------------------->
    <div class="title">  
        <a href="Index.php"><img src="rsrcs/logo.png" alt="logo"></a>
        <h1 id="wew">The Great Library of Alexandria</h1>
        <hr>
    </div>
    <!----------------------Logo and Title-------------------------->

    <!------------------------Nav Bar------------------------------->
    <div class="options">
        <div class="main">
            <div class="dropdown">
                <button>View</button>
                <div class="dropdown-content">
                    <a href="AllBooks.php">Books</a>
                    <a href="AllMembers.php" >Members</a>
                  </div>
            </div>
        </div>
        <div class="main">
            <div class="dropdown">
                <button>Inventory</button>
                <div class="dropdown-content">
                    <a href="AddBook.php">Add New Book</a>
                    <a href="UpdateBook.php">Update Book</a>
                    <a href="DeleteBook.php">Delete Book</a>
                  </div>
            </div>
        </div>
        <div class="main">
            <div class="dropdown">
                <button>Members</button>
                <div class="dropdown-content">
                    <a href="AddMember.php">Add Member</a>
                    <a href="UpdateMember.php">Update Member</a>
                    <a href="DeleteMember.php">Delete Member</a>
                    <a id="borrow" href="Borrow.php">Borrow</a>
                    <a href="Return.php">Return</a>
                    <a href="BorrowHistory.php">Borrow History</a>
                  </div>
            </div>
        </div>
    </div>
    <!------------------------Nav Bar------------------------------->
</div>
    
</body>
</html>