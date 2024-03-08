<?php

$advanceSwitcherLang = false;
$idSlug = "";
$enSlug = "";
?>

<footer>
    <div class="container-fluid h-100 d-block py-3">
        <div class="row justify-content-between">
            <div class="col-md-auto col-12 d-flex flex-column justify-content-between">
                <img src="<?= get_template_directory_uri() . "/assets/images/logo-white.webp" ?>"
                    class="logo-brand logo-white" alt="brand-logo">
                <div class="d-flex justify-content-between align-items-end">
                    <div class="d-none-flex d-none">©2023 Reethau Clean Energy</div>
                    <!-- <div>Privacy & Policy</div> -->
                </div>
            </div>
            <div class="col-md-1 col-lg-3 mt-md-3"></div>
            <div class="col-md-2 col-lg-1 mt-md-3"></div>
            <div class="col-md-2 col-lg-2 col-12 mt-md-3 mt-3 d-md-flex justify-content-end">
                <div>
                    <h5 class="sub">Certificate</h5>
                    <img src="<?= get_template_directory_uri()."/assets/images/certificate.webp" ?>" alt="certificate"
                        class="certificate mt-2">
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 mt-5 mt-md-3">
                <h5 class="sub">Head Office</h5>
                <p>
                    Jl. Darmawangsa Raya No. 8 <br>
                    Kebayoran Baru - Jakarta Selatan 12160
                    <br>
                    <br>
                    +62 21 723 1238 / 720 7130 <br>
                    +62 811 9111 552 (marketing) <br>
                    marketing@reethau.com
                </p>

                <div class="d-flex d-md-none mt-5">©2023 Reethau Clean Energy</div>

            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>


<?= wp_footer() ?>


