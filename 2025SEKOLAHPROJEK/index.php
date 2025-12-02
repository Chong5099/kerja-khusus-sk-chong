<?php
session_start();

include("header.php")
include("connection.php")

// Query undian mengikut jawatan dengan ORDER BY idsubjek
$query_subjek = "
SELECT
    j.idsubjek,
    j.nama_subjek,
    c.gambar
    COUNT(u.id_undi) AS jumlah_undian
FROM undian u
JOIN subjek j ON u.idsubjek = j.idsubjek
GROUP BY j.idsubjek, j.nama_subjek, c.gambar
ORDER BY j.idsubjek, jumlah_undian DESC"; //Perubahan di sini - ORDER BY idsubjek dahulu

$result_subjek = mysqli_query(@condb, $query_subjek);

if (!$result_subjek) {
    die("SQL Error:" . mysqli_error($condb));
}

//Susun data undian mengikut idsubjek
$undian_subjek = [];
while ($row = mysqli_fetch_assoc($result_subjek)) {
    $idsubjek = $row['idsubjek'];
    if(!isset($undian_subjek[$idjawatan])) {
        $undian_subjek[$idsubjek] = [
            'nama_subjek' => $row['nama_subjek'],
        ]
    }}