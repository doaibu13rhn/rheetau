<?php /* Template Name: Footer */ ?>

<footer class=" text-start text-md-center text-lg-start overflow-hidden" id="footer-anchor">
    <!-- Grid container -->
    <div class="container-fluid py-5">
        <!--footer section 1-->
        <div class="footer-section-1 d-flex justify-content-between align-items-center pt-3">
            <!-- <div class=" ">
                <a class="navbar-brand" href="#">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/logo-pink.webp" alt="Tukr-logo" class="logo" />
                </a>
            </div> -->
            <div class="">

            </div>
        </div>
        <!--footer section 1 end-->


        <!--footer section 2-->
        <div
            class=" footer-section-2 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center pt-0">
            <!-- section 2a -->
            <a class="navbar-brand" href="#">
                <img src="<?= get_template_directory_uri() ?>/assets/images/logo-pink.webp" alt="Tukr-logo" class="logo"
                    style="width:7vw" />
            </a>
            <!-- section 2a end -->

            <!-- section 2b -->
            <div class="mt-3 mt-md-0">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between justify-content-md-center align-items-start align-items-md-end footer-menu">

                    <a class="footer-link px-0 px-md-3 front-footer-page" aria-current="page"
                        href="<?php echo is_id() ? '/beranda' : '/en'; ?>">
                        <?php echo is_id() ? 'Beranda' : 'Home'; ?>
                    </a>

                    <a class="footer-link px-0 px-md-3" href="<?php echo is_id() ? '/tentang' : '/about'; ?>">
                        <?php echo is_id() ? 'Tentang Kami' : 'About Us'; ?>
                    </a>

                    <a class="footer-link px-0 px-md-3" href="<?php echo is_id() ? '/layanan' : '/service'; ?>">
                        <?php echo is_id() ? 'Layanan' : 'Services'; ?>
                    </a>

                    <a class="footer-link px-0 px-md-3"
                        href="<?php echo is_id() ? '/keberlanjutan' : '/sustainability'; ?>">
                        <?php echo is_id() ? 'Keberlanjutan' : 'Sustainability'; ?>
                    </a>

                    <a class="footer-link px-0 px-md-3" href="<?php echo is_id() ? '/lokasi' : '/location'; ?>">
                        <?php echo is_id() ? 'Lokasi' : 'Location'; ?>
                    </a>
                </div>
            </div>
            <!-- section 2b end  -->
            <!-- section 2c -->
            <div class="d-flex justify-content-start justify-content-md-end align-items-center mb-0 mt-md-0">

                <a class="navbar-brand" href="https://www.facebook.com/tukr.co.id
" target="_blank">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/icon-facebook.webp"
                        class="social-media px-1" />
                </a>
                <a class="navbar-brand" href="https://www.linkedin.com/company/tukrcoid
" target="_blank">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/icon-linkedin.webp"
                        class="social-media px-1" />
                </a>

                <a class="navbar-brand" href="https://www.instagram.com/tukr.co.id/ " target="_blank">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/icon-instagram.webp"
                        class="social-media px-1" />
                </a>
            </div>
            <!-- section 2c end  -->
        </div>
    </div>
    <!-- Grid container -->
</footer>

<script defer>
const colorNav = document.getElementById('colorNav')
const navbar = document.getElementById('navbar')
const logoWhite = document.getElementById('logo-white')
const logoPink = document.getElementById('logo-pink')
const whiteSection = document.getElementById('pink-header')
const whiteSectionStopper = document.getElementById('')
const test = document.getElementById('test')
const test2 = document.getElementById('test2')
const map = document.getElementById('map')


function blackNav() {
    if (window.location.href.includes("about") ||
        window.location.href.includes("contact") ||
        window.location.href.includes("beranda") ||
        window.location.pathname == '' ||
        window.location.href.includes("tentang") ||
        window.location.href.includes("en") ||
        window.location.href.includes("kontak")
    ) {

        navbar.classList.add('custom-nav')
        logoPink.classList.remove('d-none')
        burger.classList.remove('text-white')
        burger.classList.add('text-black')

        logoPink.classList.add('d-block')
    } else {
        navbar.classList.remove('custom-nav')
        logoWhite.classList.remove('d-none')
        logoWhite.classList.add('d-block')
    }
}
</script>

