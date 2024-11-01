<?php
// Membuat array multidimensi untuk produk
$produk = [
    ["ID" => 005 ,"nama" => "Pepsodent", "stok" => 30, "harga" => 11980],
    ["ID" => 007,"nama" => "Sunlight", "stok" => 15, "harga" => 12880],
    ["ID" => 001,"nama" => "Baygon", "stok" => 10, "harga" => 16779],
    ["ID" => 002, "nama" => "Dove", "stok" => 20, "harga" => 22688],
    ["ID" => 006, "nama" => "Rinso", "stok" => 20, "harga" => 20769],
    ["ID" => 003,"nama" => "Downy", "stok" => 15, "harga" => 12880],
    ["ID" => 004, "nama" => "Le Minerale", "stok" => 25, "harga" => 5650],
];

// Mengurutkan array berdasarkan nama produk
usort($produk, function($a, $b) {
    return strcmp($a['nama'], $b['nama']);
});

// Menampilkan array dalam bentuk tabel
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Stok</th>
    <th>Harga</th>
</tr>";

foreach ($produk as $item) {
    echo "<tr>
        <td>{$item['ID']}</td>
        <td>{$item['nama']}</td>
        <td>{$item['stok']}</td>
        <td>" . number_format($item['harga'], 0, ',', '.') . "</td>
    </tr>";
}

echo "</table>";
?>