@extends('layouts.login')
@section('content')
    <div id="login-boxback"></div>
    <div id="login-box">
        <div class="schoolname">
            <img class="header-login" src="{{asset('img/login.png')}}">
            <div class="schoolname1">Instituto Técnico Jesús Obrero </div>
        </div>
        <div class="subheading">Sistema Control Escolar</div>
    
        <div id="login-boxes">
    
        {{ Form::open(['id' => 'formlogin', 'class' => 'form' , 'autocomplete' => 'Off']) }}
            <h3>{{ __('Login') }}</h3>
            <div class="inputBox">
                <div class="form-floating mb-3">
                    {{ Form::text('username', null, ['class' => 'form-control min required','placeholder' => 'Name', 'id'=> 'username'])}}
                    {!! Html::decode(Form::label('username','<i class="fa fa-user"></i>  '.__('Username'), ['class' => 'required mb-1'])) !!}
                </div>
            </div>
            <div class="inputBox">
                <div class="form-floating">                       
                    {{ Form::password('password', ['class' => 'form-control eye min required','placeholder' => 'Password', 'id'=> 'password'])}}
                    {!! Html::decode(Form::label('password','<i class="fa fa-lock"></i>  '.__('Password'), ['class' => 'required mb-1'])) !!}
                    <span class="input-group-append eye">
                        <a href="javascript:mostrar('password');" class="btn btn-outline-default btn-sm btn-icon" ><i id="{!! 'icon_password' !!}" class="far fa-eye-slash" title="Mostrar"></i></a>
                    </span>                  
                </div>
            </div>                
            <div class="inputBox mt-4 d-grid gap-2 col-6 mx-auto">
                {{ Form::submit(__('Log In'), ['class' => 'btn btn-primary', 'id' => 'submit']) }}
            </div>
        {{ Form::close() }}
        </div>
    </div>		   
    @if(Session::has('msg'))
        <script type="text/javascript">
        toastr['{{ Session::get('msg')['type'] }}']
        ('{{ Session::get('msg')['message'] }}',{
            "progressBar": false,
            "onclick": null,
            "positionClass": "toast-top-right"
        });
        </script>
    @endif

    <script type="text/javascript">
            var mostrar_pass = '';

            //////////////   Mostrar y Ocultar Contraseña   ////////////////////////

            function mostrar(valor){
                if(valor == 'password'){
                    if(mostrar_pass == ''){
                        $('#password').attr('type','text');
                        $('#icon_password').removeClass('fa-eye-slash');
                        $('#icon_password').addClass('fa-eye');
                        mostrar_pass = 'x';
                    }else{
                        $('#password').attr('type','password');
                        $('#icon_password').removeClass('fa-eye');
                        $('#icon_password').addClass('fa-eye-slash');
                        mostrar_pass = '';
                    }
                }
            }
        
    </script>
@endsection
