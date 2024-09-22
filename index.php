<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <style>
        /* Atur form dan elemen-elemen di dalamnya */
        form {
            display: flex;
            flex-direction: column;
            padding: 10px;
            margin: 0 auto;
            border-radius: 20px;
            background-color: gray;
            width: 400px;
            text-align: center;
        }

        form label {
            margin-bottom: 5px;
        }

        form input {
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
        background-color: #3498db; /* Warna biru untuk latar belakang */
        color: white; /* Warna teks */
        padding: 10px 20px; /* Jarak di dalam tombol */
        border: none; /* Menghilangkan border */
        border-radius: 5px; /* Membuat sudut membulat */
        cursor: pointer; /* Menampilkan pointer saat hover */
        font-size: 16px; /* Ukuran font */
        transition: background-color 0.3s ease; /* Animasi saat hover */
        }

        input[type="submit"]:hover {
            background-color: #2980b9; /* Warna saat dihover */
        }

    </style>
    
</head>
<body>
    <form action="proses.php" method="post">
        <label for="NIM">NIM :</label>
        <input type="text" name="NIM" id="NIM" inputmode="numeric">
        <br>
        <label for="nama">Nama Mahasiswa :</label>
        <input type="text" name="Nama_Mahasiswa" id="nama">
        <br>
        <label for="tugas">Tugas :</label>
        <input type="text" name="Tugas" id="tugas" inputmode="numeric">
        <br>
        <label for="quiz">Quiz :</label>
        <input type="text" name="Quiz" id="quiz" inputmode="numeric">
        <br>
        <label for="uts">UTS :</label>
        <input type="text" name="UTS" id="uts" inputmode="numeric">
        <br>
        <label for="uas">UAS :</label>
        <input type="text" name="UAS" id="uas" inputmode="numeric">
        <br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
