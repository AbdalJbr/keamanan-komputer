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

                                    <li class="breadcrumb-item active" aria-current="page">Pertemuan 3</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Operating <br> System Security</h2>

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
                            "Tak ada batasan untuk apa yang bisa Anda ciptakan dengan pemrograman. Hanya imajinasi dan dedikasi Anda yang menentukan seberapa jauh Anda dapat pergi."
                            </blockquote>
                            
                            <h3 class="mb-4"> Menjelaskan konsep Sistem Operasi</h3>
                            <p>
                            Sistem operasi adalah komponen kunci dalam keamanan komputer, mengontrol akses dan melindungi pengguna dari serangan. 
                            Kode berbahaya dapat menyembunyikan dirinya sebelum terdeteksi oleh aplikasi antivirus karena merupakan bagian dari sistem operasi. 
                            Serangan yang paling kuat adalah ketika malware mendapatkan kendali sebelum proteksi berlaku, seperti dalam kasus rootkit yang memungkinkan akses 
                            hak istimewa. Meskipun menyematkan rootkit sulit, berhasil melakukannya sangat berbahaya.
                            </p>
                            
                            <h3 class="mb-4">Meningkatkan Keamanan Sistem Operasi</h3>

                            <p>
                            Pekerjaan dalam keamanan dan perlindungan sistem operasi dapat dikelompokkan menjadi tiga kategori utama:
                            </p>
                            
                            <ol type = "a">
                                <li>
                                    <p>
                                    Access Control: Ini berkaitan dengan mengatur akses pengguna ke seluruh sistem, sub-sistem, data, serta mengontrol akses proses ke berbagai sumber daya dan objek dalam sistem.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    Kontrol Arus Informasi: Tugas dalam kategori ini meliputi pengaturan aliran data dalam sistem dan pengirimannya kepada pengguna.
                                    </p>
                                </li>
                                <li> 
                                    <p>
                                    Sertifikasi: Ini melibatkan pembuktian bahwa mekanisme kontrol akses dan aliran berfungsi sesuai dengan spesifikasinya dan menerapkan kebijakan perlindungan dan keamanan yang diinginkan.
                                    </p>
                                </li>
                            </ol>

                            <h3 class="mb-4">Membuat mekanisme perlindungan tambahan pada sistem operasi   </h3>
                                
                            <p>
                            Pengenalan multiprogramming memungkinkan berbagi sumber daya di antara pengguna, melibatkan proses, serta elemen-elemen lain seperti memory, 
                            I/O devices, program, dan data. Ini memunculkan kebutuhan akan perlindungan. Pfleeger dan Pfleeger mengidentifikasi tingkat perlindungan yang 
                            mungkin ditawarkan oleh sistem operasi, antara lain:
                            </p>

                            <ul>
                                <li>
                                    <p>Tidak ada proteksi: Ini sesuai jika prosedur sensitif dijalankan pada waktu yang berbeda.</p>
                                </li>
                                <li>
                                    <p>Isolasi: Memisahkan setiap proses secara terpisah dari proses lain tanpa berbagi atau komunikasi. Setiap proses memiliki ruang alamat, file, dan objeknya sendiri.</p>
                                </li>
                                <li>
                                    <p>Bagikan semua atau jangan bagikan apapun: Pemilik objek dapat mendeklarasikannya sebagai publik atau privat. Pada kasus pertama, proses apa pun dapat mengakses objek, sementara pada kasus kedua, hanya pemilik objek yang dapat mengaksesnya.</p>
                                </li>
                                <li>
                                    <p>Bagikan melalui batasan akses: OS memeriksa izin setiap akses oleh pengguna terhadap objek tertentu.</p>
                                </li>
                                <li>
                                    <p>Berbagi melalui kemampuan dinamis: Memperluas kontrol akses untuk memungkinkan pembagian hak secara dinamis untuk objek.</p>
                                </li>
                                <li>
                                    <p>Batasi penggunaan suatu objek: Tidak hanya membatasi akses ke suatu objek, tetapi juga cara penggunaan dari objek tersebut dapat diatur.</p>
                                </li>
                            </ul>
                            <p>
                            Penting untuk mencatat bahwa setiap sistem operasi dapat memberikan tingkat perlindungan yang berbeda untuk objek, pengguna, 
                            atau aplikasi yang berbeda. OS perlu menyeimbangkan kebutuhan untuk memungkinkan berbagi dengan perlindungan sumber daya pengguna individu. 
                            Salah satu teknik yang digunakan adalah mode eksekusi prosesor yang memisahkan mode pengguna dari mode sistem atau mode kernel. 
                            Virtualisasi komputer juga menjadi penting untuk memungkinkan berbagai instansi sistem operasi untuk berjalan bersamaan menggunakan sumber daya 
                            fisik yang sama. File sharing adalah aspek penting dari sistem multipengguna dan membutuhkan pengelolaan akses serta perlindungan. 
                            File descriptor adalah cara untuk mengakses dan memanipulasi file yang disimpan di disk secara efisien dalam sistem operasi modern.
                            </p>
                            
                                

                            <h3 class="mb-4">Memahami Keamanan Program Aplikasi</h3>

                            <p>
                            Setelah sistem operasi dasar diinstal dan diamankan, langkah selanjutnya adalah menginstal dan mengkonfigurasi layanan dan aplikasi yang diperlukan. Hal ini penting untuk memenuhi fungsionalitas yang diinginkan dan mengurangi potensi kerentanan. Pada sistem klien, perangkat lunak seperti Java, PDF viewer, Flash, browser web, dan Microsoft Office adalah target yang perlu diinstal dan diamankan. Pada sistem server, perangkat lunak yang menyediakan akses atau layanan jarak jauh, seperti web server, basis data, dan server akses file, memerlukan perhatian khusus.
                            </p>

                            <p>
                            Setiap layanan atau aplikasi yang dipilih harus diinstal, dikonfigurasi, dan diperbarui ke versi terbaru yang aman dan sesuai dengan sistem. Konfigurasi aplikasi meliputi pembuatan dan penentuan area penyimpanan data yang sesuai, serta penyesuaian detail konfigurasi default. Data default, skrip, atau akun pengguna yang disertakan oleh aplikasi harus ditinjau dengan hati-hati dan hanya disimpan jika diperlukan, kemudian diamankan.
                            </p>
                            <p>

                            </p>
                            <p>
                            Selama proses konfigurasi, perhatian khusus harus diberikan pada hak akses yang diberikan ke aplikasi. Ini menjadi penting terutama dengan layanan yang diakses dari jarak jauh seperti layanan web dan transfer file. Aplikasi server tidak boleh diberikan hak untuk mengubah file kecuali jika fungsi tersebut secara khusus diperlukan.
                            </p>
                            <p>
                            Penting juga untuk menerapkan teknologi enkripsi seperti TLS, IPsec, atau SecureShell (SSH) untuk mengamankan layanan jaringan. Ini melibatkan pembuatan dan manajemen kunci publik dan pribadi yang sesuai, serta penerbitan sertifikat X.509 yang ditandatangani oleh otoritas sertifikat yang tepercaya. Jika diperlukan, sistem file kriptografi juga harus diimplementasikan dengan menggunakan kunci yang kuat.
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