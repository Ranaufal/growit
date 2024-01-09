<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/style/stylelanding.css"> --}}
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <link rel="stylesheet" href="/style/mystyle.css">
    <title>Document</title>
</head>

<body class="bg-dark text-light">
    <section class="vh-100 bg-growitprimary">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <form method="POST" class="card-body p-5 text-center" action="/register">
                            @csrf
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <img src="/img/logogrowit.png" class="w-25" alt="">
                                <div class="row mb-3"></div>
                                <h1 class="fw-bold mb-2 text-uppercase text-futura-bold">R e g i s t e r</h1>
                                <div class="row mb-5"></div>


                                <div class="form-outline form-white mb-4">
                                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Username"
                                        aria-label=".form-control-lg example">
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Email"
                                        aria-label=".form-control-lg example">
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Password"
                                        aria-label=".form-control-lg example">
                                </div>

                                <div class="row mb-5"></div>
                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Create Account</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i
                                            class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="/login"
                                        class="text-growitprimary fw-bold">Login</a>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/js/bootstrap.min.js"></script>
</body>


</html>
