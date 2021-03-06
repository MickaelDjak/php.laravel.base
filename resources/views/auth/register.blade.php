@extends('layouts.index')

@section('content')
    <div class="gnc-form-box">
        <div class="row">
            <div class="small-12 medium-6 column ">
                <div class="gnc-form-box-info-graph">
                    <img src="img/undraw/undraw_sign_in_e6hj.svg" alt="Kiwi standing on oval"/>
                </div>
            </div>
            <div class="small-12 medium-6 column ">
                <div class="gnc-form-box-form-section">
                    <h2 class="gnc-form-box-title">{{ __('Регистрация') }}</h2>
                    <form method="POST" action="{{ route('register') }}">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                @csrf

                                <div class="medium-12 cell">
                                    <label for="name">Имя</label>

                                    <input class="gnc-form-box-input" id="name" type="text" name="name"
                                           value="{{ old('name') }}" required
                                           autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="medium-12 cell">
                                    <label for="email">E-Mail</label>

                                    <input class="gnc-form-box-input" id="email" type="email" name="email"
                                           value="{{ old('email') }}" required
                                           autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="medium-12 cell">
                                    <label for="password">Пароль</label>

                                    <input class="gnc-form-box-input" id="password" type="password"

                                           name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="medium-12 cell">
                                    <label for="password-confirm">Повторный пароль</label>

                                    <input class="gnc-form-box-input" id="password-confirm" type="password"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="medium-12 cell">
                                    <button type="submit" class="button">Зарегистрироваться</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
