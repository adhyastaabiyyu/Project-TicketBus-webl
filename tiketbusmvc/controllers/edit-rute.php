<?php 
    require_once '../models/db.php';

    $getId = $_GET['idk'];

    $query = mysqli_query($conn, "SELECT * FROM tiket WHERE id_tiket = '".$getId."'");
    $d = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Rute</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="../public/css/style-pesan-tiketmvc.css">
    <link rel="stylesheet" href="../public/css/style-index-mvc.css">
    <link rel="stylesheet" href="../public/css/style-info-rutemvc.css">
    <link rel="stylesheet" href="../public/css/style-form-buattiketmvc.css">
    <link rel="stylesheet" href="../public/css/style-form-editrutemvc.css">
    <link rel="stylesheet" href="../public/css/style-menu-indxmvc.css">
</head>
<body>
    <header>
        <div>
            <a href="signin-admin.php" style="text-decoration: none;">
                <img class="icon" src="../public/img/Log-Ebus.png">
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
            <img class="aside" src="../public/img/rute.jpg">
        </aside>
        
        <br>
        <div class="link">
            <input type="submit" value="www.Electricbus.com">
        </div>
    
        <article>
            <div class="header-editrute">
                <h2> EDIT RUTE </h2>
            </div>

            <div>
                <nav class="menu-indx">
                    <ul>
                        <li><a href="index.php">Layanan</a></li>
                        <li><a href="/tiketbusmvc/views/rute-admin.php/">kembali</a></li>
                        <!-- <li><a href="">Contact</a></li>
                        <li><a href="">Akun</a></li> -->
                    </ul>
                </nav>
            </div>

            <form action="" method="POST">
            <div class="menu_psn_editrute">
                        <div class="nama-cstmr_editrute">
                        <p>Nama Penumpang</p>
                        <input name="nama_penumpang" type="text">
                        </div>
                        <div class="tujuan1_editrute">
                        <p>Lokasi Kota</p>
                            <select name="nama" class="pilih">
                                <option value="">pilih</option>
                                <option value="Kec.krian">kec.Krian</option>
                                <option value="kab.Sidoarjo">kab.Sidoarjo</option>
                                <option value="kab.Surabaya">kab.Surabaya</option>
                                <option value="kab.Malang">kab.malang</option>
                                <option value="kab.Mojokerto">kab.Mojokerto</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="tujuan2_editrute">
                            <p>Terminal Awal</p>
                            <select name="awal" class="pilih">
                                <option value="">pilih</option>
                                <option value="Terminal Krian kec.krian">Terminal Krian kec.krian</option>
                                <option value="Terminal Sidoarjo kec.candi sidoarjo">Terminal Larangan kec.candi sidoarjo</option>
                                <option value="Terminal Sidoarjo kec.waru sidoarjo">Terminal Purabaya kec.waru Sidoarjo</option>
                                <option value="terminal Joyoboyo kab.surabaya">terminal Joyoboyo kab.surabaya</option>
                                <option value="Terminal Wonokromo jagir kab.surabaya">terminal Wonokromo jagir kab.surabaya</option>
                                <option value="Terminal Bratang kec.gubeng surabaya">terminal Bratang kec.gubeng surabaya</option>
                                <option value="Terminal Dukuhkupang kec.dukuhpakis surabaya">terminal Dukuhkupang kec.dukuhpakis surabaya</option>
                                <option value="Terminal Arjosari kec.blimbing malang">terminal Wonokromo kec.blimbing malang</option>
                                <option value="Terminal ladungasri kec.dau malang">terminal ladungsari kec.dau malang</option>
                                <option value="Terminal Hamid rusdi kec.kedungkandang malang">terminal Hamid rusdi kec.kedungkandang malang</option>
                                <option value="Terminal kertajaya kec.magersari mojokerto">Terminal Kertajaya kec.magersari mojokerto</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="tgl_psn">
                            <p>Tanggal</p>
                            <input name="tgl" type="date" value="<?=$d['tanggal'] ?>">
                        </div>

                        <div class="akhir">
                            <p>terminal akhir</p>
                        <select name="akhir" class="pilih">
                        <option value="">pilih</option>
                                <option value="Terminal Krian kec.krian">Terminal Krian kec.krian</option>
                                <option value="Terminal Sidoarjo kec.candi sidoarjo">Terminal Larangan kec.candi sidoarjo</option>
                                <option value="Terminal Sidoarjo kec.waru sidoarjo">Terminal Purabaya kec.waru Sidoarjo</option>
                                <option value="terminal Joyoboyo kab.surabaya">terminal Joyoboyo kab.surabaya</option>
                                <option value="Terminal Wonokromo jagir kab.surabaya">terminal Wonokromo jagir kab.surabaya</option>
                                <option value="Terminal Bratang kec.gubeng surabaya">terminal Bratang kec.gubeng surabaya</option>
                                <option value="Terminal Dukuhkupang kec.dukuhpakis surabaya">terminal Dukuhkupang kec.dukuhpakis surabaya</option>
                                <option value="Terminal Arjosari kec.blimbing malang">terminal Wonokromo kec.blimbing malang</option>
                                <option value="Terminal ladungasri kec.dau malang">terminal ladungsari kec.dau malang</option>
                                <option value="Terminal Hamid rusdi kec.kedungkandang malang">terminal Hamid rusdi kec.kedungkandang malang</option>
                                <option value="Terminal kertajaya kec.magersari mojokerto">Terminal Kertajaya kec.magersari mojokerto</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="harga_editrute">
                        <p>Harga tiket</p>
                            <select name="hrg" class="pilih">
                                <option value="">pilih</option>
                                <option value="KOTA BAGIAN KRIAN">KOTA BAGIAN KRIAN :</option>
                                <option value="KRN - SDA [Rp.10.000]">KRN - SDA [Rp.10.000]</option>
                                <option value="KRN - SBY [Rp.20.000]">KRN - SBY [Rp.20.000]</option>
                                <option value="KRN - MJKT [Rp.25.000]">KRN - MJKT [Rp.25.000]</option>
                                <option value="KRN - MLNG [RP.35.000]">KRN - MLNG [RP.35.000]</option>
                                <option value="SDA - KRN [Rp.10.000]">SDA - KRN [Rp.10.000]</option>
                                <option value="KOTA BAGIAN SIDOARJO">KOTA BAGIAN SIDOARJO :</option>
                                <option value="SDA - SDA [Rp.5.000]">SDA - SDA [Rp.5.000]</option>
                                <option value="SDA - SBY [Rp.20.000]">SDA - SBY [Rp.20.000]</option>
                                <option value="SDA - MJKT [Rp.25.000]">SDA - MJKT [Rp.25.000]</option>
                                <option value="SDA - MLNG [Rp.35.000]">SDA - MLNG [Rp.35.000]</option>
                                <option value="KOTA BAGIAN SURABAYA">KOTA BAGIAN SURABAYA :</option>
                                <option value="SBY - SBY [Rp.5.000]">SBY - SBY [Rp.5.000]</option>
                                <option value="SBY - KRN [Rp.15.000]">SBY - KRN [Rp.15.000]</option>
                                <option value="SBY - SDA [Rp.10.000]">SBY - SDA [Rp.10.000]</option>
                                <option value="SBY - MJKT [Rp.25.000]">SBY - MJKT [Rp.25.000]</option>
                                <option value="SBY - MLNG [Rp.35.000]">SBY - MLNG [Rp.35.000]</option>
                                <option value="KOTA BAGIAN MOJOKERTO">KOTA BAGIAN MOJOKERTO :</option>
                                <option value="MJKT - MJKT [Rp.5.000]">MJKT - MJKT [Rp.5.000]</option>
                                <option value="MJKT - KRN [Rp.25.000]">MJKT - KRN [Rp.25.000]</option>
                                <option value="MJKT - SDA [Rp.25.000]">MJKT - SDA [Rp.25.000]</option>
                                <option value="MJKT - SBY [Rp.25.000]">MJKT - SBY [Rp.25.000]</option>
                                <option value="MJKT - MLNG [Rp.30.000]">MJKT - MLNG [Rp.30.000]</option>
                                <option value="KOTA BAGIAN MALANG">KOTA BAGIAN MALANG :</option>
                                <option value="MLNG - MLNG [Rp.5.000]">MLNG - MLNG [Rp.5.000]</option>
                                <option value="MLNG - KRN [Rp.35.000]">MLNG - KRN [Rp.35.000]</option>
                                <option value="MLNG - SDA [Rp.35.000]">MLNG - SDA [Rp.35.000]</option>
                                <option value="MLNG - MJKT [Rp.30.000]">MLNG - MJKT [Rp.30.000]</option>
                                <option value="MLNG - SBY [Rp.35.000]">MLNG - SBY [Rp.35.000]</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="psn_tiket_editrute">
                            <input type="submit" name="submit" value="Edit Rute">
                        </div>
                    </div>
                </form>

                <!-- proses tambah -->
                <?php 
                    if (isset($_POST['submit'])) {
                        $nama_penumpang = $_POST['nama_penumpang'];
                        $nama = ucwords($_POST['nama']);
                        $awal = $_POST['awal'];
                        $akhir = $_POST['akhir'];
                        $tgl = $_POST['tgl'];
                        $hrg = $_POST['hrg'];

                        $update = mysqli_query($conn, "UPDATE tiket set 
                            nama_penumpang = '".$nama_penumpang."',
                            nama = '".$nama."', 
                            terminal_awal = '".$awal."', 
                            terminal_akhir = '".$akhir."',
                            tanggal = '".$tgl."',
                            harga = '".$hrg."'
                            WHERE id_tiket = '".$getId."'
                            ");
                        if ($update) {
                            echo '<script>alert("Ubah Data Berhasil")</script>';
                            echo '<script>window.location="/tiketbusmvc/views/rute-admin.php/"</script>';
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