<script defer>
const burger = document.getElementById('burger')

window.onscroll = () => {
    if (window.scrollY > 50) {

        navbar.classList.add('bg-white');
        logoPink.classList.remove('d-none')
        navbar.classList.add('custom-nav')
        logoWhite.classList.add('d-none')
        burger.classList.remove('text-white')
        burger.classList.add('text-black')

        logoPink.classList.add('d-block')
    } else if (window.location.href.includes("beranda") ||
        window.location.pathname == '/' ||
        window.location.href.includes("about") ||
        window.location.href.includes("contact") ||
        window.location.href.includes("tentang") ||
        window.location.href.includes("en") ||
        window.location.href.includes("kontak")) {
        navbar.classList.add('custom-nav')
        logoPink.classList.remove('d-none')
        burger.classList.remove('text-white')
        burger.classList.add('text-black')

        logoPink.classList.add('d-block')
    } else {
        navbar.classList.remove('bg-white');
        logoPink.classList.add('d-none')
        logoPink.classList.remove('d-block')
        logoWhite.classList.add('d-block')
        logoWhite.classList.remove('d-none')
        navbar.classList.remove('custom-nav')
        burger.classList.remove('text-black')
        burger.classList.add('text-white')
    }
};
</script>
<script defer>
(function() {
    let current = location.pathname.split('/')[1];
    const frontPage = document.querySelector('.front-page')
    const customBtn = document.querySelector('.custom-btn')
    const elseBtn = document.querySelector('.else-btn')
    if (current == '') {
        frontPage.classList.add('is-active')
    } else {
        frontPage.classList.remove('is-active')
    }
    if (current === 'contact' || current === 'kontak') {
        customBtn.classList.add('d-block')
        elseBtn.classList.add('d-none')
    } else {
        customBtn.classList.add('d-none')
        elseBtn.classList.add('d-block')
    }


    if (current === "") return
    let menuItems = document.querySelectorAll('.nav-link');
    for (let i = 0, len = menuItems.length; i < len; i++) {

        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].classList.add("is-active");
        }
    }


})();
</script>

<script defer>
(function() {
    let current = location.pathname.split('/')[2];
    if (current === "") return;
    let menuItems = document.querySelectorAll('.nav-link');

    for (let i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].classList.add("is-active");
        }
    }
})();
</script>

<script defer>
(function() {
    let current = location.pathname.split('/')[1];
    const frontPage = document.querySelector('.front-footer-page')

    if (current == '') {
        frontPage.classList.add('is-active')
    } else {
        frontPage.classList.remove('is-active')

    }

    if (current === "") return;
    let menuItems = document.querySelectorAll('.footer-link');
    for (let i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].classList.add("is-active");
        }
    }
})();
</script>

<script defer>
(function() {
    let current = location.pathname.split('/')[2];

    if (current === "") return;
    let menuItems = document.querySelectorAll('.footer-link');
    for (let i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].classList.add("is-active");
        }
    }

})();
</script>

<script defer>
(function() {
    let current = location.pathname.split('/')[2];

    if (current === "") return;
    let menuItems = document.querySelectorAll('.offcanvas-link');

    for (let i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].classList.add("is-active");
        }
    }
})();
</script>

<script defer>
(function() {
    let current = location.pathname.split('/')[1];
    const frontPage = document.querySelector('.front-offcanvas-page')
    if (current == '') {
        frontPage.classList.add('is-active')
    } else {
        frontPage.classList.remove('is-active')

    }

    if (current === "") return;
    let menuItems = document.querySelectorAll('.offcanvas-link');

    for (let i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].classList.add("is-active");
        }
    }
})();
</script>



<script defer>
const langId = document.querySelector('.lang-id')
const langEn = document.querySelector('.lang-en')

