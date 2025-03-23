<?php
// **********************  1  **************************  
// Inisialisasi variabel untuk menyimpan nilai input dan error
$nama = $email = $nim = $jurusan = $fakultas = "";
$namaErr = $emailErr = $nimErr = $jurusanErr = $fakultasErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // **********************  2  **************************  
    // - Tangkap nilai nama yang ada pada form HTML (Lihat Task 7)
    // - Validasi agar nama tidak boleh kosong
    // - Validasi agar nama hanya berupa abjad (Hint : gunakan fungsi preg_match (atau fungsi lainnya))
    // silakan taruh kode kalian di bawah
    if (empty($_POST["nama"])) {
        $namaErr = "Nama tidak boleh kosong";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["nama"])) {
        $namaErr = "Nama hanya boleh mengandung huruf dan spasi";
    } else {
        $nama = htmlspecialchars($_POST["nama"]);
    }

    // **********************  3  **************************  
    // - Tangkap nilai email yang ada pada form HTML (Lihat Task 7)
    // - Memeriksa apakah email kosong
    // - Memeriksa apakah format email valid (Hint : gunakan fungsi filter_var)
    // silakan taruh kode kalian di bawah
    if (empty($_POST["email"])) {
        $emailErr = "Email tidak boleh kosong";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format email tidak valid";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    // **********************  4  **************************  
    // - Tangkap nilai NIM yang ada pada form HTML (Lihat Task 7)
    // - Pastikan NIM terisi dan berformat angka
    // - silakan taruh kode kalian di bawah
    if (empty($_POST["nim"])) {
        $nimErr = "NIM tidak boleh kosong";
    } elseif (!ctype_digit($_POST["nim"])) {
        $nimErr = "NIM hanya boleh berisi angka";
    } else {
        $nim = htmlspecialchars($_POST["nim"]);
    }

    // **********************  5  **************************  
    // - Tangkap nilai jurusan yang ada pada form HTML (Lihat Task 7)
    // - Validasi agar jurusan tidak boleh kosong
    // - Validasi agar jurusan hanya berupa abjad (Hint : gunakan fungsi preg_match (atau fungsi lainnya))
    // silakan taruh kode kalian di bawah
    if (empty($_POST["jurusan"])) {
        $jurusanErr = "Jurusan tidak boleh kosong";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["jurusan"])) {
        $jurusanErr = "Jurusan hanya boleh mengandung huruf dan spasi";
    } else {
        $jurusan = htmlspecialchars($_POST["jurusan"]);
    }
 

    // **********************  6  **************************  
    // - Tangkap nilai fakultas yang ada pada form HTML (Lihat Task 7)
    // - Validasi agar fakultas tidak boleh kosong
    // - Validasi agar fakultas hanya berupa abjad (Hint : gunakan fungsi preg_match (atau fungsi lainnya))
    // silakan taruh kode kalian di bawah
    if (empty($_POST["fakultas"])) {
        $fakultasErr = "Fakultas tidak boleh kosong";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["fakultas"])) {
        $fakultasErr = "Fakultas hanya boleh mengandung huruf dan spasi";
    } else {
        $fakultas = htmlspecialchars($_POST["fakultas"]);
    }
}
?>
   





