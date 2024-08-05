<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginform.css') }}">
</head>
<body>
    <br><br><br>
    <section class="register-form">
        <div class="content-area">
            <div class="form-image-container">
                <div class="form-image"></div>
                <div class="form-container">
                    <div class="form">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <h1>Daftar</h1>
                            <label for="name">Nama</label><br>
                            <input placeholder="Masukkan nama" type="text" id="name" name="name" value=""><br>
                            <label for="email">Email</label><br>
                            <input placeholder="Masukkan email" type="text" id="email" name="email" value=""><br>
                            <label for="password">Password</label><br>
                            <input placeholder="Masukkan password" type="password" id="password" name="password" value=""><br>
                            <label for="password_confirmation">Konfirmasi password</label><br>
                            <input placeholder="Konfirmasi password" type="password" id="password_confirmation" name="password_confirmation" value=""><br><br>
                            <div class="input-button">
                                <input type="submit" value="Daftar">
                            </div>
                        </form>
                    </div>
                    <div class="lupa-password">
                        <a href="{{ route('login') }}">Sudah punya akun?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
