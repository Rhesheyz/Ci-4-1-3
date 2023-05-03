<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Beranda</title>
</head>
<body>
    <?= $this->extend("Layouts/template"); ?>

    <?= $this->section("content"); ?>
    <div class="jumbotron text-center">
        <hl>Portal Informasi Siswa</hl>
        <p>Selamat datang di Portal Informasi Siswa SNA 404!</p>
        <a href="<?= base_url( 'info-kegiatan') ?>" class="btn btn-dark">Info Kegiatan</a>
        <a href="<?= base_url( 'data-siswa' ) ?>" class="btn btn-primary">Data Siswa</a> 
    </div>

    <?= $this->endsection(); ?>
    </body
</html>