@extends('layouts.common')

@section('content-common')

<section class="offer-area relative pt-40 pb-50 padding-mobile">
    <div class="container"> 
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-0 col-lg-6">
                <div class="title text-center">
                    <h1 class="mb-10">Login</h1>
                    <p class="text-left">Acesse sua conta para gerenciar as informações do robô preenchendo os campos abaixo:</p>
                    <hr>
                </div>
            </div>
        </div> 

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card card-login">
                    <div class="card-body card-body-login p-0">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input id="email" type="email" class="input-login form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <label for="password" class="col-form-label">Senha</label>
                                    <input id="password" type="password" class="input-login form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row text-right">
                                <div class="col-md-12">
                                    <a class="btn btn-link forgot-link" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                                </div>
                            </div>

                            <div class="form-group row text-center mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="genric-btn primary btn-login">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection