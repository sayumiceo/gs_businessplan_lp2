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
    <!-- <?php
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    $agree = $_POST['agree'] ?? '';

    // ここで入力値の検証とサニタイズを行います。

    // 入力値をメールで送信するか、データベースに保存するなどの処理をここに追加します。
    // mail() 関数を使用してメールを送信する例
    $to = 'your-email@example.com'; // ここには実際のメールアドレスを使用します
    $subject = 'New Contact Form Submission';
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    $mail_sent = mail($to, $subject, $message, $headers);

    // メール送信の結果に基づいてユーザーにフィードバックを与える
    if ($mail_sent) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Sorry, there was a problem sending your message. Please try again.";
    }

    // 注意: mail() 関数はローカル環境では動作しません。サーバーに設定が必要です。
    ?> -->

</main>
</div>