let routesId = ['beranda', 'tentang', 'layanan', 'kontak', 'keberlanjutan', 'lokasi']
let routesEn = ['en', 'about', 'services', 'contact', 'sustainibility', 'location']

let currLang = location.pathname.split("/")

langEn.classList.add('is-active')
for (let i = 0; i <= routesId.length; i++) {
    if (currLang[1] == 'en') {
        langId.classList.remove('is-active')
    } else if (routesId[i].includes(currLang[1])) {
        langId.classList.add('is-active')
        langEn.classList.remove('is-active')
    }
}
</script>


<script>
const offLangEn = document.querySelector('.offcanvas-lang-en')
const offLangId = document.querySelector('.offcanvas-lang-id')
offLangEn.classList.add('is-active')
for (let i = 0; i <= routesId.length; i++) {
    if (currLang[1] == 'en') {
        langId.classList.remove('is-active')
        langEn.classlist.add('is-active')

    } else if (routesId[i].includes(currLang[1])) {
        offLangId.classList.add('is-active')
        offLangEn.classList.remove('is-active')

    }



}
</script>

<script>
AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>



<script defer>
$(document).ready(function() {
    let url = window.location.toString();
    let arrUrl = url.split("/");

    let cookie = document.cookie;

    if (document.cookie.includes("pll_language=en")) {
        document.cookie = "pll_language=id; path=/";
    }

    let routesId = ['beranda', 'tentang', 'layanan', 'kontak', 'keberlanjutan', 'lokasi'];
    let routesEn = ['en', 'about', 'service', 'contact', 'sustainability', 'location'];

    var myOffcanvas = document.getElementById('offcanvasExample');
    var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas);

    if (cookie.includes("pll_language=id")) {
        $(".active-lang-id").show();
        $(".active-lang-en").hide();
    } else {
        $(".active-lang-en").show();
        $(".active-lang-id").hide();
    }

    $(".lang-id").on("click", function(e) {
        e.preventDefault();
        for (let i = 0; i < routesEn.length; i++) {
            const e = routesEn[i];
            if (e == arrUrl[3]) {
                if (e == '') {
                    window.location = url + "/beranda/";
                } else {
                    window.location = url.replace(e, routesId[i]);
                }
                break;
            }
        }
        document.cookie = "pll_language=id; path=/";
    });

    $(".lang-en").on("click", function(e) {
        e.preventDefault();
        for (let i = 0; i < routesId.length; i++) {
            const e = routesId[i];
            if (e == arrUrl[3]) {
                window.location = url.replace(e, routesEn[i]);
                break;
            }
        }
        document.cookie = "pll_language=en; path=/";
    });

});
</script>

<script>
// Function to check if the user has visited the site before
function hasVisitedSiteBefore() {
    return localStorage.getItem("visited") === "true";
}

// Function to set a flag in local storage indicating the user has visited the site
function setVisitedFlag() {
    localStorage.setItem("visited", "true");
}

// Check if the user has visited the site before
if (!hasVisitedSiteBefore()) {
    // If it's the first visit, set the visited flag and redirect to the "Beranda" page
    setVisitedFlag();
    window.location.pathname = "/beranda/";
}
</script>

<script defer>
const pointer = document.querySelectorAll(".point")
const place = document.querySelectorAll(".place")

