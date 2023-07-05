<?php 
    require_once ('../../models/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Penumpang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="../../public/css/style-index-mvc.css">
    <link rel="stylesheet" href="../../public/css/style-info-rutemvc.css">
    <link rel="stylesheet" href="../../public/css/style-info-rute-penumpang-mvc.css">

</head>
<body>
    <header>
        <div>
            <img class="icon" src="../../public/img/Log-Ebus.png">
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
            <a href="/tiketbusmvc/views/rute-penumpang.php">
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
            <div class="indx-utama">
                <h2> ELECTRIC BUS </h2>
            </div>

            <div>
                <nav class="menu-indx">  
                    <ul>
                        <li><a href="index-penumpang.php">Layanan</a></li>
                        <li><a href="sign-out.php">Keluar</a></li>
                        <!-- <li><a href="">Contact</a></li>
                        <li><a href="">Akun</a></li> -->
                    </ul>
                </nav>
            </div>
            <div class="dasboard-penumpang">
                <p>"Informasi Penumpang" </p>
            </div>
            <div class="bg-indx-penumpang2">
                <img src="../../public/img/line-icn-sby.png" alt="">
            </div>
            <div class="bg-indx-penumpang1">
                <img src="../../public/img/Suroboyo.png" alt="">
            </div>
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