<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Film</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #0f172a;
            color: #f8fafc;
            line-height: 1.6;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .film-form {
            background-color: #1e293b;
            border-radius: 12px;
            box-shadow: 10px rgba(0, 0, 0, 0.3);
            padding: 30px;
            width: 100%;
            max-width: 500px;
        }
        
        .film-form h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #e2e8f0;
            font-size: 28px;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }
        
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        label {
            font-weight: 500;
            color: #cbd5e0;
            font-size: 16px;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #4a5568;
            border-radius: 8px;
            font-size: 16px;
            background-color: #2d3748;
            color: #f8fafc;
        }
        
        textarea {
            min-height: 100px;
        }
        
        input[type="file"] {
            padding: 10px;
            background-color: #2d3748;
        }
        
        input[type="file"]::file-selector-button {
            background-color: #ff6b6b;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        button {
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        button:hover {
            background-color: #e53e3e;
        }
        
        /* Responsiv */
        @media (max-width: 576px) {
            .film-form {
                padding: 20px;
            }
            
            input, select, textarea, button {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="film-form">
        <h2>--Tambah Film Baru--</h2>
        <form action="proses_input.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_film">
            
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" placeholder="Masukkan judul film" required>
            </div>
            
            <div class="form-group">
                <label for="genre">Genre</label>
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
                </select>
            </div>
            
            <div class="form-group">
                <label for="sutradara">Sutradara</label>
                <input type="text" name="sutradara" id="sutradara" placeholder="Nama sutradara" required>
            </div>
            
            <div class="form-group">
                <label for="durasi">Durasi</label>
                <input type="time" name="durasi" id="durasi" step="1" required>
            </div>
            
            <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <textarea name="sinopsis" id="sinopsis" placeholder="Tulis sinopsis film"></textarea>
            </div>
            
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" name="poster" id="poster" accept="image/*" required>
            </div>
            
            <button type="submit">Simpan Film</button>
        </form>
    </div>
</body>
</html>