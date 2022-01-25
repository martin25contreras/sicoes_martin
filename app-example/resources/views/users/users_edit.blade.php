
<div class="content-table"> 


    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-user"></i>{{ __('Edit User') }}</h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                {{ Form::open(['route'=>'users.update','id'=>'frmUpdate','autocomplete'=>'Off','class' => 'validate' ]) }}
                     
                    {{ Form::hidden('id', (isset($item['crypt_id']))?$item['crypt_id']:"", ['id'=> 'id'])}}
                
                    <div class="form-group mb-2">
                    </div>
                        {{ Form::label('avatar', __('Avatar'), ['class' => '']) }}
                    <div class="form-group mb-3 le-0">  
                        <div class="row mb-3" id="avatars">
                        @foreach($AVATARS as $value)
                            <img data-value="{{$value}}" style="max-width:50px" alt="avatar" class="img-avatar img-fluid img-thumbnail" src="{{asset('avatar/'.$value)}}"/>
                        @endforeach
                        </div>
                        {{ Form::hidden('avatar', (isset($item['avatar']))?$item['avatar']:"", ['id'=> 'avatar'])}}
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-xs-6 col-sm-6 col-md-6 ">
                            {{Form::label('document_type', __('Type Document'), ['class' => 'required mb-1'])}}
                            {{ Form::select('document_type', $document_type, (isset($item['tipo_documento_id']))?$item['tipo_documento_id']:"", ['class' => 'form-select required', 'id'=> 'document_type','placeholder'=>__('Select...')]) }} 
                            
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            {{Form::label('document', __('Document'), ['class' => 'required mb-1'])}}
                            {{ Form::text('document', (isset($item['documento']))?$item['documento']:"", ['class' => 'form-control  number required', 'id'=> 'document','placeholder'=>__('Document'), 'maxlength'=>'8']) }} 
                           
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           
                            {{Form::label('name_user', __('Name'), ['class' => 'required mb-1'])}}
                            {{ Form::text('name_user', (isset($item['nombre_usuario']))?$item['nombre_usuario']:"", ['class' => 'form-control  alpha required', 'id'=> 'name_user','placeholder'=>__('Name'),]) }}
                          
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            {{Form::label('surname_user', __('Surname'), ['class' => 'required mb-1'])}}
                            {{ Form::text('surname_user', (isset($item['apellido_usuario']))?$item['apellido_usuario']:"", ['class' => 'form-control  alpha required', 'id'=> 'surname_user','placeholder'=>__('Surname'), ]) }}  
                            
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-xs-6 col-sm-6 col-md-6 ">

                            {{Form::label('operator', __('Número de la Operadora'), ['class' => 'required mb-1'])}}
                            {{ Form::select('operator', $defaultCodeOperatorCountries, (isset($item['telefono_operador_id']))?$item['telefono_operador_id']:"", ['class' => 'form-select required', 'id'=> 'operator','placeholder'=>__('Select...')]) }} 
                            
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            {{Form::label('phone', __('Phone'), ['class' => 'required mb-1'])}}
                            {{ Form::text('phone', (isset($item['telefono']))?$item['telefono']:"", ['class' => 'form-control  number required', 'id'=> 'phone','placeholder'=>__('Phone'),'minlength'=>'7','maxlength'=>'7']) }}
                            
                        </div>
                    </div>

                    <div class="mb-3">
                        {{Form::label('email', __('Email'), ['class' => 'required mb-1'])}}
                        {{ Form::text('email', (isset($item['email']))?$item['email']:"", ['class' => 'form-control  email required', 'id'=> 'email','placeholder'=> __('Email')]) }} 
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-xs-6 col-sm-6 col-md-6 ">
                            {{Form::label('profile', __('Profile'), ['class' => 'required mb-1'])}}
                            <div class="col">
                                 <select name="profile" id="profile" class="form-select required">
                                    <option value="">{{__('Select...')}}</option>
                                    @foreach($profile as $value)
                                        <option value="{{ $value->id }}" {{ $value->id == $item['profile_id'] ? 'selected' : '' }}>{{ __($value->nombre_perfil) }}</option>
                                    @endforeach
                                </select>
                            </div>                            
                        </div>                      
                    </div>
                    @if(Auth::user()->special_permission == 1)               
                        <div class="col-xs-11 col-sm-11 col-md-6 mb-4">
                                {{ Form::label('time_inactivity', __('Time Inactivity'), ['class' => 'title']) }}
                                {{ Form::hidden('time_inactivity', (isset($item['tiempo_inactividad']))?$item['tiempo_inactividad']:"", ['id'=> 'time_inactivity' ]) }}
                                {{ Form::text('time_inactivity2', msToTime($item['tiempo_inactividad']), ['class' => 'form-control  required', "readonly"=>"readonly" ,'id'=> 'time_inactivity2','placeholder'=> __('Time Inactivity'),  'required' => 'required' ]) }}
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                            <div class="note-footer"><i class="fa fa-exclamation"></i>
                                {{__('The Downtime Format is HOUR: MINUTES: SECONDS.')}}
                            </div>
                        </div>
                    @endif
                    <div class="form-group mb-3 le-0">  
      
                        <div class="row mb-3">
                            
                            <div class="form-check">

                                @if($item['special_permission'] == 1)

                                {{ Form::checkbox('special_permission', 1, true, ['class' => 'form-check-input', 'id'=> 'special_permission']) }}
                                @else

                                {{ Form::checkbox('special_permission', 1, false, ['class' => 'form-check-input', 'id'=> 'special_permission']) }}

                                @endif

                                {{Form::label('special_permission', __('Special Permission'), ['class' => 'form-check-label'])}}  
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="form-check">
                             
                                @if($item['sensitive_info'] == 1)

                                {{ Form::checkbox('sensitive_info', 1, true, ['class' => 'form-check-input', 'id'=> 'sensitive_info']) }} 
                                @else

                                {{ Form::checkbox('sensitive_info', 1, false, ['class' => 'form-check-input', 'id'=> 'sensitive_info']) }} 

                                @endif
                                {{Form::label('sensitive_info', __('Sensitive Info'), ['class' => 'form-check-label'])}} 

                            </div>
                        </div>
                    </div>              
                    <div class="col-5 mx-auto">  

                        <a class="btn btn-secondary back link_ajax" data-dataType = "html" href="{{route('users')}}">{{ __('Back') }} </a>
                        {{ Form::button(__('Save'), ['class' => 'btn btn-primary save', 'id' => 'save', 'type' => 'submit']) }}

                    </div>
                   
                {{ Form::close() }}

            </div>

        </div>

    </div>

</div>
<script type="text/javascript">
$('.img-avatar').removeClass('img-avatar-border');
$('#avatars').find('img[src$="'+{{$item['avatar']}}+'"]').addClass('img-avatar-border');
$(document).ready(function () {
    $('.img-avatar').on('click', function(){
        $('.img-avatar').removeClass('img-avatar-border');
        $(this).addClass('img-avatar-border');
        $('#avatar').val($(this).attr('data-value'));
    });

    $('#time_inactivity2').datetimeEntry({datetimeFormat: 'H:M:S', spinnerImage:null});
    $('#time_inactivity').val($('#time_inactivity2').datetimeEntry('getOffset') / 1000);
    
    $('#time_inactivity2').on("change", function(){
        $('#time_inactivity').val($('#time_inactivity2').datetimeEntry('getOffset') / 1000);
    });
});
</script>
