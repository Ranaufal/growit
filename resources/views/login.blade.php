<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Growit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;900&display=swap" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgb(30, 25, 139);
            background: linear-gradient(51deg, rgba(30, 25, 139, 1) 0%, rgba(0, 0, 89, 1) 55%, rgba(0, 95, 255, 1) 100%);
            background-repeat: no-repeat;
        }

        .login-container {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.16);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            padding: 50px;
            color: black;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .login-container h1 {
            font-size: 44px;
            color: #40F8FF;
            font-family: 'Inter', sans-serif;
            margin-bottom: 50px;
            font-weight: 900;
        }

        .dark-mode-btn {
            background-color: transparent;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.3s;
            margin-top: 10px;
        }
        .judul h1{
          font-size: 44px;
            color: #40F8FF;
            font-family: 'Inter', sans-serif;
            margin-bottom: 50px;
            font-weight: 900;
        }
        .px-6 {
            padding-left: 220px;
            padding-right: 220px;
        }

        .round {
            border-radius: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .btntext {
            font-size: 16px;
            font-family: 'Inter', sans-serif;
        }
        .btntextr {
            font-size: 16px;
            color: #40F8FF;
            font-family: 'Inter', sans-serif;
        }
        .btn-grow{
            background-color:#4073ff ;
            color: white;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center judul">
          <h1 class="text-center">Sign In</h1>
            
            <div class="col-md-6">
                <div class="login-container">
                  <form method="POST" action="/login">
                        @csrf
                        <div class="form-control"style="background-color: transparent; border:none;">
                            <label for="exampleFormControlInput1" class="form-label text-white">Email address</label>
                            <input type="email"style="background: rgba(255, 255, 255, 0.16);
                            border-radius: 16px;
                            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                            backdrop-filter: blur(5px);
                            -webkit-backdrop-filter: blur(5px);
                            border: 1px solid rgba(255, 255, 255, 0.3);padding:10px;"
                                class="form-control text-white @error('email') is-invalid
              @enderror"
                                value="{{ old('email') }}" name="email" id="email" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-control mt-4" style="background-color: transparent; border:none;">
                            <label for="exampleFormControlInput1" class="form-label text-white">Password</label>
                            <input type="password" class="form-control text-white" name="password"style="background: rgba(255, 255, 255, 0.16);
                            border-radius: 16px;
                            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                            backdrop-filter: blur(5px);
                            -webkit-backdrop-filter: blur(5px);
                            border: 1px solid rgba(255, 255, 255, 0.3); padding:10px;" required>
                        </div>
                        <br>
                        <div class="row justify-content-center px-6">
                            <button type="submit" class="round btn btn-grow text-center mb-3 btntext">Login</button>

                        </div>
                        <div class="row justify-content-center mt-2">
                            <p class="text-center text-white">Need an Account?
                                <a href="/register" class="align-items-center btntextr">Reqister</a>

                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
