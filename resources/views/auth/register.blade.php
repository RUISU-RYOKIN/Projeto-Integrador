@extends('layouts.app')

@section('content')
<div id="register-page">
    <div class="register-container">
        <div class="register-form">
            <h1>{{ __('Registrar') }}</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-group">
                    <label for="name" class="col-form-label">{{ __('Nome') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="email" class="col-form-label">{{ __('Endereço de E-mail') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="password" class="col-form-label">{{ __('Senha') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="password-confirm" class="col-form-label">{{ __('Confirmar Senha') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-register">{{ __('Registrar') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
