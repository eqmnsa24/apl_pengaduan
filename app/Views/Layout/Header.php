<!doctype html>
<html lang="en" class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Aplikasi Pengaduan Masyarakat">
<meta name="author" content="Ekky Manessa.">
<title>AplPengaduanMasyarakat</title>
<!-- Bootstrap core CSS -->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/fontawesome/css/all.min.css" rel="stylesheet">
<meta name="theme-color" content="#563d7c">
<style>
.bd-placeholder-img {
font-size: 1.125rem;
text-anchor: middle;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}
@media (min-width: 768px) {
.bd-placeholder-img-lg {
font-size: 3.5rem;
}
}
/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */
main > .container {
padding: 60px 15px 0;
}
.footer {
background-color: #f5f5f5;
}
.footer > .container {
padding-right: 15px;
padding-left: 15px;
}
code {
font-size: 80%;
}
</style>
<!-- Custom styles for this template -->
</head>
<body class="d-flex flex-column h-100">
<header>
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-primary
fixed-top bg-dark">
<a class="navbar-brand" href="/dashboard">AplPengaduan</a>
<button class="navbar-toggler" type="button"
data-toggle="collapse" data-target="#navbarCollapse"
aria-controls="navbarCollapse" aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="navbar-nav mr-auto">
<!-- Dropdown -->
<?php if(session()->get('level')=='admin'){?>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fas fa-database"></i>  Master Data </a>
<div class="dropdown-menu ">
<a class="dropdown-item" href="/petugas/masyarakat">Data Masyarakat</a>
<a class="dropdown-item" href="/petugas/user">Data Pengguna</a>
</div>
</li>
<?php } ?>
<!-- Dropdown -->
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#"
id="navbardrop" data-toggle="dropdown"> Pengaduan Masyarakat </a>
<div class="dropdown-menu">
<a class="dropdown-item" href="/verifikasi">Verifikasi & Validasi</a>
<a class="dropdown-item" href="/respon">Data Tanggapan</a>
</div>
</li>
<!-- Dropdown -->
<?php if(session()->get('level')=='admin'){?>
<li class="nav-item ">
<a class="nav-link " href="/laporan/pengaduan" id="navbardrop" ">Laporan</a>
</li>
<?php } ?>
<li class="nav-item">
<a class="nav-link" href="/logout" OnClick="return confirm('Anda Ingin Keluar ?')">Logout</a>
</li>
</ul>
</div>
</nav>
</header>