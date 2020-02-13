<div class="iklan-buku">
    <div class="container">
        <br><br><br><br><br>
        <?php if( isset( $_POST['cari'] ) ) :?>
        <h4 class="mb-5">Hasil Pencarian dari :
            <b>
                <i><?= $data['namaCari'];?></i>
            </b>
        </h4>

        <div class="row float-left">

            <?php foreach( $data['cariBuku'] as $buku ) : ?>
            <div class="col-md">
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

    <?php elseif( !isset($_POST['cari']) ) :?>
      <h1 class="mb-5 font-weight-800" style="font-family: 'Montserrat'">All Books
    </h1>
        <div class="row float-left">

            <?php foreach( $data['ambilAllBooks'] as $buku ) : ?>
            <div class="col-md">
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

        <?php endif;?>
    </div>
    <div class="clear"></div>