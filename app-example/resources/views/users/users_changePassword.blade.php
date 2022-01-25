@extends('layouts.change_password')
@section('content')
<div class="content-table"> 
    <div class="row">
        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-user"></i>{{ __('Change Password') }}</h3> 
        </div>
        <div class="col-md-9">
            <div class="content-space te-0">
                {{ Form::open(['route'=>'users.password_update','id'=>'frmPassword','autocomplete'=>'Off','class' => 'validate' ]) }}
                    <div class="form-group mb-2"></div>
                    <div class="row g-2 mb-3 changepass">
                        <div class="col-xs-6 col-sm-6 col-md-6 mt-4">
                            <div class="inputBox">
                                <div id="password-strength-status"></div>
                                <div class="form-floating">  
                                    <span class="input-group-append eye">
                                        <a href="javascript:show_password('password');" class="btn btn-outline-default btn-sm btn-icon" ><i id="{!! 'icon_password' !!}" class="far fa-eye-slash" title="Mostrar"></i></a>
                                    </span>                      
                                    {{ Form::password('password', ['class' => 'form-control min eye required','placeholder' => 'Password', 'id'=> 'password','minlength'=>'8', 'maxlength'=>'15'])}}
                                    {!! Html::decode(Form::label('password','<i class="fa fa-lock"></i>  '.__('Password'))) !!}
                                    <div id="myPassword"></div>
                                                     
                                </div>
                                
                            </div> 
                        <ul class="pswd_info" id="passwordCriterion">
                          <li data-criterion="length" class="invalid">{{ __('8-15 Characters') }}</li>
                          <li data-criterion="capital" class="invalid">{{ __('At least one capital letter') }}</li>
                          <li data-criterion="small" class="invalid">{{ __('At least one small letter') }}</li>
                          <li data-criterion="number" class="invalid">{{ __('At least one number') }}</li>
                          <li data-criterion="special" class="invalid">{{ __('At least one Special Character') }}<br>   ~ ! @ # $ % ^ & * - _ + = ? > < .</li>
                        </ul>
                        </div> 
                            <div class="col-xs-6 col-sm-6 col-md-6 mt-4">
                              <div class="inputBox">
                                    <div class="hidden_password">
                                        <div id="password-strength-status2"></div>
                                    </div>
                                    <div class="form-floating">  
                                        <span class="input-group-append eye">
                                            <a href="javascript:show_confirm_password('password_confirmation');" class="btn btn-outline-default btn-sm btn-icon" ><i id="{!! 'icon_password2' !!}" class="far fa-eye-slash" title="Mostrar"></i></a>
                                        </span>                     
                                        {{ Form::password('password_confirmation', ['class' => 'form-control min eye required','placeholder' => 'Confirm password', 'id'=> 'password_confirmation','minlength'=>'8', 'maxlength'=>'15','data-rule-equalto'=>"#password"])}}
                                        {!! Html::decode(Form::label('password_confirmation','<i class="fa fa-lock"></i>  '.__('Confirm password'))) !!}
                                                          
                                    </div>
                                    
                                </div> 
                                <ul class="pswd_info hidden_password" id="passwordCriterion2">
                                  {{-- <li data-criterion="confirmed" class="invalid">{{ __('Password Confirmed') }}</li> --}}
                                </ul>
                            </div>
                        </div>
                         <div class="col-5 mx-auto">  
                        {{ Form::button('<i class="fa fa-save"></i> '.__('Save'), ['class' => 'btn btn-primary', 'id' => 'save_password','type' => 'submit']) }}
                    </div>
                    </div>            
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var mostrar_pass = '';
$( document ).ready(function() {
    $('#frmPassword').on('submit', function(){
        return $('#frmPassword').valid();
    });
    $('#password').keyup(function(event) {
      var password = $('#password').val();
      if(password == ''){
        $('#password_confirmation').val('');
        $('.hidden_password').each(function(){
            $(this).hide();
        });
      }
        checkPasswordStrength(password);
    });    
    $('#password_confirmation').keyup(function(event) {
      var password  = $('#password').val();
          if(password == ''){
            $('.hidden_password').each(function(){
                $(this).hide();
            });
          }else{
            $('.hidden_password').each(function(){
                $(this).show();
            });
            passwordConfirmed(password, $(this).val());
          }
    });
});
function show_password(valor)
{
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
function show_confirm_password(valor)
{
    if(valor == 'password_confirmation'){
        if(mostrar_pass == ''){
            $('#password_confirmation').attr('type','text');
            $('#icon_password2').removeClass('fa-eye-slash');
            $('#icon_password2').addClass('fa-eye');
            mostrar_pass = 'x';
        }else{
            $('#password_confirmation').attr('type','password');
            $('#icon_password2').removeClass('fa-eye');
            $('#icon_password2').addClass('fa-eye-slash');
            mostrar_pass = '';
        }
    }
}
</script>
@endsection
