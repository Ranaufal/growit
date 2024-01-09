@extends('pages.layouts.main')
{{-- @section('unikidworkspace', '2') --}}
@section('container')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <div class="mb-3"></div>
            <a href="/" class="btn btn-primary">Kembali</a>
            <div class="mb-3"></div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 bg-growitsecondary">
                        <h4 class="my-0 fw-bold text-light">{{ $sub['name'] }}</h4>
                    </div>
                    <div class="bg-dark text-light">
                        <div class="py-lg-5 bg-growitpricingbusiness">
                            <img src="/img/business.png" class="py-4" width="25%" alt="">
                        </div>
                        <div class="container py-3">
                            <h1 class="card-title pricing-card-title fw-bolder fs-2">
                                Rp{{ number_format($sub['price'], 0, ',', '.') }}<small
                                    class="text-muted fs-4 fw-light">/mo</small>
                            </h1>
                            <hr>
                            <ul class="text-start list-unstyled mt-3 mb-4">
                                {!!$sub['description']!!}

                            </ul>
                            <form action="{{ route('checkout-process') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $sub['id'] }}">
                                <input type="hidden" name="sub_id" value="{{ $sub['id'] }}">
                                <input type="hidden" name="price" value="{{ $sub['price'] }}">
                                @auth
                                    <button type="submit" class="btn btn-primary">Beli Sekarang</button>
                                @else
                                    <a href="/login" class="btn btn-primary">Login untuk membeli</a>
                                @endauth
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>

            {{-- <div class="row mt-3">
                <div class="col-md-8">
                    <h1>pro</h1>
                    {{-- <h1>{{ $sub['name'] }}</h1> --}}
            {{-- <p>Rp. 70000</p> --}}
            {{-- <p>Rp{{ number_format($sub['price'], 0, ',', '.') }}</p> --}}
            {{-- <form action="{{ route('checkout-process') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $sub['id'] }}">
                        <input type="hidden" name="sub_id" value="{{ $sub['id'] }}">
                        <input type="hidden" name="price" value="{{ $sub['price'] }}">
                        @auth
                            <button type="submit" class="btn btn-primary">Beli Sekarang</button>
                        @else
                            <a href="/login" class="btn btn-primary">Login untuk membeli</a>
                        @endauth
                    </form> --}}
        </div>
    </div>
    </div>
    </div>
@endsection
