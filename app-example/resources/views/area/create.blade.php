<div class="content-table"> 

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-tag"></i>{{__('Registrar Área')}} </h3> 
        </div>

        <div class="col-md-9">
        <div class="leyend-data">En esta página podrás registar las diversas áreas de la institución</div>

            <div class="content-space te-0">

       
                {{ Form::open(['route'=>'area.store','id'=>'frmArea','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                <div class="row">
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">
                        {{ Form::label('nombre', __('Nombre Área'), ['class' => 'required mb-1'])}}
                        {{ Form::text('nombre', null, ['class' => 'form-control  required', 'id'=> 'nombre','placeholder'=>__('Nombre Área'),'maxlength'=>'50']) }}       
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">

                        {{ Form::label('carga_horaria', __('Carga Horaria: '), ['class' => 'title'])}}              
                        {{ Form::number('carga_horaria', '', ['class' => 'form-control number required', 'id'=> 'carga_horaria', 'required' => 'required','minlength' => '1']) }}                                
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">

                        {{ Form::label('grado', __('Grado'), ['class' => 'required title'])}}
                        {{ Form::select('grado', ['1'=>__('1'), '2'=>__('2'), '3'=>__('3'), '4'=>__('4'), '5'=>__('5'), '6'=>__('6')], null, ['class' => 'form-select required', 'id'=> 'grado','placeholder'=>__('Select...')]) }}                          
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-6 mb-3">

                        {{ Form::label('seccion', __('Sección'), ['class' => 'required title'])}}
                        {{ Form::select('seccion', ['A'=>__('A'), 'B'=>__('B'), 'C'=>__('C')], null, ['class' => 'form-select required', 'id'=> 'seccion','placeholder'=>__('Select...')]) }}                          
                    </div>
                </div>
                <div class="col-5 mx-auto">
                    <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('area')}}"> {{ __('Back') }} </a>

                    {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                </div>
                
                {{ Form::close() }} 
            </div>

        </div>

    </div>

</div>