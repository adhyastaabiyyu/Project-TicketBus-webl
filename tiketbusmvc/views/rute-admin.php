<?php 
    require_once '../models/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="../../public/css/style-index-mvc.css">
    <link rel="stylesheet" href="../../public/css/style-info-rutemvc.css">
    <link rel="stylesheet" href="../../public/css/style-formrute-admin-mvc.css">
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
            <a href="/tiketbusmvc/views/rute.php">
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
            <div class="header-rute-admin">
                <h2> PEMESANAN TIKET </h2>
            </div>
            <div>
                <nav class="menu-rute-admin">
                    <ul>
                        <li><a href="index-penumpang.php">Layanan</a></li>
                        <li><a href="../../views/home/sign-out.php">Keluar</a></li>
                        <!-- <li><a href="">Contact</a></li>
                        <li><a href="">Akun</a></li> -->
                    </ul>
                </nav>
            </div>
            <div class="img-bg-ruteadmin" >
            <img src="../../public/img/landing-page-sby.png" alt="">
        </div>
    <center>
        <div class="content-ruteadmin">
            <button><a href="/tiketbusmvc/controllers/tambah-rute.php/.">Buat Tiket</a></button>
            <table border="1" cellspacing="0" class="table">
                <thead>
                    <tr>
                        <th>Nama Penumpang</th>
                        <th>Lokasi Kota</th>
                        <th>Terminal Awal</th>
                        <th>Terminal Akhir</th>
                        <th>Tanggal</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $cek = mysqli_query($conn, "SELECT * FROM tiket");
                        if(mysqli_num_rows($cek) > 0){
                        while($row = mysqli_fetch_array($cek)){
                    ?>
                    <tr>
                        <td><?php echo $row['nama_penumpang'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['terminal_awal'] ?></td>
                        <td><?php echo $row['terminal_akhir'] ?></td>
                        <td><?php echo $row['tanggal'] ?></td>
                        <td><?php echo $row['harga'] ?></td>
                        <td>
                            <a href="/tiketbusmvc/controllers/edit-rute.php?idk=<?php echo $row['id_tiket'] ?>">
                                <input type="submit" name="submit" value="Edit">
                            </a>
                            <a href="/tiketbusmvc/controllers/hapus-rute.php?idk=<?php echo $row['id_tiket'] ?>" onclick="return confirm ('Pastikan Data yang di Hapus Sudah Benar')">
                                <input type="submit" name="submit" value="Hapus">
                            </a>
                        </td>
                    </tr>
                    <?php }}else{ ?>
                        <tr>
                            <td colspan="8">Tidak Ada Data Produk</td>
                        </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
        </div>    
    </center>       
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