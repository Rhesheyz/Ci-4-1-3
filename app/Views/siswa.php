<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Siswa</title>
</head>
<body>
    <?= $this->extend("Layouts/template"); ?>

    <?= $this->section("content"); ?>

    <?php if (session()->get('role') === 'admin') :?>
    <h3>Data Siswa</h3>
    <table class="table-bordered table-striped">
    <tr>
        <th>Nama</th>
        <th>NIS &nbsp</th>
        <th>Tanggal Lahir &nbsp&nbsp&nbsp</th>
    </tr>
    <tr>
        <td>Andi Saputra &nbsp</td>
        <td>101</td>
        <td>2003-12-22</td>
    </tr>
    <tr>
        <td>Budi Cahya</td>
        <td>l02</td>
        <td>2004-l-30</td>
    </tr>
    </table>
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        Anda tidak memiliki akses untuk melihat data
    </div>
<?php endif;?>
    <?= $this->endsection(); ?>
</body>
</html>