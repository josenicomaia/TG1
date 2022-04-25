@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-header2">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body" id="card-body2">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
{{--                        usuário--}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right caixa-geral">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right caixa-geral">{{ __('Senha') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('lembre-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                            <div class="botoes">
                                  <button class="botao">
                                        <div class="svg-wrapper-1">
                                            <div class="svg-wrapper">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <span>{{ __('login') }}</span>
                                  </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link senha" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