const arrPlaces = [{
        key: ['aceh', 'sumatera'],
        island: 'Banda Aceh, Aceh',
        address: ['Jl. Soekarno-Hatta, Gampoeng Lambaro, Ingin Jaya', 'Aceh Besar, Aceh 23371',
            'Email : salesach@medanbio.com'
        ]

    },

    {
        key: ['medan', 'sumatera'],

        island: 'Medan, Sumatera Utara',
        address: ['Komplek Pergudangan Sky Dex, Blok B-02',
            'Jl. SM Raja Km. 11.5, Tanjung Morawa, Deli Serdang',
            'Sumatera Utara 20362',
            'Email : salesmdn@medanbio.com'
        ]
    },
    {
        key: ['padang', 'sumatera'],

        island: 'Padang, Sumatera Barat',
        address: ['Komplek Bunga Mas, Blok A No. 5, Jl. Adinegoro',
            'Batang Kabung Ganting, Koto Tangah, Padang',
            'Sumatera Barat 25172',
            'Email : salespdg@medanbio.com'
        ]
    },
    {
        key: ['pekanbaru', 'sumatera'],

        island: 'Pekanbaru, Riau',
        address: ['Komplek Pergudangan Golden City 3-In-1 No. B10',
            'Jl. Air Hitam, Binawidya, Binawidya, Pekanbaru, Riau 28295',
            'Email : salespkb@medanbio.com'
        ]
    },
    {
        key: ['palembang', 'sumatera'],

        island: 'Palembang, Sumatera Selatan',
        address: ['Jl. Tanjung Siapi-Api Km. 6.38, Gasing',
            'Talang Kelapa, Banyuasin, Sumatera Selatan 30961',
            'Email : salesplb@medanbio.com'
        ]
    },
    {
        key: ['lampung', 'sumatera'],
        island: 'Bandar Lampung, Lampung',
        address: ['Jl. Yos Sudarso No. 333, Blok G No. 9, Garuntang',
            'Bumi Waras, Bandar Lampung, Lampung 35227',
            'Email : saleslmp@medanbio.com'
        ]
    },
    {
        key: ['palu', 'celebes'],

        island: 'Palu, Sulawesi Tengah',
        address: ['Jl. Kerajalembah, Ruko Blok A2, Kalukubula',
            'Sigi Biromaru, Sigi, Sulawesi Tengah 94367',
            'Email : salespal@medanbio.com'
        ]
    },
    {
        key: ['manado', 'celebes'],

        island: 'Manado, Sulawesi Utara',
        address: ['Jl. Sam Ratulangi No. 17, Lingkungan 5',
            'Titiwungen Selatan, Sario, Manado, Sulawesi Utara 95113',
            'Email : salesmdo@medanbio.com'
        ]
    },

    {
        key: ['makasar', 'celebes'],

        island: 'Makassar, Sulawesi Selatan',
        address: ['Pergudangan Karunia Sulawesi, Blok G No. 17',
            'Jl. Tol Lama, Parang Loe, Tamalanrea, Makassar',
            'Sulawesi Selatan 90245',
            'Email : salesmks@medanbio.com'
        ]
    },

    {
        key: ['jakarta', 'java'],

        island: 'DKI Jakarta (HQ)',
        address: ['SCBD, Jl. Jend. Sudirman Kav. 52-53',
            'Senayan, Kebayoran Baru, Jakarta Selatan, DKI Jakarta 12190',
            'Email : info@tukr.co.id'
        ]
    },
    {
        key: ['bandung', 'java'],

        island: 'Bandung, Jawa Barat',
        address: ['Jl. Suryalaya 3 No. 49, Cijagra',
            'Lengkong, Bandung, Jawa Barat 40265',
            'Email : salesbdg@medanbio.com'
        ]
    },

    {
        key: ['surabaya', 'java'],

        island: 'Surabaya, Jawa Timur,',
        address: ['Pergudangan Meiko Abadi VI, Blok A-02',
            'Jl. Sumput, Dusun Karanglo, Sumput, Driyorejo',
            'Gresik, Jawa Timur 61177',
            'Email : salessby@medanbio.com'
        ]
    },
    {
        key: ['yogyakarta', 'java'],

        island: 'Lokasi Mendatang',
        address: ['Yogyakarta']
    },
    {
        key: ['manokwari', 'papua'],

        island: 'Lokasi Mendatang',
        address: ['Manokwari']
    },
    {
        key: ['malang', 'java'],
        island: 'Malang, Jawa Timur',
        address: ['Jl. Sajid Wonokasian No. 9, Pagedangan',
            'Turen, Malang, Jawa Timur 65175',
            'Email : salesmlg@medanbio.com'
        ]
    },
    {
        key: ['bali', 'java'],
        island: 'Bali, Jawa',
        address: ['']
    },
    {
        key: ['banjarmasin', 'borneo'],

        island: 'Banjarmasin, Kalimantan Selatan',
        address: ['Bumi Basirih Modern Warehouse, Blok D-12',
            'Jl. Gubernur Soebardjo Km. 3.8, RT 026/RW 002',
            'Handil Baru, Aluh-Aluh, Banjar, Kalimantan Selatan 70241',
            'Email : salesbjm@medanbio.com'
        ]
    },
    {
        key: ['balikpapan', 'borneo'],

        island: 'Balikpapan, Kalimantan Timur',
        address: ['Jl. Mulawarman Km. 16.5, Manggar',
            'Balikpapan Timur, Balikpapan, Kalimantan Timur 76125',
            'Email : salesbpn@medanbio.com'
        ]
    },
    {
        key: ['samarinda', 'borneo'],

        island: 'Lokasi Mendatang',
        address: ['Samarinda']
    },
    {
        key: ['pontianak', 'borneo'],

        island: 'Lokasi Mendatang',
        address: ['Pontianak']
    },
]

