<?php
$films = [
    ["name" => "Inception", "rate" => 5],
    ["name" => "Interstellar", "rate" => 5],
    ["name" => "The Matrix", "rate" => 4],
    ["name" => "Avatar", "rate" => 3],
    ["name" => "Joker", "rate" => 5]
];

// 🔍 arama
$search = $_GET["search"] ?? "";
$search = strtolower($search);

// ⭐ PUANA GÖRE SIRALA (en yüksek üstte)
usort($films, function($a, $b) {
    return $b["rate"] - $a["rate"];
});
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Filmler</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>🎬 Film Listesi</h1>

<!-- NAV -->
<nav>
    <a href="index.php">🏠 Ana Sayfa</a>
    <a href="about.php">ℹ️ Hakkında</a>
    <a href="form.php">📝 Öneri Yap</a>
</nav>

<!-- ARAMA -->
<form method="GET">
    <input type="text" name="search" placeholder="Film ara...">
    <input type="submit" value="Ara">
</form>

<h2>🍿 Filmler</h2>

<?php
foreach ($films as $film) {

    if ($search == "" || strpos(strtolower($film["name"]), $search) !== false) {

        $stars = str_repeat("⭐", $film["rate"]);

        // 🏆 en yüksek puanlı film etiketi
        $badge = ($film["rate"] == 5) ? "🏆 EN POPÜLER" : "";

        echo "
        <div class='card'>
            <div style='font-size:20px;'>
                🎬 <b>{$film['name']}</b> $badge
            </div>
            <div style='margin-top:8px;'>
                $stars
            </div>
        </div>
        ";
    }
}
?>

<hr>

<h2>📢 Kullanıcı Önerileri</h2>

<?php
$file = "data.txt";

if (file_exists($file)) {

    $lines = file($file);

    if (count($lines) == 0) {
        echo "<p>Henüz öneri yok.</p>";
    } else {

        foreach ($lines as $line) {
            echo "<div class='card'>⭐ $line</div>";
        }
    }

} else {
    echo "<p>Henüz hiç öneri yapılmamış.</p>";
}
?>

</body>
</html>