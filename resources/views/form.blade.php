<!DOCTYPE html>
<html lang="en">


<head>
    <title>QuranFirts | Daftar👍</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/form/util.css">
    <link rel="stylesheet" type="text/css" href="css/form/main.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="img/PNG4.png" alt="IMG">
            </div>

            <form class="contact1-form validate-form" method="POST" action="/tampilform">
                @csrf
                <span class="contact1-form-title">
                    Daftar Quran Firts2
                </span>

                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    <input class="input1 " type="text" name="nama" required placeholder="Nama lengkap">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input">
                    <select class="input1 radio" name="jenis_kelamin" id="" required>
                        <option class="radio" value="">jenis kelamin</option>
                        <option class="radio" value="pria">Pria</option>
                        <option class="radio" value="wanita">Wanita</option>
                    </select>
                    <span class="shadow-input1"></span>
                </div>


                <div class="wrap-input1 validate-input" data-validate="Subject is required">
                    <input class="input1" type="text" name="domisili" required placeholder="Domisili">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input wa" data-validate="Subject is required">
                    <div class="input-wa">+62</div>
                    <input class="input1" type="text" name="no_wa" required placeholder=""
                        onclick="alert('Pastikan No WA anda benar')">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input">
                    <input type="number" class="input1" name="usia" required placeholder="Usia"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input">
                    <select class="input1 radio" name="program" id="program" required>
                        <option class="radio" value="">Pilih Program</option>
                        <option class="radio" value="regular">Regular (8x pertemuan Pembelajaran 2x sepekan)
                        </option>
                        <option class="radio" value="intensif">Intensif (12x pertemuan Pembelajaran 3x
                            sepekan)
                        </option>
                    </select>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input">
                    <select class="input1 radio" name="tingkat" id="" required>
                        <option class="radio" value="">Tingkat</option>
                        <option class="radio" value="dasar">Dasar (Iqra' 1 - 6)</option>
                        <option class="radio" value="menengah">Menengah (masuk Al-Qur'an belajar materi tajwid Nun)
                        <option class="radio" value="mahir">Mahir (masuk Al-Qur'an belajar materi tajwid Nun
                            sukun dan tanwin)</option>
                        <option class="radio" value="menyesuaikan">menyesuaikan
                        </option>
                    </select>
                    <span class="shadow-input1"></span>
                </div>
                <div class="form-hari">
                    <div class="input-hari">Pilih Hari dan Waktu</div>
                    <div class="d-flex justify-content-center">
                        <div class="mr-5">
                            <ul>
                                <li>
                                    <input id="c1" type="checkbox" value="senin" name="hari[]">
                                    <label for="c1">Senin</label>
                                </li>
                                <li>
                                    <input id="c2" type="checkbox" value="selasa" name="hari[]">
                                    <label for="c2">Selasa</label>
                                </li>
                                <li>
                                    <input id="c3" type="checkbox" value="rabu" name="hari[]">
                                    <label for="c3">Rabu</label>
                                </li>
                                <li>
                                    <input id="c4" type="checkbox" value="kamis" name="hari[]">
                                    <label for="c4">Kamis</label>
                                </li>
                                <li>
                                    <input id="c5" type="checkbox" value="sabtu" name="hari[]">
                                    <label for="c5">Sabtu</label>
                                </li>
                                <li>
                                    <input id="c6" type="checkbox" value="ahad" name="hari[]">
                                    <label for="c6">Ahad</label>
                                </li>
                                <li>
                                    <input id="c11" type="checkbox" value="menyesuaikan" name="hari[]">
                                    <label for="c11">Menyesuaikan</label>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-5">
                            <ul>
                                <li>
                                    <input id="c7" type="radio" value="pagi" name="waktu">
                                    <label for="c7">Pagi</label>
                                </li>
                                <li>
                                    <input id="c8" type="radio" value="siang" name="waktu">
                                    <label for="c8">Siang</label>
                                </li>
                                <li>
                                    <input id="c9" type="radio" value="sore" name="waktu">
                                    <label for="c9">Sore</label>
                                </li>
                                <li>
                                    <input id="c10" type="radio" value="malam" name="waktu">
                                    <label for="c10">Malam</label>
                                </li>
                                <li>
                        </div>
                    </div>
                </div>


                {{-- <div class="wrap-input1 validate-input">
                            <input type="text" class="input1" name="jadwal" required placeholder="jadwal"></textarea>
                            <span class="shadow-input1"></span>
                        </div> --}}
                {{-- <div class="wrap-input1 validate-input ">
                            <div class="input-hari">Pilih Hari</div>
                    <div class="weekDays-selector d-flex justify-content-center">
                        <div>
                            <input type="checkbox" value="" id="senin" class="weekday" value="senin" name="jadwal" />
                            <label for="senin">Senin</label>
                            <input type="checkbox" value="" id="selasa" class="weekday" value="selasa" name="jadwal" />
                            <label for="selasa">Selasa</label>
                        </div>
                        <div>
                            <input type="checkbox" value="" id="rabu" class="weekday" value="rabu" name="jadwal[]" />
                            <label for="rabu">Rabu</label>
                            <input type="checkbox" value="" id="kamis" class="weekday" value="kamis" name="jadwal[]" />
                            <label for="kamis">Kamis</label>
                        </div>
                        <div class="">
                            <input type="checkbox" value="" id="sabtu" class="weekday" value="sabtu" name="jadwal[]" />
                            <label for="sabtu">Sabtu</label>
                            <input type="checkbox" value="" id="ahad" class="weekday" value="ahad" name="jadwal[]" />
                            <label for="ahad">Ahad</label>
                            <div class="">
                                <input type="checkbox" value="" id="menyesuaikan" class="weekday"
                                    value="menyesuaikan"name="jadwal[]" />
                                <label for="menyesuaikan">Menyesuaikan</label>
                            </div>
                        </div>
                    </div>
                    <p>apabila mencentang <span style="font-family: Montserrat;font-weight:800;"> menyesuaikan
                        </span>ini tidak
                        perlu mencentang opsi lain</p>
                </div> --}}

                {{-- 😭😭 waktu --}}
                {{-- <div class="wrap-input1 validate-input ">
                    <div class="input-hari">Pilih Hari</div>
                    <div class="weekDays-selector d-flex justify-content-center">
                        <div>
                            <input type="checkbox" value="" id="pagi" class="weekday" value="pagi" name="jadwal" />
                            <label for="pagi">pagi</label>
                            <input type="checkbox" value="" id="siang" class="weekday" value="siang" name="jadwal" />
                            <label for="siang">siang</label>
                        </div>
                        <div>
                            <input type="checkbox" value="" id="sore" class="weekday" value="sore" name="jadwal[]" />
                            <label for="sore">sore</label>
                            <input type="checkbox" value="" id="malam" class="weekday" value="malam" name="jadwal[]" />
                            <label for="malam">malam</label>
                        </div>
                    </div> --}}


                {{-- // how to make crud laravel ? --}}

                <!-- <div class="wrap-input1 validate-input" data-validate="Message is required">
        <textarea class="input1" name="message" required placeholder="Message"></textarea>
        <span class="shadow-input1"></span>
        </div> -->
                {{-- <div class="wrap-input1 validate-input">
                    <input type="text" class="input1" name="jadwal" required placeholder="jadwal"></textarea>
                    <span class="shadow-input1"></span>
                </div>
                <div>
                    <p for="oawk">pilih salah satu untuk mendapatkan</p>
                    <br>
                </div> --}}
                <span class="ket">
                    Jika memilih 'Menyesuaikan' maka tidak perlu mencetang hari dan waktu
                </span>

                <div class="form-info">
                    <div class="input-hari">Dari mana Tau quranfirst?</div>
                    <div class="d-flex justify-content-center form-infor">
                        <ul>
                            <li>
                                <input id="a" type="radio" value="instagram" name="informasi">
                                <label for="a">Instagram</label>
                            </li>
                            <li>
                                <input id="b" type="radio" value="facebook" name="informasi">
                                <label for="b">Facebook</label>
                            </li>
                            <li>
                                <input id="c" type="radio" value="tiktok" name="informasi">
                                <label for="c">Tiktok</label>
                            </li>
                            <li>
                                <input id="d" type="radio" value="whatsapp" name="informasi">
                                <label for="d">whatsapp</label>
                            </li>
                            <li>
                                <input id="e" type="radio" value="telegram" name="informasi">
                                <label for="e">Telegram</label>
                            </li>
                            <li>
                                <input id="f" type="radio" value="lainnya" name="informasi">
                                <label for="f">Lainya</label>
                                <textarea id="" name="info" placeholder="*Sumber lainnya"></textarea>
                            </li>
                            <li>

                            </li>
                        </ul>
                        <div class="">
                        </div>
                    </div>
                    {{-- <input id="c500" type="checkbox" required>
                    <label for="c500">Saya sudah mengisi formulir dengan benar</label> --}}
                </div>
                <div class="container-contact1-form-btn my-3">
                    <button class="contact1-form-btn">
                        <span>
                            Mendaftar
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.3
        })
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');


        // checkboxes
        let limit;
        let checkboxCount = 0;
        const select = document.querySelector('#program');

        select.addEventListener('change', function() {
            if (this.value === 'intensif') {
                limit = 3;
            } else if (this.value === 'regular') {
                limit = 2;
            } else {
                limit = 20;
            }
        });




        function handleCheckboxChange(e) {
            if (e.target.checked) {
                checkboxCount++;
            } else {
                checkboxCount--;
            }

            if (checkboxCount >= limit) {
                document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                    if (!checkbox.checked) {
                        checkbox.disabled = true;
                    }
                });
            } else {
                document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                    checkbox.disabled = false;
                });
            }
        }

        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', handleCheckboxChange);
        });
    </script>

    <!--===============================================================================================-->
    <script lang="JavaScript" type="text/javascript" src="js/script.js"></script>
    {{-- <script src="js/main.js"></script> --}}

</body>

</html>
