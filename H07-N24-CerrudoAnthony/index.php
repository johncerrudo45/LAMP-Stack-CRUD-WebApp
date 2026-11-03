<?php include('nav.php');
      require 'db.php';

 $sql = $pdo->query('SELECT * FROM books;');
 $books = $sql->fetchAll(PDO::FETCH_ASSOC);

 ?>
<head>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <table>
        <tr>
            <th>Row Counter</th>
            <th>Book Title</th>
            <th>Description</th>
        </tr>
	<?php foreach ($books as $book): ?>
        <tr>
            <td><?= htmlspecialchars($book["id"]) ?></td>
            <td><?= htmlspecialchars($book["title"]) ?></td>
            <td><?= htmlspecialchars($book["description"]) ?></td>
        </tr> 
	<?php endforeach; ?>
    </table>
</body>
</html>
