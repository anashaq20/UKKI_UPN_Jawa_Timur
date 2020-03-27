<?php  
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_anggota = $_POST['id_anggota'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $jurusan = $_POST['jurusan'];    
    $angkatan = $_POST['angkatan'];
    $status = $_POST['status'];
    $tgl = $_POST['lahir'];
    $tanggal = date('Y-m-d', strtotime($tgl));
    $alamat = $_POST['alamat'];
    include('koneksi.php');
    // buat query
    $sql = "INSERT INTO anggota_ukki VALUES ('$id_anggota', '$npm', '$nama', '$jk', '$jurusan', '$angkatan', '$status', '$tanggal', '$alamat')";
    $query = mysqli_query($conn, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script>window.alert('Selamat, Anda telah berhasil mendaftar!!');</script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<script>window.alert('Maaf, Anda gagal mendaftar!!');</script>";
    };
}else {
    die("Akses tidak dapat diberkan");
    }
?>
