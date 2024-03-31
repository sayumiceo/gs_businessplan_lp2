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

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  line-height: 1.6;
  background-color: #fff; 
}

h1 {
    text-align: center;
    padding: 20px 0; /* 上下の余白 */
    margin: 0 20px; /* 左右の余白 */
    background-color: #fff; 
    color: #333; 
}

.blog-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); 
    gap: 20px; 
    margin: 20px; 
}

.blog-box {
    padding: 20px; 
    border-radius: 10px; 
    background-color: #f9f9f9; 
}

.blog-title {
    font-size: 1.2em; 
    margin-bottom: 0.5em; 
}

.blog-subtitle,
.blog-category,
.blog-content {
    margin-bottom: 0.5em; 
}

@media (max-width: 768px) {
    .blog-container {
        grid-template-columns: 1fr; /* 画面が狭いときは1列にする */
    }
}

</style>

<?php include 'header.php'; ?>

<h1>Our Blog</h1>

<div class="blog-container">
        <?php
        // CSVファイルを開き、データを読み込んでボックス形式で表示
        if (($file = fopen('BlogData.csv', 'r')) !== FALSE) {
            while (($data = fgetcsv($file)) !== FALSE) {
                echo '<div class="blog-box">';
                echo '<div class="blog-title">' . htmlspecialchars($data[0]) . '</div>';
                echo '<div class="blog-subtitle">' . htmlspecialchars($data[1]) . '</div>';
                echo '<div class="blog-category">' . htmlspecialchars($data[2]) . '</div>';
                echo '<div class="blog-content">' . nl2br(htmlspecialchars($data[3])) . '</div>';
                echo '</div>';
            }
            fclose($file);
        }
        ?>
    </div>



<?php include 'footer.php'; ?>
  
</body>
</html>



