@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
<div id="login-page">
    <div class="login-container">
        <div class="login-form">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-group">
                    <label for="email" class="form-label">Seu Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="password" class="form-label">Senha</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-check remember-me">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Lembre de mim!
                    </label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-login">Entrar</button>
                 
                        <a class="btn-link">Esqueceu sua senha?</a>
                   
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