const arrPlacesEn = [{
        key: ['aceh', 'sumatera'],
        island: 'Banda Aceh, Aceh',
        address: ['Jl. Soekarno-Hatta, Gampoeng Lambaro, Ingin Jaya', 'Aceh Besar, Aceh 23371',
            'Email : salesach@medanbio.com'
        ]
    },

    {
        key: ['medan', 'sumatera'],

        island: 'Medan, North Sumatera',
        address: ['Komplek Pergudangan Sky Dex, Blok B-02',
            'Jl. SM Raja Km. 11.5, Tanjung Morawa, Deli Serdang',
            'Sumatera Utara 20362',
            'Email : salesmdn@medanbio.com'
        ]
    },
    {
        key: ['padang', 'sumatera'],

        island: 'Padang, West Sumatera',
        address: ['Komplek Bunga Mas, Blok A No. 5, Jl. Adinegoro',
            'Batang Kabung Ganting, Koto Tangah, Padang',
            'Sumatera Barat 25172',
            'Email : salespdg@medanbio.com'
        ]
    },

    {
        key: ['pekanbaru', 'sumatera'],

        island: 'Pekanbaru, Riau',
        address: ['Komplek Pergudangan Golden City 3-In-1 No. B10',
            'Jl. Air Hitam, Binawidya, Binawidya, Pekanbaru, Riau 28295',
            'Email : salespkb@medanbio.com'
        ]
    },
    {
        key: ['palembang', 'sumatera'],

        island: 'Palembang, South Sumatera',
        address: ['Jl. Tanjung Siapi-Api Km. 6.38, Gasing',
            'Talang Kelapa, Banyuasin, Sumatera Selatan 30961',
            'Email : salesplb@medanbio.com'
        ]
    },
    {
        key: ['lampung', 'sumatera'],
        island: 'Bandar Lampung, Lampung',
        address: ['Jl. Yos Sudarso No. 333, Blok G No. 9, Garuntang',
            'Bumi Waras, Bandar Lampung, Lampung 35227',
            'Email : saleslmp@medanbio.com'
        ]
    },
    {
        key: ['palu', 'celebes'],

        island: 'Palu, Central Sulawesi',
        address: ['Jl. Kerajalembah, Ruko Blok A2, Kalukubula',
            'Sigi Biromaru, Sigi, Sulawesi Tengah 94367',
            'Email : salespal@medanbio.com'
        ]
    },
    {
        key: ['manado', 'celebes'],

        island: 'Manado, North Sulawesi',
        address: ['Jl. Sam Ratulangi No. 17, Lingkungan 5',
            'Titiwungen Selatan, Sario, Manado, Sulawesi Utara 95113',
            'Email : salesmdo@medanbio.com'
        ]
    },

    {
        key: ['makasar', 'celebes'],

        island: 'Makassar, South Sulawesi',
        address: ['Pergudangan Karunia Sulawesi, Blok G No. 17',
            'Jl. Tol Lama, Parang Loe, Tamalanrea, Makassar',
            'Sulawesi Selatan 90245',
            'Email : salesmks@medanbio.com'
        ]
    },

    {
        key: ['jakarta', 'java'],

        island: 'DKI Jakarta (HQ)',
        address: ['SCBD, Jl. Jend. Sudirman Kav. 52-53',
            'Senayan, Kebayoran Baru, Jakarta Selatan, DKI Jakarta 12190',
            'Email : info@tukr.co.id'
        ]
    },
    {
        key: ['bandung', 'java'],

        island: 'Bandung, West Java',
        address: ['Jl. Suryalaya 3 No. 49, Cijagra',
            'Lengkong, Bandung, Jawa Barat 40265',
            'Email : salesbdg@medanbio.com'
        ]
    },

    {
        key: ['surabaya', 'java'],

        island: 'Surabaya, East Java',
        address: ['Pergudangan Meiko Abadi VI, Blok A-02',
            'Jl. Sumput, Dusun Karanglo, Sumput, Driyorejo',
            'Gresik, Jawa Timur 61177',
            'Email : salessby@medanbio.com'
        ]
    },
    {
        key: ['yogyakarta', 'java'],

        island: 'Future Location',
        address: ['Yogyakarta']
    },
    {
        key: ['manokwari', 'papua'],

        island: 'Future Location',
        address: ['Manokwari']
    },
    {
        key: ['malang', 'java'],
        island: 'Malang, East Java',
        address: ['Jl. Sajid Wonokasian No. 9, Pagedangan',
            'Turen, Malang, Jawa Timur 65175',
            'Email : salesmlg@medanbio.com'
        ]
    },
    {
        key: ['bali', 'java'],
        island: 'Bali, East Java',
        address: ['']
    },
    {
        key: ['banjarmasin', 'borneo'],

        island: 'Banjarmasin, South Kalimantan',
        address: ['Bumi Basirih Modern Warehouse, Blok D-12',
            'Jl. Gubernur Soebardjo Km. 3.8, RT 026/RW 002',
            'Handil Baru, Aluh-Aluh, Banjar',
            'Kalimantan Selatan 70241'
        ]
    },
    {
        key: ['balikpapan', 'borneo'],

        island: 'Balikpapan, East Kalimantan',
        address: ['Jl. Mulawarman Km. 16.5, Manggar',
            'Balikpapan Timur, Balikpapan, Kalimantan Timur 76125',
            'Email : salesbpn@medanbio.com'
        ]
    },
    {
        key: ['samarinda', 'borneo'],

        island: 'Future Location',
        address: ['Samarinda']
    },
    {
        key: ['pontianak', 'borneo'],

        island: 'Future Location',
        address: ['Pontianak']
    },
]
// console.log(location.pathname.split('/')[1])
// ========================================= ID START =========================================