<script>
$(function() {

    const urlAsset = `${window.location.origin}/wp-content/themes/rheetai/assets/images/`


    $(".home-section-3 .navigation-item").click(function(e) {
        $(".home-section-3").find(".navigation-item").removeClass("active")

        $(".home-section-3").find(".content").removeClass("active")
        $(this).addClass("active")
        $(`.${$(this).data('atr')}`).addClass("active")
    })


    $(".products-section-1 .navigation-item").click(function(e) {
        $(".products-section-1").find(".navigation-item").removeClass("active")
        $(".products-section-1").find(".content").removeClass("active")
        $(".products-section-1").find(".sub-item").removeClass("active")
        $(this).addClass("active")
        $(`#${$(this).data('atr')}`).addClass("active")
    })

    $(".products-section-1 .sub-item").click(function(e) {
        $(".products-section-1").find(".sub-item").removeClass("active")
        $(".products-section-1").find(".content").removeClass("active")
        $(".products-section-1").find(".navigation-item").removeClass("active")
        $(this).addClass("active")
        $(`#${$(this).data('atr')}`).addClass("active")

        $(this).prevAll('.navigation-item:first').addClass("active")




        $('.mother-station-maps[usemap]').rwdImageMaps();
        $('.mother-station-maps-eng[usemap]').rwdImageMaps();
        $('.daughter-station-maps[usemap]').rwdImageMaps();
        $('.daughter-station-maps-eng[usemap]').rwdImageMaps();
        $('.sawdust-maps[usemap]').rwdImageMaps();
        $('.sawdust-maps-eng[usemap]').rwdImageMaps();
        $('.woodchip-maps[usemap]').rwdImageMaps();
        $('.woodchip-maps-eng[usemap]').rwdImageMaps();
        $('.distribusi-maps[usemap]').rwdImageMaps();
        $('.distribusi-maps-eng[usemap]').rwdImageMaps();
        $('.lng-maps[usemap]').rwdImageMaps();
        $('.lng-maps-eng[usemap]').rwdImageMaps();

    })



    $(".mother-station-area").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".mother-station-maps").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".mother-station-maps").attr("src", `${urlAsset}/mother-station/base.webp`)
        } else {
            $(".mother-station-maps").attr("src", `${urlAsset}/mother-station/${data}.webp`)
        }
    })

    $(".mother-station-area-eng").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".mother-station-maps-eng").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".mother-station-maps-eng").attr("src", `${urlAsset}/mother-station/mother-eng.webp`)
        } else {
            $(".mother-station-maps-eng").attr("src", `${urlAsset}/mother-station/${data}.webp`)
        }
    })

    $(".daughter-station-area").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".daughter-station-maps").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".daughter-station-maps").attr("src", `${urlAsset}/daughter-station/base.webp`)
        } else {
            $(".daughter-station-maps").attr("src", `${urlAsset}/daughter-station/${data}.webp`)
        }
    })

    $(".daughter-station-area-eng").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".daughter-station-maps-eng").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".daughter-station-maps-eng").attr("src",
                `${urlAsset}/daughter-station/daughter-eng.webp`)
        } else {
            $(".daughter-station-maps-eng").attr("src", `${urlAsset}/daughter-station/${data}.webp`)
        }
    })

    $(".sawdust-area").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".sawdust-maps").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".sawdust-maps").attr("src", `${urlAsset}/sawdust/base.webp`)
        } else {
            $(".sawdust-maps").attr("src", `${urlAsset}/sawdust/${data}.webp`)
        }
    })

    $(".sawdust-area-eng").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".sawdust-maps-eng").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".sawdust-maps-eng").attr("src", `${urlAsset}/sawdust/base-eng.webp`)
        } else {
            $(".sawdust-maps-eng").attr("src", `${urlAsset}/sawdust/${data}.webp`)
        }
    })

    $(".woodchip-area").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".woodchip-maps").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".woodchip-maps").attr("src", `${urlAsset}/woodchip/base.webp`)
        } else {
            $(".woodchip-maps").attr("src", `${urlAsset}/woodchip/${data}.webp`)
        }
    })

    $(".woodchip-area-eng").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".woodchip-maps-eng").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".woodchip-maps-eng").attr("src", `${urlAsset}/woodchip/base-eng.webp`)
        } else {
            $(".woodchip-maps-eng").attr("src", `${urlAsset}/woodchip/${data}.webp`)
        }
    })

    $(".distribusi-area").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".distribusi-maps").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".distribusi-maps").attr("src", `${urlAsset}/distribusi/base.webp`)
        } else {
            $(".distribusi-maps").attr("src", `${urlAsset}/distribusi/${data}.webp`)
        }
    })

    $(".distribusi-area-eng").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".distribusi-maps-eng").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".distribusi-maps-eng").attr("src", `${urlAsset}/distribusi/base-eng.webp`)
        } else {
            $(".distribusi-maps-eng").attr("src", `${urlAsset}/distribusi/${data}.webp`)
        }
    })

    $(".lng-area").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".lng-maps").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".lng-maps").attr("src", `${urlAsset}/lng/base.webp`)
        } else {
            $(".lng-maps").attr("src", `${urlAsset}/lng/${data}.webp`)
        }
    })

    $(".lng-area-eng").hover(function() {
        let data = $(this).attr("data-img")
        let mapUrl = $(".lng-maps-eng").attr("src")

        if (mapUrl.includes(`${data}.webp`)) {
            $(".lng-maps-eng").attr("src", `${urlAsset}/lng/base-eng.webp`)
        } else {
            $(".lng-maps-eng").attr("src", `${urlAsset}/lng/${data}.webp`)
        }
    })









    $('.mother-station-maps[usemap]').rwdImageMaps();
    $('.mother-station-maps-eng[usemap]').rwdImageMaps();
    $('.daughter-station-maps[usemap]').rwdImageMaps();
    $('.daughter-station-maps-eng[usemap]').rwdImageMaps();
    $('.sawdust-maps[usemap]').rwdImageMaps();
    $('.sawdust-maps-eng[usemap]').rwdImageMaps();
    $('.woodchip-maps[usemap]').rwdImageMaps();
    $('.woodchip-maps-eng[usemap]').rwdImageMaps();
    $('.distribusi-maps[usemap]').rwdImageMaps();
    $('.distribusi-maps-eng[usemap]').rwdImageMaps();

});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const elNav = document.querySelector("#navbar");
    const logoWhite = document.querySelector('.logo-white');
    const logoBlack = document.querySelector('.logo-black');

    const whiteNavSection = document.querySelectorAll('.white-nav');
    const blackNavSection = document.querySelectorAll('.black-nav');

    function handleNav() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;

        // assign value threshold for changing color when scrolling
        const scrollThreshold = 50;

        // set default color and choose scrollColor
        const defaultColor = isSpecialPage() ? '#11302d' :
            'transparent'; // choose default color
        const scrollColor = '#11302d'; // set scrollcolor

        // condition to set color on scroll
        elNav.style.backgroundColor = (scrollTop > scrollThreshold) ? scrollColor : defaultColor;

        blackNavSection.forEach(function(section) {
            const sectionTop = section.offsetTop;
            const sectionBottom = section.offsetTop + section.clientHeight;

            if (scrollTop >= sectionTop && scrollTop <= sectionBottom) {
                logoBlack.classList.add('d-block');
                logoBlack.classList.remove('d-none');
                logoWhite.classList.remove('d-block');
                logoWhite.classList.add('d-none');
                return false;
            }
        });

        whiteNavSection.forEach(function(section) {
            const sectionTop = section.offsetTop;
            const sectionBottom = section.offsetTop + section.clientHeight;

            if (scrollTop >= sectionTop && scrollTop <= sectionBottom) {
                logoWhite.classList.add('d-block');
                logoWhite.classList.remove('d-none');
                logoBlack.classList.remove('d-block');
                logoBlack.classList.add('d-none');
                return false;
            }
        });
    }

    function isSpecialPage() {
        // its for if you have special page
        return window.location.pathname.includes('/product') || window.location.pathname.includes('/contact') ||
            window.location.pathname.includes('/produk') || window.location.pathname.includes('/kontak');
    }

    // add eventlistener for handling this condition
    window.addEventListener('scroll', handleNav);

    // callback function
    handleNav();
});
</script>





