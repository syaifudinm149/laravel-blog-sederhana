<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form method="post" action="/register">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please Register</h1>

            <div class="form-floating mb-2">
                <input type="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
                    placeholder="name" name="name" value="{{ old('name') }}" required autofocus>
                <label for="floatingInput">name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-2">
                <input type="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput"
                    placeholder="username" name="username" value="{{ old('username') }}" required>
                <label for="floatingInput">username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="form-floating mb-2">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                    placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
                <label for="floatingInput">Email address</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <a href="/login" style="text-decoration: none">Already Have an Account? Please Login</a>
        </form>
    </main>



</body>

</html>
