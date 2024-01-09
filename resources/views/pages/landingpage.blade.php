@extends('pages.layouts.main')

@section('container')
    <div>
        {{-- Carousel   --}}
        <section id="home">

            <div class="row">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/carousel1.jpg" class="bd-placeholder-img" style="object-fit: cover"
                                width="100%" height="100%" alt="">

                            <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1 class="text-futura-bold">Hard Working without Strategic</h1>
                                    <p>the risk of engaging in repetitive or inefficient tasks, potentially leading to
                                        burnout without maximizing productivity.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/carousel2.jpg" class="bd-placeholder-img" style="object-fit: cover"
                                width="100%" height="100%" alt="">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1 class="text-futura-bold">The importance of financial strategy</h1>
                                    <p>ability to provide a solid foundation for managing financial resources, ensuring
                                        sustainable growth, and achieving financial goals more effectively.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Log in</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/carousel3.jpg" class="bd-placeholder-img" style="object-fit: cover"
                                width="100%" height="100%" alt="">

                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1 class="text-futura-bold">Potencial to Growth with growit</h1>
                                    <p>By implementing sound financial strategies, individuals can effectively manage their
                                        finances, optimize growth, and achieve financial goals sustainably.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Look the Price</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        {{-- Fitures   --}}
        <section id="fitures">

            <div class="row  bg-growitprimary">
                {{-- part 1  --}}
                <div class="col-md-4  border">
                    <div class="container text-center py-5 px-3">
                        <div class="row mb-5 mt-5"></div>
                        <img src="/img/insight.png" width="80rem" alt="">
                        <br><br>
                        <span class="fw-bold fs-4 text-futura-bold">Financial Insights</span>
                        <br><br>
                        <span class="fs-5">Craft your financial journey with personalized reports, providing a snapshot
                            of
                            your expenses,
                            investment victories, and progress towards your goals. Your financial story, your way.</span>
                        <div class="row mb-5 mt-5"></div>
                    </div>
                </div>
                {{-- part 2  --}}
                <div class="col-md-4  border">
                    <div class="container text-center py-5 px-3">
                        <div class="row mb-5 mt-5"></div>
                        <img src="/img/moves.png" width="80rem" alt="">
                        <br><br>
                        <span class="fw-bold fs-4 text-futura-bold">Financial Moves</span>
                        <br><br>
                        <span class="fs-5">Before you invest, play with possibilities. Our simulation feature empowers
                            you to test strategies, foresee portfolio growth, and make confident, informed decisions.</span>
                        <div class="row mb-5 mt-5"></div>
                    </div>
                </div>
                {{-- part 3  --}}
                <div class="col-md-4  border">
                    <div class="container text-center py-5 px-3">
                        <div class="row mb-5 mt-5"></div>
                        <img src="/img/encription.png" width="80rem" alt="">
                        <br><br>
                        <span class="fw-bold fs-4 text-futura-bold">Fort Knox</span>
                        <br><br>
                        <span class="fs-5">Your data fortress – enjoy peace of mind with end-to-end encryption,
                            safeguarding your financial and personal information. Your secrets stay yours.</span>
                        <div class="row mb-5 mt-5"></div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    {{-- About Growit  --}}
    <section id="about">

        <div class=" py-5 container">
            <div class=" d-flex align-items-center text-white py-5">
                <div class="flex-grow-1 ms-3">
                    <h1><b>About Grow<span class="text-growitprimary">it</span></b></h1>
                    <p class="float-start" style="text-align: left">
                        Growit emerges as the holistic financial management solution for enterprises, seamlessly integrating
                        accounting, financial operations, inventory and warehouse management, as well as financial planning
                        and analysis into a singular software. It streamlines the entire financial landscape, providing a
                        comprehensive suite for companies to efficiently navigate their financial journey.
                    </p>
                </div>
                <div class="glassabout">
                    <img src="img/dash.png" alt="" width="100%">
                </div>
            </div>
            <hr>
            <h2 class="text-center text-futura-bold py-5">"Where financial management meets seamless efficiency, turning
                challenges into
                opportunities and goals into
                achievements."</h2>
            <p class="text-center">- Growit Team</p>
            <div class="row mb-5"></div>
        </div>
    </section>
    <section id="client">

        {{-- Our Client  --}}
        <div class="ourclient py-5 border-top border-bottom   bg-growitprimary">
            <div class="mb-5"></div>
            <div class="container d-flex align-items-center flex-column pb-5">
                <h1><b class="ja2g">Our</b> <b class="ja2i">Clients</b></h1>
                <div class="row mb-3"></div>
                <p>growit has helped over 1,050,000 Indonesian <br> small business owners take control of their
                    finances.
                </p>
                <div class="row mb-3"></div>
                <div class="container text-center">
                    <div class="row">
                        <div class="col glassour">
                            <img src="img/freelance.png" alt="">
                            <h3><b class="ja2i">freelance</b></h3>
                        </div>
                        <div class="col glassour">
                            <img src="img/consultant.png" alt="">
                            <div class="mb-3"></div>
                            <h3><b class="ja2i">consultant</b></h3>

                        </div>
                        <div class="col glassour">
                            <img src="img/contractor.png" alt="">
                            <div class="mb-3"></div>
                            <h3><b class="ja2i">contractor</b></h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5"></div>

        </div>

    </section>
    {{-- pricing  --}}
    <section id="pricing">

        <div class="container text-black py-5 ">
            <h1 class="py-5 text-center text-light text-futura-bold">P R I C I N G</h1>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                @foreach ($subs as $item)
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3 bg-growitsecondary">
                                <h4 class="my-0 fw-bold text-light">{{ $item['name'] }}</h4>
                            </div>
                            <div class="bg-dark text-light">
                                <div class="py-5 {{ $item['bgcard'] }}">
                                    <img src="/img/{{ $item['image'] }}" class="py-4" width="25%" alt="">
                                </div>
                                <div class="container py-3">
                                    <h1 class="card-title pricing-card-title fw-bolder fs-2">Rp.{{ $item['price'] }}<small
                                            class="text-muted fs-4 fw-light">/mo</small>
                                    </h1>
                                    <hr>
                                    <ul class="text-start list-unstyled mt-3 mb-4">
                                        {!! $item['description'] !!}
                                    </ul>
                                    <a href="{{ route('subs', $item['id']) }}"
                                        class="w-100 btn btn-lg btn-outline-primary">{{ $item['action'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