if (location.pathname.split('/')[1] == 'lokasi') {

    for (let i = 0; i < pointer.length; i++) {
        pointer[i].addEventListener("mouseover", e => {

            const joinedAddresses = arrPlaces[i].address.join("\n")

            if (document.querySelector('path.point-active') !== null) {
                document.querySelector('path.point-active').classList.remove('point-active');
            }


            if (pointer[i].id == arrPlaces[i].key[0]) {
                document.getElementById('island').innerHTML = arrPlaces[i].island
                document.getElementById('address').innerText = joinedAddresses

                e.target.classList.toggle("point-active");

            } else {
                console.log('not found')
            }
        })
    }

    const leftCol = document.querySelector('#left-col')
    let prevBtn = null

    leftCol.addEventListener("click", e => {
        const isClick = e.target.nodeName = 'H6'

        if (!isClick) {
            return;
        }

        e.target.classList.add('btn-active');

        if (prevBtn !== null) {
            prevBtn.classList.remove('btn-active')
        }

        prevBtn = e.target

        const filtered = arrPlaces.filter(j => j.key[1] == e.target.id)
        const rightCol = document.getElementById('right-col')
        rightCol.innerHTML = ''; // Clear previous content

        for (let i = 0; i < filtered.length; i++) {

            const joinedAddresses = filtered[i].address.map(address => address + ',<br>').join('');


            let island = document.createElement('h6');
            let address = document.createElement('p')

            island.className = filtered[i].key[1];
            address.className = filtered[i].key[1];


            island.innerHTML = filtered[i].island
            address.innerHTML = joinedAddresses
            address.style.fontSize = "2vw"


            rightCol.appendChild(island)
            rightCol.appendChild(address)
        }
    })
}
// ========================================= ID END =========================================
// ========================================= EN START =========================================
if (location.pathname.split('/')[1] == 'location') {
    for (let i = 0; i < pointer.length; i++) {
        // console.log(arrPlacesEn[i].key[0])
        // console.log('pointer ' + pointer[i].id)
        pointer[i].addEventListener("mouseover", e => {

            const joinedAddresses = arrPlacesEn[i].address.join("\n")




            if (document.querySelector('path.point-active') !== null) {
                document.querySelector('path.point-active').classList.remove('point-active');
            }
            if (pointer[i].id == arrPlacesEn[i].key[0]) {
                document.getElementById('island').innerHTML = arrPlacesEn[i].island
                document.getElementById('address').innerText = joinedAddresses

                e.target.classList.toggle("point-active");

            } else {
                console.log('not found')
            }
        })
    }

    const leftCol = document.querySelector('#left-col')
    let prevBtn = null

    leftCol.addEventListener("click", e => {
        const isClick = e.target.nodeName = 'H6'

        if (!isClick) {
            return;
        }

        e.target.classList.add('btn-active');

        if (prevBtn !== null) {
            prevBtn.classList.remove('btn-active')
        }

        prevBtn = e.target

        const filtered = arrPlacesEn.filter(j => j.key[1] == e.target.id)
        const rightCol = document.getElementById('right-col')
        rightCol.innerHTML = ''; // Clear previous content

        for (let i = 0; i < filtered.length; i++) {
            const joinedAddresses = filtered[i].address.map(address => address + ',<br>').join('');



            let island = document.createElement('h6');
            let address = document.createElement('p');

            island.className = filtered[i].key[1];
            address.className = filtered[i].key[1];

            island.innerHTML = filtered[i].island
            address.innerHTML = joinedAddresses
            address.style.fontSize = "2vw";

            rightCol.appendChild(island)
            rightCol.appendChild(address)
        }
    })
}
// ========================================= EN END =========================================
</script>



