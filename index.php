<!DOCTYPE html>
<html>
<title>STBI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-red">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PROFIL</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MENU<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="?menu=upload" onclick="w3_open()" class="w3-bar-item w3-button">UPLOAD</a>
        <a href="?menu=stem" onclick="w3_close()" class="w3-bar-item w3-button">KATA DASAR</a>
        <a href="?menu=query" onclick="w3_close()" class="w3-bar-item w3-button">QUERY BOLEAN</a>
        <a href="?menu=hitungbobot" onclick="w3_close()" class="w3-bar-item w3-button">HITUNG BOBOT</a>
        <a href="?menu=hitungvektor" onclick="w3_close()" class="w3-bar-item w3-button">HITUNG VEKTOR</a>
        <a href="?menu=awalquery" onclick="w3_close()" class="w3-bar-item w3-button">QUERY TF.IDF</a>
        <a href="?menu=download" onclick="w3_close()" class="w3-bar-item w3-button">DOWNLOAD</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
 
 <br>
 <br>
 <br>
 <br>
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
    
      <!-- Section 1 -->
      <section class="section background-white"> 
        <div class="line">
          <div class="margin" align='center'>
            <?php
				error_reporting(0);
				if($_GET[menu]=='')
					{
					include('home.php');
					}
				else
					{
					include($_GET[menu].'.php');
					}
			?>
</br>
</br>
</br>
</br>
<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>INFORMASI RETRIVAL</b></h1>
  <p>Selamat Datang di Blog ini</p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="/w3images/woods.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>Sistem Temu Kembali Informasi (STBI)</b></h3>
      <h5>We Can Do It, <span class="w3-opacity">April 24, 2017</span></h5>
    </div>

    <center><div class="w3-container">
      <p>Information Retrieval(STBI) merupakan bagian dari computer science yang berhubungan dengan pengambilan informasi dari dokumen-dokumen yang didasarkan pada isi dan konteks dari dokumen-dokumen itu sendiri. Berdasarkan referensi dijelaskan bahwa Information Retrieval merupakan suatu pencarian informasi (biasanya berupa dokumen) yang didasarkan pada suatu query (inputanuser) yang diharapkan dapat memenuhi keinginan user dari kumpulan dokumen yang ada. Sedangkan, definisi query dalam Information Retrieval menurut referensi merupakan sebuah formula yang digunakan untuk mencari informasi yang dibutuhkan oleh user, dalam bentuk yang paling sederhana, sebuah querymerupakan suatu keywords (kata kunci) dan dokumen yang mengandungkeywords merupakan dokumen yang dicari dalam IRS.
Salah satu aplikasi umum dari sistem temu kembali informasi adalah s e a r c h engine atau mesin pencarian yang terdapat pada jaringan internet. Pengguna dapat mencari halaman-halamanweb yang dibutuhkannya melaluisearch engine. Contoh lain dari sistem temu kembali informasi adalah sistem informasi perpustakaan.
Sistem temu kembali informasi terutama berhubungan dengan pencarian informasi yang isinya tidak memiliki struktur. Demikian pula ekspresi kebutuhan pengguna yang disebutquery, juga tidak memiliki struktur. Hal ini yang membedakan sistem temu kembali informasi dengan sistem basis data. Dokumen adalah contoh informasi yang tidak terstruktur. Isi dari suatu dokumen sangat tergantung pada pembuat dokumen tersebut.
Sebagai suatu sistem, sistem temu kembali informasi memiliki beberapa bagian yang membangun sistem secara keseluruhan. Gambaran bagian-bagian yang terdapat pada suatu sistem temu kembali informasi digambarkan pada Gambar dibawah ini yang menampilkan bahwa terdapat dua buah alur operasi pada sistem temu kembali informasi. Alur pertama dimulai dari koleksi dokumen dan alur kedua dimulai dari query pengguna.</p>
        </div>
      </div>
    </div>
  </div>
  <hr>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card-2 w3-margin w3-margin-top">
    <div class="w3-container w3-white">
      <h3><b>Created By</b></h3>
      <h4><b>Reny Wijayanti</b></h4>
      <p>Retrival information is good at learning scripts. </p>
    </div>
  </div><hr>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

</body>
</html>
</center>