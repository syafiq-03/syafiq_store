@extends('layouts.user.main')

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Detail Produk</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{ route('user.dashboard') }}">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Detail Produk</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Single Product Area =================-->
    <section class="section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="s_product_text">
                        <h3>{{ $product->name }}</h3>
                        <h2>{{ number_format($product->price, 0, ',', '.') }} Points</h2>
                        <ul class="list">
                            <li>
                                <a href="#"><span>Kategori</span> : {{ $product->category }}</a>
                            </li>
                        </ul>

                        <!-- Menampilkan diskon jika ada -->
                        @if ($product->flashSales->isNotEmpty())
                            @foreach ($product->flashSales as $flashSale)
                                <h4>Harga Diskon: 
                                    <strike>{{ number_format($product->price, 0, ',', '.') }} Points</strike>
                                    <strong>{{ number_format($product->price - (($flashSale->pivot->discount_price / 100) * $product->price), 0, ',', '.') }} Points</strong>
                                </h4>
                            @endforeach
                        @else
                            <h4><strong>Tidak ada diskon saat ini.</strong></h4>
                        @endif

                        <!-- Countdown Timer untuk Flash Sale -->
                        @if ($product->flashSales->isNotEmpty())
                            @foreach ($product->flashSales as $flashSale)
                                <div class="countdown-timer">
                                    <p>Flash Sale Berakhir Dalam: 
                                        <span id="countdown{{ $flashSale->id }}"></span>
                                    </p>
                                </div>
                                <script>
                                    // Menghitung mundur untuk flash sale
                                    var endDate{{ $flashSale->id }} = new Date("{{ $flashSale->end_time }}").getTime();
                                    var countdownInterval{{ $flashSale->id }} = setInterval(function() {
                                        var now = new Date().getTime();
                                        var distance = endDate{{ $flashSale->id }} - now;

                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                        document.getElementById("countdown{{ $flashSale->id }}").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

                                        if (distance < 0) {
                                            clearInterval(countdownInterval{{ $flashSale->id }});
                                            document.getElementById("countdown{{ $flashSale->id }}").innerHTML = "Flash Sale Berakhir";
                                        }
                                    }, 1000);
                                </script>
                            @endforeach
                        @endif

                        <p>{{ $product->description }}</p>
                        <div class="card_area d-flex align-items-center">
                            <a class="primary-btn" href="javascript:void(0);" onclick="confirmPurchase('{{ $product->id }}', '{{ Auth::user()->id }}')">Beli Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Single Product Area =================-->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmPurchase(productId, userId) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan membeli produk ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Beli!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/product/purchase/' + productId + '/' + userId;
                }
            });
        }
    </script>
@endsection
