<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | SAHABAT KARIR</title>

    <!-- --------------- icon website --------------- -->
    <link rel="shortcut icon" href="assets/img/icon/logo-sk.png">

    <!-- --------------- css --------------- -->
    <link rel="stylesheet" href="assets/css/payment.css">
</head>

<body>
    <header>
        <div class="sahabat-karir-logo">
            <img src="assets/img/icon/logo-sk.png" alt="sahabat karir">
            <h2>SAHABAT KARIR</h2>
        </div>
    </header>

    <section id="payment">
        <div class="heading">
            <h1>Checkout</h1>
        </div>

        <div class="checkout">
            <div class="list-kelas">
                <div class="_kelas">
                    <div class="kelas">
                        <img src="assets/img/landingPage/polri.png" alt="kelas" class="icon__kelas">

                        <div class="paket">
                            <p class="nama-kelas">Kelas SBMPTN</p>

                            <span class="jenis-harga">
                                <p class="jenis">Paket Kilat</p>
                                <p class="harga">
                                    <span>Rp. </span><span class="harga">129.900</span>
                                </p>
                            </span>
                        </div>

                        <span class="ckeckbox">
                            <input class="hargaPaket" type="checkbox" checked name="paket1" value="129.900">
                        </span>
                    </div>

                    <div class="kelas">
                        <img src="assets/img/landingPage/polri.png" alt="kelas" class="icon__kelas">

                        <div class="paket">
                            <p class="nama-kelas">Kelas SBMPTN</p>

                            <span class="jenis-harga">
                                <p class="jenis">Paket Kilat</p>
                                <p class="harga">
                                    <span>Rp. </span><span class="harga">129.900</span>
                                </p>
                            </span>
                        </div>

                        <span class="ckeckbox">
                            <input class="hargaPaket" type="checkbox" checked name="paket1" value="129.900">
                        </span>
                    </div>

                    <div class="kelas">
                        <img src="assets/img/landingPage/polri.png" alt="kelas" class="icon__kelas">

                        <div class="paket">
                            <p class="nama-kelas">Kelas SBMPTN</p>

                            <span class="jenis-harga">
                                <p class="jenis">Paket Kilat</p>
                                <p class="harga">
                                    <span>Rp. </span><span class="harga">129.900</span>
                                </p>
                            </span>
                        </div>

                        <span class="ckeckbox">
                            <input class="hargaPaket" type="checkbox" checked name="paket1" value="129.900">
                        </span>
                    </div>
                </div>

                <div class="sub-total">
                    <h1>Sub Total</h1>
                    <p class="sub-total"></p>
                </div>
            </div>

            <div class="pembayaran">
                <div class="heading__pembayaran">
                    <h1>Ringkasan Belanja</h1>
                </div>

                <div class="ringkasan">
                    <div class="total">
                        <span>
                            <p>Total Harga</p>
                            <p class="sub-total"></p>
                        </span>
                        <span>
                            <p>Biaya Admin</p>
                            <p><span>Rp. </span><span class="biaya-admin">3000</span></p>
                        </span>
                    </div>

                    <div class="total-tagihan">
                        <p>Total Tagihan</p>
                        <p class="total-tagihan"></p>
                    </div>
                </div>

                <div class="metode-pembayaran">
                    <button class="tombol pilih-pembayaran" type="button">Pilih Pembayaran</button>
                </div>
            </div>
        </div>

        <div class="bayar">
            <form action="">
                <a href="" class="tombol-close">
                    <i class="fa-solid fa-xmark"></i>
                </a>

                <div class="judul">
                    <h1>Pembayaran</h1>
                </div>

                <div class="metode">
                    <ul>
                        <li>
                            <p class="judul">Metode Pembayaran</p>
                        </li>

                        <li>
                            <div class="logo-mitra">
                                <img src="assets/img/logo-mitra/bca.png" alt="logo mitra">
                                <h6>BCA</h6>
                            </div>

                            <div class="input">
                                <input type="radio" id="bca" name="mitra" value="bca">
                            </div>
                        </li>

                        <li>
                            <div class="logo-mitra">
                                <img src="assets/img/logo-mitra/bri.png" alt="logo mitra">
                                <h6>BRI</h6>
                            </div>

                            <div class="input">
                                <input type="radio" id="bri" name="mitra" value="bri">
                            </div>
                        </li>

                        <li>
                            <div class="logo-mitra">
                                <img src="assets/img/logo-mitra/mandiri.png" alt="logo mitra">
                                <h6>Mandiri</h6>
                            </div>

                            <div class="input">
                                <input type="radio" id="mandiri" name="mitra" value="mandiri">
                            </div>
                        </li>

                        <li>
                            <div class="logo-mitra">
                                <img src="assets/img/logo-mitra/permataBank.png" alt="logo mitra">
                                <h6>Permata Bank</h6>
                            </div>

                            <div class="input">
                                <input type="radio" id="permataBank" name="mitra" value="permataBank">
                            </div>
                        </li>

                        <li>
                            <div class="logo-mitra">
                                <img src="assets/img/logo-mitra/indomaret.png" alt="logo mitra">
                                <h6>Indomaret</h6>
                            </div>

                            <div class="input">
                                <input type="radio" id="indomaret" name="mitra" value="indomaret">
                            </div>
                        </li>

                        <li>
                            <div class="logo-mitra">
                                <img src="assets/img/logo-mitra/alfamaret.png" alt="logo mitra">
                                <h6>Alfamart</h6>
                            </div>

                            <div class="input">
                                <input type="radio" id="alfamart" name="mitra" value="alfamart">
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="ringkasan">
                    <h1 class="judul">Ringkasan Pembayaran</h1>

                    <span>
                        <p>Total Tagihan</p>
                        <p class="sub-total"></p>
                    </span>

                    <span>
                        <p>Biaya Admin</p>
                        <p id="biaya-admin"></p>
                    </span>
                </div>

                <div class="total">
                    <h1 class="judul">Total Pembayaran</h1>

                    <span>
                        <p class="total-tagihan"></p>

                        <input id="kirim" name="totalTagihan" type="text" value="" hidden>
                        <button type="submit" name="kirim">Bayar</button>
                    </span>
                </div>
            </form>
        </div>
    </section>



    <!-- --------------- js --------------- -->
    <script src="https://kit.fontawesome.com/02db274a60.js" crossorigin="anonymous"></script>
    <script src="assets/js/payment.js"></script>
</body>

</html>