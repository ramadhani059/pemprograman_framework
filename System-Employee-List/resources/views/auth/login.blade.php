<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-primary">
    <div class="main-content pb-5 pt-5">
        <!-- Page content -->
        <div class="container pt-5 pb-5">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
              <div class="card bg-light border-0 pb-5 pt-5 px-3">
                <div class="mb-4">
                    <h1 class="text-center mb-4"><i class="bi-hexagon-fill text-primary"></i></h1>
                    <h2 class="text-center">Employee Data Master</h2>
                </div>
                <div class="px-5">
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="email" placeholder="Enter Your Email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email')
                                <div id="emailHelp" class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Enter Your Password" name="password" class="form-control" id="exampleInputPassword1">
                            @error('password')
                                <div id="emailHelp" class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <hr>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
