<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Info Kegiatan</title>
</head>
<body>
<?= $this->extend("Layouts/template"); ?>

<?= $this->section("content"); ?>
    <h3>Info Kegiatan</h3>
    <p>Informasi Kegiatan Siswa bulan ini: </p>
    <ul>
        <li>10 Agustus - Masa Orientasi Siswa</li>
        <li>7 Agustus - Upacara Kemerdekaan</li>
    </ul>

    <p>Informasi Kegiatan Siswa bulan depan: </p>
    <ul>
        <li>12 September - Ujian Tengah Semester</li>
    </ul>

    <?= $this->endsection(); ?>
</body>
</html>