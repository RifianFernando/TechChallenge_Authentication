<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>Login</title>
</head>
<body>
<style>
    .content{
        height: 100vh;
    }
    .container{
        height: 100vh;
    }
    .luas-input{
        display: flex;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
    }
    

</style>
    <div class="content">
        <div class="container">
            <div class="luas-input">
                <div class="col-md-6 contents">
                    <div class="luas-input">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign Up</h3>
                                <p class="mb-4">Selamat datang di aplikasi kami</p>
                            </div>
                            <form action="{{ route('createUser') }}" method="POST">
                                @csrf
                                @if($success = Session::get('success'))
                                    <div class="alert alert-success font-weight-bolder">
                                        {{ $success }}
                                    </div>
                                @endif
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>
                                @error('username')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" required>
                                </div>
                                @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="password-confirm" required>
                                </div>

                                <input type="submit" value="Register" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="js/main.js"></script>
</body>
</html>