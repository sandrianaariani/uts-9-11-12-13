<?php
if (isset($_POST['Nama']) && !empty($_POST['Nama'])) {
    $nama = $_POST['Nama'];
    echo "Halo " . htmlspecialchars($nama);
} else {
    echo "Nama : Sandriana Ariani";
}
?>