@extends('layouts.common')

@section('content-common')

<section class="offer-area relative pt-40 pb-50 padding-mobile">
    <div class="container"> 
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-0 col-lg-6">
                <div class="title text-center">
                    <h1 class="mb-10">Recuperar senha</h1>
                    <p class="text-left">
                        Você receberá um email com os procedimentos para recuperar sua senha, preenchendo o campo abaixo:
                    </p>
                    <hr>
                </div>
            </div>
        </div> 

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card card-login">
                    <div class="card-body card-body-login p-0">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('password.email') }}">
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

                            <div class="form-group row text-center mt-30 mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="genric-btn primary btn-login">Recuperar senha</button>
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