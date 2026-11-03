<?php include('nav.php'); ?>
<head>
   <title> Add Page</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <form action="submit.php" method="POST">
        <label for="title">Book Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
