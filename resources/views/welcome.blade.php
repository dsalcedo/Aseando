<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
            <div class="content">
                {!! Form::open([
                    'route'   => 'website.post-acceso',
                    'method' => 'POST'
                ]) !!}
                    <h2 class="form-signin-heading">Iniciar sesión</h2>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo electrónico</label>
                            <input name="email" class="form-control inputs" id="exampleInputEmail1" placeholder="correo@buen-ejemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contraseña</label>
                            <input name="password" type="password" class="form-control inputs" id="exampleInputEmail1" placeholder="••••••••••">
                        </div>
                        <div class="form-group">
                            <a href="" class="link">
                                ¿Ha olvidado su contraseña?
                            </a>
                        </div>
                        <div class="checkbox" style="margin-left:-15px;">
                            <label>
                                <input type="checkbox" name="remember_token" value="remember_token" > Mantener la sesión iniciada
                            </label>
                        </div>
                        <div class="form-group" style="margin-top:30px;">
                            <button type="submit" class="btn btn-lg btn-primary btn-block" style="border-radius:3px;">Ingresar</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
