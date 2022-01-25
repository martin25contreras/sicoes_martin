<div class="content-table"> 

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-chart-pie"></i>{{__('Registrar Indicadores')}} </h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                {{ Form::open(['route'=>'indicators.store','id'=>'frmIndicators','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                <div class="row">
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                        {{ Form::label('nombre', __('Nombre Indicadores'), ['class' => 'required mb-1'])}}
                        {{ Form::text('nombre', null, ['class' => 'form-control  required', 'id'=> 'nombre','placeholder'=>__('Nombre Indicadores'),'maxlength'=>'50']) }}       
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">

                        {{ Form::label('materia', __('Materia'), ['class' => 'required title'])}}
                        {{ Form::select('materia', ['Mat'=>__('Matemática'), 'Len'=>__('Lenguaje'), 'Ci_Na'=>__('Ciencia Naturales'), 'Ci_So'=>__('Ciencia Sociales'), 'In'=>__('Inglés'), 'Est'=>__('Educación Estética'), 'Ed_fi'=>__('Educación Física'), 'Ed_Fe'=>__('Educación para la Fé'), 'Ludo'=>__('Ludoteca'), 'Inf'=>__('Informática'), 'Ref'=>__('Refuerzo Pedadagógio')], null, ['class' => 'form-select required', 'id'=> 'materia','placeholder'=>__('Select...')]) }}                          
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-4 mb-3">

                        {{ Form::label('estatus', __('Estatus'), ['class' => 'title'])}}              
                        {{ Form::text('estatus', __('Activo'), ['class' => 'form-control required', 'id'=> 'estatus', 'required' => 'required','readonly' => true]) }}                                
                    </div>
                </div>
                <div class="col-5 mx-auto">
                    <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('indicators')}}"> {{ __('Back') }} </a>

                    {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                </div>
                
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>