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

                                    <li class="breadcrumb-item active" aria-current="page">Pertemuan 1</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Pengenalan <br> Keamanan Komputer</h2>

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
                            "Setiap baris kode adalah langkah menuju penciptaan sesuatu yang besar dan bermanfaat."
                            </blockquote>
                            
                            <h3 class="mb-4">Mendefinisikan Keamanan Komputer</h3>
                            <p>
                                Keamanan komputer adalah perlindungan terhadap bahaya, termasuk upaya untuk mencegah pengintain, sabotase, kejahatan, serangan, atau kehilangan. Istilah seperti "serangan" dan "ancaman" digunakan untuk mengidentifikasi aktivitas yang bertujuan untuk mendapatkan akses ke komputer dengan maksud jahat. Lubang keamanan, kelemahan, dan kerentanan merujuk pada kondisi yang dapat dieksploitasi untuk serangan.
                            </p>
                            
                            <p>
                                Berdasarkan kutipan dari beberapa sumber, keamanan komputer mencakup tindakan dan kontrol untuk memastikan kerahasiaan, integritas, dan ketersediaan aset sistem informasi, termasuk perangkat keras, perangkat lunak, firmware, dan informasi yang sedang diproses, disimpan, dan dikomunikasikan.  
                            </p>
                            <p>
                                Aset komputer meliputi perangkat keras, perangkat lunak, dan data. Data, termasuk dokumen, foto, musik, video, email, dan proyek, merupakan aset yang sulit untuk dibuat ulang atau diganti. Oleh karena itu, perlu dilakukan langkah-langkah keamanan untuk melindungi aset-aset ini.
                            </p>
                            <p> 
                                Ancaman terhadap keamanan komputer dapat diklasifikasikan sebagai berikut:
                                    <ul>
                                        <li>Ancaman Fisik: Termasuk pencurian perangkat komputer, peralatan, dan kerusakan akibat bencana alam atau insiden seperti kebakaran, lonjakan arus listrik, dan banjir.</li>
                                        <li>Perangkat Lunak Nakal: Meliputi virus komputer dan program-program jahat lainnya yang dapat menyerang dan merusak sistem.</li>
                                        
                                        <li>Ancaman Jaringan: Terkait dengan keamanan jaringan dan mencakup ancaman seperti pemindaian port, spoofing, pembobolan kata sandi, spyware, dan pencurian identitas.</li>

                                    </ul>
                            </p>
                            <p>
                                Dengan demikian, keamanan komputer adalah upaya untuk melindungi aset-aset berharga seperti perangkat keras, perangkat lunak, dan data dari berbagai jenis ancaman yang dapat mengancam keamanan dan integritas sistem informasi.
                            </p>

                            <h3 class="mb-4">Konsep Keamanan Komputer</h3>

                            <p>
                            Aspek utama dalam keamanan komputer, dikenal dengan konsep C.I.A. (Confidentiality, Integrity, Availability), memastikan bahwa komputer tetap berharga bagi penggunanya.
                            </p>
                            <ol start="number" >
                                <li>
                                    <p>
                                        Kerahasiaan (Confidentiality): Ini berarti melindungi informasi dari akses yang tidak diizinkan. Hal ini melibatkan enkripsi data, kontrol akses, otentikasi, otorisasi, dan perlindungan fisik.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Integritas (Integrity): Mengacu pada konsistensi, akurasi, dan validitas data atau informasi. Tujuan dari program keamanan adalah memastikan informasi tidak diubah tanpa izin atau secara tidak disengaja. Proses seperti otentikasi, otorisasi, akuntansi, penggunaan checksums, dan fungsi hashing mendukung integritas informasi.
                                    </p>
                                </li>    
                                <li>
                                    <p>
                                        Ketersediaan (Availability): Ini menjamin bahwa informasi dapat diakses dan dimodifikasi oleh mereka yang berwenang secara tepat waktu. Perlindungan fisik, redundansi komputasi, dan infrastruktur pendukung lainnya memastikan ketersediaan data dan layanan.
                                    </p>
                                </li>
                            </ol>

                            <p>
                            Tambahan konsep A.A.A. (Assurance, Authenticity, Anonymity) dalam keamanan komputer modern meliputi:
                            </p>

                            <ol start="number" >
                                <li><p>Jaminan (Assurance): Menyangkut sejauh mana kepercayaan diberikan dan dielola dalam sistem komputer. Ini berkaitan dengan keyakinan kita terhadap perilaku yang diharapkan dari sistem atau orang.</p></li>    
                                <li><p>Keaslian (Authenticity): Menentukan bahwa pernyataan, kebijakan, dan izin yang dikeluarkan oleh orang atau sistem adalah asli dan dapat dipercaya. Keaslian penting untuk memverifikasi keabsahan komitmen atau transaksi.</p></li>
                                <li><p>Anonimitas (Anonymity): Merupakan kebutuhan untuk melindungi identitas pribadi dalam interaksi dengan sistem, menghindari pengungkapan informasi sensitif yang dapat menghubungkan individu dengan catatan atau transaksi tertentu.</p></li>
                            </ol>     
                            
                            <h3 class="mb-4">Mendeskripsikan jenis-jenis Ancaman Keamanan Komputer</h3>

                            <p>
                            Ancaman keamanan terdiri dari empat kelas besar: pengungkapan, penipuan, gangguan, dan perampasan. Setiap kelas mencakup berbagai ancaman umum.
                            </p>
                            <ol start= "number">
                                <li>
                                    <p>
                                    Pengungkapan (Disclosure):
                                    <ul>
                                        <li>Contoh: Penyadapan (Snooping/eavesdropping)</li>
                                        <li>Sifatnya pasif dan melibatkan entitas yang mendengarkan atau membaca komunikasi tanpa izin. Layanan keamanan berusaha melawan ancaman ini.</li>
                                    </ul>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    Penipuan (Deception):
                                    <ul>
                                        <li>Contoh: Peniruan (Masquerading/spoofing)</li>
                                        <li>Melibatkan entitas satu yang berpura-pura menjadi entitas lain untuk memperdaya korban. Ini bisa berupa serangan pasif atau aktif. Layanan integritas berusaha melawan ancaman ini.</li>
                                    </ul>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    Gangguan (Disruption):
                                    <ul>
                                        <li>Contoh: Modifikasi (Modification/alteration)</li>
                                        <li>Terjadi ketika informasi diubah tanpa izin. Targetnya bisa berupa penipuan atau mengganggu operasi sistem secara keseluruhan. Ini merupakan serangan aktif. Layanan integritas juga berusaha melawan ancaman ini.</li>
                                    </ul>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    Perampasan (Usurpation):
                                    <ul>
                                        <li>Contoh: Penyangkalan asal (Repudiation of origin), Penyangkalan penerimaan (Denial of receipt), Penundaan (Delay), dan Penolakan layanan (Denial of service)</li>
                                        <li>Melibatkan penyangkalan atau manipulasi informasi atau entitas. Penyerang berupaya mengambil alih kendali atau menghambat layanan. Mekanisme integritas dan ketersediaan berusaha melawan ancaman ini.</li>
                                    </ul>
                                    </p>
                                </li>
                            </ol>

                            <h3 class="mb-4">Membuat Strategi Keamanan Komputer</h3>

                            <p>
                            Dalam kebijakan keamanan, tindakan dapat dianggap "aman" atau "tidak aman". Mekanisme keamanan dapat mencegah, mendeteksi, atau memulihkan dari serangan. Pencegahan bertujuan untuk mencegah serangan, sering melalui implementasi mekanisme yang sulit diubah. Deteksi mengenali bahwa serangan terjadi dan memberikan informasi tentangnya. Pemulihan dapat melibatkan menghentikan serangan, memperbaiki kerusakan, dan mengidentifikasi kerentanan. Ada juga bentuk pemulihan yang memungkinkan sistem berfungsi selama serangan berlangsung, meskipun mungkin dengan fungsi terbatas. Jenis ini melibatkan teknik toleransi kesalahan dan keamanan sistem.
                            </p>

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