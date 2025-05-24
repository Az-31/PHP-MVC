<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.min.css">

</head>

<body>
    <!-- <div class="container"> -->
        <nav class="navbar navbar-expand-lg bg-light mx-auto sticky-top" style="max-width: 137vh;">
            <div class="container-fluid">
                <a class="navbar-brand ps-5" href="<?= BASEURL; ?>">PHP MVC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home </a>
                        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa </a>
                        <a class="nav-link" href="<?= BASEURL; ?>/about">About </a>
                    </div>
                </div>
            </div>
    <!-- </div> -->
    </nav>
</body>