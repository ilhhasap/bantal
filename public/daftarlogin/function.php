<?php
    $conn =  mysqli_connect('localhost', 'root', '', 'bacaandigital');

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    function register($data){
        
        global $conn;
        $username = htmlspecialchars(strtolower(stripslashes(trim($data["username"]))));
        $nama_user = htmlspecialchars($data["nama_user"]);
        $password =htmlspecialchars(mysqli_real_escape_string($conn, $data["password"]));
        $password2 = htmlspecialchars(mysqli_real_escape_string($conn,$data["password2"]));
        date_default_timezone_set('Asia/Jakarta');
        $tgl_daftar = date('Y-m-d');
        $level = "user";
        
        $cek_user = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'"));
        if (  $cek_user > 0 ) {
            echo "<script>
            alert('username sudah terdaftar!');
            window.location='./index.php';
            </script>";
            exit();
        }
        if ( $password != $password2 ) {
            echo "<script>
                alert('password tidak sesuai');
            </script>";
            return false;
        }
        

        //enskripsi pswrd
        $password = hash("sha1", $password);
        mysqli_query($conn, "INSERT INTO user  VALUES
        ('$username','$nama_user', '$password', '$tgl_daftar', '$level')");
        return mysqli_affected_rows($conn);
    }


?>