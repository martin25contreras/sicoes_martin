<div class="content-table">  

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-user"></i>{{ __('Create Profile') }}</h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">  

                {{ Form::open(['route'=>'profiles.store','id'=>'frm_profiles_create','autocomplete'=>'Off', 'class' => 'validate' ]) }}
                    <div class="form-row"> 
                        <div class="col">
                            <div class="mb-3">

                                {{ Form::label('code', __('code'), ['class' => 'mb-1'])}}
                                {{ Form::text('code', $Code, ['class' => 'form-control number required', 'id'=> 'code', 'maxlength'=>'4','minlength'=>'4','required' => 'required','readonly'=> true]) }}
                            </div>
                            <div class="mb-3">
                                {{ Form::label('name_profile', __('Profile'), ['class' => 'required mb-1'])}}
                                {{ Form::text('name_profile', null, ['class' => 'form-control alphanum required','placeholder'=>__('Name Profile'), 'id'=> 'name_profile','maxlength'=>'50']) }}
                            </div>
                            <div class="mb-3">
                                {{ Form::label('description', __('Description'), ['class' => 'required mb-1'])}}
                                {{ Form::text('description', null, ['class' => 'form-control alphanum required','placeholder'=>__('Description'), 'id'=> 'description','maxlength'=>'50']) }}
                        </div>
                        </div>
                        <div class="col-5 mx-auto">
                            
                            <a class="btn btn-secondary back mb-1 link_ajax" data-dataType="html" href="{{route('profiles')}}">{{ __('Back') }} </a>

                            {{ Form::button(__('Save'), ['class' => 'btn btn-primary save mb-1', 'type' => 'submit']) }}
   


                        </div>
                    </div>
                {{ Form::close() }}

           </div>

        </div>

    </div>

</div> 