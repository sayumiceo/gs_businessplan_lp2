<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read Messages</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nickname</th>
            <th>Email</th>
            <th>Message</th>
            <th>Agreed to Terms</th>
        </tr>
        <?php
        // CSVファイルを開き、データを読み込んで行ごとに表示
        if (($file = fopen('data.csv', 'r')) !== FALSE) {
            while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
                echo '<tr>';
                foreach ($data as $cell) {
                    echo '<td>' . htmlspecialchars($cell) . '</td>';
                }
                echo '</tr>';
            }
            fclose($file);
        }
        ?>
    </table>
</body>
</html>
