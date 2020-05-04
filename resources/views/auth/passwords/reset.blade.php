@extends('layouts.index')

@section('content')
    <div class="login-box">
        <div class="row">
            <div class="small-12 medium-6 medium-offset-6 column ">
                <div class="login-box-form-section">
                    <h2 class="login-box-title">{{ __('Введите новый пароль') }}</h2>
                    <form method="POST" action="{{ route('password.update') }}">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="medium-12 cell">
                                    <label for="email">{{ __('E-Mail') }}</label>

                                    <input class="login-box-input" id="email" type="email" name="email"
                                           value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="medium-12 cell">
                                    <label for="password">{{ __('Пароль') }}</label>

                                    <div class="col-md-6">
                                        <input class="login-box-input" id="password" type="password"
                                               name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="medium-12 cell">
                                    <label for="password-confirm">{{ __('Повторите пароль') }}</label>

                                    <div class="col-md-6">
                                        <input class="login-box-input" id="password-confirm" type="password"
                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="medium-12 cell">
                                    <button type="submit" class="button"> {{ __('Скинуть пароль') }} </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
