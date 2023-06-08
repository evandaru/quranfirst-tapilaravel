<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbarbaru.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png" />
    <title>QuranFirts</title>
</head>

<body>
    <div class="modal" id="modal">
        <div class="container-modal">
            <button onclick="modalClose()" class="btn btn-secondary">❌ Tutup</button>
            <h2>Form pendaftaran calon peserta tahsin online quranfirst.</h2>
            <div class="modal-isi">
                <p>✅ Diperuntukkan untuk :
                    <br>
                    1. Orang yang benar - benar belum bisa baca Qur'an dari 0 sampai bisa baca dengan baik dan benar
                    sesuai dengan kaidah - kaidah tajwid dan makharijul huruf.(program dasar)
                    <br>
                    2. Orang yang bisa membaca Qur'an namun belum lancar tajwid dan makharijul hurufnya.(program
                    menengah)
                    <br>
                    3. Orang yang sudah lumayan lancar dalam membaca Qur'an secara tajwid namun masih kesusahan dalam
                    makharijul huruf.(program mahir)
                    <br>
                    <br>
                    ✅ Keunggulan program tahsin
                    <br>
                    Al-Qur'an privat @quranfirst.id dari kursus lain :
                    <br>
                    1. Pengajar adalah lulusan pondok .jadi tidak perlu diragukan lagi kredibilitasannya
                    <br>
                    2. Sistem privat 1 on 1 (tidak seperti kursus tahsin lain yang menggunakan sistem kelas) sehingga
                    lebih leluasa belajar dan bertanya langsung dengan pengajarnya.
                    <br>
                    3. Waktu yang fleksibel - (pagi/siang/sore/malam) sesuai kesepakatan pengajar dan murid,sehingga
                    sangat cocok bagi yang sibuk bekerja atau yang tidak banyak memiliki waktu luang karena fleksibel
                    waktu belajarnya.
                    <br>
                    4. Hanya 3x sesi per minggu (per sesi sekitar 30 menit ) atau 12x perbulan, insyaAllah tidak
                    menganggu kesibukan kerja/kuliahnya
                    <br>
                    5. Bisa berkonsultasi kapan saja dengan pengajarnya(tidak harus di waktu kursus).
                    <br>
                    6. Dilengkapi dengan buku/materi tajwid dan makharijul huruf (bagi peserta program menengah dan
                    mahir) eksklusif yang ditulis oleh seorang guru tahsin bersanad
                    <br>
                    7.Mendapat edukasi agama yang insyaAllah bermanfaat dari instagram dan grub telegram kami secara
                    gratis
                    <br>
                    <br>
                    ✅ Kriteria peserta :
                    <br>
                    - Tersedia untuk ikhwan dan akhwat, anak - anak, remaja, maupun dewasa
                    <br>
                    - Tersedia untuk semua umur 5 - 70 tahun
                    <br>
                    - Ikhwan dengan ustadz, akhwat dengan ustadzah
                    <br>
                    <br>
                    ✅Tersedia juga program tahfidz
                    <br>
                    Menghafal Al-Qur'an dengan target tertentu
                    contoh : target 1 bulan 1 juz / 2 juz perbulan

                    Sangat cocok untuk yang punya target mau menyelesaikan hafalan 30 juz secara bertahap dengan
                    bimbingan tahsin di setiap setorannya
                </p>
                <form action="{{ url('/daftar') }}">
                    <div class="checkbox">

                        <input type="checkbox" required>
                        <label for="kotak">
                            <p>Ya, saya sudah mengerti</p>
                        </label>
                        <br>
                    </div>
                    <button class="btn btn-primary">Daftar disini</button>
                </form>
            </div>

        </div>

    </div>
    <nav class="navbar">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggler" data-toggle="open-navbar1">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <a href="#">
                    <img src="img/logo.svg" alt="">
                    {{-- <h4>Quran<span>First</span></h4> --}}
                </a>
            </div>

            <div class="navbar-menu" id="open-navbar1">
                <ul class="navbar-nav">
                    <li class=""><a href="#">Home</a></li>
                    <li><a href="#kontak">kontak</a></li>
                    <li><a href="#programus">Program Us</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a onclick="modal()">Daftar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container1">
        <div class="left-side">
            <div class="isi">
                <h1>Perbaiki bacaanmu dengan mentor terpecaya</h1>
                <p>Perbaiki kualitas bacaan dengan waktu fleksibel dan pembelajaran privat.</p>
                <div class="tombol">
                    <div class="btn btn-primary" onclick="modal()">Daftar</div>
                    <a href="#container4">
                        <div class="btn btn-secondary">Lihat Program</div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="container2" id="solusi">
        <div class="left-side" data-aos="fade-up">
            <h2 data-aos="fade-up">kami bisa menjadi solusi?</h2>
            <p>QuranFirts adalah sebuah kursus online untuk membantu kamu yang belum bisa baca Qur'an dari nol, atau
                buat kamu yang ingin memperlancar dan memantapkan lagi bacaan Qur'annya sampai lancar insyaAllah.
            </p>
        </div>
    </div>
    <div id="about" class="container3">
        <h2>Mengapa memilih kami?</h2>
        <div class="bungkus">
            <div class="left-side">
                <div class="anak" data-aos="fade-up">
                    <div class="left-side">
                        <i class="fa-solid fa-chalkboard-user fa-xl"></i>
                    </div>
                    <div class="right-side">
                        <h3> Mentor terpercaya</h3>
                        <p>Mentor Alumni pesantren yang terpercaya.</p>
                    </div>
                </div>
                <div class="anak" data-aos="fade-up">
                    <div class="left-side">
                        <i class="fa-solid fa-clock fa-xl"></i>
                    </div>
                    <div class="right-side">
                        <h3> Waktu fleksibel</h3>
                        <p>Murid bebas menetukan waktu mengaji*</p>
                    </div>
                </div>
                <div class="anak" data-aos="fade-up">
                    <div class="left-side">
                        <i class="fa-solid fa-book fa-xl"></i>
                    </div>
                    <div class="right-side">
                        <h3> Materi gratis</h3>
                        <p>Dapatkan materi tajwid ekslusif, yang ditulis oleh seorang guru yang bersanad</p>
                    </div>
                </div>

            </div>
            <div class="right-side">
                <div class="anak" data-aos="fade-up">
                    <div class="left-side">
                        <i class="fa-solid fa-lock fa-xl"></i>
                    </div>
                    <div class="right-side">
                        <h3> Sistem privat</h3>
                        <p>Satu mentor satu murid</p>
                    </div>
                </div>
                <div class="anak" data-aos="fade-up">
                    <div class="left-side">
                        <i class="fa-solid fa-phone fa-xl"></i>
                    </div>
                    <div class="right-side">
                        <h3>Bebas konsultasi</h3>
                        <p>Murid dapat berkonsultasi 24 jam</p>
                    </div>
                </div>
                <div class="anak" data-aos="fade-up">
                    <div class="left-side">
                        <i class="fa-solid fa-mosque fa-xl"></i>
                    </div>
                    <div class="right-side">
                        <h3>Pengetahuan agama</h3>
                        <p>Dapatkan edukasi agama melalui grup telegram kami dan instagram</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container4" id="programus">
        <div class="judul">
            <h2>Program Qur'an Firts</h2>
        </div>
        <div class="isi1">
            <div class="keunggulan " data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1637823977605-997353e3e887?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1376&q=80"
                    alt="">
                <div class="tulisan">

                    <h3>Privat Regular</h3>
                    <p>8x pertemuan
                        Pembelajaran 2x sepekan</p>
                    <a href="/regular">
                        <button class="btn btn-primary">daftar sekarang!</button>
                    </a>

                </div>
            </div>
            <div class="keunggulan " data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1621160105007-727ca40f26a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80"
                    alt="">
                <div class="tulisan">

                    <h3>Program Intensif</h3>
                    <p>12x pertemuan
                        Pembelajaran 3x sepekan</p>
                    <a href="/intensif">
                        <button class="btn btn-primary">daftar sekarang!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container5">
        <div class="testimonial">
            {{-- <div class="judul">
                <h2>apa kata mereka?</h2>
            </div> --}}
            <div class="main-container">
                <div class="heading">
                    <h1 class="heading__title">Apa kata mereka?</h1>
                    <p class="heading__credits"><a class="heading__link" target="_blank"
                            href="https://dribbble.com/sl">
                        </a></p>
                </div>
                <div class="cards">
                    <div class="cardku card-1"data-aos="fade-up">
                        <div class="card__icon"> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i></i>
                        </div>
                        <p class="card__exit"><i class="fas fa-times"></i></p>
                        <h2 class="card__title">Masyaallah...
                            Alhamdulillah selama belajar Qur'an first banyak ilmu baru yg saya tau dan masyaallah
                            ustadzah
                            yang telaten,sabar,baik, sangat mengerti dan mau menjelaskan ulang materi yg kurang saya
                            pahami
                            dalam mengajar saya dari nol sampai saat ini insyaallah masih terus belajar...
                            Terimakasih untuk Qur'an first dan semoga ustadz dan ustadzah selalu berada dilindungan
                            Allah
                            SWT dan dimudahkan segala urusan nya 🤲🙏🏻😊</h2>
                        <p class="card__apply">
                            <a class="card__link"><i class="fa-solid fa-user"></i> Batch 6 Bulqis <i
                                    class="fas fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <div class="cardku card-2"data-aos="fade-up">
                        <div class="card__icon"> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="card__exit"><i class="fas fa-times"></i></p>
                        <h2 class="card__title">maaf baru sempat balas kak
                            Kesan dan pesan saya selama mengikuti program QuranFirst menyenangkan sangat bermanfaat bagi
                            saya dlm memperbaiki bacaan karena sudah lama tidak mengaji dengan orang lain sehingga tahu
                            kesalahan2 dalam bacaan. Gurunya juga asyik, on time serta mengencourage peserta utk bisa.
                            🙏🙏</h2>
                        <p class="card__apply">
                            <a class="card__link"><i class="fa-solid fa-user"></i> Batch 12 Fanny Fairuz Pradypna<i
                                    class="fas fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <div class="cardku card-3"data-aos="fade-up">
                        <div class="card__icon"> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="card__exit"><i class="fas fa-times"></i></p>
                        <h2 class="card__title"> afwan baru balas... Alhamdulillah jazakallah khairan katsiran atas
                            ilmunya, bermanfaat
                            sekali🙏saya sgt bersyukur pernah belajar di Quranfirst..selama pembelajaran di bimbing oleh
                            ustadzah yang baik dan ramah, cara penyampaiannya materinya mudah dan jelas di pahami,
                            insyaallah nanti dapat kembali belajar di Quranfirst</h2>
                        <p class="card__apply">
                            <a class="card__link"><i class="fa-solid fa-user"></i> Batch 5 Sri Isna Wardati <i
                                    class="fas fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <div class="cardku card-4"data-aos="fade-up">
                        <div class="card__icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="card__exit"><i class="fas fa-times"></i></p>
                        <h2 class="card__title">Alhamdulillah selama belajar banyak pengetahuan yg didapat, terutama
                            hukum2 bacaan, ternya
                            selama ini saya mengajinya tdk sesuai dengan hukum bacaan, setalah belajar alhamdulillah
                            mulai
                            di perbaiki pengucapan hurufnya, panjang pendeknya huruf.
                            Makin semangat mengajinya 🙏🙏</h2>
                        <p class="card__apply">
                            <a class="card__link"><i class="fa-solid fa-user"></i> Batch 8 Sinta
                                Adiyati<i class="fas fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <div class="cardku card-5"data-aos="fade-up">
                        <div class="card__icon"> <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="card__exit"><i class="fas fa-times"></i></p>
                        <h2 class="card__title">Sejauh ini saya cocok saja dengan pembelajarannya, temponya gak terlalu
                            cepat, penjabaran
                            materinya jg jelas, pengajarnya jg fleksibel banget karena beberapa kali saya minta ubah
                            jadwal
                            dadakan karena hal2 urgent dan alhamdulillahnya bisa. Itu aja testimoni saya semoga
                            quranfirst
                            bisa berkembang terus ❤️</h2>
                        <p class="card__apply">
                            <a class="card__link"><i class="fa-solid fa-user"></i> Batch 12 Azkia Diva Safitri <i
                                    class="fas fa-arrow-right"></i></a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container5-1">
        <h1>tunggu apalagi?</h1>
        <h2>belajar dengan mentor terpercaya dengan waktu yang fleksibel</h2>
        <img src="img/daftar.svg" alt="">
        <div class="btn btn-primary">
            <h3 onclick="modal()">Daftar👍</h3>
        </div>
    </div>
    <div id="kontak" class="container6">
        <div class="footer">
            <h2>Tentang kami</h2>
            <img src="img/logo - footer.svg" alt="">
            <p>Platform untuk belajar tajwid dan memperlancar bacaan al-Quran</p>
        </div>
        <div class="footer">
            <h2>Kontak</h2>
            <p>
                <br>
                Kontak :
                <br>
                082218188952
                <br>
                Email : quranfirst02@gmail.com
            </p>
        </div>
        <div class="footer">
            <h2>sosial media</h2>
            <p>Follow us to more</p>
            <div class="sosmed">
                <a class="fa-brands fa-instagram fa-xl" href="https://www.instagram.com/quranfirst.id/"></a>
                <a class="fa-brands fa-tiktok fa-xl" href="https://www.tiktok.com/@quranfirst.id"></a>
                <a class="fa-brands fa-facebook-f fa-xl"
                    href="https://web.facebook.com/profile.php?id=100078997724432"></a>
                <a class="fa-brands fa-youtube fa-xl" href="https://www.youtube.com/@quranfirstid5964"></a>
            </div>
        </div>
    </div>
    <div class="container7">
        <p>© 2019-2022 Quran first </p>
    </div>

    {{-- <input type="checkbox" id="ayam">
    <div class="ayam">
        😭
    </div> --}}

    <script>
        // Other important pens.
        // Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
        // Dashboard: https://codepen.io/themustafaomar/pen/jLMPKm

        let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler')
        let dropdownIsOpen = false

        // Handle dropdown menues
        if (dropdowns.length) {
            // Usually I don't recommend doing this (adding many event listeners to elements have the same handler)
            // Instead use event delegation: https://javascript.info/event-delegation
            // Why: https://gomakethings.com/why-event-delegation-is-a-better-way-to-listen-for-events-in-vanilla-js
            // But since we only have two dropdowns, no problem with that. 
            dropdowns.forEach((dropdown) => {
                dropdown.addEventListener('click', (event) => {
                    let target = document.querySelector(`#${event.target.dataset.dropdown}`)

                    if (target) {
                        if (target.classList.contains('show')) {
                            target.classList.remove('show')
                            dropdownIsOpen = false
                        } else {
                            target.classList.add('show')
                            dropdownIsOpen = true
                        }
                    }
                })
            })
        }

        // Handle closing dropdowns if a user clicked the body
        window.addEventListener('mouseup', (event) => {
            if (dropdownIsOpen) {
                dropdowns.forEach((dropdownButton) => {
                    let dropdown = document.querySelector(`#${dropdownButton.dataset.dropdown}`)
                    let targetIsDropdown = dropdown == event.target

                    if (dropdownButton == event.target) {
                        return
                    }

                    if ((!targetIsDropdown) && (!dropdown.contains(event.target))) {
                        dropdown.classList.remove('show')
                    }
                })
            }
        })

        // Open links in mobiles
        function handleSmallScreens() {
            document.querySelector('.navbar-toggler')
                .addEventListener('click', () => {
                    let navbarMenu = document.querySelector('.navbar-menu')

                    if (!navbarMenu.classList.contains('active')) {
                        navbarMenu.classList.add('active')
                    } else {
                        navbarMenu.classList.remove('active')
                    }
                })
        }

        handleSmallScreens()
    </script>

    <script src="https://kit.fontawesome.com/dfa311bb0f.js" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script lang="JavaScript" type="text/javascript" src="js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
