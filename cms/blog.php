<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>


<div class="cms-container">

<?php include 'sidebar.php'; ?>


        <main class="content">
            <form action="write.php" method="post" enctype="multipart/form-data">
                <h1>Write a blog</h1>
                <div class="form-group">
                    <label for="title">Blog Title</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="subtitle">Blog Subtitle</label>
                    <input type="text" id="subtitle" name="subtitle">
                </div>
                <div class="form-group">
                    <label for="category">Blog Category</label>
                    <select id="category" name="category">
                        <option value="news">News</option>
                        <option value="updates">Updates</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Blog Image</label>
                    <input type="file" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="content" name="content"></textarea>
                </div>
                <button type="submit">投稿</button>
            </form>
        </main>
    </div>


</body>
</html>

