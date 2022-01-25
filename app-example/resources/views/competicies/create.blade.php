<div class="content-table"> 

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-file-alt"></i>{{__('Registrar Competencias')}} </h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                {{ Form::open(['route'=>'competicies.store','id'=>'frmCompetencia','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                <div class="row">
                    <div class="col-mx-12 col-sm-12 col-md-9 mb-3">
                        {{ Form::label('nombre_competencia', __('Nombre Competencia'), ['class' => 'required mb-1'])}}
                        {{ Form::text('nombre_competencia', null, ['class' => 'form-control  required', 'id'=> 'nombre_competencia','placeholder'=>__('Nombre Competencia'),'maxlength'=>'50']) }}       
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-3 mb-3">
                        {{ Form::label('ano_escolar', __('Año Escolar'), ['class' => 'required mb-1'])}}
                        {{ Form::text('ano_escolar',date('Y'), ['class' => 'form-control required', 'id'=> 'ano_escolar','placeholder'=>__('Año Escolar'),'maxlength'=>'4', 'readonly' => true]) }}                    
                    </div>
                    <div class="col-5 mx-auto">
                    <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('competicies')}}"> {{ __('Back') }} </a>

                    {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                    </div>
                </div>
                
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>