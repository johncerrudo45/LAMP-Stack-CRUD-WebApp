
<?php
session_start();

require 'db.php';

$_SESSION['message'] = "Record saved successfully!";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);

    if (empty($title) || empty($description)) {
        die("All fields are required.");
    }

    $sql = "INSERT INTO books (title, description)
              VALUES (:title, :description);";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':title' => $title,
        ':description' => $description
    ]);

    echo "Record saved successfully!";
}

header("Location: add.php");

?>

