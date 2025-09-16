<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Tambah</title>
</head>
<body>
    <div class="film-form">
            <form action="proses_input.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_film">

                <label for="">Judul</label><br>
                <input type="text" name="judul" placeholder="Judul" required><br>

                <label for="genre">Genre:</label><br>
                <select name="genre" id="genre" required>
                    <option value="">-- Pilih Genre --</option>
                    <option value="Aksi">Aksi</option>
                    <option value="Drama">Drama</option>
                    <option value="Komedi">Komedi</option>
                    <option value="Horor">Horor</option>
                    <option value="Fantasi">Fantasi</option>
                    <option value="Romantis">Romantis</option>
                    <option value="Petualangan">Petualangan</option>
                    <option value="Dokumenter">Dokumenter</option>
                </select><br>

                <label for="">Sutradara</label><br>
                <input type="text" name="sutradara" placeholder="Sutradara" required><br>

                <label for="">Durasi</label><br>
                <input type="time" name="durasi" id="durasi" step="1" required><br>

                <label for="">Sinopsis</label><br>
                <textarea name="sinopsis" placeholder="Sinopsis"></textarea><br>
                
                <label for="">Poster</label><br>
                <input type="file" name="poster" accept="image/*" required><br>
                <button type="submit">Simpan</button>
            </form>
        </div>

</body>
</html>
