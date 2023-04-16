<?php
    date_default_timezone_set('Asia/Jakarta');
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Simpan data login ke variabel
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Tampilkan data login
        echo "<p>Selamat datang, $username</p>";
        echo "<p>Email: $username@mail.com</p>";
        echo "<p>Jam: " . date("h:i:s a") . "</p>";
        echo "<p>Hari dan Tanggal: " . date("l, d F Y") . "</p>";
      }
    ?>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah input nama dan email kosong
    if (empty($_POST["username"]) || empty($_POST["password"])) {
      $_SESSION["error"] = "Data tidak lengkap";
      header("Location: tugas2_redirectgagal.php");
      exit;
    }
  }
?>