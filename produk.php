<?php /* Template Name: Produk */ ?>
<?= get_header(); ?>

<div class="products">
    <section class="products-section-1 white-nav">
        <div class="container-fluid pe-0 d-flex justify-content-end w-100 py-2">
            <div class="scrollable-section d-none d-md-flex">
                <div class="navigation">
                    <div class="navigation-item green font-weight-bold font-italic" style="font-weight: bold;"
                        data-atr="about">
                        Produk <br>
                        Kami
                    </div>
                    <div class="navigation-item" data-atr="cng">
                        CNG
                    </div>
                    <div class="sub-item" data-atr="mother-station">
                        Mother Station
                    </div>
                    <div class="sub-item" data-atr="daughter-station">
                        Daughter Station
                    </div>
                    <div class="navigation-item" data-atr="biomassa">
                        Biomassa
                    </div>
                    <div class="sub-item" data-atr="sawdust">
                        Pengolahan
                    </div>
                    <div class="sub-item" data-atr="distribusi">
                        Distribusi
                    </div>
                    <div class="sub-item" data-atr="pabrik">
                        Pabrik Biomassa
                    </div>
                    <div class="navigation-item" data-atr='lng'>
                        LNG
                    </div>
                    <div class="sub-item" data-atr="prosess-lng">
                        Proses LNG
                    </div>
                </div>

                <div class="content active" id="about">
                    <div class="row">
                        <div class="col me-5 pe-5">
                            <span class="green">Produk Energi Bersih</span>
                            <h1>
                                Produk Kami
                            </h1>
                            <p>
                                <br>
                                Kami berupaya membangun masa depan yang berkelanjutan dengan melakukan hal yang benar
                                yaitu penggunaan energi bersih sebagai bahan bakar yang ramah terhadap lingkungan.
                                <br>
                                <br>
                                Saat ini wilayah pemasaran terbesar Reethau ada di Jawa Barat, Jawa Tengah dan Jawa
                                Timur.

                            <h4>
                                <b>Energi Bersih Memberikan Keandalan.</b>
                            </h4>

                            </p>
                        </div>
                        <div class="col-6">
                            <img src="<?= get_template_directory_uri() . '/assets/images/our-product.webp' ?>"
                                alt="controlling-engine" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="content" id="cng">
                    <div class="row">
                        <div class="col me-5">
                            <span class="green">Produk Energi Bersih</span>
                            <h1>
                                CNG
                            </h1>
                            <div class="wrap h-100">
                                <div class="abs">
                                    <p>
                                        <br>
                                        CNG atau Compressed Natural Gas adalah gas alam yang diproses dengan Gas Dryer
                                        untuk menghilangkan kandungan air, kemudian
                                        dikompres oleh Gas Compressor ke dalam
                                        tabung bertekanan tinggi. Hal ini bertujuan untuk memaksimalkan nilai kalori gas
                                        alam dan agar
                                        dapat dikirim dalam volume besar.
                                        <br>
                                        <br>
                                        CNG merupakan bahan bakar ramah lingkungan dengan harga yang kompetitif dan
                                        mudah dalam perawatan sehingga dapat meningkatkan daya
                                        tahan mesin industri.
                                        <br>
                                        <br>
                                        Sifat CNG yang lebih ringan dari udara tidak mudah terbakar apabila ada
                                        kebocoran. CNG berkontribusi terhadap kelestarian lingkungan hidup karena emisi
                                        gas yang rendah dan tidak menyisakan debu pembakaran.
                                        <br>
                                        <br>
                                        Untuk memenuhi permintaan atas CNG, Reethau saat ini memiliki 3 Mother Station
                                        CNG diantaranya terdiri dari 2 Mother Station yang dikelola langsung oleh
                                        Reethau beralamat di Bekasi dan Indramayu, Jawa Barat dan 1 Mother Station yang
                                        dikelola atas kerja sama
                                        dengan PT Pertagas Niaga beralamat di Blora, Jawa Tengah.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="<?= get_template_directory_uri() . '/assets/images/product-cng-1.webp' ?>"
                                alt="cng-controlling" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="content" id="mother-station">
                    <div class="row">
                        <div class="col-12">
                            <h1>Proses Kerja Stasiun Pengisian <br>
                                (Mother Station)</h1>
                            <img src="<?= get_template_directory_uri() . '/assets/images/mother-station/base.webp' ?>"
                                class="mother-station-maps" alt="Workplace" usemap="#mother-station-workmap"
                                width="1488" height="936">

                            <map name="mother-station-workmap">
                                <area class="mother-station-area" data-img="1" shape="rect" coords="175,496,461,708"
                                    alt="Computer">
                                <area class="mother-station-area" data-img="2" shape="rect" coords="375,303,492,549"
                                    alt="Computer">
                                <area class="mother-station-area" data-img="3" shape="rect" coords="488,266,682,480"
                                    alt="Computer">
                                <area class="mother-station-area" data-img="4" shape="rect" coords="674,146,938,422"
                                    alt="Computer">
                                <area class="mother-station-area" data-img="5" shape="rect" coords="1013,343,1173,594"
                                    alt="Computer">
                                <area class="mother-station-area" data-img="6" shape="rect" coords="517,523,900,838"
                                    alt="Computer">
                            </map>

                        </div>
                    </div>
                </div>

                <div class="content" id="daughter-station">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                Proses Kerja Stasiun Pengisian <br>
                                (Daughter Station)
                            </h1>
                            <img src="<?= get_template_directory_uri() . '/assets/images/daughter-station/base.webp' ?>"
                                class="daughter-station-maps" alt="Workplace" usemap="#daughter-station-workmap"
                                width="1344" height="920">

                            <map name="daughter-station-workmap">
                                <area class="daughter-station-area" data-img="1" shape="rect" coords="325,379,623,596"
                                    alt="Computer">
                                <area class="daughter-station-area" data-img="2" shape="rect" coords="400,182,788,347"
                                    alt="Computer">
                                <area class="daughter-station-area" data-img="3" shape="rect" coords="650,404,1288,729"
                                    alt="Computer">
                            </map>

                        </div>
                    </div>
                </div>

                <div class="content" id="biomassa">
                    <div class="row">
                        <div class="col me-5">
                            <!-- <span class="green">Produk Energi Bersih</span> -->
                            <span class="green">Produk Energi Bersih</span>
                            <h1>Biomassa</h1>
                            <div class="wrap h-100">
                                <p class="my-5 abs">
                                    <br>

                                    Biomassa adalah sumber energi terbarukan yang berasal dari organisme yang ada di
                                    Bumi. Reethau mengolah biomassa yang didapatkan dari hasil kayu proses pemangkasan,
                                    industri penggergajian dan dari tanaman perkebunan maupun perhutanan yang sudah
                                    bekerja sama untuk dapat memenuhi permintaan pelanggan.
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="<?= get_template_directory_uri() . '/assets/images/product-biomassa-1.webp' ?>"
                                alt="wood-pellet" class="w-100 h-100">

                        </div>
                    </div>
                </div>

                <div class="content" id="sawdust">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                Pengolahan Biomassa <br>
                                Wood Pellet
                            </h1>
                            <div>
                                <img src="<?= get_template_directory_uri() . '/assets/images/sawdust/base.webp' ?>"
                                    class="sawdust-maps" alt="Workplace" usemap="#sawdust-workmap" width="1608"
                                    height="882">
                            </div>

                            <map name="sawdust-workmap">
                                <area class="sawdust-area" data-img="1" shape="rect" coords="251,400,590,552"
                                    alt="Computer">
                                <area class="sawdust-area" data-img="2" shape="rect" coords="377,51,668,351"
                                    alt="Computer">
                                <area class="sawdust-area" data-img="3" shape="rect" coords="688,40,878,256"
                                    alt="Computer">
                                <area class="sawdust-area" data-img="4" shape="rect" coords="891,125,1059,289"
                                    alt="Computer">
                                <area class="sawdust-area" data-img="5" shape="rect" coords="1066,236,1216,361"
                                    alt="Computer">
                                <area class="sawdust-area" data-img="6" shape="rect" coords="1086,378,1356,500"
                                    alt="Computer">
                                <area class="sawdust-area" data-img="7" shape="rect" coords="920,424,1081,639"
                                    alt="Computer">
                                <area class="sawdust-area" data-img="8" shape="rect" coords="526,487,876,762"
                                    alt="Computer">
                            </map>


                            <h1>
                                Pengolahan Biomassa <br>
                                Woodchip
                            </h1>

                            <div>
                                <img src="<?= get_template_directory_uri() . '/assets/images/woodchip/base.webp' ?>"
                                    class="woodchip-maps" alt="Workplace" usemap="#woodchip-workmap">
                            </div>

                            <map name="woodchip-workmap">
                                <area class="woodchip-area" data-img="1" shape="rect" coords="251,400,590,552"
                                    alt="Computer">
                                <area class="woodchip-area" data-img="2" shape="rect" coords="377,51,668,351"
                                    alt="Computer">
                                <area class="woodchip-area" data-img="3" shape="rect" coords="688,40,878,256"
                                    alt="Computer">
                                <area class="woodchip-area" data-img="4" shape="rect" coords="891,125,1059,289"
                                    alt="Computer">
                                <area class="woodchip-area" data-img="5" shape="rect" coords="915,388,1160,616"
                                    alt="Computer">
                                <area class="woodchip-area" data-img="6" shape="rect" coords="527,480,945,800"
                                    alt="Computer">
                            </map>

                        </div>
                    </div>
                </div>

                <div class="content" id="distribusi">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                Proses <br>
                                Distribusi Biomassa
                            </h1>
                            <img src="<?= get_template_directory_uri() . '/assets/images/distribusi/base.webp' ?>"
                                class="distribusi-maps" alt="Workplace" usemap="#distribusi-workmap" width="1547"
                                height="654">

                            <map name="distribusi-workmap">
                                <area class="distribusi-area" data-img="1" shape="rect" coords="325,379,623,596"
                                    alt="Computer">
                                <area class="distribusi-area" data-img="2" shape="rect" coords="400,182,788,347"
                                    alt="Computer">
                                <area class="distribusi-area" data-img="3" shape="rect" coords="820,0,1241,311"
                                    alt="Computer">
                                <area class="distribusi-area" data-img="4" shape="rect" coords="661,265,1085,575"
                                    alt="Computer">
                            </map>

                        </div>
                    </div>
                </div>

                <div class="content" id="pabrik">
                    <h1 class="mb-5">
                        Pabrik <br> Biomassa
                        Reethau
                    </h1>
                    <div class="row">
                        <div class="col-6 mb-4">
                            <p>
                                Reethau memiliki keunggulan dalam pemenuhan persedian woodchip maupun wood pellet atas
                                permintaan pelanggan. Kualitas woodchip dan wood pellet di Reethau memiliki standar mutu
                                yang sudah teruji kadar air dan nilai kalori nya. Selain itu, keberadaan plant biomassa
                                di beberapa wilayah di Indonesia, menjadikan harga yang ditawarkan Reethau sangat
                                kompetitif.
                            </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="<?= get_template_directory_uri() . '/assets/images/product-pabrik-1.webp' ?>"
                                alt="wood-pellet" class="w-100 h-100">
                        </div>
                        <div class="col-6">
                            <img src="<?= get_template_directory_uri() . '/assets/images/product-pabrik-2.webp' ?>"
                                alt="wood-chip" class="w-100 h-100">
                        </div>
                    </div>
                </div>

                <div class="content" id="lng">
                    <div class="row">
                        <div class="col me-5 d-flex flex-column align-items-stretch">
                            <div>
                                <span class="green">Produk Energi Bersih</span>
                                <h1>
                                    LNG
                                </h1>
                            </div>
                            <div class="wrap h-100">
                                <p class="abs">
                                    <br>
                                    LNG atau Liquefied Natural Gas adalah gas methane dengan kandungan lebih dari 90%
                                    metana (CH4) yang dicairkan (liquefied) pada tekanan atmosferik dengan suhu 163
                                    derajat celcius. Sebelum proses pencairan, gas harus menjalani proses pemurnian atau
                                    penghilangan kandungan senyawa
                                    yang tidak diharapkan.
                                    <br>
                                    <br>
                                    Dengan pengalaman lebih dari 10 tahun di bidang distribusi energi, Reethau dapat
                                    menjadi kepercayaan pelanggan dalam memenuhi kebutuhan LNG. Saat ini Reethau sangat
                                    ekspansif di dunia LNG dengan berinvestasi dari hulu hingga hilir yaitu liquefaction
                                    plant, transportasi, storage hingga
                                    regasifikasi di sisi pelanggan.

                                    <br>
                                    <br>
                                    Dalam hal riset dan pengembangan, Reethau sudah pada tahap yang teruji dan
                                    terperinci dengan penggunaan teknologi yang terbukti pada bidang LNG.
                                    <br>
                                    <br>


                                    <span style="font-size: 1.5rem;color:#78ad5a;">
                                        <b>Reethau</b> hadir dengan <b>LNG</b> sebagai produk energi bersih
                                    </span>

                                </p>


                            </div>
                        </div>
                        <div class="col-6">
                            <img src="<?= get_template_directory_uri() . '/assets/images/product-process-1.webp' ?>"
                                alt="controlling-engine" class="w-100">

                        </div>
                    </div>
                </div>
                <div class="content" id="prosess-lng">
                    <div class="row">
                        <div class="col-12 me-5">
                            <h1>
                                Proses <br>
                                LNG
                            </h1>
                            <img src="<?= get_template_directory_uri() . '/assets/images/lng/base.webp' ?>"
                                class="lng-maps" alt="Workplace" usemap="#lng-workmap" width="1488" height="1086">

                            <map name="lng-workmap">
                                <area class="lng-area" data-img="1" shape="rect" coords="116,455,473,839"
                                    alt="Computer">
                                <area class="lng-area" data-img="2" shape="rect" coords="144,108,562,533"
                                    alt="Computer">
                                <area class="lng-area" data-img="3" shape="rect" coords="540,33,1252,568"
                                    alt="Computer">
                                <area class="lng-area" data-img="4" shape="rect" coords="973,498,1343,815"
                                    alt="Computer">
                                <area class="lng-area" data-img="5" shape="rect" coords="568,474,815,750"
                                    alt="Computer">
                                <area class="lng-area" data-img="6" shape="rect" coords="432,786,712,938"
                                    alt="Computer">
                            </map>
                        </div>
                    </div>
                </div>
            </div>


            <!-- mobile -->
            <div class="d-flex d-md-none  w-100 flex-column">

                <div class="product-content active" id="about-content">
                    <div class="row w-100 mb-5 mobile-padding-1">
                        <div class="col-12">
                            <span class="green">Produk Energi Bersih</span>
                            <h1 class="my-4">
                                Produk Kami
                            </h1>
                            <div class="navigation-pills">
                                <div class="item" data-att="cng">CNG</div>
                                <div class="item" data-att="bio">Biomassa</div>
                                <div class="item" data-att="lng">LNG</div>
                            </div>
                        </div>
                    </div>

                    <div class="row w-100">
                        <div class="col-12 p-0">
                            <img src="<?= get_template_directory_uri() . '/assets/images/product-bg-mobile.webp' ?>"
                                alt="controlling-engine" class="w-100">
                        </div>
                    </div>
                    <div class="row w-100 mobile-padding-1 mt-5">
                        <div class="col-12 p-0">
                            <p>
                                Kami berupaya membangun masa depan yang berkelanjutan dengan melakukan hal yang benar
                                yaitu penggunaan energi bersih sebagai bahan bakar yang ramah terhadap lingkungan.
                                <br>
                                <br>
                                Saat ini wilayah pemasaran terbesar Reethau ada di Jawa Barat, Jawa Tengah dan Jawa
                                <br>
                                <br>
                            <h4>
                                <b>Energi Bersih Memberikan Keandalan.</b>
                            </h4>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="product-content" id="cng-content">
                    <div class="row w-100 mb-5 mobile-padding-1">
                        <div class="col-12">
                            <span class="green">Produk Energi Bersih</span>
                            <h1 class="my-4 dynamic-title active" id="cng-title">
                                CNG
                            </h1>
                            <h1 class="my-4 dynamic-title" id="mother-title">
                                Proses Kerja <br>
                                Stasiun Pengisian <br>
                                (Mother Station)
                            </h1>
                            <h1 class="my-4 dynamic-title" id="daughter-title">
                                Proses Kerja <br>
                                Stasiun Pengisian <br>
                                (Daughter Station)
                            </h1>


                            <div class="navigation-pills">
                                <div class="item active" data-att="cng">CNG</div>
                                <div class="item" data-att="bio">Biomassa</div>
                                <div class="item" data-att="lng">LNG</div>
                            </div>
                            <div class="navigation-text flex-column">
                                <div class="item" data-att="mother">Mother Station</div>
                                <div class="item" data-att="daughter">Daughter Station</div>
                            </div>
                        </div>
                    </div>

                    <div class="dynamic-content active" id="cng-row">
                        <div class="row w-100">
                            <div class="col-12 p-0">
                                <img src="<?= get_template_directory_uri() . '/assets/images/cng-bg-mobile.webp' ?>"
                                    alt="controlling-engine" class="w-100">
                            </div>
                        </div>
                        <div class="row w-100 mobile-padding-1 mt-5">
                            <div class="col-12 p-0">
                                <p>
                                    CNG atau Compressed Natural Gas adalah gas alam yang diproses dengan Gas Dryer untuk
                                    menghilangkan kandungan air,<br> kemudian dikompres oleh Gas Compressor ke dalam
                                    tabung bertekanan tinggi. Hal ini bertujuan untuk memaksimalkan nilai kalori gas
                                    alam dan agar dapat dikirim dalam volume besar.
                                    <br><br>
                                    CNG merupakan bahan bakar ramah lingkungan dengan harga yang kompetitif dan mudah
                                    dalam perawatan sehingga dapat meningkatkan daya
                                    tahan mesin industri.
                                    <br><br>
                                    Sifat CNG yang lebih ringan dari udara tidak mudah terbakar apabila ada kebocoran.
                                    CNG berkontribusi terhadap kelestarian lingkungan hidup karena emisi gas yang rendah
                                    dan tidak menyisakan debu pembakaran.
                                    <br><br>
                                    Untuk memenuhi permintaan atas CNG, Reethau saat ini memiliki 3 Mother Station CNG
                                    diantaranya terdiri dari 2 Mother Station yang dikelola langsung oleh Reethau
                                    beralamat di Bekasi dan Indramayu, Jawa Barat dan 1 Mother Station yang dikelola
                                    atas kerja sama
                                    dengan PT Pertagas Niaga beralamat di Blora, Jawa Tengah.
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                    $rowsCng = [
                        'mother-row' => [
                            [
                                'image' => '/assets/images/mother-station/mobile/3-pipe.webp',
                                'title' => "Tahap 1",
                                'subtitle' => "Gas dari pipa jaringan dengan tekanan rendah dialirkan & dihitung pemakaian volume melalui metering menuju gas Scrubber.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/tube-1.webp',
                                'title' => "Tahap 2",
                                'subtitle' => "Scrubber 
                                memproses gas untuk memisahkan air/kondensat, kemudian dialirkan ke Gas Dryer.",
                                'type' => "horizontal"
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/tube-3.webp',
                                'title' => "Tahap 3",
                                'subtitle' => "Gas Dryer memproses gas untuk menghilangkan kandungan air, kemudian gas dialirkan menuju Gas Compressor.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/comp-1.webp',
                                'title' => "Tahap 4",
                                'subtitle' => "Gas Compressor kemudian mengolah gas alam hingga bertekanan tinggi dan menghasilkan CNG.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/gas.webp',
                                'title' => "Tahap 5",
                                'subtitle' => "CNG dari 
                                Gas Compressor yang 
                                siap dipakai kemudian dialirkan ke 
                                Dispenser apabila dilakukan pengisian.",
                                'type' => "horizontal"
                            ],


                        ],
                        'daughter-row' => [
                            [
                                'image' => '/assets/images/daughter-station/mobile/truck.webp',
                                'title' => "Tahap 1",
                                'subtitle' => "Armada transport CNG atau GTM (Gas Transport Module) yang membawa CNG tiba di parkiran Daughter Station area pelanggan.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/daughter-station/mobile/comp-2.webp',
                                'title' => "Tahap 2",
                                'subtitle' => "CNG dialirkan dari GTM menuju PRS (Pressure Reducing System) untuk menurunkan tekanan gas sesuai kebutuhan pelanggan. Kemudian gas dari PRS dialirkan melewati metering system (turbin meter dan EVC). Pemakaian gas dapat dimonitor secara online menggunakan AMR (telemetri).",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/daughter-station/mobile/comp-1.webp',
                                'title' => "Tahap 3",
                                'subtitle' => "Gas alam baru dialirkan ke mesin industri pelanggan seperti boiler, kiln, oven dan burner.",
                                'type' => ""
                            ]
                        ],
                    ];


                    foreach ($rowsCng as $key => $val) :
                    ?>
                    <div id="<?= $key ?>" class="dynamic-content">
                        <div class="row w-100 mobile-padding-1">
                            <?php foreach ($val as $item) : ?>
                            <div class="col-12 d-flex flex-column <?= $item['type'] ?>">
                                <img src="<?= get_template_directory_uri() . $item['image'] ?>" alt="" class="w-100">
                                <div>
                                    <h4 class="custom mb-4">
                                        <?= $item['title'] ?>
                                    </h4>
                                    <p>
                                        <?= $item['subtitle'] ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="product-content" id="bio-content">
                    <div class="row w-100 mb-5 mobile-padding-1">
                        <div class="col-12">
                            <span class="green">Produk Energi Bersih</span>
                            <h1 class="my-4 dynamic-title active" id="bio-title">
                                Biomassa
                            </h1>

                            <h1 class="my-4 dynamic-title active" id="pabrik-title">
                                Pabrik <br> Biomassa
                                Reethau
                            </h1>

                            <h1 class="my-4 dynamic-title" id="sawdust-title">
                                Pengolahan <br>
                                Biomassa Wood Pellet
                            </h1>
                            <h1 class="my-4 dynamic-title" id="woodchip-title">
                                Pengolahan <br>
                                Biomassa Woodchip
                            </h1>

                            <h1 class="my-4 dynamic-title" id="distribution-title">
                                Proses <br>
                                Distribusi Biomassa
                            </h1>

                            <div class="navigation-pills">
                                <div class="item" data-att="cng">CNG</div>
                                <div class="item active" data-att="bio">Biomassa</div>
                                <div class="item" data-att="lng">LNG</div>
                            </div>
                            <div class="navigation-text flex-column">
                                <div class="item" data-att="sawdust">Pengolahan Woodpellet</div>
                                <div class="item" data-att="woodchip">Pengolahan Woodchip</div>
                                <div class="item" data-att="distribution">Distribusi Biomassa</div>
                                <div class="item" data-att="pabrik">Pabrik Biomassa</div>
                            </div>
                        </div>
                    </div>

                    <div class="dynamic-content active" id="bio-row">
                        <div class="row w-100">
                            <div class="col-12 p-0">
                                <img src="<?= get_template_directory_uri() . '/assets/images/biomassa-bg-mobile.webp' ?>"
                                    alt="sawdust" class="w-100">
                            </div>
                        </div>
                        <div class="row w-100 mobile-padding-1 mt-5">
                            <div class="col-12 p-0">
                                <p>
                                    Biomassa adalah sumber energi terbarukan yang berasal dari organisme yang ada di
                                    bumi. Reethau mengolah biomassa yang didapatkan dari hasil kayu proses pemangkasan,
                                    industri penggergajian dan dari tanaman perkebunan maupun perhutanan yang sudah
                                    bekerja sama untuk dapat memenuhi permintaan pelanggan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                    $rowsCng = [
                        'sawdust-row' => [
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-1.webp',
                                'title' => "Tahap 1",
                                'subtitle' => "Hasil pengolahan kayu didapatkan dari pemangkasan dan penggergajian kayu. ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-2.webp',
                                'title' => "Tahap 2",
                                'subtitle' => "Hasil pengolahan kayu melalui proses chipping 
                                dan screening.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/tube-3.webp',
                                'title' => "Tahap 3",
                                'subtitle' => "Hasil pengolahan kayu melalui proses drying.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-4.webp',
                                'title' => "Tahap 4",
                                'subtitle' => "Hasil pengolahan kayu menuju mesin hammer mill untuk menjadi serbuk.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/woodplate.webp',
                                'title' => "Tahap 5",
                                'subtitle' => "Output berupa wood pellet.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-6.webp',
                                'title' => "Tahap 6",
                                'subtitle' => "Wood pellet masuk ke dalam mesin palletizing.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-7.webp',
                                'title' => "Tahap 7",
                                'subtitle' => "Wood pellet dikemas di dalam karung. ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/truck-3.webp',
                                'title' => "Tahap 8",
                                'subtitle' => "Wood pellet
                                siap untuk dikirim.",
                                'type' => ""
                            ],
                        ],
                        'woodchip-row' => [
                            [
                                'image' => '/assets/images/woodchip/mobile/woodchip-1.webp',
                                'title' => "Tahap 1",
                                'subtitle' => "Hasil pengolahan kayu didapatkan dari pemangkasan dan penggergajian kayu. ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-2.webp',
                                'title' => "Tahap 2",
                                'subtitle' => "Hasil pengolahan kayu melalui proses chipping 
                                dan screening.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/3-pipe.webp',
                                'title' => "Tahap 3",
                                'subtitle' => "Hasil pengolahan kayu melalui proses drying.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-4.webp',
                                'title' => "Tahap 4",
                                'subtitle' => "Hasil pengolahan kayu menuju mesin hammer mill untuk menjadi serbuk.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/woodplate.webp',
                                'title' => "Tahap 5",
                                'subtitle' => "Output berupa woodchip/potongan kayu kecil",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-7.webp',
                                'title' => "Tahap 6",
                                'subtitle' => "Woodchip dikemas di dalam karung.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/truck-3.webp',
                                'title' => "Tahap 7",
                                'subtitle' => "Woodchip siap untuk dikirim.",
                                'type' => ""
                            ],
                        ],
                        'distribution-row' => [
                            [
                                'image' => '/assets/images/distribusi/mobile/distribution-1.webp',
                                'title' => "Tahap 1",
                                'subtitle' => "Pengiriman biomassa menggunakan tracking.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/distribusi/mobile/distribution-2.webp',
                                'title' => "Tahap 2",
                                'subtitle' => "Sampai di pelanggan, truk ditimbang melalui jembatan timbang.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/distribusi/mobile/distribution-3.webp',
                                'title' => "Tahap 3",
                                'subtitle' => "Selanjutnya biomassa menuju gudang pelanggan.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/distribusi/mobile/distribution-4.webp',
                                'title' => "Tahap 4",
                                'subtitle' => "Biomassa dapat digunakan sebagai bahan bakar boiler.",
                                'type' => ""
                            ],
                        ],
                    ];


                    foreach ($rowsCng as $key => $val) :
                    ?>
                    <div class="dynamic-content" id="<?= $key ?>">
                        <div class="row w-100 mobile-padding-1">
                            <?php foreach ($val as $item) : ?>
                            <div class="col-12 <?= $item['type'] ?>">
                                <img src="<?= get_template_directory_uri() . $item['image'] ?>" alt="" class="w-100">
                                <div>
                                    <h4 class="custom mb-4">
                                        <?= $item['title'] ?>
                                    </h4>
                                    <p>
                                        <?= $item['subtitle'] ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="dynamic-content mb-5" id="pabrik-row">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <p>
                                    Reethau memiliki keunggulan dalam pemenuhan persedian woodchip maupun wood pellet
                                    atas permintaan pelanggan. Kualitas woodchip dan wood pellet di Reethau memiliki
                                    standar mutu yang sudah teruji kadar air dan nilai kalori nya. Selain itu,
                                    keberadaan plant biomassa di beberapa wilayah di Indonesia, menjadikan harga yang
                                    ditawarkan Reethau sangat kompetitif.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <img src="<?= get_template_directory_uri() . '/assets/images/product-pabrik-1.webp' ?>"
                                    alt="wood-pellet" class="w-100 h-100">
                            </div>
                            <div class="col-12 mt-5">
                                <img src="<?= get_template_directory_uri() . '/assets/images/product-pabrik-2.webp' ?>"
                                    alt="wood-chip" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-content" id="lng-content">
                    <div class="row w-100 mb-5 mobile-padding-1">
                        <div class="col-12">
                            <span class="green">Produk Energi Bersih</span>
                            <h1 class="my-4 dynamic-title active" id="lng-title">
                                LNG
                            </h1>
                            <h1 class="my-4 dynamic-title " id="lng-1-title">
                                LNG
                            </h1>
                            <h1 class="my-4 dynamic-title" id="mother-title">
                                Pengolahan <br>
                                Biomassa Wood Pellet
                            </h1>
                            <h1 class="my-4 dynamic-title" id="daughter-title">
                                Pengolahan <br>
                                Biomassa Woodchip
                            </h1>

                            <h1 class="my-4 dynamic-title" id="daughter-title">
                                Proses <br>
                                Distribusi Biomassa
                            </h1>

                            <div class="navigation-pills">
                                <div class="item" data-att="cng">CNG</div>
                                <div class="item" data-att="bio">Biomassa</div>
                                <div class="item active" data-att="lng">LNG</div>
                            </div>
                            <div class="navigation-text">
                                <div class="item active" data-att="lng-1">Proses LNG</div>
                            </div>
                        </div>
                    </div>

                    <div class="dynamic-content" id="lng-row">
                        <div class="row w-100">
                            <div class="col-12 p-0">
                                <img src="<?= get_template_directory_uri() . '/assets/images/product-process-1.webp' ?>"
                                    alt="controlling-engine" class="w-100">
                            </div>
                        </div>
                        <div class="row w-100 mobile-padding-1 mt-5">
                            <div class="col-12 p-0">

                                <p>
                                    LNG atau Liquefied Natural Gas adalah gas methane dengan kandungan lebih dari 90%
                                    metana (CH4) yang dicairkan (liquefied) pada tekanan atmosferik dengan suhu 163
                                    derajat celcius. Sebelum proses pencairan, gas harus menjalani proses pemurnian atau
                                    penghilangan kandungan senyawa
                                    yang tidak diharapkan.
                                </p>

                                <br>
                                <p>
                                    Dengan pengalaman lebih dari 10 tahun di bidang distribusi energi, Reethau dapat
                                    menjadi kepercayaan pelanggan dalam memenuhi kebutuhan LNG. Saat ini Reethau sangat
                                    ekspansif di dunia LNG dengan berinvestasi dari hulu hingga hilir yaitu liquefaction
                                    plant, transportasi, storage hingga regasifikasi di sisi pelanggan.
                                </p>

                                <br>
                                <p>
                                    Dalam hal riset dan pengembangan, Reethau sudah pada tahap yang teruji dan
                                    terperinci dengan penggunaan teknologi yang terbukti pada bidang LNG.
                                </p>
                                <br>
                                <h4>
                                    <b>Reethau</b> hadir dengan <b>LNG</b> sebagai produk energi bersih
                                </h4>
                            </div>
                        </div>
                    </div>

                    <?php
                    $rowsCng = [
                        'lng-1-row' => [
                            [
                                'image' => '/assets/images/lng/mobile/lng-1.webp',
                                'title' => "Tahap 1",
                                'subtitle' => "Sumber Gas diambil dari sumur, kilang minyak, 
                                dan pipa gas.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-2.webp',
                                'title' => "Tahap 2",
                                'subtitle' => "Gas masuk ke 
                                fasilitas Pre-Treatment sebelum diolah. ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-3.webp',
                                'title' => "Tahap 3",
                                'subtitle' => "Gas diolah oleh Mini Liquefaction Plant (Pabrik LNG)",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-4.webp',
                                'title' => "Tahap 4",
                                'subtitle' => "LNG diantar dengan ISO Tank dan 
                                LNG Carrier",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-5.webp',
                                'title' => "Tahap 5",
                                'subtitle' => "LNG dialirkan ke LNG Storage & Regsification",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-6.webp',
                                'title' => "Tahap 6",
                                'subtitle' => "LNG siap didistribusi dan gunakan oleh HORECA, Pembangkit Listrik, Pabrik, dsb. ",
                                'type' => ""
                            ],
                        ],
                    ];


                    foreach ($rowsCng as $key => $val) :
                    ?>
                    <div class="dynamic-content" id="<?= $key ?>">
                        <div class="row w-100 mobile-padding-1">
                            <?php foreach ($val as $item) : ?>
                            <div class="col-12 <?= $item['type'] ?>">
                                <img src="<?= get_template_directory_uri() . $item['image'] ?>" alt="" class="w-100">
                                <div>
                                    <h4 class="custom mb-4">
                                        <?= $item['title'] ?>
                                    </h4>
                                    <p>
                                        <?= $item['subtitle'] ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
    </section>
</div>

</div>

<?= get_footer(); ?>


<script>
$(function() {
    const elNav = document.querySelector("#navbar");
    elNav.style.position = "static"



    $(".navigation-pills>.item").click(function() {
        let curr = $(this).attr("data-att")

        $(".product-content").hide()
        $(".navigation-text>.item").removeClass("active")
        $(".dynamic-title").removeClass("active")
        $(".dynamic-content").removeClass("active")

        $(`#${curr}-content`).show()
        $(`#${curr}-row`).addClass("active")
        $(`#${curr}-title`).addClass("active")


    })

    $(".navigation-text>.item").click(function() {
        let curr = $(this).attr("data-att")
        $(".navigation-text>.item").removeClass("active")
        $(".dynamic-content").removeClass("active")
        $(".dynamic-title").removeClass("active")

        $(this).addClass("active")
        $(`#${curr}-row`).addClass("active")
        $(`#${curr}-title`).addClass("active")
    })


});
</script>