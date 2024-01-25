<?php /* Template Name: Produk */ ?>
<?= get_header(); ?>

<div class="products">
    <section class="products-section-1 white-nav">
        <div class="container-fluid pe-0 d-flex justify-content-end w-100 py-2">
            <div class="scrollable-section d-none d-md-flex">
                <div class="navigation">
                    <div class="navigation-item green font-weight-bold font-italic" style="font-weight: bold;"
                        data-atr="about">
                        Our <br>
                        Product
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
                        Biomass
                    </div>
                    <div class="sub-item" data-atr="sawdust">
                        Processing
                    </div>
                    <div class="sub-item" data-atr="distribusi">
                        Distribution
                    </div>
                    <div class="sub-item" data-atr="pabrik">
                        Biomass Plant
                    </div>
                    <div class="navigation-item" data-atr='lng'>
                        LNG
                    </div>
                    <div class="sub-item" data-atr="prosess-lng">
                        LNG Process
                    </div>
                </div>

                <div class="content active" id="about">
                    <div class="row">
                        <div class="col-6">
                            <span class="green">Clean Energy Product</span>
                            <h1>
                                Our Product
                            </h1>
                            <p>
                                <br>
                                We strive to build a sustainable future by doing the right thing
                                namely the use of clean energy as fuel that is environmentally friendly.
                                Clean Energy Provides Reliability.
                                <br>
                                <br>
                                Currently Reethau's largest markets are in West Java, Central Java and East
                                Java.
                                <br>
                            <h4>
                                <b>Clean Energy Provides Reliability.</b>
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
                            <span class="green">Clean Energy Product</span>
                            <h1>
                                CNG
                            </h1>
                            <div class="wrap h-100">
                                <div class="abs">
                                    <p>
                                        CNG or Compressed Natural Gas is natural
                                        gas which is processed with a Gas Dryer to
                                        remove the water content, then compressed
                                        by a Gas Compressor into a high pressure
                                        cylinder. This aims to maximize the calorific
                                        value of natural gas and so that it can be
                                        shipped in large volumes.
                                        <br>
                                        <br>
                                        CNG is an environmentally friendly fuel with
                                        competitive prices and easy to maintain so it can
                                        increase the durability of industrial engines.
                                        <br>
                                        <br>
                                        The nature of CNG which is lighter
                                        than air is not flammable if there is a
                                        leak. CNG contributes to environmental
                                        sustainability because of low gas
                                        emissions and does not leave
                                        combustion dust.
                                        <br>
                                        <br>
                                        To meet the demand for CNG, Reethau currently has 3
                                        CNG Mother Stations including 2 Mother Stations which
                                        are managed directly by Reethau having addresses in
                                        Bekasi and Indramayu, West Java and 1 Mother Station
                                        which is managed in collaboration with PT Pertagas Niaga
                                        having addresses in Blora, Central Java.
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
                            <h1>Filling Station
                                <br>
                                (Mother Station)
                            </h1>
                            <img src="<?= get_template_directory_uri() . '/assets/images/mother-station/mother-eng.webp' ?>"
                                class="mother-station-maps-eng" alt="Workplace" usemap="#mother-station-workmap"
                                width="1488" height="936">

                            <map name="mother-station-workmap">
                                <area class="mother-station-area-eng" data-img="7" shape="rect" coords="175,496,461,708"
                                    alt="Computer">
                                <area class="mother-station-area-eng" data-img="8" shape="rect" coords="375,303,492,549"
                                    alt="Computer">
                                <area class="mother-station-area-eng" data-img="9" shape="rect" coords="488,266,682,480"
                                    alt="Computer">
                                <area class="mother-station-area-eng" data-img="10" shape="rect"
                                    coords="674,146,938,422" alt="Computer">
                                <area class="mother-station-area-eng" data-img="11" shape="rect"
                                    coords="1013,343,1173,594" alt="Computer">
                                <area class="mother-station-area-eng" data-img="12" shape="rect"
                                    coords="517,523,900,838" alt="Computer">
                            </map>

                        </div>
                    </div>
                </div>

                <div class="content" id="daughter-station">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                Reduction Station <br>
                                (Daughter Station)
                            </h1>
                            <img src="<?= get_template_directory_uri() . '/assets/images/daughter-station/daughter-eng.webp' ?>"
                                class="daughter-station-maps-eng" alt="Workplace" usemap="#daughter-station-workmap"
                                width="1344" height="920">

                            <map name="daughter-station-workmap">
                                <area class="daughter-station-area-eng" data-img="4" shape="rect"
                                    coords="325,379,623,596" alt="Computer">
                                <area class="daughter-station-area-eng" data-img="5" shape="rect"
                                    coords="400,182,788,347" alt="Computer">
                                <area class="daughter-station-area-eng" data-img="6" shape="rect"
                                    coords="650,404,1288,729" alt="Computer">
                            </map>

                        </div>
                    </div>
                </div>

                <div class="content" id="biomassa">
                    <div class="row">
                        <div class="col me-5">
                            <!-- <span class="green">Produk Energi Bersih</span> -->
                            <span class="green">Clean Energy Product</span>
                            <h1>Biomass</h1>
                            <div class="wrap h-100">
                                <p class="my-5 abs">
                                    <br>
                                    Biomass is a renewable energy source that comes from organisms on Earth. Reethau
                                    processes biomass obtained from the wood pruning process, the sawmill industry and
                                    from plantation and forestry plants that have collaborated to meet customer demand.
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
                                Processing of <br>
                                Biomass Wood Pellet
                            </h1>
                            <div>
                                <img src="<?= get_template_directory_uri() . '/assets/images/sawdust/base-eng.webp' ?>"
                                    class="sawdust-maps-eng" alt="Workplace" usemap="#sawdust-workmap" width="1608"
                                    height="882">
                            </div>

                            <map name="sawdust-workmap">
                                <area class="sawdust-area-eng" data-img="9" shape="rect" coords="251,400,590,552"
                                    alt="Computer">
                                <area class="sawdust-area-eng" data-img="10" shape="rect" coords="377,51,668,351"
                                    alt="Computer">
                                <area class="sawdust-area-eng" data-img="11" shape="rect" coords="688,40,878,256"
                                    alt="Computer">
                                <area class="sawdust-area-eng" data-img="12" shape="rect" coords="891,125,1059,289"
                                    alt="Computer">
                                <area class="sawdust-area-eng" data-img="13" shape="rect" coords="1066,236,1216,361"
                                    alt="Computer">
                                <area class="sawdust-area-eng" data-img="14" shape="rect" coords="1086,378,1356,500"
                                    alt="Computer">
                                <area class="sawdust-area-eng" data-img="15" shape="rect" coords="920,424,1081,639"
                                    alt="Computer">
                                <area class="sawdust-area-eng" data-img="16" shape="rect" coords="526,487,876,762"
                                    alt="Computer">
                            </map>


                            <h1>
                                Processing of <br>
                                Biomass Woodchip
                            </h1>

                            <div>
                                <img src="<?= get_template_directory_uri() . '/assets/images/woodchip/base-eng.webp' ?>"
                                    class="woodchip-maps-eng" alt="Workplace" usemap="#woodchip-workmap">
                            </div>

                            <map name="woodchip-workmap">
                                <area class="woodchip-area-eng" data-img="7" shape="rect" coords="251,400,590,552"
                                    alt="Computer">
                                <area class="woodchip-area-eng" data-img="8" shape="rect" coords="377,51,668,351"
                                    alt="Computer">
                                <area class="woodchip-area-eng" data-img="9" shape="rect" coords="688,40,878,256"
                                    alt="Computer">
                                <area class="woodchip-area-eng" data-img="10" shape="rect" coords="891,125,1059,289"
                                    alt="Computer">
                                <area class="woodchip-area-eng" data-img="11" shape="rect" coords="915,388,1160,616"
                                    alt="Computer">
                                <area class="woodchip-area-eng" data-img="12" shape="rect" coords="527,480,945,800"
                                    alt="Computer">
                            </map>

                        </div>
                    </div>
                </div>

                <div class="content" id="distribusi">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                Biomass <br>
                                Distribution Process
                            </h1>
                            <img src="<?= get_template_directory_uri() . '/assets/images/distribusi/base-eng.webp' ?>"
                                class="distribusi-maps-eng" alt="Workplace" usemap="#distribusi-workmap" width="1547"
                                height="654">

                            <map name="distribusi-workmap">
                                <area class="distribusi-area-eng" data-img="5" shape="rect" coords="325,379,623,596"
                                    alt="Computer">
                                <area class="distribusi-area-eng" data-img="6" shape="rect" coords="400,182,788,347"
                                    alt="Computer">
                                <area class="distribusi-area-eng" data-img="7" shape="rect" coords="820,0,1241,311"
                                    alt="Computer">
                                <area class="distribusi-area-eng" data-img="8" shape="rect" coords="661,265,1085,575"
                                    alt="Computer">
                            </map>

                        </div>
                    </div>
                </div>

                <div class="content" id="pabrik">
                    <h1 class="mb-5">
                        Biomass
                        Plant
                    </h1>
                    <div class="row">
                        <div class="col-6">
                            <p>
                                Reethau has an advantage in supplying
                                woodchips and wood pellets at the request
                                of customers. The quality of woodchips
                                and wood pellets at Reethau has quality
                                standards that have been tested for their
                                water content and calorific value. In addition,
                                the presence of biomass plants in several
                                regions in Indonesia makes the price offered
                                by Reethau very competitive.


                            </p>
                        </div>

                        <!--    <div class="col-12">

                            <div class="row mb-5">
                                <div class="col-2">

                                    <h4 class="custom">Pulau Jawa</h4>
                                </div>
                                <div class="col">
                                    <h4 class="">&nbsp;</h4>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h5>Plant Cianjur</h5>

                                        </div>
                                        <div class="col-md-5">
                                            <h5>Jawa Barat</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <h5>Plant Rembang</h5>
                                        </div>
                                        <div class="col-md-5">
                                            <h5>Jawa Tengah</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="<?= get_template_directory_uri() . '/assets/images/map-java.webp' ?>" alt="">
                        </div> -->
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
                                <span class="green">Clean Energy Product</span>
                                <h1>
                                    LNG
                                </h1>
                            </div>
                            <div class="wrap h-100">
                                <div class="abs">
                                    <p class="h-100">
                                        <br>
                                        LNG or Liquefied Natural Gas is Methane gas containing more than 90 percent
                                        methane (CH4) which is liquefied (Liquiefied) at pressure atmospheric with a
                                        temperature of ±163 degrees Celsius.
                                        Before the liquefaction process, the gas must undergo a purification process or
                                        remove unwanted compounds.
                                        <br>
                                        <br>
                                        With more than 10 years of experience in the field of energy distribution,
                                        Reethau can be trusted by customers in meeting their LNG needs. Currently
                                        Reethau is very expansive in the LNG world by investing from upstream to
                                        downstream, namely liquefaction plants, transportation, storage to
                                        regasification on the customer side.

                                        <br>
                                        <br>
                                        In terms of research and development, Reethau is already at a tested and
                                        detailed stage with the use of proven technology in the LNG field.
                                        <br>
                                        <br>


                                        <span style="font-size: 1.5rem;color:#78ad5a;">
                                            <b>Reethau</b> comes with <b>LNG</b> as a clean energy product
                                        </span>
                                </div>
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
                                LNG
                                Process
                            </h1>
                            <img src="<?= get_template_directory_uri() . '/assets/images/lng/base-eng.webp' ?>"
                                class="lng-maps-eng" alt="Workplace" usemap="#lng-workmap" width="1488" height="1086">

                            <map name="lng-workmap">
                                <area class="lng-area-eng" data-img="7" shape="rect" coords="116,455,473,839"
                                    alt="Computer">
                                <area class="lng-area-eng" data-img="8" shape="rect" coords="144,108,562,533"
                                    alt="Computer">
                                <area class="lng-area-eng" data-img="9" shape="rect" coords="540,33,1252,568"
                                    alt="Computer">
                                <area class="lng-area-eng" data-img="10" shape="rect" coords="973,498,1343,815"
                                    alt="Computer">
                                <area class="lng-area-eng" data-img="11" shape="rect" coords="568,474,815,750"
                                    alt="Computer">
                                <area class="lng-area-eng" data-img="12" shape="rect" coords="432,786,712,938"
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
                            <span class="green">Clean Energy Product</span>
                            <h1 class="my-4">
                                Our Product
                            </h1>
                            <div class="navigation-pills">
                                <div class="item" data-att="cng">CNG</div>
                                <div class="item" data-att="bio">Biomass</div>
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
                                We strive to build a sustainable future by doing the right thing namely the use of clean
                                energy as fuel that is environmentally friendly. Clean Energy Provides Reliability.
                                <br>
                                <br>
                                Currently Reethau's largest markets are in West Java, Central Java and East Java.
                                <br>
                                <br>
                            <h4>
                                <b>Clean Energy Provides Reliability.</b>
                            </h4>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="product-content" id="cng-content">
                    <div class="row w-100 mb-5 mobile-padding-1">
                        <div class="col-12">
                            <span class="green">Clean Energy Product</span>
                            <h1 class="my-4 dynamic-title active" id="cng-title">
                                CNG
                            </h1>
                            <h1 class="my-4 dynamic-title" id="mother-title">
                                Filling Station<br>
                                (Mother Station)
                            </h1>
                            <h1 class="my-4 dynamic-title" id="daughter-title">
                                Reduction Station
                                <br>
                                (Daughter Station)
                            </h1>


                            <div class="navigation-pills">
                                <div class="item active" data-att="cng">CNG</div>
                                <div class="item" data-att="bio">Biomass</div>
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
                                    CNG or Compressed Natural Gas is natural
                                    gas which is processed with a Gas Dryer to
                                    remove the water content, then compressed
                                    by a Gas Compressor into a high pressure
                                    cylinder. This aims to maximize the calorific
                                    value of natural gas and so that it can be
                                    shipped in large volumes.
                                    <br><br>
                                    CNG is an environmentally friendly fuel with
                                    competitive prices and easy to maintain so it can
                                    increase the durability of industrial engines.
                                    <br><br>
                                    The nature of CNG which is lighter
                                    than air is not flammable if there is a
                                    leak. CNG contributes to environmental
                                    sustainability because of low gas
                                    emissions and does not leave
                                    combustion dust.
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                    $rowsCng = [
                        'mother-row' => [
                            [
                                'image' => '/assets/images/mother-station/mobile/3-pipe.webp',
                                'title' => "Step 1",
                                'subtitle' => "Gas from the network pipe with 
                                low pressure is flowed & volume 
                                usage is calculated through 
                                metering to the gas scrubber",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/tube-1.webp',
                                'title' => "Step 2",
                                'subtitle' => "The scrubber processes 
                                the gas to separate it 
                                water/condensate, then 
                                flowed to the Gas Dryer.",
                                'type' => "horizontal"
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/tube-3.webp',
                                'title' => "Step 3",
                                'subtitle' => "The Gas Dryer processes the 
                                gas to remove the water content, 
                                then the gas is sent to the Gas 
                                Compressor.
                                ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/comp-1.webp',
                                'title' => "Step 4",
                                'subtitle' => "The Gas Compressor then 
                                processes natural gas to high 
                                pressure and produces CNG.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/gas.webp',
                                'title' => "Step 5",
                                'subtitle' => "CNG from the Gas Compressor 
                                which is ready to be used is then 
                                flowed to the Dispenser when 
                                filling take place",
                                'type' => "horizontal"
                            ],


                        ],
                        'daughter-row' => [
                            [
                                'image' => '/assets/images/daughter-station/mobile/truck.webp',
                                'title' => "Step 1",
                                'subtitle' => "The CNG or GTM (Gas Transport 
                                Module) transport fleet carrying 
                                CNG arrives at the Daughter Station 
                                parking lot in the customer area.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/daughter-station/mobile/comp-2.webp',
                                'title' => "Step 2",
                                'subtitle' => "CNG flows from GTM to PRS (Pressure 
                                Reducing System) to reduce gas pressure 
                                according to customer needs. Then the gas 
                                from the PRS flows through the metering 
                                system (turbine meter and EVC). Gas usage can 
                                be monitored online using AMR (telemetry).
                                ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/daughter-station/mobile/comp-1.webp',
                                'title' => "Step 3",
                                'subtitle' => "New natural gas is supplied to 
                                customers’ industrial machines such 
                                as boilers, kilns, ovens and burners.",
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
                            <span class="green">Clean Energy Product</span>
                            <h1 class="my-4 dynamic-title active" id="bio-title">
                                Biomass
                            </h1>
                            <h1 class="my-4 dynamic-title" id="sawdust-title">
                                Processing of <br>
                                Biomass <br>
                                Wood Pellet
                            </h1>
                            <h1 class="my-4 dynamic-title" id="woodchip-title">
                                Processing of<br>
                                Biomass<br>
                                Woodchip
                            </h1>

                            <h1 class="my-4 dynamic-title" id="distribution-title">
                                Biomass <br>
                                Distribution Process
                            </h1>

                            <div class="navigation-pills">
                                <div class="item" data-att="cng">CNG</div>
                                <div class="item active" data-att="bio">Biomass</div>
                                <div class="item" data-att="lng">LNG</div>
                            </div>
                            <div class="navigation-text flex-column">
                                <div class="item" data-att="sawdust">Woodpallet Processing</div>
                                <div class="item" data-att="woodchip">Woodchip Processing</div>
                                <div class="item" data-att="distribution">Biomass Distribution</div>
                                <div class="item" data-att="pabrik">Biomass plant</div>
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
                                    Biomass is a renewable energy source that comes from organisms on Earth. Reethau
                                    processes biomass obtained from the wood pruning process, the sawmill industry and
                                    from plantation and forestry plants that have collaborated to meet customer demand.
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                    $rowsCng = [
                        'sawdust-row' => [
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-1.webp',
                                'title' => "Step 1",
                                'subtitle' => "The results of wood 
                                processing are 
                                obtained from trimming 
                                and sawmill. ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-2.webp',
                                'title' => "Step 2",
                                'subtitle' => "The results of wood processing 
                                go through the process of 
                                chipping and screening.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/tube-3.webp',
                                'title' => "Step 3",
                                'subtitle' => "The results of wood 
                                processing go through 
                                the drying process.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-4.webp',
                                'title' => "Step 4",
                                'subtitle' => "The results of wood processing 
                                go to the hammer mill machine 
                                to become powder.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/woodplate.webp',
                                'title' => "Step 5",
                                'subtitle' => "The output is in 
                                the form of 
                                wood pellets.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-6.webp',
                                'title' => "Step 6",
                                'subtitle' => "Wood pellets enter the 
                                palletizing machine.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-7.webp',
                                'title' => "Step 7",
                                'subtitle' => "Wood pellets are 
                                packed in sacks.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/truck-3.webp',
                                'title' => "Step 8",
                                'subtitle' => "Wood pellets are 
                                ready to be shipped.
                                ",
                                'type' => ""
                            ],
                        ],
                        'woodchip-row' => [
                            [
                                'image' => '/assets/images/woodchip/mobile/woodchip-1.webp',
                                'title' => "Step 1",
                                'subtitle' => "The results of wood 
                                processing are 
                                obtained from trimming 
                                and sawmill. ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-2.webp',
                                'title' => "Step 2",
                                'subtitle' => "The results of wood processing 
                                go through the process of 
                                chipping and screening.
                                ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/mother-station/mobile/3-pipe.webp',
                                'title' => "Step 3",
                                'subtitle' => "The results of wood processing 
                                go through the drying process.
                                ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-4.webp',
                                'title' => "Step 4",
                                'subtitle' => "The output is in the form 
                                of woodchips/small 
                                pieces of wood.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/woodplate.webp',
                                'title' => "Step 5",
                                'subtitle' => "Woodchips are 
                                packed in sacks.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/bio-7.webp',
                                'title' => "Step 6",
                                'subtitle' => "Woodchip dikemas di dalam karung.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/sawdust/mobile/truck-3.webp',
                                'title' => "Step 7",
                                'subtitle' => "Woodchips 
                                are ready to 
                                be shipped",
                                'type' => ""
                            ],
                        ],
                        'distribution-row' => [
                            [
                                'image' => '/assets/images/distribusi/mobile/distribution-1.webp',
                                'title' => "Step 1",
                                'subtitle' => "Shipping biomass using 
                                tracking.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/distribusi/mobile/distribution-2.webp',
                                'title' => "Step 2",
                                'subtitle' => "Arriving at the customer, 
                                the truck is weighed 
                                via a weighbridge.
                                ",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/distribusi/mobile/distribution-3.webp',
                                'title' => "Step 3",
                                'subtitle' => "Then the biomass goes to the 
                                customer’s warehouse.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/distribusi/mobile/distribution-4.webp',
                                'title' => "Step 4",
                                'subtitle' => "Biomass can be used 
                                as boiler fuel.",
                                'type' => ""
                            ],
                        ]
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
                                    Reethau has an advantage in supplying woodchips and wood pellets at the request of
                                    customers. The quality of woodchips and wood pellets at Reethau has quality
                                    standards that have been tested for their water content and calorific value. In
                                    addition, the presence of biomass plants in several regions in Indonesia makes the
                                    price offered by Reethau very competitive.
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
                            <span class="green">Clean Energy Product</span>
                            <h1 class="my-4 dynamic-title active" id="lng-title">
                                LNG
                            </h1>
                            <h1 class="my-4 dynamic-title " id="lng-1-title">
                                LNG
                            </h1>
                            <!-- <h1 class="my-4 dynamic-title" id="mother-title">
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
                            </h1> -->

                            <div class="navigation-pills">
                                <div class="item" data-att="cng">CNG</div>
                                <div class="item" data-att="bio">Biomass</div>
                                <div class="item active" data-att="lng">LNG</div>
                            </div>
                            <div class="navigation-text">
                                <div class="item active" data-att="lng-1">LNG Process</div>
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
                                    LNG or Liquefied Natural Gas is
                                    Methane gas containing more than
                                    90 percent methane (CH4) which
                                    is liquefied (Liquiefied) at pressure
                                    atmospheric with a temperature of
                                    ±163 degrees Celsius.
                                </p>

                                <br>
                                <p>
                                    With more than 10 years of experience in the field of energy
                                    distribution, Reethau can be trusted by customers in
                                    meeting their LNG needs. Currently Reethau is very
                                    expansive in the LNG world by investing from upstream to
                                    downstream, namely liquefaction plants, transportation,
                                    storage to regasification on the customer side.
                                </p>

                                <br>
                                <p>
                                    In terms of research and development, Reethau is already
                                    at a tested and detailed stage with the use of proven
                                    technology in the LNG field.
                                </p>
                                <br>
                                <h4>
                                    <b>Reethau</b> comes with<b>LNG</b> as a clean energy product
                                </h4>
                            </div>
                        </div>
                    </div>

                    <?php
                    $rowsCng = [
                        'lng-1-row' => [
                            [
                                'image' => '/assets/images/lng/mobile/lng-1.webp',
                                'title' => "Step 1",
                                'subtitle' => "Gas sources are taken 
                                from wells, oil refineries, 
                                and gas pipelines.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-2.webp',
                                'title' => "Step 2",
                                'subtitle' => "Gas enters the Pre Treatment facility before 
                                being treated.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-3.webp',
                                'title' => "Step 3",
                                'subtitle' => "Gas is processed by the Mini 
                                Liquefaction Plant (LNG Plant).",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-4.webp',
                                'title' => "Step 4",
                                'subtitle' => "LNG is delivered in ISO 
                                Tanks and LNG carriers.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-5.webp',
                                'title' => "Step 5",
                                'subtitle' => "LNG is channeled to LNG 
                                Storage & Regasification.",
                                'type' => ""
                            ],
                            [
                                'image' => '/assets/images/lng/mobile/lng-6.webp',
                                'title' => "Step 6",
                                'subtitle' => "LNG is ready for distribution 
                                and use by HORECA, Power 
                                Plants, Factories, etc.",
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