<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <link rel="stylesheet" href="****/styles.css"> <!-- **** >> placeholder -->
</head>
<body>
    <nav>
        <ul>
            <a id="books" href="index.php">Books</a>
            <a id="add-books" href="add.php">Add </a>
        </ul>
    <h3>
<?php

 // message after adding a record

 echo htmlspecialchars($_SESSION['message']);

 // delete to reset message

 unset($_SESSION['message']);

?>

</h3>
    </nav>
