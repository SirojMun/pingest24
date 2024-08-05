<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginform.css') }}">
</head>
<body>
    <br><br><br>
    <section class="login-form">
        <div class="content-area">
            <div class="form-image-container">
                <div class="form-image"></div>
                <div class="form-container">
                    <div class="form">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <h1>Login</h1>
                            <label for="email">Email</label><br>
                            <input placeholder="Masukkan email" type="text" id="email" name="email" value=""><br>
                            <label for="password">Password</label><br>
                            <input placeholder="Masukkan password" type="password" id="password" name="password" value=""><br><br>
                            <div class="input-button">
                                <input type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="lupa-password">
                        <a href="{{ route('register') }}">Belum punya akun?</a>
                        <a href="{{ route('password.request') }}">Lupa password</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
