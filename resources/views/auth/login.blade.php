@extends('layouts.applogin')

@section('content')
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">Formulario de Acceso</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Login Administrador</h2>
   <p>Porfavor ingrese su Usuario y Contraseña</p>
   </div>
    <form id="Login" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group">

            <input type="text" name="username" class="form-control" id="inputEmail" placeholder="Usuario" value="{{ old('username') }}" required autofocus>
            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group">

            <input required type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
             @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group">
            <div class="col-md-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
</div></div></div>


</body>
@endsection
