<?php
include "koneksi.php";

$sql1 = "SELECT * FROM film WHERE filter ='Upcoming Film'";
$sql2 = "SELECT * FROM film WHERE filter ='NOW Playing Film'";

$query1 = mysqli_query($koneksi, $sql1);
$query2 = mysqli_query($koneksi, $sql2);

if (isset($_GET['nowplay'])) {
    $id = $_GET['nowplay'];
    if (nowplay($id) > 0) {
        echo "<script>
            alert('FILM NOW PLAYING YEAYY');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Yahh gagal nonton');
            document.location.href = 'index.php';
        </script>";
    }
}

if (isset($_GET['upcom'])) {
    $id = $_GET['upcom'];
    if (upcom($id) > 0) {
        echo "<script>
            alert('SABAR DIKIT');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Yahh gagal nonton');
            document.location.href = 'index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index2.css">
    <title>Film</title>
</head>
<body>
    <div class="container">
        <h1>--Upcoming Film--</h1>
        <div class="page upcoming">
             <?php while ($film = mysqli_fetch_assoc($query1)) { ?>
                <div class="card upcoming">
                    <div class="poster-judul">
                        <b><p><?= $film['genre']; ?></p></b><br>
                        <img src="<?= $film['poster']; ?>" alt="Poster" width="250" height="250">
                        <center><h2><?= $film['judul']?></h2></center>
                        
                    </div>
                    <div class="info">
                        <h4>Sutradara : <p><?= $film['sutradara']; ?></p></h4>
                        <h4>Durasi : <p><?= $film['durasi']; ?></p></h4>
                        <h4><p><?= $film['sinopsis']; ?></p></h4>
                    </div>
                    <div>
                        <div class="btn-group">
                            <button class="btn del"><a href=hapus.php?id_film=<?= $film['id_film'] ?>">Hapus</a></button>
                            <button class="btn play"><a href="index.php?nowplay=<?= $film['id_film'] ?>">Playing Film</a></button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        
                <hr>
        <h1>--Now Playing Film--</h1>
        <div class="page playing-now">
             <?php while ($film = mysqli_fetch_assoc($query2)) { ?>
                <div class="card playing-now">
                    <div class="poster-judul">
                        <b><p><?= $film['genre']; ?></p></b><br>
                        <img src="<?= $film['poster']; ?>" alt="Poster" width="250" height="250">
                        <center><h2><?= $film['judul']?></h2></center>
                        
                    </div>
                    <div class="info">
                        <h4>Sutradara : <p><?= $film['sutradara']; ?></p></h4>
                        <h4>Durasi : <p><?= $film['durasi']; ?></p></h4>
                        <h4><p><?= $film['sinopsis']; ?></p></h4>
                    </div>
                    <div>
                        <div class="btn-group">
                            <button class="btn del"><a href=hapus.php?id_film=<?= $film['id_film'] ?>">Hapus</a></button>
                            <button class="btn play"><a href="index.php?upcom=<?= $film['id_film'] ?>">Upcoming Film</a></button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>