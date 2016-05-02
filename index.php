<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page="home";
}
switch($page){
	case "home":
		$title="Halaman Utama";
		include("header.php");
		include("menu.php");
		include("halaman/home.php");
		include("footer.php");
	break;
	case "profil":
		$title="Profilku";
		include("header.php");
		include("menu.php");
		include("halaman/profil.php");
		include("footer.php");
	break;
	case "galeri":
	$title="Galeri";
		include("header.php");
		include("menu.php");
		include("halaman/galeri.php");
		include("footer.php");
	break;
	case "kontak":
	$title="Kontak Saya";
		include("header.php");
		include("menu.php");
		include("halaman/kontak.php");
		include("footer.php");
	break;
	case "about":
	$title="Tentang Saya";
		include("header.php");
		include("menu.php");
		include("halaman/about.php");
		include("footer.php");
	break;
	case "post":
	$title="Postingan";
		include("header.php");
		include("menu.php");
		include("halaman/post.php");
		include("footer.php");
	break;
	case "post1":
	$title="Sepakbola";
		include("header.php");
		include("menu.php");
		include("halaman/post1.php");
		include("footer.php");
	break;
	case "post2":
	$title="Bulutangkis";
		include("header.php");
		include("menu.php");
		include("halaman/post2.php");
		include("footer.php");
	break;
	case "post3":
	$title="Formula 1";
		include("header.php");
		include("menu.php");
		include("halaman/post3.php");
		include("footer.php");
	break;
}
?>