<div class="content-table"> 

    <div class="row">

        <div class="col-md-3">
            <h3 class="left"><i class="fa fa-chart-bar"></i>{{__('Registrar Indicadores de Lapso')}} </h3> 
        </div>

        <div class="col-md-9">

            <div class="content-space te-0">

                {{ Form::open(['route'=>'indicators_lapses.store','id'=>'frmIndicators','autocomplete'=>'Off', 'class' => 'validate' ]) }}

                <div class="row">

                    <div class="col-mx-12 col-sm-12 col-md-4 mb-3">

                        {{ Form::label('id_competencia', __('Competencias'), ['class' => 'required title'])}}

                        {{ Form::select('id_competencia', $competicies, null, ['class' => 'form-select required', 'id'=> 'id_competencia','placeholder'=>__('Select...')]) }}                               
                                                      
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-4 mb-3">

                        {{ Form::label('id_indicador', __('Indicador'), ['class' => 'required title'])}}

                        {{ Form::select('id_indicador', $indicators, null, ['class' => 'form-select required', 'id'=> 'id_indicador','placeholder'=>__('Select...')]) }}                              
                    </div>
                    <div class="col-mx-12 col-sm-12 col-md-4 mb-3">

                        {{ Form::label('lapso_escolar', __('Lapso'), ['class' => 'required title'])}}

                        {{ Form::select('lapso_escolar',  ['I'=>__('Primer Momento'), 'II'=>__('Segundo Momento'), 'III'=>__('Tercer Momento')],null, ['class' => 'form-select required', 'id'=> 'lapso_escolar','placeholder'=>__('Select...')]) }}                        
                    </div>
                </div>
                <div class="col-5 mx-auto">
                    <a class="btn btn-secondary back link_ajax" data-dataType="html" href="{{route('indicators_lapses')}}"> {{ __('Back') }} </a>

                    {{ Form::button(__('Save'), [ 'id' => 'save','class' => 'btn btn-primary save', 'type' => 'submit']) }}
                </div>
                
                {{ Form::close() }} 

            </div>

        </div>

    </div>

</div>