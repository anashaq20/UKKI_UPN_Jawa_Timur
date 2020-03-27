<!DOCTYPE html>
<head>
<meta http-equiv="refresh" content="30">
<title>UKKI UPN "Veteran" Jawa Timur</title>
<link rel="icon" href="UKKI.png">
<link rel="Stylesheet" type="text/css" href="efek.css">
<link type="javascript" href="jquery-3.4.1.min.js">
<link type="javascript" href="/index.html">
<script type="text/javascript">
function Dropdownku() {
  document.getElementById("myDropdown").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
function Dropdownku2() {
  document.getElementById("myDropdown2").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn2')) {
  var myDropdown2 = document.getElementById("myDropdown2");
    if (myDropdown2.classList.contains('show')) {
      myDropdown2.classList.remove('show');
    }
  }
}
function Dropdownku3() {
  document.getElementById("myDropdown3").classList.toggle(("show")); }
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn3')) {
  var myDropdown3 = document.getElementById("myDropdown3");
    if (myDropdown3.classList.contains('show')) {
      myDropdown3.classList.remove('show');
    }
  }
}
</script>
</head>
<body>
	<table width="980" class="logo">
		<tr>
			<td width="120" height="120" colspan="1"><a href="index.html"><img src="UKKI.png" width="120" height="120" alt="Logo UKKI UPN &quot;Veteran&quot; Jawa Timur"></a>
			</td>
		    <td width="24" style="font-size:120px"><marquee direction="up" behavior="slide" scrollamount="10%">|</marquee></td>
		    <td width="980">
		    	<marquee width="450" behavior="slide" direction="right" scrollamount="35%">
		      <h1>Unit Kegiatan Kerohanian Islam<br>
		      UPN "Veteran" Jawa Timur</h1></marquee>
		  	</td>	
		</tr>
	</table>
	<table width="980">
    <tr>
    <td>
      <marquee width="980px" scrollamount="10%">-Assalamu'alaikum Wr. Wb. Ahlan wa sahlan ikhwan dan akhwat fillah di Website Resmi UKKI UPN "Veteran" Jawa Timur-
      </marquee>
    </td>
    </tr>
  </table>
  <div>  
    <div class="navbar">
    <a href="index.html">Beranda</a>
    <div class="dropdown">
    <button class="dropbtn" onmouseover="Dropdownku()" >Profil
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="sejarah.html">Sejarah UKKI</a>
      <a href="visi_misi.html">Visi dan Misi</a>
      <a href="struktur.html">Struktur Organisasi</a>
      <a href="pengurus.php">Anggota Kepengurusan</a>
    </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn2" onmouseover="Dropdownku2()">
    Departemen UKKI
    </button>
    <div class="dropdown-content" id="myDropdown2">
      <a href="bph.html">BPH</a>
      <a href="bakmin.html">Bakat dan Minat</a>
      <a href="dakwah.html">Dakwah</a>
      <a href="danus.html">Dana Usaha</a>
      <a href="humas.html">Humas</a>  
      <a href="kaderisasi.html">Kaderisasi</a>
        <a href="media.html">Media</a>
    </div>
    </div>
    <div class="dropdown">
    <button class="dropbtn3" onmouseover="Dropdownku3()" >Daftar Anggota
    </button>
      <div class="dropdown-content" id="myDropdown3">
      <a href="anggota_aktif.php">Anggota Aktif</a>
      <a href="aktivis.php">Aktivis</a>
      <a href="anggota_pasif.php">Anggota Pasif</a>
      <a href="anggota_LB.php">Anggota Luar Biasa</a>
      </div>
    </div>
    <div>
    <a href="daftar.php">Daftar</a>
    </div>
    </div>
	<div>
		<h2 class="logo">Daftar Anggota UKKI UPN "Veteran" Jawa Timur tahun 2019/2020</h2>
	</div>
  <div id="frame">
        <p>
          Daftar Nama Anggota Aktif UKKI UPN "Veteran" Jawa Timur disajikan dalam tabel berikut.
        </p>
        <table class="data-table" id="frame">
          <caption></caption>
              <thead class="thead" id=>
                <tr>
                  <th>NO</th>
                  <th>ID ANGGOTA</th>
                  <th>NPM</th>
                  <th>NAMA</th>
                  <th>JENIS KELAMIN</th>
                  <th>JURUSAN</th>
                  <th>ANGKATAN</th>
                  <th>STATUS</th>
                  <th>TANGGAL LAHIR</th>
                  <th>ALAMAT</th>
                </tr>
              </thead>
              <tbody>
              <?php
              include ('koneksi.php');
              $select = "SELECT * FROM anggota_ukki where status='Aktif';";
              $result = mysqli_query($conn, $select);
              if(!$result) {
                die ('SQL Error: ' . mysqli_error($conn));
                  };
              $no   = 1;
              $bulan  = array (1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) 
                  {
                    $tgl  = explode('-', $row['tgl_lahir']);
                    echo '
                      <tr>
                        <td>'.$no.'</td>
                        <td>'.$row['id_anggota'].'</td>
                        <td>'.$row['npm'].'</td>
                        <td>'.$row['nama'].'</td>
                        <td>'.$row['jenis_kelamin'].'</td>
                        <td>'.$row['jurusan'].'</td>
                        <td>'.$row['angkatan'].'</td>
                        <td>'.$row['status'].'</td>
                        <td>'.$tgl[2] . ' ' . $bulan[(int)$tgl[1]] . ' '.$tgl[0].'</td>
                        <td>'.$row['alamat'].'</td>
                        </tr>';
                    $no++;
                  };}
                    else{
                      echo ("<script>window.alert('Belum ada anggota pada daftar ini!!')</script>");
                      
                  }
                    ?>
                  </tbody>
                </table>
              </div>
</body>
</html>