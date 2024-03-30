<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuptialAgree</title>
    <link rel="stylesheet" href="css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&family=Overlock:wght@900&family=Roboto:wght@500&family=Zen+Kaku+Gothic+New&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">


</head>
<body>

<?php include 'header.php'; ?>

<?php
$title = $_POST['title'] ?? 'No title';
$subtitle = $_POST['subtitle'] ?? 'No subtitle';
$category = $_POST['category'] ?? 'No category';
$content = $_POST['content'] ?? 'No content';
$image = $_FILES['image'] ?? null;


// タイトルと内容を表示（実際のアプリケーションでは、データベースに保存するなどの処理をここに記述します）
echo "<h1>" . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . "</h1>";
echo "<h3>" . htmlspecialchars($subtitle, ENT_QUOTES, 'UTF-8') . "</h3>";
echo "<h5>" . htmlspecialchars($category, ENT_QUOTES, 'UTF-8') . "</h5>";
//nl2br：文字列中の改行文字（\n）をHTMLの改行タグに変換。
echo "<p>" . nl2br(htmlspecialchars($content, ENT_QUOTES, 'UTF-8')) . "</p>";


// データベース接続情報
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_cms_database";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// ブログ記事を取得するクエリ
$sql = "SELECT title, content, date_posted FROM blog_posts ORDER BY date_posted DESC LIMIT 1";
$result = $conn->query($sql);

// データの表示
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='blog-post'>";
    echo "<h2>" . $row["title"] . "</h2>";
    echo "<p>" . $row["content"] . "</p>";
    echo "<p>Posted on: " . $row["date_posted"] . "</p>";
    echo "</div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>



<?php include 'footer.php'; ?>
  
</body>
</html>


