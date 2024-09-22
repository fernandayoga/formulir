<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "formulir");

// Ambil data dari form
$NIM = $_POST['NIM'];
$Nama_Mahasiswa = $_POST['Nama_Mahasiswa'];
$Tugas = $_POST['Tugas'];
$Quiz = $_POST['Quiz'];
$UTS = $_POST['UTS'];
$UAS = $_POST['UAS'];

// Validasi input apakah sudah diisi
if (empty($NIM) || empty($Nama_Mahasiswa) || empty($Tugas) || empty($Quiz) || empty($UTS) || empty($UAS)) {
    echo "Semua field harus diisi.";
    exit;
}

// Hitung Nilai Akhir (NA) dengan rumus
$Nilai_Akhir = (0.2 * $Tugas) + (0.2 * $Quiz) + (0.3 * $UTS) + (0.3 * $UAS);

// Tentukan grade berdasarkan nilai akhir
if ($Nilai_Akhir > 85) {
    $Grade = 'A';
} elseif ($Nilai_Akhir > 70) {
    $Grade = 'B';
} elseif ($Nilai_Akhir > 60) {
    $Grade = 'C';
} elseif ($Nilai_Akhir > 40) {
    $Grade = 'D';
} elseif ($Nilai_Akhir > 30) {
    $Grade = 'E';
} else {
    $Grade = 'F';
}

// Cek apakah NIM sudah ada di database
$query_check = "SELECT * FROM mahasiswa WHERE NIM = '$NIM'";
$result = mysqli_query($koneksi, $query_check);

if (mysqli_num_rows($result) > 0) {
    echo "NIM sudah terdaftar!";
} else {
    // Insert data ke dalam database
    $query_insert = "INSERT INTO mahasiswa (NIM, Nama_Mahasiswa, Tugas, Quiz, UTS, UAS, Nilai_Akhir, Grade) 
                    VALUES ('$NIM', '$Nama_Mahasiswa', '$Tugas', '$Quiz', '$UTS', '$UAS', '$Nilai_Akhir', '$Grade')";
    
    mysqli_query($koneksi, $query_insert);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan data!";
    }
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
