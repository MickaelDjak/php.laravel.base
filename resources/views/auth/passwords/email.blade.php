@extends('layouts.index')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="login-box">
        <div class="row">
            <div class="small-12 medium-6 medium-offset-6 column ">
                <div class="login-box-form-section">
                    <h2 class="login-box-title">{{ __('Сброс пароля') }}</h2>
                    <form method="POST" action="{{ route('password.email') }}">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                @csrf

                                <div class="medium-12 cell">
                                    <label for="email">{{ __('E-Mail') }}</label>
                                    <input class="login-box-input" id="email" type="email" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="medium-12 cell">
                                    <button type="submit"
                                            class="button"> {{ __('Получить ссылку для сброса пароля') }} </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
