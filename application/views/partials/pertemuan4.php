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

                                    <li class="breadcrumb-item active" aria-current="page">Pertemuan 4</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Viruses and <br>Other Wild Life </h2>

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
                            "Setiap bug adalah peluang untuk belajar. Setiap tantangan adalah kesempatan untuk tumbuh. Jangan pernah menyerah dalam perjalanan pemrograman Anda."
                            </blockquote>
                            
                            <h3 class="mb-4"> Mendefinisikan Pengertian Virus</h3>
                            <p>
                            Virus komputer adalah program yang dapat menggandakan diri. Mereka juga dapat memiliki fungsi lain yang tidak menyenangkan, tetapi replikasi diri dan penyebaran cepat adalah ciri khas utama dari virus.
                            </p>
                            <p>
                            Virus adalah program kecil yang mereplikasi dan bersembunyi di dalam program lain tanpa sepengetahuan pengguna. Mereka dapat menyebabkan masalah bagi jaringan yang terinfeksi, bahkan dapat membuat jaringan tidak berfungsi sementara karena beban lalu lintas yang tinggi.
                            </p>
                            <p>
                                Penelitian pertama tentang virus komputer dilakukan oleh Fred Cohen pada tahun 1983, dan istilah "virus" diciptakan oleh Len Adleman.
                            </p>
                            <p>
                                Virus mencoba menggandakan diri dan menginfeksi kode lain saat dijalankan. Replikasi diri ini adalah karakteristik utama dari virus.
                            </p>
                            <p>
                                Tidak ada kesepakatan tentang bentuk jamak dari "virus". Dua bentuk umum adalah "virus" dan "virii", tetapi yang pertama lebih umum digunakan.
                            </p>
                            <p>
                                Virus dapat menyebar melalui media fisik yang dibawa oleh manusia seperti disket, CD-ROM, DVD-ROM, atau USB flash drive. Namun, label "virus" juga digunakan untuk merujuk pada berbagai jenis perangkat lunak perusak yang menggandakan diri.
                            </p>
                            <p>
                                Virus dapat berada dalam berbagai tahap menggandakan diri. Kuman adalah bentuk asli virus sebelum melakukan replikasi. Virus yang gagal mereplikasi disebut dimaksudkan, dan ini dapat terjadi karena bug pada virus atau versi sistem operasi yang tidak terduga.
                            </p>
                            <p>
                                Virus komputer mirip dengan virus biologis dalam hal mereplikasi dan menyebar. Metode umum untuk menyebarkan virus adalah melalui email korban. Beberapa virus dapat menyebabkan perlambatan jaringan karena replikasi yang padat.
                            </p>
                            <p>
                                Virus juga dapat menyebar dengan memindai komputer untuk koneksi ke jaringan yang sama. Ini adalah cara paling efisien bagi virus untuk menyebar, tetapi membutuhkan lebih banyak keterampilan pemrograman.
                            </p>
                            <p>
                                Virus juga dapat berada di media portabel seperti USB, CD, atau DVD. Mereka juga dapat tersembunyi dalam file yang sah, disebut Trojan Horse.
                            </p>
                            <p>
                                Virus komputer memiliki tiga bagian utama: mekanisme infeksi, trigger untuk mengirimkan muatan, dan payload yang berisi tindakan yang akan dilakukan oleh virus selain dari replikasi dan penyebaran.
                            </p>

                            <h3 class="mb-4">Mengklasifikasi Metode Penyebaran Virus</h3>
                            <h4 class="mb-4">Klasifikasi Berdasarkan Metode Penyebaran dan Aktivitas:</h4>
                            <ol type="a">
                                <li>
                                    <p>Virus Makro</p>
                                    <ul>
                                        <li>
                                            Virus makro menginfeksi makro di dokumen kantor, seperti yang ada dalam Microsoft Office.
                                        </li>
                                        <li>
                                            Makro yang dilampirkan ke email dan dijalankan di Outlook dapat melakukan berbagai tugas.
                                        </li>
                                        <li>
                                            Pengguna dapat menulis makro untuk mengotomatisasi tugas tertentu. Contohnya, Visual Basic for Applications (VBA) digunakan dalam produk Microsoft Office.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Multi-partit</p>
                                    <ul>
                                        <li>
                                        Virus multi-partit menyerang komputer melalui berbagai metode, termasuk menginfeksi sektor boot hard disk atau file-file tertentu.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Penghuni Memori</p>
                                    <ul>
                                        <li>
                                        Virus ini memasang dirinya sendiri di RAM sehingga tetap ada setelah komputer dimatikan.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Lapis Baja</p>
                                    <ul>
                                        <li>
                                        Virus lapis baja menggunakan teknik untuk membuat analisis sulit, seperti kebingungan kode atau kompresi kode.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Sparse Infector</p>
                                    <ul>
                                        <li>
                                        Virus Sparse Infector mencoba menghindari deteksi dengan melakukan aktivitas berbahaya secara sporadis.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Polymorphic</p>
                                    <ul>
                                        <li>
                                        Virus Polymorphic mengubah bentuknya dari waktu ke waktu untuk menghindari deteksi oleh perangkat lunak antivirus.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Metamorphic</p>
                                    <ul>
                                        <li>
                                        Virus Metamorphic adalah kasus khusus dari virus polimorfik yang menulis ulang dirinya secara berkala.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Sektor Boot</p>
                                    <ul>
                                        <li>
                                        Virus sektor boot menginfeksi sektor boot dari drive, dan mungkin sulit dideteksi oleh perangkat lunak antivirus karena beroperasi sebelum sistem operasi dimuat.
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                            <h4 class="mb-4">Klasifikasi Berdasarkan Target:</h4>
                            <ol type="a">
                                <li>
                                    <p>Boot-Sector Infectors</p>
                                    <ul>
                                        <li>
                                        Menginfeksi sektor boot dari perangkat penyimpanan.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>File Infectors</p>
                                    <ul>
                                        <li>
                                        Menginfeksi file yang dianggap dapat dijalankan oleh sistem atau shell pengguna, termasuk file batch dan skrip shell.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Macro Viruses</p>
                                    <ul>
                                        <li>
                                        Menginfeksi dokumen Microsoft Word melalui makro.
                                        </li>
                                    </ul>
                                </li>
                            </ol>

                            <h3 class="mb-4">Mengidentifikasi Jenis Ancaman Virus</h3>
                            <h4 class="mb-4">Klasifikasi Berdasarkan Metode Penyebaran dan Aktivitas:</h4>
                            <ol type="a">
                                <li>
                                    <p>Malware</p>
                                    <ul>
                                        <li>
                                        Istilah umum untuk perangkat lunak yang memiliki tujuan jahat.
                                        </li>
                                        <li>
                                        Termasuk virus, worm, adware, trojan horse, dan spyware.
                                        </li>
                                        <li>
                                        Virus dan trojan horse adalah yang paling sering terjadi dalam serangan keamanan komputer.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Worm</p>
                                    <ul>
                                        <li>
                                        Mirip dengan virus, namun worm dapat menggandakan dirinya sendiri tanpa perlu bergantung pada kode yang dapat dijalankan.
                                        </li>
                                        <li>
                                        Menyebar dari mesin ke mesin melalui jaringan.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Trojan Horse</p>
                                    <ul>
                                        <li>
                                        Program yang seolah-olah melakukan tugas ramah, namun diam-diam melakukan tugas berbahaya tambahan.
                                        </li>
                                        <li>
                                        Contohnya adalah program login palsu yang mencuri informasi pengguna
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Adware</p>
                                    <ul>
                                        <li>
                                        Mengumpulkan informasi tentang pengguna dan kebiasaan mereka, fokus pada pemasaran, dan dapat memunculkan iklan atau mengarahkan pengguna ke situs web tertentu.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Spyware</p>
                                    <ul>
                                        <li>
                                        Mengumpulkan informasi dari komputer dan mengirimkannya ke pihak lain.
                                        </li>
                                        <li>
                                        Bisa mencakup informasi seperti nama pengguna, sandi, alamat email, informasi rekening bank, dan kunci lisensi perangkat lunak.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Security Breaches</p>
                                    <ul>
                                        <li>
                                        Upaya untuk mendapatkan akses tidak sah ke sistem pengguna, termasuk meretas kata sandi dan meningkatkan hak istimewa.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Denial of Service(DoS) </p>
                                    <ul>
                                        <li>
                                        Serangan yang bertujuan untuk mencegah pengguna sah mengakses sistem dengan mengganggu fungsionalitasnya.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Web Attacks</p>
                                    <ul>
                                        <li>    
                                        Upaya untuk menerobos situs web, termasuk serangan injeksi SQL dan scripting lintas situs.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Session Hijacking</p>
                                    <ul>
                                        <li>    
                                        Memantau dan mengambil alih sesi yang diautentikasi antara mesin klien dan server.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p>DNS Poisoning</p>
                                    <ul>
                                        <li>    
                                        Memanipulasi server DNS untuk mengarahkan pengguna ke situs web berbahaya atau phishing.
                                        </li>
                                    </ul>
                                </li>
                            </ol>

 
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