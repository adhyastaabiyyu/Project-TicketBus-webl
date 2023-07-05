<?php require_once('../../models/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pemograman Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="../../public/css/style-pesan-tiketmvc.css">
    <link rel="stylesheet" href="../../public/css/style-index-mvc.css">
    <link rel="stylesheet" href="../../public/css/style-info-rutemvc.css">
    <link rel="stylesheet" href="../../public/css/style-form-signupmvc.css">
    <link rel="stylesheet" href="../../public/css/style-menu-indxmvc.css">
</head>

<body>
    <header>
        <div>
            <a href="signin-admin.php" style="text-decoration: none;">
                <img class="icon" src="../../public/img/Log-Ebus.png">
            </a>
        </div>
    </header>
    <section>
        <br>
        <div class="pesan">
            <a href="#">
                <input type="button" value="pemesanan tiket" ></a>
        </div>
        <br>
        <div class="to_tiket">
            <a href="rute.php">
            <input type="button" value="Informasi Rute"></a>
        </div>
        <br>
        <aside> 
            <img class="aside" src="../../public/img/rute.jpg">
        </aside>
        <br>
        <div class="link">
            <input type="submit" value="www.Electricbus.com">
        </div>
        <article>
            <div class="signup-header">
                <h2> DAFTAR PENUMPANG </h2>
            </div>
            <div>
                <nav class="menu-indx">
                    <ul>
                        <li><a href="index.php">Layanan</a></li>
                        <li><a href="sign-in.php">Masuk</a></li>
                        <li><a href="/tiketbusmvc/index.php">Keluar</a></li>
                        <!-- <li><a href="">Contact</a></li>
                        <li><a href="">Akun</a></li> -->
                    </ul>
                </nav>
            </div>

            <form action="" method="POST">
                    <div class="menu_form">
                        <div class="nama">
                        <p>Nama</p>
                        <input name="nama" type="text">
                        </div>
                        <div class="password">
                            <p>password</p>
                            <input name="pass" type="text">
                        </div>
                        <div class="gender">
                            <p>gender</p>
                            <input name="gender" type="text">
                        </div>

                        <div class="tgl_psn">
                            <p>Tanggal Lahir</p>
                            <input name="tgl" type="date">
                        </div>

                        <div class="alamat">
                            <p>Alamat</p>
                            <input name="alamat" type="text">
                        </div>

                        <div class="submit-data">
                            <input type="submit" name="submit" value="Sign Up">
                        </div>
                    </div>
                </form>

                <!-- proses sign up -->
                <?php 
                    if (isset($_POST['submit'])) {
                        $nama = $_POST['nama'];
                        $pass = $_POST['pass'];
                        $gender = $_POST['gender'];
                        $tgl = $_POST['tgl'];
                        $alamat = $_POST['alamat'];

                        $insert = mysqli_query($conn, "INSERT INTO penumpang VALUES (
                            null,
                            '".$nama."',
                            '".$pass."',
                            '".$gender."',
                            '".$tgl."',
                            '".$alamat."'
                        )");
                        if ($insert) {
                            echo '<script>window.location="/tiketbusmvc/index.php"</script>';
                        }else{
                            echo 'gagal'.mysqli_error($conn);
                        }
                        
                    }
                ?>
        </article>  
        </section>
        <footer>
        <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.65268116078!2d112.64904599528302!3d-7.274041785535105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf93cf2de6b%3A0x3b952696d53fda55!2sKota%20SBY%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1674310101529!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" height="100" width="100"></iframe>
            </div>
            <p class="p1">
                Informasi :
                <p class="p2">
                    > Tentang Kami <br>
                    > Publikasi <br> 
                    > karir <br>
                    > Informasi Publik <br>
                    > Heritage <br>
                    > Csr <br>
                </p>
                <p class="p3"> Kontak Kami : 
                    <p class="p4">
                        > Kantor Pusat : Jl. Pahlawan No. 10 <br>
                        > Office Phone : 081-8882-976 <br>
                        > Email : Electricbus@gmail.com <br>
                        > Contact center : 121/111 <br>
                        > Layanan Penumpang : CS@Ebus.id <br>
                    </p>
           
        </footer>
</body>
</html>