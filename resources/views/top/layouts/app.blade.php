<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M3F9LV8T');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GNL5GHXPCG"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GNL5GHXPCG');
    </script>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Kintai" name="keywords">
    <meta content="Kintai勤怠は全国３万社が利用するクラウド勤怠管理システムです。圧倒的な低価格でシンプル、評価ランキングNO.1のKintai勤怠。無料でWeb給与明細も！ | Kintai勤怠無料のクラウド勤怠管理システム" name="description">
    <meta name="google-site-verification" content="lP7rjVYqiqXvziap8WJwrQgCnLrwcUu0O5QkHhmQ2DQ" />

    <meta property="og:type" content="website">
    <meta property="og:description" content="Kintai勤怠は全国３万社が利用するクラウド勤怠管理システムです。圧倒的な低価格でシンプル、評価ランキングNO.1のKintai勤怠。無料でWeb給与明細も！ | Kintai勤怠無料のクラウド勤怠管理システム">
    <meta property="og:title" content="無料のクラウド勤怠管理システム【Kintai】タイムカードを卒業">
    <meta property="og:url" content="https://kintai-pro.com">
    <meta property="og:image:alt" content="無料のクラウド勤怠管理システム【Kintai】タイムカードを卒業">
    <meta property="og:site_name" content="無料のクラウド勤怠管理システム【Kintai】タイムカードを卒業">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@kintai">
    <meta name="twitter:title" content="無料のクラウド勤怠管理システム【Kintai】タイムカードを卒業">
    <meta name="twitter:description" content="Kintai勤怠は全国３万社が利用するクラウド勤怠管理システムです。圧倒的な低価格でシンプル、評価ランキングNO.1のKintai勤怠。無料でWeb給与明細も！ | Kintai勤怠無料のクラウド勤怠管理システム">
    <meta name="twitter:url" content="https://kintai-pro.com">

    <link rel="canonical" href="https://kintai-pro.com/">
    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon/favicon.png') }}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/startup-website-template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/startup-website-template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/startup-website-template/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/startup-website-template/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3F9LV8T"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>東京都中央区日本橋室町1丁目11番12号日本橋水野ビル7階</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>03-6673-2814</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@unoun.co.jp</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    @yield('content')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
    <!-- Vendor Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (1).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (2).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (3).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (4).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (5).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (6).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (7).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (8).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (9).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (10).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (11).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (12).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (13).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (14).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (15).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (16).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (17).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (18).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (19).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (20).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (21).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (22).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (23).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (24).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (25).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (26).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (27).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (28).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (29).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (30).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (31).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (32).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (33).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (34).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (35).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (36).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (37).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (38).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (39).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (40).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (41).webp') }}" alt="">
                    <img src="{{ asset('assets/startup-website-template/img/vendor/vendor (42).webp') }}" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Vendor End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>kintai</h1>
                        </a>
                        <p class="mt-3 mb-4">人事実務の専門家がベンチャー企業で必要な機能を精査し、シンプルで使いやすい勤怠管理システムを共同開発しました。</p>
                        {{-- <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">連絡先</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">東京都中央区日本橋室町1丁目11番12号日本橋水野ビル7階</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@unoun.co.jp</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">03-6673-2814</p>
                            </div>
                            {{-- <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div> --}}
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">クイックリンク</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ route('top') }}"><i class="bi bi-arrow-right text-primary me-2"></i>TOP</a>
                                <a class="text-light mb-2" href="{{ route('contact') }}"><i class="bi bi-arrow-right text-primary me-2"></i>コンタクト</a>
                                <a class="text-light mb-2" href="{{ route('login') }}"><i class="bi bi-arrow-right text-primary me-2"></i>ログイン</a>
                                <a class="text-light mb-2" href="{{ route('guide') }}"><i class="bi bi-arrow-right text-primary me-2"></i>ガイド</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">人気のリンク</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ route('top') }}"><i class="bi bi-arrow-right text-primary me-2"></i>TOP</a>
                                <a class="text-light mb-2" href="{{ route('contact') }}"><i class="bi bi-arrow-right text-primary me-2"></i>コンタクト</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="https://unoun.co.jp/" target="_blank">unoun inc.</a> All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/startup-website-template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/startup-website-template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/startup-website-template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/startup-website-template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/startup-website-template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets/startup-website-template/js/main.js') }}"></script>
</body>

</html>
