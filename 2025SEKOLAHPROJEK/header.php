
<h1> SISTEM PENGUNDIAN KELAB SAINS KOMPUTER SMK DAUN</h1>
<!--Skrin responsive-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<hr>
<?php if (!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "ADMIN") { ?>
<nav>
    <a href='index.php'>Laman Utama</a>
    <a href='pengguna-senarai.php'>Senarai Pengguna</a>
    <a href='subjek.php'>Senarai Jawatan</a>
    <a href='keputusan.php'>keputusan</a> 
    <a href='logout.php'>Logout</a>
 </nav>
 <hr>
<?php } else if (!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "PENGGUNA") { ?>
 <nav>
    <a href='index.php'>Laman Utama</a>
    <a href='undi_kedudukan.php'>Borong Pengundian</a>
    <a href='logout.php'>Logout</a>
 </nav>    
 <hr>
<?php } else {?> 
 <nav>
    <a href='index.php'>Laman Utama</a>
    
 </nav>
 <hr>
<?php } ?>

         