<script>
const navLink = document.querySelectorAll('.nav-link')
const arrowActive = document.querySelectorAll('.bi-caret-up-fill')
let curr = window.location.pathname

for (let i = 0; i < navLink.length; i++) {
    if (arrowActive[i]) {

        arrowActive[i].classList.add('d-none')
    }
    if (navLink[i].getAttribute('href')) {

        let hrefValue = navLink[i].getAttribute('href').replace(/\//g, "");
        let currValue = curr.replace(/\//g, "");

        if (hrefValue === currValue) {
            //  navLink[i].style.fontWeight = 'bold';
            arrowActive[i].classList.remove('d-none')
        }
    }
}
</script>


<script defer>
$(document).ready(function() {
    let url = window.location.toString();
    let arrUrl = url.split("/")
    let lang = document.getElementsByClassName('lang-btn')
    let langEN = document.getElementById('lang-en')
    let langID = document.getElementById('lang-id')

    let cookie = document.cookie;

    if (document.cookie.includes("pll_language=en")) {
        document.cookie = "pll_language=id;";

    }
    let routesEn = ['en', 'about', 'career', 'contact', 'product']
    let routesId = ['', 'tentang', 'karir', 'kontak', 'produk']

    for (let i = 0; i <= routesId.length; i++) {

        if (routesId[i] == arrUrl[3] || arrUrl[3] != "en") {
            $(".lang-id").addClass("active")
            $(".lang-en").removeClass("active")
            langID?.classList.add('fw-bold')
            langEN?.classList.remove('fw-bold')
            break
        } else {
            $(".lang-en").addClass("active")
            $(".lang-id").removeClass("active")
            langEN?.classList.add('fw-bold')
            langID?.classList.remove('fw-bold')
            break
        }
    }

    $(".lang-id").on("click", function(e) {
        if ("<?= $advanceSwitcherLang ?>" == "true") {
            window.location = url.replace(window.location, "<?= $idSlug ?>")
            // 			console.log( "<?= $idSlug ?>", "<?= $enSlug ?>")
            return
        }

        for (let i = 0; i < routesEn.length; i++) {
            const e = routesEn[i];
            // console.log(arrUrl, e, routesId[i])

            if (e == arrUrl[4]) {

                window.location = url.replace(`en/${e}`, `${routesId[i]}`);
                break
            }
            if (arrUrl[4] == "") {
                window.location = url.replace(`en`, ``);
            }
        }
        document.cookie = "pll_language=id; path=/";
    })


    $(".lang-en").on("click", function(e) {
        if ("<?= $advanceSwitcherLang ?>" == "true") {
            window.location = url.replace(window.location, "<?= $enSlug ?>")
            // 			console.log( "<?= $enSlug ?>", "<?= $enSlug ?>")
            return
        }

        for (let i = 0; i < routesId.length; i++) {
            const e = routesId[i];
            // console.log(arrUrl, e, routesEn[i])

            if (arrUrl[3] == "") {
                window.location = url.replace(window.location, `${window.location}/en`);
                break
            }

            if (e == arrUrl[3]) {
                window.location = url.replace(`${e}`, `en/${routesEn[i]}`);
                break
            }

        }
        document.cookie = "pll_language=en; path=/";
    })

})
</script>

<script src="<?= get_template_directory_uri() ?>/node_modules/lightbox2/src/js/lightbox.js"></script>


<script>
lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    "alwaysShowNavOnTouchDevices": true
})
</script>
</body>

</html>