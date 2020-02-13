
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['judul'];?> dong</title>
</head>
<body>
<?php foreach( $data['ambilBaca'] as $baca ) :?>
    <embed src="<?= BASEURL;?>/file/<?= $baca['file_buku'];?>#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="1366px" height="800px">
<?php endforeach;?>
</body>
</html>