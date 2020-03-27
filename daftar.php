<!DOCTYPE html>
<head>
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
		<h1 class="logo">Form Pendaftaran Anggota UKKI</h1>
		<div id="frame">
        <form action="proses-daftar.php" method="POST" name="daftarkan">
        <table>
        <thead>
        	<tr>
        	<td colspan="4">Silahkan Mengisi Form Pendaftaran dibawah ini.
            </td>
            </tr>
        </thead>
        	<tbody align="left">
            <tr>
        	<td>
            <p>ID Anggota</p>
            </td>
            <td><input type="text" name="id_anggota" maxlength="10" ></input></td>
            </tr>
            <tr>
            <td>
            <p>NPM</p>
            </td>
            <td>
            <input type="text" name="npm" maxlength="11"></input>
            </td>
            </tr>            
            <tr>
            <td>
            <p>Nama</p>
            </td>
            <td colspan="2">
            <input type="text" name="nama" maxlength="50"></input>
            </td>
            </tr>
            <tr>
            <td>
            <p>Jenis Kelamin</p>
            </td>
            <td>
            <p><input type="radio" name="jk" value="L">Laki-laki</input>
            <input type="radio" name="jk" value="P">Perempuan</input></p>
            </td>
            </tr>          
            <tr>
            <td><p>Jurusan</p></td>
            <td>
            <select name="jurusan">
				<option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
                <option value="Akuntansi">Akuntansi</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Agroteknologi">Agroteknologi</option>
                <option value="Agribisnis">Agribisnis</option>
                <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                <option value="Administrasi Negara">Administrasi Negara</option>
                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                <option value="Hubungan Internasional">Hubungan Internasional</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Teknologi Pangan">Teknologi Pangan</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Ilmu Hukum">Ilmu Hukum</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Infomasi">Sistem Infomasi</option>
                <option value="Data Science">Data Science</option>
            </td>
            </tr>
            <tr>
            <td>
            Angkatan
            </td>
            <td>
            <input type="text" name="angkatan"></input>
            </td>
            </tr>
        	<tr>
            <tr>
                <td>
                    Status Keanggotaan
                </td>
                <td>
                    <select name="status">
                        <option value="Aktif">Aktif</option>
                        <option value="Aktivis">Aktivis</option>
                        <option value="Luar Biasa">Luar Biasa</option>
                        <option value="Pasif">Pasif</option>
                    </select>
                </td>
            </tr>
            <td>
            Tanggal Lahir
            </td>
            <td>
            <input type="date" name="lahir"></input>
            </td>
            </tr>
        	<tr>
            <td>
            Alamat
            </td>
            <td>
            <textarea rows="5" cols="50" name="alamat"></textarea>
            </td>
            <td colspan="4" align="center">
            <p><input class="logo" type="submit" name="simpan" value="Simpan">
			<input class="logo" type="reset" name="hapus" value="Reset"></p>
            </td>
            </tr>
            </table>
        </form>
		</div>
	</div>
</body>
</html>