<div class="border-bottom">
    <header
        class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 ">
        <a href="/"
            class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-light text-decoration-none text-futura-bold gap-2">
            <img src="/img/logogrowit.png" width="30px" alt="">
            <h1 class="d-flex align-items-center">grow<span class="text-growitprimary">it</span>
                @if (auth()->user() != null)
                    @php
                        $subscription = App\Models\Subscription::where('user_id', auth()->user()->id)->first();
                    @endphp

                    @if ($subscription && $subscription->sub_id == '2')
                        <span class="growitsubs">pro</span>
                    @endif
                    @if ($subscription && $subscription->sub_id == '1')
                        
                    @endif
                    @if ($subscription && $subscription->sub_id == '3')
                        <span class="growitsubs">business</span>
                    @endif
                @endif
            </h1>

        </a>

        <ul class="nav col-12 col-md-auto justify-content-center">
            <li><a href="#home" class="nav-link px-2 text-light">Home</a></li>
            <li><a href="#fitures" class="nav-link px-2 text-light">Features</a></li>
            <li><a href="#about" class="nav-link px-2 text-light">About</a></li>
            <li><a href="#client" class="nav-link px-2 text-light">Clients</a></li>
            <li><a href="#pricing" class="nav-link px-2 text-light">Pricing</a></li>
        </ul>

        <div class="col-md-3 text-end d-flex justify-content-end align-items-center gap-2">
            @if (auth()->user() != null)
                <a href="/workspace" class="text-decoration-none">
                    <img src="/img/profil.png" class="rounded-circle bg-growitprimary" style="width: 45px;"
                        alt="">
                </a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
            @else
                <a href="/login" class="btn btn-outline-primary me-2">Login</a>
                <a href="/register" class="btn btn-primary">Sign-up</a>
            @endif

        </div>
    </header>
</div>
