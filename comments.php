<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Yorumlar</title>
    <link rel="stylesheet" href="style.css?v=999">
</head>
<body>
<div style="padding:30px;">
    <h1>💬 Yorumlar</h1>

    <?php
    $dosya = "data.txt";
    if(file_exists($dosya)) {
        $satirlar = file($dosya, FILE_IGNORE_NEW_LINES);
        foreach($satirlar as $yorum) {
            echo "<p>👉 " . htmlspecialchars($yorum) . "</p>";
        }
    } else {
        echo "<p>Henüz yorum yok.</p>";
    }
    ?>

    <h2>Yeni Yorum Ekle</h2>
    <form method="post" action="save_comment.php">
        <input type="text" name="yorum" placeholder="Yorumunuzu yazın" required>
        <button type="submit">Gönder</button>
    </form>
</div>
</body>
</html>
