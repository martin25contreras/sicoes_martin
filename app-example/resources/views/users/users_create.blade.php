
<div class="content-table"> 
    <div class="row">
        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-user"></i>{{ __('Create User') }}</h3> 
        </div>
        <div class="col-md-9">
            <div class="content-space te-0">
                {{ Form::open(['route'=>'users.store','id'=>'frmStore','autocomplete'=>'Off','class' => 'validate' ]) }}
                    <div class="form-group mb-2">
                    </div>
                    <div class="form-group mb-3 le-0">  
                        {{ Form::label('avatar', __('Avatar'), ['class' => '']) }}
                        <div class="row mb-3" id="avatars">
                            @foreach($AVATARS as $value)
                                <img data-value="{{$value}}" style="max-width:50px" alt="avatar" class="img-avatar img-fluid img-thumbnail" src="{{asset('avatar/'.$value)}}"/>
                            @endforeach
                        </div>
                        {{ Form::hidden('avatar', null, ['id'=> 'avatar'])}}
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-xs-6 col-sm-6 col-md-6 ">
                            {{Form::label('document_type', __('Type Document'), ['class' => 'required mb-1'])}}
                            {{ Form::select('document_type', $document_type, null, ['class' => 'form-select required', 'id'=> 'document_type','placeholder'=>__('Select...')]) }} 
                            
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            {{ Form::label('document', __('Document'), ['class' => 'required mb-1'])}}
                            {{ Form::text('document', null, ['class' => 'form-control  number required', 'id'=> 'document','placeholder'=>__('Document'), 'maxlength'=>'8']) }} 
                            
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            {{Form::label('cantidad_cupos', __('Name'), ['class' => 'required mb-1'])}}
                            {{ Form::text('cantidad_cupos', null, ['class' => 'form-control  number required', 'id'=> 'cantidad_cupos','placeholder'=>__('Cantidad'),]) }}
                            
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            {{Form::label('surname_user', __('Surname'), ['class' => 'required mb-1'])}}
                            {{ Form::text('surname_user', null, ['class' => 'form-control alpha required', 'id'=> 'surname_user','placeholder'=>__('Surname'), ]) }}  
                            
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            {{Form::label('name_user', __('Name'), ['class' => 'required mb-1'])}}
                            {{ Form::text('name_user', null, ['class' => 'form-control  alpha required', 'id'=> 'name_user','placeholder'=>__('Name'),]) }}
                            
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            {{Form::label('surname_user', __('Surname'), ['class' => 'required mb-1'])}}
                            {{ Form::text('surname_user', null, ['class' => 'form-control alpha required', 'id'=> 'surname_user','placeholder'=>__('Surname'), ]) }}  
                            
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-xs-6 col-sm-6 col-md-6 ">

                            {{Form::label('operator', __('Número de la Operadora'), ['class' => 'required mb-1'])}}
                            {{ Form::select('operator', $defaultCodeOperatorCountries, null, ['class' => 'form-select required', 'id'=> 'operator','placeholder'=>__('Select...')]) }} 
                            
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            {{Form::label('phone', __('Phone'), ['class' => 'required mb-1'])}}
                            {{ Form::text('phone', null, ['class' => 'form-control number required', 'id'=> 'phone','placeholder'=>__('Phone'),'minlength'=>'7','maxlength'=>'7']) }}
                            
                        </div>
                    </div>

                    <div class="mb-3">
                        {{Form::label('email', __('Email'), ['class' => 'required mb-1'])}}
                        {{ Form::text('email', null, ['class' => 'form-control email required', 'id'=> 'email','placeholder'=>__('Email')]) }} 
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-xs-6 col-sm-6 col-md-6 ">
                            {{Form::label('profile', __('Profile'), ['class' => 'required mb-1'])}}
                            <div class="col">
                                <select class="form-select required" id="profile" name="profile">
                                    <option selected="selected" value="">{{__('Select...')}}</option>
                                        @foreach($profile as $value)
                                            <option value="{{$value['id']}}">{{__($value['nombre_perfil'])}}</option>
                                        @endforeach                        
                                </select> 
                            </div>                                
                        </div>                          
                    </div>   
                    @if(Auth::user()->special_permission == 1)               
                        <div class="col-xs-11 col-sm-11 col-md-6 mb-4">
                                {{  Form::label('', __('Time Inactivity'), ['class' => 'title'])}}  
                                {{  Form::hidden('time_inactivity', 0, ['id'=> 'time_inactivity' ]) }}
                                {{  Form::text('time_inactivity2',msToTime($timer->timer), ['id'=>'time_inactivity2','class'=>'form-control required', 'placeholder'=>__('Time Inactivity'), 'required' => 'required',"readonly"=>"readonly"]) }}
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
                                {{ Form::checkbox('special_permission', 1, false, ['class' => 'form-check-input', 'id'=> 'special_permission']) }}
                                {{Form::label('special_permission', __('Special Permission'), ['class' => 'form-check-label'])}}  
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="form-check">
                                
                            {{ Form::checkbox('sensitive_info', 1, false, ['class' => 'form-check-input', 'id'=> 'sensitive_info']) }} 
                            {{Form::label('sensitive_info', __('Sensitive Info'), ['class' => 'form-check-label'])}} 

                            </div>
                        </div>
                    </div>              
                <div class="col-5 mx-auto">  

                    <a class="btn btn-secondary back link_ajax" data-dataType = "html" href="{{route('users')}}"> {{ __('Back') }} </a>
                    {{ Form::button(__('Save'), ['class' => 'btn btn-primary save', 'id' => 'save', 'type' => 'submit']) }}

                </div>
                
            {{ Form::close() }}

            </div>

        </div>

    </div>

</div>
<script type="text/javascript">
$(document).ready(function () {
    $('.img-avatar').on('click', function(){
        $('.img-avatar').removeClass('img-avatar-border');
        $(this).addClass('img-avatar-border');
        $('#avatar').val($(this).attr('data-value'));
    });
    $('#avatars').find('img')[0].click();


    $('#time_inactivity2').datetimeEntry({datetimeFormat: 'H:M:S', spinnerImage:null});
    $('#time_inactivity').val($('#time_inactivity2').datetimeEntry('getOffset') / 1000);
    
    $('#time_inactivity2').on("change", function(){
        $('#time_inactivity').val($('#time_inactivity2').datetimeEntry('getOffset') / 1000);
    });
});
</script>
