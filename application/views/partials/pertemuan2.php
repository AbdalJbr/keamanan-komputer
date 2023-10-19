<?php 
    $this->load->view('partials/header')
?>


<header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Pertemuan 2</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Physical Security <br> dan Biometrics</h2>

                            <div class="d-flex align-items-center mt-5">
                                <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read More</a>

                                <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="topics-detail-block bg-white shadow-lg">
                                <img src="<?php echo base_url();?>assets/images/topics/undraw_Remote_design_team_re_urdx.png" class="topics-detail-block-image img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </header>


            <section class="topics-detail-section section-padding" id="topics-detail">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 m-auto">
                            <blockquote>
                            "Dengan pemrograman, Anda memiliki kekuatan untuk membentuk masa depan teknologi."
                            </blockquote>
                            
                            <h3 class="mb-4"> Menjelaskan konsep keamanan fisik</h3>
                            <p>
                            Keamanan fisik (physical security) secara luas didefinisikan sebagai penggunaan tindakan fisik untuk melindungi barang berharga, informasi, atau
                            akses ke sumber daya yang dibatasi. Serangannya dapat memengaruhi kerahasiaan (confidentiality) dan integritas (integrity), dan kondisi lingkungan
                            dapatmemengaruhiketersediaan(availability).
                            </p>
                            
                            <h3 class="mb-4">Memahami hubungan antara cyber dan physical security</h3>

                            <p>
                            Penting untuk diingat bahwa keamanan dunia maya dan keamanan fisik komputer dan peralatan komunikasi saling terkait. Jika seseorang dapat mengakses fisik ruangan kantor dan masuk ke jaringan, mereka dapat memiliki akses penuh ke sistem, bahkan lebih besar dari peretas dunia maya. Hal ini dapat mengakibatkan berbagai ancaman seperti pembuatan akun tidak sah, pemasangan perangkat jahat, akses ke data sensitif, atau pencurian informasi. Oleh karena itu, keamanan fisik merupakan hal penting yang harus diperhatikan.
                            </p>

                            <p>
                            Selain itu, kehilangan atau pencurian laptop yang terkonfigurasi untuk mengakses sistem host juga merupakan kelemahan yang perlu diatasi. Hubungan dengan pihak eksternal seperti pelanggan, pemasok, atau penyedia layanan yang memiliki akses jarak jauh ke sistem komputer organisasi juga dapat membahayakan keamanan dunia maya jika keamanan fisik di lokasi komputer tidak memadai. Oleh karena itu, perlu dirancang mekanisme keamanan cyber yang tidak hanya mengandalkan keamanan fisik semata.
                            </p>
                            <ol type="A" >
                                <li>
                                    <p>
                                    Prosedur Keamanan Data Center
                                    </p>
                                </li>
                                <p>
                                Menetapkan prosedur untuk keamanan pusat data fisik adalah salah satu prioritas utama saat mengembangkan rencana keamanan fisik TI. Kompleksitas bagian ini akan bergantung pada beberapa karakteristik pusat data yang berbeda, termasuk apakah pusat data tersebut menempati seluruh bangunan atau hanya sebagian dari suatu bangunan. Jenis prosedur yang dibutuhkan terkait pengamanan data center ditunjukkan sebagai berikut.
                                </p>

                                <ul>
                                    <li>
                                    Jika data center menempati seluruh gedung, maka perencanaan perlu memperhatikan keamanan untuk ruang eksterior gedung, area lobi, area utilitas, dermaga pem uatan, kantor, dan setiap subarea ruangan yang memilikiperalatan IT. 
                                    </li>
                                    <li>
                                    Jika pusat data hanya menempati sebagian bangunan, maka rencana tersebut perlu menangani keamanan untuk kantor staf TI dan setiap subarea ruangan yang memiliki peralatan TI.
                                    </li>
                                    <li>
                                    Kontrol akses dan manajemen akses adalah elemen kunci dari rencana keamanan pusat data dan harus menunjukkan siapa yang memiliki akses, bagaimana akses diberikan, bagaimana pengunjung dan vendor dikelola, dan bagaimana menangani pelanggaran kebijakan akses.
                                    </li>
                                    <li>
                                    Bagaimana dan kapan seharusnya seorang pimpinan atau manajer keamanan secara teratur meninjau laporan akses?
                                    </li>
                                    <li>
                                    Apa prosedur untuk mengamankan peralatan tertentu, sistem kabel, peralatan enkripsi, ruang media, dan lemari penyimpanan atau area yang berisi jenis informasi paling sensitif?
                                    </li>
                                    <li>
                                    Buat daftar metode keamanan untuk sistem utilitas, termasuk AC, pasokan daya, koneksi jaringan, dan sistem daya darurat.
                                    </li>
                                    <li>
                                    Buat daftar prosedur keamanan untuk operasi jam kerja, operasi setelah jam kerja, dan operasi darurat. 
                                    </li>
                                    <li>
                                    Bagaimana log terbaru dari semua peralatan dikelola, yang mencakup nomor seri dan informasi konfigurasi? 
                                    </li>
                                    <li>
                                    Bagaimana daftar terbaru personel yang diberi wewenang untuk mengakses area sensitif dikelola? 
                                    </li>
                                    <li>
                                    Bagaimana pengaturan lingkungan di ruang peralatan dipertahankan? 
                                    </li>
                                    <li>
                                    Bagaimana cara masuk dan keluar peralatan, dokumen, dan persediaan?
                                    </li>
                                    <li>
                                    Bagaimana dan dimana paket yang masuk diperiksa dan dibuka sebelum isinya dibawa ke pusat data?
                                    </li>
                                    <li>
                                    Bagaimana dan di mana sistem pemadam kebakaran dipasang? 
                                    </li>
                                    <li>
                                    Jenis wadah pelindung apa yang harus digunakan untuk bahan sensitif, termasuk standar tahan api atau tahan pencuri?
                                    </li>
                                    <li>
                                    Bagaimana cara membuang bahan cetakan dan media magnet bekas dan siapa yang bertanggung jawab atas pembuangannya?
                                    </li>
                                    <li>
                                    Jika monitor sirkuit tertutup digunakan, prosedur diperlukan untuk penggunaan dan pemeliharaannya."
                                    </li>
                                </ul>

                                <li>
                                    <p>
                                    Locks & Keys
                                    </p>
                                </li>
                                <p>
                                Garis pertahanan pertama melawan penyusup adalah dengan
                                menjauhkan mereka dari gedung, keluar dari ruang server, dari lemari
                                telekomunikasi kita.Dulu ini lebih mudah.Ruang komputer yang dikunci atau
                                dijaga secara historis menjadi sarana utama untuk melindungi peralatan
                                komputer dan informasi organisasi dari gangguan fisik dan akses yang tidak
                                dibatasi. Sebagian besar organisasi saat ini, setiap orang memiliki
                                workstation,dimana informasi dapat dihapus dengan mudah pada memory
                                stick USB atau floppy disk, misalnya. Printer, dari mana dokumen dapat
                                dikumpulkan, di distribusikan disekitar kantor
                                </p>

                                <p>
                                Semua teknik otentikasi ini dapat digunakan untuk keamanan fisik (misalnya, akses gedung atau ruang komputer) serta untuk kontrol akses sistem. Ketika kartu pintar atau sidik jari digunakan untuk akses komputer, biasanya itu hanya langkah pertama. Kata sandi biasanya diperlukan juga. Ketika dua teknik berbeda digunakan untuk otentikasi dengan cara ini, itu disebut otentikasi dua faktor. Satu faktor adalah sesuatu yang kita miliki; misalnya, menunjukkan kartu pintar kita atau sidik jari atau cetak suara dipindai. Faktor lainnya adalah sesuatu yang kita ketahui; misalnya, mengetik nomor identifikasi pribadi (PIN) atau kata sandi ke dalam sistem. Sistem identifikasi multifaktor mempromosikan lingkungan "pertahanan mendalam"
                                </p>
                                <li>
                                    <p>
                                    Jenis Pengaman dan Kunci
                                    </p>
                                </li>
                                <p>
                                Selain mengunci gedung dan ruang komputer, kita juga dapat mengamankan komputer, jaringan, drive disk, dan disk. Berikut dua contoh jenis kunci yang dapat digunakan:
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                        Kunci peralatan (equipment locks) <br>
                                        Cara termudah untuk mencegah seseorang keluar dengan PC, router, sakelar, atau perangkat jaringan lainnya adalah dengan menguncinya. Komputer, workstation, dan kabel mungkin juga dilengkapi dengan kunci yang hanya dapat dibuka dengan kunci khusus, token elektronik, atau kartu pintar.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                        Kunci kriptografi (cryptographic locks) <br>
                                        Beberapa produk ultra-aman dilengkapi dengan perangkat elektronik yang dikenal sebagai kunci pintar. Kunci ini digunakan untuk memuat informasi kunci kriptografi awal (biasanya dipasok oleh lembaga pemerintah) kedalam produk. Mereka biasanya memiliki sirkuit deteksi gangguan, yang menghapus penyimpanan kunci aman jika sirkuit rusak."
                                        </p>
                                    </li>
                                </ul>
                            </ol>

                            <h3 class="mb-4">Mendeskripsikan biometrik beserta jenis cirinya</h3>

                            <p>
                            Pengenalan biometrik adalah kemampuan untuk mengidentifikasi individu berdasarkan ciri-ciri fisik atau perilaku yang melekat pada mereka. Ini termasuk wajah, suara, dan gaya berjalan, bersama dengan informasi kontekstual lain seperti lokasi dan pakaian. Pada awal peradaban, komunitas kecil memungkinkan individu untuk saling mengenali dengan mudah. Namun, pertumbuhan populasi modern membutuhkan sistem identitas yang canggih untuk merekam, memelihara, dan menghapus identitas individu secara efisien.
                            </p>

                            <p>
                            Pengenalan biometrik mengandalkan ciri-ciri unik individu untuk menetapkan identitas, baik secara otomatis maupun semi-otomatis. Ini lebih andal dibandingkan dengan metode berbasis pengetahuan atau token, seperti kata sandi atau kartu ID, yang rentan terhadap lupa, hilang, atau pencurian. Metode tradisional juga tidak dapat menangani situasi di mana beberapa individu mencoba menggunakan identitas yang sama.
                            </p>

                            <p>
                            Pengenalan biometrik memberikan solusi yang lebih andal karena ciri-ciri biometrik melekat pada individu dan sulit untuk dimanipulasi atau dibagikan. Hal ini membuatnya lebih cocok untuk pengenalan orang, termasuk pengidentifikasian tersangka di tempat kejadian. Karena itu, pengenalan biometrik memastikan hubungan yang kuat antara seseorang dan identitasnya.
                            </p>

                            <ul>
                                <li><p>Fingerprint</p></li>
                                <p>
                                    Tidak seperti kulit di sebagian besar tubuh kita, yang halus dan mengandung rambut dan kelenjar minyak, kulit di telapak tangan dan telapak kaki menunjukkan pola pegunungan dan lembah yang mengalir (kadang-kadang disebut sebagai alur), dan tidak memiliki rambut atau kelenjar minyak. Tonjolan papiler pada jari ini, yang disebut punggung gesekan, membantu tangan untuk menggenggam objek dengan meningkatkan gesekan dan meningkatkan penginderaan sentuhan pada tekstur permukaan. Kulit punggung gesekan terdiri dari dua lapisan utama: dermis (lapisan dalam) dan epidermis (lapisan luar). Tonjolan muncul di epidermis untuk meningkatkan gesekan antara volar (telapak tangan atau telapak kaki) dan permukaan kontak. Laki-laki muda rata-rata memiliki rata-rata 20,7 tonjolan per sentimeter sedangkan perempuan memiliki 23,4 punggung per sentimeter.
                                </p>
                                <li><p>Face Recognition</p> </li>
                                <p>
                                Wajah merupakan bagian depan kepala manusia, memanjang dari dahi ke dagu dan meliputi mulut, hidung, pipi, dan mata. Bagian ini sangat penting dalam interaksi seseorang dengan dunia luar, karena wajah menampung sebagian besar organ sensorik yang diperlukan untuk memahami lingkungan sekitar. Wajah dianggap sebagai ciri biometrik yang paling umum digunakan oleh manusia; kita mengenali satu sama lain dan, dalam banyak kasus, menetapkan identitas kami berdasarkan wajah. Oleh karena itu, telah menjadi praktik standar untuk memasukkan foto wajah dalam berbagai token otentikasi seperti KTP, paspor, dan SIM.
                                </p>
                                <p>
                                Pengenalan wajah dapat diartikan sebagai proses pembentukan identitas seseorang berdasarkan ciri-ciri wajahnya. Dalam bentuknya yang paling sederhana, masalah pengenalan wajah melibatkan perbandingan dua gambar wajah dan menentukan apakah mereka adalah orang yang sama. Sementara manusia tampaknya mahir dalam menentukan kemiripan antara dua gambar wajah yang diperoleh dalam berbagai kondisi, proses pengenalan wajah otomatis menghadapi berbagai tantangan. Gambar wajah seseorang mungkin memiliki variasi dalam pose, iluminasi, dan ekspresi wajah, serta menunjukkan perubahan penampilan karena make-up, rambut wajah, atau aksesori (misalnya kacamata hitam). Selain itu, mungkin ada kesamaan antara gambar wajah orang yang berbeda, terutama jika mereka terkait secara genetik (misalnya, kembar identik, ayah dan anak, dll.). Kemiripan antar kelas seperti itu semakin memperparah kesulitan untuk mengenali orang berdasarkan wajah mereka.
                                </p>
                                <p>
                                Terlepas dari tantangan ini, kemajuan signifikan telah dicapai di bidang pengenalan wajah otomatis selama dua dekade terakhir. Teknik pengenalan wajah otomatis telah dikembangkan untuk tujuan pengenalan orang dari gambar 2 dimensi (2D), video (urutan gambar 2D), dan gambar rentang 3D (kedalaman).
                                </p>
                                <p>
                                Meskipun ada peningkatan stabil dalam kinerja pengenalan wajah selama dua dekade terakhir, beberapa tantangan tetap ada karena variasi intra-kelas yang besar dan variasi antar-kelas yang kecil yang disebabkan oleh variasi pose dan pencahayaan, ekspresi, oklusi, penuaan, dan non-representasi yang kuat dari data citra wajah. Sementara sistem pengenalan wajah 3D telah dikembangkan untuk mengatasi masalah pose dan pencahayaan, sejumlah faktor (misalnya, biaya tinggi dan keberadaan database wajah lama yang besar dalam domain 2D) telah menghambat penerapan praktis sistem pengenalan wajah 3D. Teknik penginderaan canggih untuk menangkap gambar dengan resolusi lebih tinggi dalam berbagai spektrum, teknik deteksi wajah yang dapat menangani perubahan pose, dan representasi yang kuat serta skema pencocokan sangat penting untuk lebih meningkatkan akurasi sistem pengenalan wajah.
                                </p>
                                <li><p>Iris Recognition</p></li>
                                <p>
                                Penggunaan daerah okuler sebagai ciri biometrik telah mendapatkan dorongan, terutama karena kemajuan signifikan yang dibuat dalam pengenalan iris sejak 1993. Daerah mata pada wajah manusia terdiri dari mata dan struktur sekitarnya seperti kulit wajah, alis, dan hidung jembatan. Sementara berbagai komponen mata telah diusulkan sebagai indikator biometrik (yaitu, iris, retina, dan pembuluh darah konjungtiva), iris lah yang telah dipelajari secara ekstensif dalam literatur biometrik dan digunakan dalam sistem biometrik skala besar.
                                </p>
                                <p>
                                Iris adalah organ dalam mata yang terletak tepat di belakang kornea dan di depan lensa. Kegunaan prinsipil iris mata adalah untuk mengatur kuantitas cahaya yang masuk pada mata dengan melebarkan atau mengontrak lubang kecil didalamnya yang disebut pupil. Iris berkontraksi pada pupil saat illuminasi ambient tinggi dan melebar saat illuminasi rendah.
                                </p>
                                <p>
                                Menurut literatur biometrik, tekstur struktural pada iris sangat beragam di seluruh populasi. Seperti yang dinyatakan sebelumnya, bahkan perjalanan kembar monozigot menunjukkan perbedaan struktural. Pengujian skala besar telah mengkonfirmasi potensi iris untuk mengidentifikasi individu dalam basis data subjek yang besar. Eksperimen yang dilakukan oleh Daugman pada database 632.500 gambar iris (316.250 orang dari 152 kebangsaan) menunjukkan kemungkinan kebijakan keputusan yang dapat menghasilkan tingkat kesalahan nol. Namun, kecepatan ini didasarkan pada kualitas gambar iris, yang harus dipantau secara ketat untuk memastikan kejernihan tekstur yang wajar. Pengujian yang dilakukan pada tahun 2006 oleh National Institute of Standards and Technology yang melibatkan berbagai kualitas gambar menunjukkan bahwa tingkat ketidakcocokan palsu dari algoritme pengenalan iris yang berkinerja terbaik dapat bervariasi antara 1,1 hingga 1,4 persen dengan tingkat kecocokan palsu 0,1 persen. Kemajuan luar biasa dalam sistem pengenalan iris mata telah menghasilkan beberapa tantangan dan peluang baru, yang menjadi fokus dari upaya penelitian terbaru.
                                </p>
                                <li><p>Biometrics Lainnya</p></li>
                                <p>
                                Berbagai macam sifat biometrik telah diusulkan dan dipelajari dalam literatur. Dalam beberapa kasus, keingintahuan akademis tentang keunikan dan keabadian sifat biologis tertentu telah mendorong penelitian eksplorasi (misalnya iris). Dalam kasus lain, domain aplikasi baru telah menghasilkan eksplorasi ciri-ciri biometrik baru (misalnya, biometrik periokular). Selain itu, ciri-ciri biometrik tertentu secara unik cocok untuk beberapa aplikasi dan skenario. Misalnya, suara mungkin lebih praktis dalam aplikasi telekomunikasi. Telinga mungkin berguna dalam aplikasi pengawasan di mana hanya profil samping wajah manusia yang tersedia; pola gaya berjalan mungkin relevan dalam skenario identifikasi-pada-jarak-jauh. Geometri tangan mungkin sesuai untuk digunakan dalam sistem yang memerlukan verifikasi (sebagai lawan dari identifikasi) dari beberapa identitas terdaftar sehingga mengurangi beberapa masalah yang terkait dengan penggunaan isyarat biometrik yang kuat seperti sidik jari. Lalu iris atau sidik jari dapat dipilih dalam aplikasi di mana subjeknya kooperatif dan dekat dengan sensor.
                                </p>
                            </ul>
                            
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12">
                            <img src="<?php echo base_url();?>assets/images/rear-view-young-college-student.jpg" class="newsletter-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                            <form class="custom-form subscribe-form" action="#" method="post" role="form">
                                <h4 class="mb-4 pb-2">Get Newsletter</h4>

                                <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required="">

                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="form-control">Subscribe</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>



<?php 
    $this->load->view('partials/footer')
?>