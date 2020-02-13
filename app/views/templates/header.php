<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Halaman
            <?= $data['judul']; ?></title>
        <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css">
        <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Raleway:400,600,900&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap"
            rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a href="<?= BASEURL;?>" class="nav-link brand">
                    <h4>bacaan<span class="gital">digital.</span></h4>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <?php if( isset($_SESSION['username']) ) :?>
                            <a class="nav-link" href="<?= BASEURL;?>/daftarlogin/logout.php">
                                <img src="<?= BASEURL;?>/img/logout.png" alt="" width="40">
                            </a>
                        <?php else :?>
                            <a class="nav-link" href="<?= BASEURL;?>/daftarlogin/login.php">
                                <!-- <img src="<?= BASEURL;?>/img/user.png" alt="" width="40"> -->
                                <button type="button" class="btn btn-danger login">Login</button>
                            </a>
                            <?php endif;?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>