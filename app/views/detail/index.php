
<div class="banner">
    <?php foreach( $data['detailBuku'] as $buku ) :?>
      <div class="container">
        <img src="<?= BASEURL;?>/img/buku/<?= $buku['gambar'];?>" alt="" class="float-left thumbnail" width="250">
        <div class="banner-detail">
            <h1 class=""> <span class="judul"><?= $buku['judul_buku'];?></span> <span class="rating"> <?= $buku['rating_buku']?> <img src="<?= BASEURL;?>/img/star.png" alt="" width="30rem"></span></h1>
            <hr class="my-4">
            <p class="kategori"><img src="<?= BASEURL;?>/img/<?= $buku['logo_kategori'];?>" alt="" width="26px"> <?= $buku['kategori_buku'];?></p>
            <p class="penulis">by <?= $buku['penulis_buku'];?></p>
            <p class="penerbit">Penulis : <?= $buku['penerbit_buku'];?></p>
            <p class="penerbit">Tahun Terbit : <?= $buku['tahun_buku'];?></p>


    <?php if( $buku['status_buku'] == 'pro' && empty($_SESSION['username']) ) :?>
    <a class="btn btn-danger btn-baca-login" href="<?= BASEURL;?>/daftarlogin" role="button" onclick="alert('harap login dahulu')">HARAP LOGIN</a>
    <?php else :?>
      <a class="btn btn-success btn-baca" href="baca/<?= $buku['id_buku'];?>" role="button">MULAI BACA</a>
      <a class="btn btn-danger btn-baca-login ml-5" href="<?= BASEURL;?>" role="button">back to home</a>
  <?php endif;?>
    </div>
    </div>
</div>


<div class="banner-sinopis mt-5">
  <div class="container">
    <h3>Deskripsi</h3>
      <p><?= $buku['sinopsis_buku'];?></p>
  </div>
</div>
  <?php endforeach;?>