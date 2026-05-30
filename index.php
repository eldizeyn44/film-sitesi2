<?php
$topFilms = [
    ["name" => "Inception", "views" => 1200000],
    ["name" => "Interstellar", "views" => 1100000],
    ["name" => "The Matrix", "views" => 950000],
    ["name" => "Avatar", "views" => 1500000],
    ["name" => "Joker", "views" => 870000]
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Film Öneri Sitesi</title>
    <link rel="stylesheet" href="style.css?v=999">
</head>

<body>
<div style="padding:30px;">

    <h1>🎬 Film Öneri Sitesi</h1>
    <p>En iyi filmleri keşfet, öner ve paylaş!</p>

    <!-- MENÜ -->
    <nav>
        <a href="index.php">🏠 Ana Sayfa</a>
        <a href="about.php">ℹ️ Hakkında</a>
        <a href="films.php">🎥 Filmler</a>
        <a href="form.php">📝 Öneri Yap</a>
        <a href="comments.php">💬 Yorumlar</a>
        <a href="contact.php">📩 İletişim</a>
    </nav>

    <!-- KARTLAR -->
    <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:20px; margin-top:30px;">
        <div class="card">
            🎬 <h3>Film Listesi</h3>
            <p>En popüler filmleri keşfet.</p>
        </div>
        <div class="card">
            ⭐ Puanlama
            <p>Filmleri yıldızla değerlendir.</p>
        </div>
        <div class="card">
            💬 Yorumlar
            <p>Film önerilerini paylaş.</p>
        </div>
        <div class="card">
            📩 İletişim
            <p>Bize mesaj gönder.</p>
        </div>
    </div>

    <!-- EN ÇOK İZLENENLER -->
    <h2 style="margin-top:50px;">🔥 En Çok İzlenen Filmler</h2>
    <div>
        <?php
        foreach ($topFilms as $film) {
            echo "
            <div class='card'>
                🎬 <b>{$film['name']}</b><br>
                👁️ İzlenme: " . number_format($film["views"]) . "
            </div>
            ";
        }
        ?>
    </div>

</div>
</body>
</html>
