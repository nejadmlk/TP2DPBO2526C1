<?php

include "Handphone.php";

$dataHandphone = array();

$hp1 = new Handphone("Galaxy S25", "14.000.000", "Samsung", "2 Tahun", "4.000 mAh", "Hitam", "12 GB", "256 GB");
$hp1->setGambar("Media/s25.jpg");

$hp2 = new Handphone("iPhone 16", "17.999.999", "Apple", "1 Tahun", "3.561 mAh", "Putih", "8 GB", "128 GB");
$hp2->setGambar("Media/ip16.jpg");

$hp3 = new Handphone("Xiaomi 14", "11.999.999", "Xiaomi", "2 Tahun", "4.610 mAh", "Hitam", "12 GB", "512 GB");
$hp3->setGambar("Media/xiaomi14.jpg");

$hp4 = new Handphone("Pixel 9", "14.000.000", "Google", "2 Tahun", "4.700 mAh", "Hitam", "12 GB", "256 GB");
$hp4->setGambar("Media/pixel9.jpg");

$hp5 = new Handphone("ROG Phone 9", "7.999.999", "Asus", "2 Tahun", "5.800 mAh", "Hitam", "16 GB", "512 GB");
$hp5->setGambar("Media/rog.jpg");

$dataHandphone = [$hp1, $hp2, $hp3, $hp4, $hp5];


if (isset($_POST['tambah'])) {

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $merek = $_POST['merek'];
    $garansi = $_POST['garansi'];
    $baterai = $_POST['baterai'];
    $warna = $_POST['warna'];
    $ram = $_POST['ram'];
    $penyimpanan = $_POST['penyimpanan'];
    $gambar = "";

    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {

        $namaFile = $_FILES['gambar']['name'];
        $tmpFile = $_FILES['gambar']['tmp_name'];
        $folder = "uploads/";

        if (!is_dir($folder)) {
            mkdir($folder);
        }

        $gambar = $folder . basename($namaFile);

        move_uploaded_file($tmpFile, $gambar);
    }

    $handphone = new Handphone($nama, $harga, $merek, $garansi, $baterai, $warna, $ram, $penyimpanan);

    if ($gambar != "") {
        $handphone->setGambar($gambar);
    }

    $dataHandphone[] = $handphone;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Konter JokoWowo</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<nav class="navbar">

    <div class="logo">
        Konter JokoWowo
    </div>

    <div class="menu">

        <a href="#home">
            Home
        </a>

        <a href="#produk">
            Produk
        </a>

        <a href="#list">
            List
        </a>

        <a href="#tambah">
            Tambah Data
        </a>

    </div>

</nav>


<section class="home" id="home">

    <div class="home-content">

        <p class="subjudul">
            PUSAT DATA HANDPHONE
        </p>

        <h1>
            Konter JokoWowo
        </h1>

        <p>
            Kelola dan lihat data stok handphone
            dengan mudah.
        </p>

        <a href="#produk" class="button">
            Lihat Produk
        </a>

    </div>

</section>


<section class="produk" id="produk">

    <div class="produk-content">

        <p class="subjudul-produk">
            PRODUK HANDPHONE
        </p>

        <h2>
            Pilihan Handphone
        </h2>

        <p class="deskripsi-produk">
            Lihat berbagai pilihan handphone yang tersedia
            di Konter JokoWowo.
        </p>


        <div class="produk-container">

            <?php foreach ($dataHandphone as $handphone) { ?>

                <div class="produk-card">


                    <div class="foto-kendaraan">

                        <?php if ($handphone->getGambar() != "") { ?>

                            <img
                                src="<?php echo $handphone->getGambar(); ?>"
                                alt="<?php echo $handphone->getNama(); ?>"
                            >

                        <?php } else { ?>

                            <div class="tidak-ada-foto">
                                Tidak ada foto
                            </div>

                        <?php } ?>

                    </div>


                    <div class="produk-info">

                        <h3>
                            <?php echo $handphone->getNama(); ?>
                        </h3>

                        <p>
                            <b>Merek:</b>
                            <?php echo $handphone->getMerek(); ?>
                        </p>

                        <p>
                            <b>Harga:</b>
                            Rp <?php echo $handphone->getHarga(); ?>
                        </p>

                        <a href="#list" class="produk-button">
                            Lihat Selengkapnya
                        </a>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>

</section>


<section id="list" class="list">

    <h2>
        Stok Data Handphone
    </h2>


    <div class="table-container">

        <table>

            <tr>

                <th>
                    No
                </th>

                <th>
                    Nama
                </th>

                <th>
                    Harga
                </th>

                <th>
                    Merek
                </th>

                <th>
                    Garansi
                </th>

                <th>
                    Baterai
                </th>

                <th>
                    Warna
                </th>

                <th>
                    RAM
                </th>

                <th>
                    Penyimpanan
                </th>

            </tr>


            <?php foreach ($dataHandphone as $i => $handphone) { ?>

                <tr>

                    <td>
                        <?php echo $i + 1; ?>
                    </td>

                    <td>
                        <?php echo $handphone->getNama(); ?>
                    </td>

                    <td>
                        Rp <?php echo $handphone->getHarga(); ?>
                    </td>

                    <td>
                        <?php echo $handphone->getMerek(); ?>
                    </td>

                    <td>
                        <?php echo $handphone->getGaransi(); ?>
                    </td>

                    <td>
                        <?php echo $handphone->getBaterai(); ?>
                    </td>

                    <td>
                        <?php echo $handphone->getWarna(); ?>
                    </td>

                    <td>
                        <?php echo $handphone->getRam(); ?>
                    </td>

                    <td>
                        <?php echo $handphone->getPenyimpanan(); ?>
                    </td>

                </tr>

            <?php } ?>

        </table>

    </div>

</section>


<section id="tambah" class="tambah">

    <h2>
        Tambah Data Handphone
    </h2>


    <form method="POST" enctype="multipart/form-data">


        <label>
            Nama
        </label>

        <input
            type="text"
            name="nama"
            required
        >


        <label>
            Harga
        </label>

        <input
            type="text"
            name="harga"
            required
        >


        <label>
            Merek
        </label>

        <input
            type="text"
            name="merek"
            required
        >


        <label>
            Garansi
        </label>

        <input
            type="text"
            name="garansi"
            required
        >


        <label>
            Baterai
        </label>

        <input
            type="text"
            name="baterai"
            required
        >


        <label>
            Warna
        </label>

        <input
            type="text"
            name="warna"
            required
        >


        <label>
            RAM
        </label>

        <input
            type="text"
            name="ram"
            required
        >


        <label>
            Penyimpanan
        </label>

        <input
            type="text"
            name="penyimpanan"
            required
        >


        <label>
            Gambar Handphone
        </label>

        <input
            type="file"
            name="gambar"
            accept="image/*"
        >


        <button
            type="submit"
            name="tambah"
        >
            Tambah Data
        </button>

    </form>

</section>


</body>

</html>