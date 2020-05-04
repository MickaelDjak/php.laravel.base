@extends('layouts.index')

@section('content')
    <div class="login-box">
        <div class="row">
            <div class="small-12 medium-6 medium-offset-6 column ">
                <div class="login-box-form-section">
                    <h2 class="login-box-title">{{ __('Войти') }}</h2>
                    <form method="POST" action="{{ route('login') }}">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                @csrf

                                <div class="medium-12 cell">
                                    <label for="email">{{ __('E-Mail') }}</label>

                                    <input class="login-box-input" id="email" type="email" required
                                           autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="medium-12 cell">
                                    <label for="password">{{ __('Пароль') }}</label>

                                    <input class="login-box-input" id="password" type="password" name="password"
                                           required
                                           autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="medium-12 cell">
                                    <input type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember"> {{ __('Запомнить меня') }} </label>
                                </div>

                                <div class="medium-12 cell">
                                    <button type="submit" class="button"> {{ __('Войти') }} </button>
                                </div>

                                <div class="medium-12 cell">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Забыли пороль?') }}
                                        </a>
                                    @endif
                                </div>

                                <div class="rounded-social-buttons">
                                    <a class="social-button facebook" href="#"></a>
                                    <a class="social-button google-plus" href="#"></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
