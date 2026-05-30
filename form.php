<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Film Öner</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div style="padding:30px;">

    <h1>📝 Film Öner</h1>

    <!-- MENÜ -->
    <nav style="margin:20px 0;">
        <a href="index.php">🏠 Ana Sayfa</a>
        <a href="about.php">ℹ️ Hakkında</a>
        <a href="films.php">🎥 Filmler</a>
        <a href="form.php">📝 Öneri Yap</a>
    </nav>

    <!-- FORM KARTI -->
    <div style="
        background: rgba(255,255,255,0.1);
        border: 1px solid #00ffd5;
        padding: 30px;
        border-radius: 15px;
        width: 50%;
        margin: auto;
    ">

        <h2>🎬 Film Öner Formu</h2>

        <form action="process.php" method="post">

            👤 İsim:<br>
            <input type="text" name="name" placeholder="Adınızı yazın" style="width:90%; padding:8px;"><br><br>

            🎥 Film Adı:<br>
            <input type="text" name="film" placeholder="Önerdiğiniz film" style="width:90%; padding:8px;"><br><br>

            ⭐ Puan:<br>
            <select name="rate" style="width:90%; padding:8px;">
                <option value="5">⭐⭐⭐⭐⭐ (5)</option>
                <option value="4">⭐⭐⭐⭐ (4)</option>
                <option value="3">⭐⭐⭐ (3)</option>
                <option value="2">⭐⭐ (2)</option>
                <option value="1">⭐ (1)</option>
            </select>

            <br><br>

            <input type="submit" value="🚀 Gönder"
            style="
                padding:10px 20px;
                background:#00ffd5;
                border:none;
                border-radius:8px;
                cursor:pointer;
                font-weight:bold;
            ">

        </form>

    </div>

    <div style="margin-top:20px; opacity:0.8;">
        💡 Önerileriniz yıldız puanı ile birlikte kaydedilir.
    </div>

</div>

</body>
</html>