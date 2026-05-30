<?php
if(isset($_POST['yorum'])) {
    $yorum = trim($_POST['yorum']);
    if(!empty($yorum)) {
        // yorumları data.txt içine kaydet
        file_put_contents("data.txt", $yorum . PHP_EOL, FILE_APPEND);
        echo "✅ Yorum eklendi! <a href='comments.php'>Yorumlara dön</a>";
    } else {
        echo "⚠️ Boş yorum eklenemez. <a href='comments.php'>Geri dön</a>";
    }
} else {
    echo "⚠️ Formdan veri gelmedi. <a href='comments.php'>Geri dön</a>";
}
?>
