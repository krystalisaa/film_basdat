<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "latihan_ukk2";

$koneksi = mysqli_connect($server, $username, $password, $database);


function nowplay($id_film) {
    global $koneksi;
    $id_film = (int) $id_film; // pastikan integer
    $query = "UPDATE film SET filter = 'Now Playing Film' WHERE id_film = $id_film";
    
    mysqli_query($koneksi, $query);
    
    return mysqli_affected_rows($koneksi);
}

function upcom($id_film) {
    global $koneksi;
    $id_film = (int) $id_film; // pastikan integer
    $query = "UPDATE film SET filter = 'Upcoming Film' WHERE id_film = $id_film";
    
    mysqli_query($koneksi, $query);
    
    return mysqli_affected_rows($koneksi);
}

?>