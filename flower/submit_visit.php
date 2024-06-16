<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nama'], $_POST['no_hp'], $_POST['email'], $_POST['tanggal'])) {
    require "../inc/inc_koneksi.php";

    // Escape user inputs for security
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);

    // Insert data into database
    $sql = "INSERT INTO kunjungan (nama, no_hp, email, tanggal) VALUES ('$nama', '$no_hp', '$email', '$tanggal')";
    if (mysqli_query($koneksi, $sql)) {
        // Redirect to thank you page
        header('Location: thankyou_visit.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    // Close connection
    mysqli_close($koneksi);
} else {
    header('Location: index.php'); // Redirect back to index if form is not submitted
    exit;
}
?>
