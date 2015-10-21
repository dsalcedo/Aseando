<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/theme/login.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="acceso">
                {!!Form::open([
                    'route'  => 'website.post-acceso',
                    'method' => 'POST',
                    'class'  => 'form-signin login-card'
                ])!!}
                    <h2 class="form-signin-heading text-center">
                        ¡Hola de nuevo!
                    </h2>
                    <p>
                        Entra a tu perfil, modifica tus servicios y programa nuevas.
                    </p>
                    {!!Form::label('inputEmail', 'Correo electrónico', ['class' => 'sr-only'])!!}
                    {!!Form::text('email',  null, ['class' => 'form-control input', 'placeholder'=>'correo@buen-ejemplo.com','autofocus'=>'autofocus']) !!}
                    {!!Form::label('inputPassword', 'Contraseña', ['class' => 'sr-only'])!!}
                    {!!Form::password('password', ['class' => 'form-control input', 'placeholder'=>'••••••••••']) !!}
                    <div class="checkbox">
                        <label>
                            {!!Form::checkbox('remember_token','remember_token')!!} Mantener la sesión iniciada
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <div class="form-group">
                        <a href="" class="link">
                            ¿Ha olvidado su contraseña?
                        </a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