<script>
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

$('a[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'bottom',
    html: true
});
</script>
<script>
var rotateMessage = document.getElementById('rotateMessage');

function checkRotation() {
    if (window.innerWidth >= 481 && window.innerWidth <= 920) {
        rotateMessage.classList.add('d-block')
        rotateMessage.classList.remove('d-none')
        document.body.classList.add('no-scroll');
    } else {
        rotateMessage.classList.add('d-none')
        rotateMessage.classList.remove('d-block')

        document.body.classList.remove('no-scroll');
    }
}

window.addEventListener('load', checkRotation);
window.addEventListener('resize', checkRotation);
</script>

<script>
const logos = document.querySelectorAll('.hoverable-logo');
const logoCards = document.querySelectorAll('.logo-card');

logos.forEach((logo, index) => {
    let logoCard = logoCards[index];

    logo.addEventListener('mouseenter', (e) => {
        logoCard.classList.replace('d-none', 'd-block');
        e.target.classList.replace('opacity-25', 'opacity-100');
    });

    logo.addEventListener('mouseleave', (e) => {
        logoCard.classList.replace('d-block', 'd-none');
        e.target.classList.replace('opacity-100', 'opacity-25');
    });

    logoCard.addEventListener('mouseenter', (e) => {
        logoCard.classList.replace('d-none', 'd-block');
        logo.classList.replace('opacity-25', 'opacity-100');
    });

    logoCard.addEventListener('mouseleave', (e) => {
        logoCard.classList.replace('d-block', 'd-none');
        logo.classList.replace('opacity-100', 'opacity-25');
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>


<?php
wp_footer()
?>
</body>

</html>