<?php
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']); 
} else {
    echo "Halo, Saya Sandriana Ariani";
}
?>