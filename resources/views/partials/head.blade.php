<!-- META ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords"
    content="ucc, union christian college, official website ucc, website union christian college, ucc meghalaya">

<meta name="author" content="Union Christian College, Umiam">
<meta name="robots" content="index, follow">

<!-- DESCRIPTION -->
<meta name="description"
    content="Beneath the cloud-capped hills, amidst luxuriant woodlands and surrounded by the shimmering waters of the Umiam Lake, lies an idyllic conclave of houses and buildings that make up one of the unique educational institutions in the North Eastern region - the Union Christian College, popularly known by its acronym, UCC.">

<!-- OPEN GRAPH -->
<meta property="og:title" content="Official Website | Union Christian College, Meghalaya">

<meta property="og:description"
    content="Beneath the cloud-capped hills, amidst luxuriant woodlands and surrounded by the shimmering waters of the Umiam Lake, lies an idyllic conclave of houses and buildings that make up one of the unique educational institutions in the North Eastern region - the Union Christian College, popularly known by its acronym, UCC.">

<meta property="og:type" content="website">

<meta property="og:url" content="{{ url()->current() }}">

<meta property="og:image" content="{{ asset('ms-icon-310x310.png') }}">

<meta name="twitter:image" content="{{ asset('ms-icon-310x310.png') }}">

<meta name="twitter:url" content="https://twitter.com/MeghalayaUnion">

<meta name="format-detection" content="telephone=no">

<!-- FAVICON ============================================= -->
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

<!-- PAGE TITLE ============================================= -->
<title>@yield('title', 'Official Website | Union Christian College, Meghalaya')</title>

<!-- CORE CSS ============================================= -->
<link href="{{ asset('assets/css/assets.css') }}" rel="stylesheet">

<!-- TYPOGRAPHY -->
<link href="{{ asset('assets/css/typography.css') }}" rel="stylesheet">

<!-- SHORTCODES -->
<link href="{{ asset('assets/css/shortcodes/shortcodes.css') }}" rel="stylesheet">

<!-- MAIN STYLESHEET -->
<link rel="stylesheet"
    href="{{ asset('assets/css/style.css') }}?v={{ filemtime(public_path('assets/css/style.css')) }}">

<!-- THEME COLOR -->
<link href="{{ asset('assets/css/color/color-1.css') }}" class="skin" rel="stylesheet">

<!-- REVOLUTION SLIDER ============================================= -->
<link href="{{ asset('assets/vendors/revolution/css/layers.css') }}" rel="stylesheet">

<link href="{{ asset('assets/vendors/revolution/css/settings.css') }}" rel="stylesheet">

<link href="{{ asset('assets/vendors/revolution/css/navigation.css') }}" rel="stylesheet">

<!-- CALENDAR ============================================= -->
<link href="{{ asset('assets/css/ac_cal.css') }}" rel="stylesheet">

<link href="{{ asset('assets/dist/datepicker.css') }}" rel="stylesheet">

<link href="{{ asset('assets/accalender/css/responsive-calendar.css') }}" rel="stylesheet">

<!-- BASE URL ============================================= -->
<script>
    var baseUrl = "{{ url('/') }}/";
</script>

<!-- CUSTOM STYLES ============================================= -->
<style>
    /* Blinking text */
    .blink_me {
        animation: blinker 1s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }

    /* Video container */
    .video-container {
        width: 600px;
        max-width: 100%;
        margin: auto;
        border: 1px solid #ccc;
        position: relative;
        overflow: hidden;
    }

    .video-container video {
        width: 100%;
        height: auto;
        display: block;
    }

    .thumbnail {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('{{ asset('download/thumbnail.png') }}') no-repeat center center;
        background-size: cover;
        transition: opacity 0.3s;
    }

    .thumbnail.hidden {
        opacity: 0;
    }

    a {
        text-decoration: none;
    }
</style>