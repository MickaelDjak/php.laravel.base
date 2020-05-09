@extends('layouts.index')

@section('content')
    <div class="login-box">
        <div class="row">
            <div class="small-12 medium-6 medium-offset-6 column ">
                <div class="login-box-form-section">
                    <h2 class="login-box-title">{{ __('Подписаться') }}</h2>
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">

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
                                    <label for="password">{{ __('Номер телефона') }}</label>

                                    <input class="login-box-input" id="password" type="number" name="password"
                                           required
                                           autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="medium-12 cell">
                                    <button type="submit" class="button"> {{ __('Подписаться') }} </button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
