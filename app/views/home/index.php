<?php
$conn = mysqli_connect('localhost', 'root', '', 'bacaandigital');
//menu
$query = "SELECT * FROM `buku` WHERE kategori_buku = 'novel'";
$result = mysqli_query($conn, $query);
$ambilRow = mysqli_num_rows($result);
$query = "SELECT * FROM `buku` WHERE kategori_buku = 'biografi'";
$result2 = mysqli_query($conn, $query);
$ambilRow2 = mysqli_num_rows($result2);
$query = "SELECT * FROM `buku` ";
$result3 = mysqli_query($conn, $query);
$ambilRow3 = mysqli_num_rows($result3);
$query = "SELECT * FROM `buku` WHERE kategori_buku = 'sejarah'";
$result4 = mysqli_query($conn, $query);
$ambilRow4 = mysqli_num_rows($result4);
$query = "SELECT * FROM `buku` WHERE kategori_buku = 'edukasi'";
$result5 = mysqli_query($conn, $query);
$ambilRow5 = mysqli_num_rows($result5);
?>

<div class="konten">
    <div class="isi">
        <div class="container">
            <h1>Bacaan Digital</h1>
            <?php if( empty($_SESSION['username']) ) :?>
            <h3>for
                <span class="username">...</span>
            </h3>
        <?php else :?>
            <h3>for
                <span class="username">
                    <?= $_SESSION['username'];?></span>
            </h3>
            <?php endif; ?>
            <p class="desc">Ini merupakan website bacaan buku yang Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti vitae quam, iure debitis officia</p>
            <!-- <a href="#iklan-menu"><button class="tombol">run</button></a> -->

            <form action="<?= BASEURL;?>/catalogBuku" method="POST">
                <input
                    type="text"
                    class="form-control mb-3"
                    placeholder="Cari Judul buku"
                    aria-describedby="button-addon2"
                    name="cari">

                <button type="submit" class="btn btn-danger btn-lg btn-block search mt-3">search</button>
                <!-- <input class="btn btn-danger search" type="button" value="CARI"> -->
            </form>
        </div>
    </div>
</div>
</div>

<div class="fitur">
<div class="card fitur-novel float-left text-center" style="width: 14rem;">
    <a href="">
        <img class="card-img-top" src="<?= BASEURL;?>/img/novel.png" alt="" width="10">
        <div class="card-body text-center">
            <p class="card-text">novel</p>
            <small><?= $ambilRow;?>
                buku</small>
        </div>
    </a>
</div>

<div class="card float-left text-center" style="width: 14rem;">
    <a href="">
        <img
            class="card-img-top"
            src="<?= BASEURL;?>/img/biografi.png"
            alt="Card image cap"
            width="10">
        <div class="card-body text-center">
            <p class="card-text">biografi</p>
            <small><?= $ambilRow2;?>
                buku</small>
        </div>
    </a>
</div>

<div class="card float-left text-center all-genre" style="width: 14rem;">
    <a href="<?= BASEURL;?>/allBooks">   
        <img
            class="card-img-top"
            src="<?= BASEURL;?>/img/premium.png"
            alt="Card image cap"
            width="10">
        <div class="card-body text-center">
            <p class="card-text">all Books</p>
            <small><?= $ambilRow3;?>
                buku</small>
        </div>
    </a>
</div>

<a href="">
    <div class="card float-left" style="width: 14rem;">
        <img
            class="card-img-top"
            src="<?= BASEURL;?>/img/sejarah.png"
            alt="Card image cap"
            width="10">
        <div class="card-body text-center">
            <p class="card-text">sejarah</p>
            <small><?= $ambilRow4;?>
                buku</small>
        </div>
    </div>
</a>

<div class="card text-center" style="width: 14rem;">
    <a href="">
        <img
            class="card-img-top"
            src="<?= BASEURL;?>/img/edukasi.png"
            alt="Card image cap"
            width="10">
        <div class="card-body text-center">
            <p class="card-text">edukasi</p>
            <small><?= $ambilRow5;?>
                buku</small>
        </div>
    </a>
</div>

</div>

<div class="iklan-buku">
<div class="container">
    <h1 class="mb-5">Free Books
    </h1>

    <div class="row float-left">
        <?php foreach( $data['ambilFreeBooks'] as $buku ) : ?>
        <div class="col-md ml-3">
            <!-- Pertama -->
            <div class="card text-center mt-4" style="width: 320px;">
                <a href="./detail/<?= $buku['id_buku'];?>" class="link-detail">
                    <img
                        class="card-img-top"
                        src="img/buku/<?= $buku['gambar'];?>"
                        alt="Card image cap">
                    <img src="img/eye.png" alt="" width="125px" class="detail">
                    <div class="card-body">
                        <p class="card-text"><?= $buku['judul_buku'];?></p>
                        <hr class="my-4">
                        <p class="card-judul float-left"><img
                            class="mr-2"
                            src="img/<?= $buku['logo_kategori'];?>"
                            alt="Card image cap"
                            width="28"><?= $buku['kategori_buku']?></p>
                        <p class=" card-judul float-right"><?= $buku['rating_buku']?><img src="<?= BASEURL;?>/img/star.png" alt="" width="20rem" class=""></p>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <div class="clear"></div>
    <br><br><br><br><br>
    <br><hr class="my-4"><br><br>

    <h1 class="mb-3">Premium Books
        <img class="mb-2" src="<?= BASEURL;?>/img/premium.png" alt="" width="40"></h1>

    <div class="row float-left">
        <?php foreach( $data['ambilProBooks'] as $buku ) : ?>
        <div class="col-md mt-5">
            <!-- Pertama -->
            <div class="card text-center mt-4" style="width: 320px;">
                <a href="<?= BASEURL;?>/detail/<?= $buku['id_buku'];?>" class="link-detail">
                    <img
                        class="card-img-top"
                        src="img/buku/<?= $buku['gambar'];?>"
                        alt="Card image cap">
                    <img src="img/eye.png" alt="" width="125px" class="detail">
                    <div class="card-body">
                        <p class="card-text"><?= $buku['judul_buku'];?></p>
                        <hr class="my-4">
                        <p class="card-judul float-left"><img
                            class="mr-2"
                            src="img/<?= $buku['logo_kategori'];?>"
                            alt="Card image cap"
                            width="28"><?= $buku['kategori_buku']?></p>
                        <p class=" card-judul float-right"><?= $buku['rating_buku']?><img src="<?= BASEURL;?>/img/star.png" alt="" width="20rem" class=""></p>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <div class="clear"></div>

</div>
</div>