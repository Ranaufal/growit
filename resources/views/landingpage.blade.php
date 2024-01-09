<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/stylelanding.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;800;900&display=swap" rel="stylesheet">
    <title>Growit</title>

</head>
{{-- color: white; font-size: 1.875em --}}
{{-- color: rgba(75, 165, 216, 1);font-size: 1.875em --}}

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand custom-toggler" href="#"><b class="logog">grow</b><b class="logoi">it</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="position-absolute top-50 start-50 translate-middle collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item text-center">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="#client">Client</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
            </ul>
        </div>
        @if (Auth::check())
        <div>
            <div class="user-box dropdown">
            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/img/freelance.png" class="user-img" alt="user avatar">
                <div class="user-info ps-3">
                    <p class="user-name mb-0">{{
                       
                         auth()->user()->name 
                       }}</p>
                </div>

            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><i
                            class='bx bx-home-circle'></i><span>Dashboard</span></a>
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="bx bx-log-out-circle dropdown-item" type="submit">Logout</button>
                    </form>
                    {{-- <a class="dropdown-item" href="javascript:;"><i
                                class='bx bx-log-out-circle'></i><span>Logout</span></a> --}}
                </li>
            </ul>
        </div>
        @else
        @endif

    </nav>
    <section id="home">
        <div class="container home">
            <div class="container">
                <div class="container d-flex align-items-center flex-column">
                    <div class="glassbox1 align-items-center">
                        <h1 style="color: white; text-align: center"><b>Grow your business with</b></h1>
                        <h1 style="color: rgba(75, 165, 216, 1);text-align: center"><b>our solution</b></h1>
                    </div>
                    <div class="mb-4"></div>
                    <p style="color: white;">Powerful, extensible, and feature-packed. Build and<br>customize with Sass,
                        utilize prebuilt grid system and<br>components, and bring projects to life with
                        powerful<br>JavaScript plugins.</p>
                    <a name="" id="" class="btn btn-primary" href="/login" role="button">Get
                        Started</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container about">
            <div class="d-flex align-items-center flex-row text-white">
                <div class="flex-grow-1 ms-3">
                    <h1><b class="ja1">About</b></h1>
                    <h1><b class="ja2g">grow</b><b class="ja2i">it</b><b class="ja2g">?</b></h1>
                    <p class="float-start" style="text-align: left">
                        <b class="ja2g">grow</b><b class="ja2i">it</b> menjadi solusi untuk perusahaan dalam
                        mengelola
                        keuangan secara menyeluruh dari satu software
                        mulai dari akuntansi, operasional keuangan, inventori & gudang dan perencanaan & analisa
                        keuangan.
                    </p>
                </div>
                <div class="glassabout">
                    <img src="img/about.png" alt="">
                </div>
            </div>

        </div>
    </section>
    <section id="client">
        <div class="container ourclient">
            <div class="container d-flex align-items-center flex-column">
                <h1><b class="ja2g">Our</b> <b class="ja2i">Client</b></h1>
                <p class="text-white">
                    <b class="ja2g">grow</b><b class="ja2i">it</b> has helped over 2,000,000 North American <br>
                    small
                    business owners take control of their finances.
                </p>
                <div class="mb-5"></div>
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

        </div>
    </section>
    <section id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Biasa</h5>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Gratis</h5>
                            <p class="card-text">Fitur 1</p>
                            <p class="card-text">Fitur 2</p>
                            <a href="#" class="btn btn-primary" id="pay-button">Beli</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Professional</h5>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Rp. 20.000</h5>
                            <p class="card-text">Fitur 1</p>
                            <p class="card-text">Fitur 2</p>
                            <a href="#" class="btn btn-primary"id="pay-button">Beli</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Premium</h5>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Rp. 50.000</h5>
                            <p class="card-text">Fitur 1</p>
                            <p class="card-text">Fitur 2</p>
                            <a href="#" class="btn btn-primary" id="pay-button">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container text-white py-5">
            <footer class="py-5 ">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a>
                            </li>
                        </ul>
                    </div>


                </div>

                <div class="d-flex flex-column flex-sm-row py-4 my-4 border-top">
                    <b class="logog">grow</b><b class="logoi">it</b>
                </div>
            </footer>
        </div>
    </section>
</body>

<script src="{{ asset('bootstrap/feather.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>

</html>
