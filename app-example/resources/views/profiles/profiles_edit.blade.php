<div class="content-table">  

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-user"></i>{{ __('Edit Profile') }}</h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">  

                {{ Form::open(['route'=>'profiles.update','id'=>'frm_profiles_update','autocomplete'=>'Off', 'class' => 'validate' ]) }}
                    <div class="form-row"> 
                        <div class="col">
                            <div class="mb-3">
                                {{ Form::label('name_profile_edit', __('Profile'), ['class' => 'required mb-1'])}}
                                {{ Form::hidden('id', (isset($item['crypt_id']))?$item['crypt_id']:"")}}
                                {{ Form::text('name_profile_edit', (isset($item['nombre_perfil']))?$item['nombre_perfil']:"", ['class' => 'form-control alphanum required','placeholder'=>__('Name Profile'), 'id'=> 'name_profile_edit','maxlength'=>'50']) }}   
                            </div>
                            <div class="mb-3">                           
                                            
                                {{ Form::label('description_edit', __('Description'), ['class' => 'required mb-1'])}}
                                {{ Form::text('description_edit', (isset($item['descripcion']))?$item['descripcion']:"", ['class' => 'form-control alphanum required','placeholder'=>__('Description'), 'id'=> 'description_edit','maxlength'=>'50']) }}
                            </div>
                        </div>
                        <div class="col-5 mx-auto">
                             
                            <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('profiles')}}">{{ __('Back') }} </a>

                            {{ Form::button(__('Update'), ['class' => 'btn btn-primary save', 'type' => 'submit']) }}

                        </div>
                    </div>
                {{ Form::close() }} 

           </div>

        </div>

    </div>

</div> 