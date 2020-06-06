<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Web Kami > Beranda </title>
</head>

<body>
<?php

switch (@$_GET['page'])
	{
	case '':
		if (!file_exists ("home1.php")) die ("File Home Tidak Ada");
		include "home1.php";
		break;
	case 'home1':
		if (!file_exists ("home1.php")) die ("File Home Tidak Ada");
		include "home1.php";
		break;
	case 'artikel':
		if (!file_exists ("tampil_artikel.php")) die ("File Artikel Tidak Ada");
		include "tampil_artikel.php";
		break;
	case 'buku_tamu':
		if (!file_exists ("tambah_buku_tamu.php")) die ("File Buku Tamu Tidak Ada");
		include "tambah_buku_tamu.php";
		break;
	}
?>
</body>
</html>