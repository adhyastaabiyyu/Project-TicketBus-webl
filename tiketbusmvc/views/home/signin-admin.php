<?php require_once('../../models/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="../../public/css/style-index-mvc.css">
    <link rel="stylesheet" href="../../public/css/style-info-rutemvc.css">
    <link rel="stylesheet" href="../../public/css/style-login-admin-mvc.css">
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
            <a href="#">
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
            <div>
                <h2> LOGIN PETUGAS LOKET </h2>
            </div>
            <div>
                <nav class="header-signadmin">
                    <ul>
                        <li><a href="index.php">Layanan</a></li>
                        <li><a href="sign-in.php">Masuk</a></li>
                        <li><a href="sign-up.php">Daftar</a></li>
                        <!-- <li><a href="">Contact</a></li>
                        <li><a href="">Akun</a></li> -->
                    </ul>
                </nav>
            </div>
            <form action="" method="POST">
                <div class="menu_login">
                    <div class="nama_user">
                    <p>Username</p>
                    <input name="nama" type="text">
                    </div>
                    <div class="password">
                        <p>Password</p>
                        <input name="pass" type="Password">
                    </div>
                    <div class="login">
                        <input type="submit" name="submit" value="Sign In">
                    </div>
                    <div class='report'>
                        <p>terms and conditions</p>
                    </div>
                </div>
                <div class='logo-sby2'>
                <img src="../../public/img/logo-golekbus.png" alt="">
                </div>
                <div class='anime'>
                    <img src="../../public/img/anime5.png" alt="">
                </div>
            </form>

                <!-- proses login -->
                <?php 
                    if (isset($_POST['submit'])) {

                        $nama = $_POST['nama'];
                        $pass = $_POST['pass'];

                        $cek = mysqli_query($conn, "SELECT * FROM admin WHERE nama = '".$nama."' AND password = '".$pass."'");
                        
                        if(mysqli_num_rows($cek) > 0){
                            $d = mysqli_fetch_object($cek);
                            $_SESSION['status_login'] = true;
                            $_SESSION['a_global'] = $d;
                            $_SESSION['id'] = $d->id_Admin;
                            echo '<script>window.location="index-admin.php"</script>';
                        }else{
                            echo '<script>alert("Username atau Password Anda Salah!")</script>';
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