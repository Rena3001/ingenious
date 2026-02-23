<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/knob.js')}}"></script>


<!--Revolution Slider-->
<script src="{{asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/js/main-slider-script.js')}}"></script>
<!--Revolution Slider-->
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/isotope.js') }}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/mixitup.js')}}"></script>
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/sticky_sidebar.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script>
    function changeLang(lang) {
        let current = window.location.pathname; // /az/about   or   /en/products/3
        let newUrl = '/' + lang + current.substring(3);

        window.location.href = newUrl;
    }
    $('.roadmap-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true, // 🔥 OXLARI AKTİV ETDİK
        dots: true,
        autoplay: false,
        autoplayTimeout: 4500,
        autoplayHoverPause: true,

        navText: [
            "<span class='roadmap-nav prev fa fa-angle-left'></span>",
            "<span class='roadmap-nav next fa fa-angle-right'></span>"
        ]
    });

    document.getElementById('langSwitcher').addEventListener('change', function() {
        window.location.href = this.value;
    });

//lang//
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('langToggle');
    const list = document.getElementById('langList');

    // 👉 ƏN VACİB SƏTR
    if (!toggle || !list) return;

    toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        list.classList.toggle('show');
    });

    document.addEventListener('click', function () {
        list.classList.remove('show');
    });
});



document.addEventListener("DOMContentLoaded", function() {

    const thumbs = document.querySelectorAll('.product-thumb');
    const mainImage = document.getElementById('mainImage');
    const mainLink = document.getElementById('mainImageLink');

    thumbs.forEach(function(thumb){
        thumb.addEventListener('click', function(){

            const newSrc = this.getAttribute('data-image');

            mainImage.src = newSrc;
            mainLink.href = newSrc;

        });
    });

});
</script>