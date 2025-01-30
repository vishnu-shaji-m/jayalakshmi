@stack('css')
<!-- Allow additional CSS to be pushed from specific views -->

<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
<link rel="apple-touch-icon" sizes="192x192" href="{{ asset('frontend/images/android-chrome-192x192.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/android-chrome-180x180.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicon-16x16.png') }}">

<!-- <link rel="manifest" href="site.webmanifest"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com/" crossorigin>




<style>
.owl-carousel:not(.owl-loaded) {
    opacity: 0;
}

figure {
    margin: 0 !important;
}
</style>

<script>
// VIEWPORT HEIGHT
const appHeight = () => document.documentElement.style.setProperty('--app-height', `${window.innerHeight}px`)
window.addEventListener('resize', function() {
    appHeight();
});
document.addEventListener("DOMContentLoaded", function() {
    appHeight();
});

(function() {
    document.querySelectorAll('.no-js').forEach(function(element) {
        element.classList.remove('no-js');
    });
})();

// SITE LOADER
function hidePreloader() {
    const preloader = document.getElementById("preloader");
    const circle = document.querySelector(".circle");

    circle.style.transform = "scale(16)";
    preloader.style.opacity = "0";

    setTimeout(function() {
        preloader.style.display = "none";
    }, 5000);
}

if (document.readyState === 'loading') {
    document.addEventListener("DOMContentLoaded", hidePreloader);
} else {
    hidePreloader();
}
</script>

 

<!-- FONTS -->
<link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    as="style" onload="this.onload=null;this.rel='stylesheet'">

<noscript>
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</noscript>

<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>

<!-- LAZY LOAD -->
<script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js" defer
    onload="initializeLazyLoad()"></script>

<script>
function initializeLazyLoad() {
    var lazyLoadInstance = new LazyLoad({});
}
</script>

<!-- ANIMATE CSS -->

<script>
var link = document.createElement('link');
link.rel = 'stylesheet';
link.href = '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css';
document.head.appendChild(link);
</script>

<link id="AppStyle" rel="stylesheet" href="{{ asset('frontend/css/app.min.css') }}" media='all'>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/pages.min.css') }}">