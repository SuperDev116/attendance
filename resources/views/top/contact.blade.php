@extends('top.layouts.app')
@section('content')
<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    @include('top.layouts.topmenu')
    @include('top.layouts.childcarousel')
</div>
<!-- Navbar & Carousel End -->
<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">お問い合わせ</h5>
            <h1 class="mb-0">ご質問がございましたら、お気軽にお問い合わせください</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">ご質問はお電話にて</h5>
                        <h4 class="text-primary mb-0">03-6673-2814</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">メールで無料見積もりを取得する</h5>
                        <h4 class="text-primary mb-0">info@unoun.co.jp</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">オフィスを訪問する</h5>
                        <h4 class="text-primary mb-0">東京都中央区日本橋室町1丁目11番12号日本橋水野ビル7階</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form action="{{ route('otoiawase') }}">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="名前" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" class="form-control border-0 bg-light px-4" placeholder="主題" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="メッセージ"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">メッセージ送信</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.1631767088633!2d139.77515046960454!3d35.685552498286626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188954295310c1%3A0xd0b574c0ec508d54!2zSmFwYW4sIOOAkjEwMy0wMDIyIFRva3lvLCBDaHVvIENpdHksIE5paG9uYmFzaGltdXJvbWFjaGksIDEtY2jFjW1l4oiSMTHiiJIxMiDml6XmnKzmqYvmsLTph47jg5Pjg6sgN-majg!5e0!3m2!1sen!2sru!4v1729517006934!5m2!1sen!2sru"
                frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
