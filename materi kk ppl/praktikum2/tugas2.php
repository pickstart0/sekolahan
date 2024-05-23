<h2>tugas 1</h2>
<?php
// komentar pada php
echo "hello, word" //menampilkan "hello word";
?>
<hr>
<h2>tugas 2</h2>
<?php
// pendefinisian variabel
$angka1 = 10;
$angka2 = 5;

// operasi matematika
$h_jumlah = $angka1 + $angka2;
$h_kurang = $angka1 - $angka2;
$h_kali = $angka1 * $angka2;
$h_bagi = $angka1 / $angka2;

//menampilkan hasil
echo "hasil pemjumlahan: " . $h_jumlah . "<br>";
echo "hasil pengurangan: " . $h_kurang . "<br>";
echo "hasil perkalian: " . $h_kali . "<br>";
echo "hasil pembagian: " . $h_bagi . "<br>";
?>
<hr>
<h2>tugas 3</h2>
<?php
$nilai = 75;
if ($nilai >= 70) {
    echo "selamat, anda lulus";
} else {
    echo "maaf,anda belum lulus. silahkan coba lagi.";
}
?>
<hr>
<h2>tugas 4</h2>
<?php
//menampilkan angka 1 sampai 10
$a = 1;
while ($a <= 10) {
    echo $a . "<br>";
    $a++;
}
?>
<hr>
<h2>tuags 5</h2>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>formulir php</title>
</head>

<body>
    <form action="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        Nama : <input type="text" name="nama" id="nama"><br>
        email : <input type="email" name="email" id="email"><br>
        <input type="submit" name="submit" value="kirim">
    </form>
    <?php
    // cek apakah tombol submit telah di tekan
    if ($_SERVER['REQUEST_METHOD'] == "post") {
        // TANGKAP DATA DARI FORMULIR 
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        // tampilkan data yang telah di isi
        echo "<h2>Data yang telah diisi:</h2>";
        echo "Nama:" . $nama . "<br>";
        echo "email: " . $email;
    }
    ?>
</body>

</html>