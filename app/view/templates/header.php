<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link href="<?= BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= BASE_URL; ?>">Shofi Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASE_URL; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL; ?>/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>