<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? 'No title';
    $subtitle = $_POST['subtitle'] ?? 'No subtitle';
    $category = $_POST['category'] ?? 'No category';
    $content = $_POST['content'] ?? 'No content';
    
    // CSVファイルにデータを書き込む
    $file = fopen('../BlogData.csv', 'a'); // 'a' は追記モードで開く
    fputcsv($file, [$title, $subtitle, $category, $content]);
    fclose($file);
    
    echo '<div class="confirmation-message">Done! Successfully posted!</div>';
} else {
    echo '<div class="confirmation-message">Please submit the form.</div>';
}
?>


</body>
</html>
