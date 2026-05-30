<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <link rel="stylesheet" href="style.css?v=999">
</head>
<body>
<div style="padding:30px;">
    <h1>📩 İletişim</h1>
    <p>Bize ulaşmak için aşağıdaki formu doldurun:</p>

    <form method="post" action="contact.php">
        <label>Adınız:</label><br>
        <input type="text" name="ad" required><br><br>

        <label>Mesajınız:</label><br>
        <textarea name="mesaj" required></textarea><br><br>

        <button type="submit">Gönder</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $ad = htmlspecialchars($_POST["ad"]);
        $mesaj = htmlspecialchars($_POST["mesaj"]);
        echo "<p>✅ Teşekkürler <b>$ad</b>, mesajınız alındı!</p>";
        echo "<p>📨 Mesajınız: $mesaj</p>";
    }
    ?>
</div>
</body>
</html>
