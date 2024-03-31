<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&family=Overlock:wght@900&family=Roboto:wght@500&family=Zen+Kaku+Gothic+New&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">


</head>

<style>
.confirmation-message {
    padding: 20px;
    margin: 140px auto;
    max-width: 600px;
    color: #333; /* Dark text color for readability */
    text-align: center;
    font-size: 1.1em; /* Slightly larger font size */
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .confirmation-message {
        margin: 20px 10px; /* Smaller side margins on smaller screens */
        padding: 20px 10px; /* Smaller padding on smaller screens */
    }
}

</style>

<body>

<?php include 'header.php'; ?>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nickname = $_POST['nickname'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    $agree = isset($_POST['agree']) ? 'Yes' : 'No';

    // CSVファイルにデータを書き込む
    $file = fopen('data.csv', 'a'); // 'a' は追記モードで開く
    fputcsv($file, [$nickname, $email, $message, $agree]);
    fclose($file);

echo '<div class="confirmation-message">Thank you for your message. It has been sent.</div>';
} else {
    echo '<div class="confirmation-message">Please submit the form.</div>';
}

?>

<?php include 'footer.php'; ?>

</body>
</html>

