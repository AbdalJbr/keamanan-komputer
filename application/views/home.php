<?php 
    $this->load->view('partials/header')
?>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Tenang. Sabar. Kuasai.</h1>

                            <h6 class="text-center">platform pembelajaran keamanan komputer</h6>

                            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                        
                                    </span>

                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Search materi disini..." aria-label="Search">

                                    <button type="submit" class="form-control">Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="<?php echo site_url('web/detail_p1/');?>">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Pengenalan</h5>

                                            <p class="mb-0">Pengenalan terhadap Keamanan Komputer</p>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">P1</span>
                                    </div>

                                    <img src="./assets/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="./assets/images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Keamanan Komputer</h5>

                                            <p class="text-white">Sebuah pembelajaran yang mengenai banyak hal akan Gangguan, ancaman, serta penanggulangan terhadap keamanan komputer. Mari kita belajar dengan seksama. </p>

                                            <a href="#section_2" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                    </div>

                                    

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="explore-section section-padding" id="section_2">
                <div class="container">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Materi Pembelajaran</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pengenalan-tab" data-bs-toggle="tab" data-bs-target="#pengenalan-tab-pane" type="button" role="tab" aria-controls="pengenalan-tab-pane" aria-selected="true">Pengenalan</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="viruscodeerror-tab" data-bs-toggle="tab" data-bs-target="#viruscodeerror-tab-pane" type="button" role="tab" aria-controls="viruscodeerror-tab-pane" aria-selected="false">Virus Code Error</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="compressdatabasenetwork-tab" data-bs-toggle="tab" data-bs-target="#compressdatabasenetwork-tab-pane" type="button" role="tab" aria-controls="compressdatabasenetwork-tab-pane" aria-selected="false">Compress Database Network</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pengakhiran-tab" data-bs-toggle="tab" data-bs-target="#pengakhiran-tab-pane" type="button" role="tab" aria-controls="pengakhiran-tab-pane" aria-selected="false">Web Mail dan Viruses</button>
                           

                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="pengenalan-tab-pane" role="tabpanel" aria-labelledby="pengenalan-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p1/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Keamanan Komputer</h5>

                                                            <p class="mb-0">Pengenalan terhadap Keamanan Komputer</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">P1</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p2/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Physical Security</h5>

                                                                <p class="mb-0">Mengenai keamanan fisik dan biometrik.</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">P2</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p3/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Operating System</h5>

                                                                <p class="mb-0">Mengenai keamanan dan pertahanan sistem operasi</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">P3</span>
                                                    </div>

                                                    <img src="./assets/images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="viruscodeerror-tab-pane" role="tabpanel" aria-labelledby="viruscodeerror-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="<?php echo site_url('web/detail_p4/');?>">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Virus and Other Wild Life</h5>

                                                                <p class="mb-0">Mengenai penyebaran dan ancaman virus</p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto">P4</span>
                                                        </div>

                                                        <img src="./assets/images/topics/undraw_online_ad_re_ol62.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="<?php echo site_url('web/detail_p5/');?>">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Cryptoraphy</h5>

                                                                <p class="mb-0">Mengenai Kriptografi seni menulis atau memecahkan kode</p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto">P5</span>
                                                        </div>

                                                        <img src="./assets/images/topics/undraw_Group_video_re_btu7.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="<?php echo site_url('web/detail_p6/');?>">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Error Detection</h5>

                                                                <p class="mb-0">Mengenai Error Detection</p>
                                                            </div>

                                                            <span class="badge bg-advertising rounded-pill ms-auto">P6</span>
                                                        </div>

                                                        <img src="./assets/images/topics/undraw_viral_tweet_gndb.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                <div class="tab-pane fade" id="compressdatabasenetwork-tab-pane" role="tabpanel" aria-labelledby="compressdatabasenetwork-tab" tabindex="0">   
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p7/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Compression</h5>

                                                            <p class="mb-0">Mengenai Konsep, pemodelan, jenis dan teknik Kompresi data</p>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">P7</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                      
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p8/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Database Security</h5>

                                                            <p class="mb-0">Mengenai resiko dan keamanan dalam database</p>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">P8</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p9/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Network Security</h5>

                                                            <p class="mb-0">Mengenai Keamanan dan serangan jaringan(Network) </p>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">P9</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p10/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Network Security (Lanjutan)</h5>

                                                            <p class="mb-0">Mengenai Network lanjutan seperti Firewall, Protocol Tunneling, IDS dan IPS</p>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">P10</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pengakhiran-tab-pane" role="tabpanel" aria-labelledby="pengakhiran-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p11/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Keamanan WWW(World Wide Web)</h5>

                                                            <p class="mb-0">MengenaiKeamanan Sistem www dan client server</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">P11</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p12/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Keamanan Mail Server</h5>

                                                            <p class="mb-0">Mengenai dan memproteksi Mail Server Security</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">P12</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p13/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Eksploitasi Keamanan</h5>

                                                            <p class="mb-0">Memahami konsep Eksploitasi Keamanan</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">P13</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="<?php echo site_url('web/detail_p14/');?>">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Penaganan Virus, Trojan dan Worm</h5>

                                                            <p class="mb-0">Memahami cara penanggulangan Virus, Trojan, dan Worm</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">P14</span>
                                                    </div>

                                                    <img src="./assets/images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">Bagaimana cara belajar Keamanan Komputer?</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">Cari Materi sesuai Topik</h4>

                                        <p class="text-white">Materi dalam aplikasi ini terbagi menjadi 14 Materi. Disetiap materi terdapat perbedaan isi atau Topik dalam materi 
                                        </p>

                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class="text-white mb-3">Simpan &amp; Download Materi </h4>

                                        <p class="text-white">Materi bisa disimpan atau didownload berupa pdf, agar pembaca bisa menyimpan materi tersebut dan membaca nya dengan santai</p>

                                        <div class="icon-holder">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Baca &amp; Kuasai</h4>

                                        <p class="text-white">Kunci dalam menguasai sebuah ilmu adalah sabar dalam membaca, tenang dalam mempraktekannya, dan kuasai ilmu yang sudah dipahami</p>

                                        <div class="icon-holder">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </section>


            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Pertanyaan seputar Keamanan Komputer</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="./assets/images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Apa itu Keamanan Komputer?
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Keamanan Komputer (atau sering disebut sebagai <strong>Keamanan Informasi atau Cybersecurity</strong> dalam bahasa Inggris) adalah serangkaian tindakan, prosedur, teknologi, 
                                            dan praktik yang dirancang untuk melindungi sistem komputer, jaringan, data, dan informasi dari akses, penggunaan, atau pengungkapan yang tidak sah atau tidak sah.
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Apa Tujuan pembelajaran Keamanan Komputer?
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Tujuan dari keamanan komputer adalah <strong>untuk mengamankan informasi sensitif</strong> dan sistem komputer dari ancaman, serangan, atau potensi bahaya lainnya, 
                                        termasuk serangan siber, malware, pencurian identitas, dan akses tidak sah dari pihak-pihak yang tidak berwenang.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Apa Penting mempelajari Keamanan Komputer?
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Dengan pemahaman tentang pencegahan serangan malware, keamanan jaringan, dan penanganan insiden keamanan, seseorang dapat meminimalkan risiko pencurian identitas, 
                                        kerugian finansial, dan kehilangan data yang berpotensi merugikan. Selain itu, mempelajari keamanan komputer membuka pintu menuju berbagai peluang karir yang berkembang pesat 
                                        di bidang teknologi informasi dan membantu individu dalam berinteraksi secara aman dengan teknologi digital sehari-hari.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Lokasi Editor</h2>
                        </div>

                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                          
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31722.949050572846!2d106.65548371083983!3d-6.346287899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5a6e26dc3cd%3A0xccd6344b8021119d!2sUniversitas%20Pamulang%20Kampus%202%20(UNPAM%20Viktor)!5e0!3m2!1sen!2sid!4v1694882675109!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h4 class="mb-3">UNPAM VIKTOR</h4>

                            <p>Jl. Raya Puspitek, Buaran, Kec. Pamulang, Kota Tangerang Selatan, Banten 15310</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 305-240-9671" class="site-footer-link">
                                    (021)7412566
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">More </span>

                                <a href="http://www.unpam.ac.id/	" class="site-footer-link">
                                    http://www.unpam.ac.id/
                                </a>
                            </p>
                        </div>

                         <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h4 class="mb-3">UNPAM PUSAT</h4>

                            <p>Jl. Surya Kencana No.1, Pamulang Bar., Kec. Pamulang, Kota Tangerang Selatan, Banten 15417</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Phone</span>

                                <a href="tel: 305-240-9671" class="site-footer-link">
                                    (021)7412566
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">More </span>

                                <a href="http://www.unpam.ac.id/	" class="site-footer-link">
                                    http://www.unpam.ac.id/
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

<?php 
    $this->load->view('partials/footer')
?>
